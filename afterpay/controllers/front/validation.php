<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

/**
 * @since 1.5.0
 */
require_once( _PS_MODULE_DIR_ . 'afterpay/classes/AfterpayCheckout.php' );

class AfterpayValidationModuleFrontController extends ModuleFrontController
{
    /**
     * @see FrontController::postProcess()
     */
    public function postProcess()
    {
        $cart = $this->context->cart;
        $currency_code = $this->context->currency->iso_code;

        if ($cart->id_customer == 0 || $cart->id_address_delivery == 0 || $cart->id_address_invoice == 0 || !$this->module->active) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        // Check that this payment option is still available in case the customer changed his address just before the end of the checkout process
        $authorized = false;
        foreach (Module::getPaymentModules() as $module) {
            if ($module['name'] == 'afterpay') {
                $authorized = true;
                break;
            }
        }

        if (!$authorized) {
            $this->_checkoutErrorRedirect($this->module->l('This payment method is not available. Please contact website administrator.', 'validation'));
        }

        $params = $_REQUEST;

        $validate_error = $this->validateCredentials($params);

        if( count($validate_error) ) {
            $this->_checkoutErrorRedirect($this->module->l('Incorrect Afterpay Credentials. Please contact website administrator.', 'validation'));
        }

        $this->context->smarty->assign([
            'params' => $params,
        ]);


        $afterpay_checkout =    new AfterpayCheckout($_REQUEST["merchant_id"], 
                                    $_REQUEST["merchant_key"], 
                                    $_REQUEST["api_environment"], 
                                    $cart,
                                    $currency_code,
                                    $_REQUEST["user_agent"]
                                );

        $afterpay_checkout->setRedirectConfirmUrl( $this->context->link->getModuleLink( $this->module->name, 'return' ) );
        $afterpay_checkout->setRedirectCancelUrl( $this->context->link->getPageLink( 'order', null, null, 'step=4' ) );

        // $afterpay_checkout->processItems();
        // $afterpay_checkout->processShippingAddress();
        // $afterpay_checkout->processBillingAddress();

        try{
            $afterpay_checkout->createOrderToken();
        }
        catch( Exception $e ) {

            $log_message = json_encode($e->getMessage());
            $log_message = "Afterpay Token Generation Failure: " . $log_message . " Payload: " . preg_replace( "/\r|\n/", "", print_r($afterpay_checkout->_extractPayload(), true) );
            PrestaShopLogger::addLog($log_message, 3, NULL, "Afterpay", 1);

            $this->_checkoutErrorRedirect( "Afterpay Token Generation Failure. Please contact Website Administrator" );
        }

        $this->setTemplate('module:afterpay/views/templates/front/payment_return.tpl');
    }


    private function validateCredentials($params) {
        $error = array();

        if( empty($params["merchant_id"]) ) {
            $error[] = "merchant_id";
        }

        if( empty($params["merchant_key"]) ) {
            $error[] = "merchant_key";
        }

        if( empty($params["api_environment"]) ) {
            $error[] = "api_environment";
        }

        return $error;
    }

    private function _checkoutErrorRedirect($message) {

        if( !empty($message) ) {
            $this->errors[] = $this->l( $message );
        }
        $this->redirectWithNotifications('index.php?controller=order&step=1');
    }
}