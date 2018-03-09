{if $product.price_amount }

	<div style="position: relative; font-style: italic; line-height: 1.4;" class="afterpay-installments afterpay-installments-amount">
		or 4 interest-free payments of {$afterpay_instalment_breakdown}
	    <br/>

	    <a href="javascript:void(0)" class="afterpay-modal-popup-trigger">
		    <span class="afterpay_instalments_logo" style="">
		    	<img src="{$afterpay_base_url}modules/afterpay/images/payment_checkout.png" alt="Afterpay"/>
		    </span>

	    	Learn more
	    </a>
	</div>
{/if}