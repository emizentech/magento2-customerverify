# magento2-customerverify

#Features
<ul>
<li>Allow Admin to restrict frontend customer to be verified from admin only </li>
</ul>

<br/>
<h2> Mannual Installation Instructions</h2>
go to Magento2Project root dir 
create following Directory Structure :<br/>
<strong>/Magento2Project/app/code/EmizenTech/CustomerAttribute</strong>
you can also create by following command:
<pre>
cd /Magento2Project
mkdir app/code/EmizenTech
mkdir app/code/EmizenTech/CustomerAttribute
</pre>

now upload module files in <strong>/Magento2Project/app/code/EmizenTech/CustomerAttribute</strong>

<h3> Enable Emizentech/ShopByBrand Module</h3>
to Enable this module you need to follow these steps:

<ul>
<li>
<strong>Enable the Module</strong>
<pre>bin/magento module:enable EmizenTech_CustomerAttribute</pre></li>
<li>
<strong>Run Upgrade Setup</strong>
<pre>bin/magento setup:upgrade</pre></li>
</ul>
