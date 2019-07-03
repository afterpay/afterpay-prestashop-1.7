# Afterpay PrestaShop Module Changelog

## Release Name: Version 1.0.1

_03 Jul 2019_

### Supported Editions and Versions:
- PrestaShop 1.7.2.2 and later
- Afterpay PrestaShop 1.7 Module v1.0.1 has been verified against a new instance of:
  * PrestaShop 1.7.5.1 (AU)
  * PrestaShop 1.7.5.2 (NZ)

### Supported Markets:
- Australia (AUD currency)
- New Zealand (NZD currency)

### Highlights
- Verified support for New Zealand merchants (NZD currency).
- Improved support for PrestaShop environments with "Friendly URLs" turned off.
- Improved support for taxes included in item prices, when displayed in the Afterpay portals.
- Improved formatting of monetary amounts.

----------

## Release Name: Version 1.0.0

_09 Mar 2018_

### Supported Editions and Versions:
- PrestaShop 1.7.2.2 and later
- Afterpay-PrestaShop1.7 module v1.0.0 has been verified against a new instance of PrestaShop 1.7.2.2
- https://github.com/PrestaShop/PrestaShop/releases/tag/1.7.2.2

### Supported Markets:
- Australia (AUD currency)

### Highlights
- Afterpay transaction processing (orders and refunds) – Australia.
- Transaction Integrity Check.
- Afterpay asset display on PrestaShop website.
- Afterpay configuration in PrestaShop Back Office.
- Afterpay module logging.

### Afterpay transaction processing (orders and refunds) - Australia
- Access to the Afterpay Payment Gateway via Afterpay Merchant API V1.
- Following a successful Afterpay payment capture, the below records are created in PrestaShop Back Office:
  * PrestaShop Order record with status of 'Payment accepted'
  * PrestaShop Invoice document linked to Order record
- PrestaShop order refunds (full value) trigger a call to the Afterpay API to process the refund.
- PrestaShop order refunds (partial value) are not supported in this version (1.0.0).
- Afterpay Merchant Portal provides the functionality to perform order refunds (partial or full value).

### Transaction Integrity Check
- To verify the integrity of each transaction, a Transaction Integrity Check has been implemented.
- The Transaction Integrity Check compares the below values at time of checkout against the value present prior to payment capture:
  * Afterpay Token ID
  * PrestaShop Quote total amount.
- In the instance of a discrepancy between these values, the transaction is cancelled and no payment capture attempts will be made.

### Afterpay asset display on PrestaShop website
- Afterpay installment detail displayed on PrestaShop product pages.
- Afterpay installment detail displayed on PrestaShop cart pages.
- Afterpay is included as a Payment Method on PrestaShop checkout page 'Payment' step.
- Afterpay Lightbox modal available on PrestaShop product pages.

### Afterpay configuration in Prestashop Back Office
- Afterpay module configuration available under:
  * PrestaShop Back Office > Modules > Modules & Services > Installed Modules.
- Afterpay configuration includes:
  * Enable / Disable module.
  * Afterpay Merchant ID.
  * Afterpay Merchant Key.
  * API Mode.
- Upon a successful save of Afterpay Merchant ID and Key, the Afterpay merchant account payment limits will be displayed.

### Afterpay configuration in Prestashop Back Office
- Afterpay module introduces transaction and validation logging into the PrestaShop Back Office log.
- Afterpay logging includes:
  * Afterpay transaction result - Approved.
  * Afterpay transaction result - Declined.
  * Validation of Merchant ID & Merchant Key combination.