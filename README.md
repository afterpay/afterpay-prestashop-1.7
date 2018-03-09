<h2> 1.1 Website Configuration </h2>
<p>
	Afterpay operates under a list of assumptions based on PrestaShop Back Office configurations. To align with these assumptions, the PrestaShop Back Office configurations must reflect the below:
</p>

<ol>
	<li> 
		Website Currency must be set to 'Australian Dollar'
		<ol>
			<li>PrestaShop Back Office > International > Localization</li>
		</ol>
	</li>
	<li> 
		Website Default Country must be set to ‘Australia’
		<ol>
			<li>PrestaShop Back Office > International > Localization</li>
		</ol>
	</li>
	<li> 
		'Zip/Postal Code' must be set to 'Yes'
		<ol>
			<li>PrestaShop Back Office > International > Locations > Select 'Australia'</li>
		</ol>
	</li>
	<li> 
		'Contains States' must be set to 'Yes'
		<ol>
			<li>PrestaShop Back Office > International > Locations > Select 'Australia'</li>
		</ol>
	</li>
	<li> 
		'Address' required fields must include the below values:
		<ol>
			<li>Firstname, lastname, email, address1, postcode, city, phone</li>
			<li>PrestaShop Back Office > International > Locations > Select 'Australia'</li>
		</ol>
	</li>
</ol>


<h2> 1.2 New Afterpay Module Installation </h2>
<p>This section outlines the steps to install the Afterpay module on a PrestaShop website for the first time.</p>

<ol>
	<li> Download the Afterpay Module (<a href="https://github.com/afterpay/afterpay-prestashop-1.7/raw/master/afterpay.zip">https://github.com/afterpay/afterpay-prestashop-1.7/raw/master/afterpay.zip</a>). </li>
	<li> Navigate to: <em>PrestaShop Back Office > Modules > Modules & Services</em>.</li>
	<li> Click <em>Add a new module</em> </li>
	<li> Click <em>Select File</em> </li>
	<li> Select the Afterpay module ZIP file and the install process will begin. </li>
	<li> Upon a successful installation click 'Configure'. </li>
	<li> The Afterpay Payment Gateway configuration screen will then be displayed. </li>
</ol>

<h2> 1.3 Afterpay Merchant Setup </h2>
<p> To configure PrestaShop to utilise the Afterpay Payment Gateway, the below steps must be completed. </p>
<p> <em>Prerequisite for this section is to obtain an Afterpay Merchant ID and Merchant Key from Afterpay.</em> </p>

<ol>
	<li> 
		Upon completion of the installation, you will be redirected to the Afterpay module configuration screen, alternatively:
		<ul>
			<li>Navigate to: <em>PrestaShop Back Office > Modules > Modules & Services > Installed Modules</em>.</li>
			<li>Locate the Afterpay Payment Gateway module and click 'Configure'.</li>
		</ul>
	</li>
	<li> Enable the Afterpay module by setting 'Enabled' to 'Yes'. </li>
	<li> Enter 'Merchant ID'. </li>
	<li> Enter 'Merchant Key'. </li>
	<li> 
		Select applicable 'API Environment'.
		<ul>
			<li>'Sandbox' API Environment for performing test transactions on a staging website.</li>
			<li>'Production' API Environment for live transactions on the production website.</li>
		</ul>
	</li>
	<li> Click 'Save'. </li>
	<li> Upon a successful configuration save, the Min and Max Payment Limit values will be updated with a notification stating: <em>Settings Updated</em>. </li>
</ol>

<h2> 1.4 Upgrade of Afterpay Module </h2>
<p> 
	This section outlines the steps to upgrade the currently installed Afterpay module. The process involves the complete removal of the currently installed module, followed by the installation of the new module.
</p>

<ol>
	<li>Navigate to: <em>PrestaShop Back Office > Modules > Modules & Services > Installed Modules</em>.</li>
	<li> Locate the Afterpay Payment Gateway module.</li>
	<li> Click the dropdown and select 'Uninstall'.</li>
	<li> Click 'Yes, uninstall it'.</li>
	<li> Download the Afterpay Module (<a href="https://github.com/afterpay/afterpay-prestashop-1.7/raw/master/afterpay.zip">https://github.com/afterpay/afterpay-prestashop-1.7/raw/master/afterpay.zip</a>). </li>
	<li> Navigate to: <em>PrestaShop Back Office > Modules > Modules & Services</em>.</li>
	<li> Click <em>Add a new module</em> </li>
	<li> Click <em>Select File</em> </li>
	<li> Select the Afterpay module ZIP file and the install process will begin. </li>
	<li> Upon a successful installation click 'Configure'. </li>
	<li> The Afterpay Payment Gateway configuration screen will then be displayed. </li>
	<li> Enable the Afterpay module by setting 'Enabled' to 'Yes'. </li>
	<li> Enter 'Merchant ID'. </li>
	<li> Enter 'Merchant Key'. </li>
	<li> 
		Select applicable 'API Environment'.
		<ul>
			<li>'Sandbox' API Environment for performing test transactions on a staging website.</li>
			<li>'Production' API Environment for live transactions on the production website.</li>
		</ul>
	</li>
	<li> Click 'Save'. </li>
	<li> Upon a successful configuration save, the Min and Max Payment Limit values will be updated with a notification stating: <em>Settings Updated</em>. </li>
</ol>