<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Winans Creative 2009
 * @author     Fred Bliss <fred@winanscreative.com>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Content Elements
 *
 */
$GLOBALS['TL_LANG']['CTE']['attributeLinkRepeater']   = array('Attribute Filter Lister', 'This element generates a collection of hyperlinks from a selected product attribute filter.');


/**
 * Errors
 *
 */
$GLOBALS['TL_LANG']['ERR']['tableExists'] = 'Table `%s` already exists. Please choose different name.';
$GLOBALS['TL_LANG']['ERR']['tableDoesNotExist'] = 'Table `%s` does not exists.';
$GLOBALS['TL_LANG']['ERR']['columnExists'] = 'Column `%s` already exists. Please choose different name.';
$GLOBALS['TL_LANG']['ERR']['columnDoesNotExist'] = 'Column `%s` does not exist in table %s.';
$GLOBALS['TL_LANG']['ERR']['systemColumn'] = 'Name `%s` is reserved for system use. Please choose different name.';
$GLOBALS['TL_LANG']['ERR']['invalidColumnName'] = 'Invalid column name `%s`. Please use only letters, numbers and underscore.';
$GLOBALS['TL_LANG']['ERR']['invalidTableName'] = 'Invalid table name `%s`. Please use only letters, numbers and underscore.';
$GLOBALS['TL_LANG']['ERR']['aliasTitleMissing'] = 'Incorrect alias field configuration. Missing Title field parameter.';
$GLOBALS['TL_LANG']['ERR']['aliasDuplicate'] = 'Alias field `%s` already defined. Only one alias field is allowed per table.';
$GLOBALS['TL_LANG']['ERR']['deleteLocked'] = 'Altering or Deleting this attribute is prohibited.';
$GLOBALS['TL_LANG']['ERR']['missingButtonTemplate'] = 'You must specify a template for the button "%s".';
$GLOBALS['TL_LANG']['ERR']['noStoreIdFound'] = 'No store id was found associated with this module!';

$GLOBALS['TL_LANG']['ERR']['order_conditions'] = 'You must accept the terms & conditions to continue';
$GLOBALS['TL_LANG']['ERR']['noStoreConfigurationSet'] = 'Please create a store configuration';

$GLOBALS['TL_LANG']['ERR']['productNameMissing'] = '<no product name found>';
$GLOBALS['TL_LANG']['ERR']['noSubProducts'] = 'no sub-products found';
$GLOBALS['TL_LANG']['ERR']['emptyOrderHistory']			= 'You have not yet placed any orders.';
$GLOBALS['TL_LANG']['ERR']['orderNotFound']				= 'The requested order was not found.';
$GLOBALS['TL_LANG']['ERR']['missingCurrencyFormat']		= 'Currency formatting not found';


//Checkout Errors
$GLOBALS['TL_LANG']['MSC']['ERR']['specifyBillingAddress'] = 'A billing address was not fuond.  Please specify a billing address.';

//Address Book Errors
$GLOBALS['TL_LANG']['ERR']['addressDoesNotExist'] = 'This address does not exist in your address book.';
$GLOBALS['TL_LANG']['ERR']['noAddressBookEntries'] = 'You have no address book entries.';

//Regions, by country code
$GLOBALS['TL_LANG']['MSC']['REGIONS']['us'] = array('AK','AL','AR','AS','AZ','CA','CO','CT','DC','DC','DE','FL','FM','GA','GU','HI','IA','ID','IL','IN','KS','KY','LA','MA','MD','ME','MH','MI','MN','MO','MP','MS','MT','NC','ND','NE','NH','NJ','NM','NV','NY','OH','OK','OR','PA','PR','PW','RI','SC','SD','TN','TX','UT','VA','VI','VT','WA','WI','WV','WY');


/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['MSC']['searchTextBoxLabel'] = 'Search Term: ';
$GLOBALS['TL_LANG']['MSC']['searchFieldsLabel'] = 'Search Fields: ';
$GLOBALS['TL_LANG']['MSC']['order_conditions'] = 'I agree to the terms & conditions';
 
$GLOBALS['TL_LANG']['MSC']['buttonLabel']['add_to_cart'] = 'Add To Cart';
$GLOBALS['TL_LANG']['MSC']['buttonActionString']['add_to_cart'] = 'Add product %s to your cart';
		
$GLOBALS['TL_LANG']['MSC']['labelPagerSectionTitle'] = 'Page:';
$GLOBALS['TL_LANG']['MSC']['labelOrderBy'] = 'Order By:';
$GLOBALS['TL_LANG']['MSC']['noProducts'] = 'There are no products available in this category.';
$GLOBALS['TL_LANG']['MSC']['noAssociatedCategories'] = 'There are no categories current associated with this product.';
$GLOBALS['TL_LANG']['MSC']['invalidProductInformation'] = "We're sorry, the product information you have requested is not showing up in our store. For further assistance please contact us.";
$GLOBALS['TL_LANG']['MSC']['productDescriptionLabel'] = 'Description';

$GLOBALS['TL_LANG']['MSC']['productDetailLabel'] = 'Details';
$GLOBALS['TL_LANG']['MSC']['productMediaLabel'] = 'Audio and Video';
$GLOBALS['TL_LANG']['MSC']['productOptionsLabel'] = 'Options';

$GLOBALS['TL_LANG']['MSC']['previousStep']	= 'Back';
$GLOBALS['TL_LANG']['MSC']['nextStep']		= 'Continue';
$GLOBALS['TL_LANG']['MSC']['confirmOrder']	= 'Order';

$GLOBALS['TL_LANG']['MSC']['defaultAssetsBasePath'] = 'assets';	
$GLOBALS['TL_LANG']['MSC']['assetsImportBasePath'] = 'assets_for_import';
$GLOBALS['TL_LANG']['MSC']['audioFolder'] = 'audio';
$GLOBALS['TL_LANG']['MSC']['imagesFolder'] = 'images';
$GLOBALS['TL_LANG']['MSC']['videoFolder'] = 'video';
$GLOBALS['TL_LANG']['MSC']['large_images_folder'] = 'large_images';
$GLOBALS['TL_LANG']['MSC']['medium_images_folder'] = 'medium_images';
$GLOBALS['TL_LANG']['MSC']['thumbnail_images_folder'] = 'thumbnail_images';
$GLOBALS['TL_LANG']['MSC']['gallery_thumbnail_images_folder'] = 'gallery_thumbnail_images';
$GLOBALS['TL_LANG']['MSC']['playSoundMessage'] = 'Audio Sample:';
$GLOBALS['TL_LANG']['MSC']['playlistDescriptionTemplate'] = '%s - %s';
$GLOBALS['TL_LANG']['MSC']['noCategoriesAssociated'] = 'No categories are associated with this product.';
$GLOBALS['TL_LANG']['MSC']['labelPerPage'] = 'Per Page';
$GLOBALS['TL_LANG']['MSC']['labelSortBy'] = 'Sort By';
$GLOBALS['TL_LANG']['MSC']['labelSubmit'] = 'Submit';
$GLOBALS['TL_LANG']['MSC']['deleteImage'] = 'Remove';
$GLOBALS['TL_LANG']['MSC']['noItemsInCart'] = 'There are no items in your cart';
$GLOBALS['TL_LANG']['MSC']['removeProductLinkTitle'] = 'Remove %s from your cart';
$GLOBALS['TL_LANG']['MSC']['subTotalLabel'] = 'Order Subtotal: ';
$GLOBALS['TL_LANG']['MSC']['shippingLabel'] = 'Shipping: ';
$GLOBALS['TL_LANG']['MSC']['taxLabel'] = '%s Tax: ';
$GLOBALS['TL_LANG']['MSC']['grandTotalLabel'] = 'Order Total: ';
$GLOBALS['TL_LANG']['MSC']['shippingOptionsLabel'] = 'Selected Shipping Options: ';
$GLOBALS['TL_LANG']['MSC']['noVariants'] = 'No product variants found.';
$GLOBALS['TL_LANG']['MSC']['generateSubproducts'] = 'Generate Subproducts';
$GLOBALS['TL_LANG']['MSC']['selectItemPrompt'] = "(select)";
$GLOBALS['TL_LANG']['MSC']['actualPrice'] = 'Actual Price';
$GLOBALS['TL_LANG']['MSC']['noPaymentModules'] = 'No payment options are currently available';
$GLOBALS['TL_LANG']['MSC']['noShippingModules'] = 'No shipping options are currently available.';
//Checkout language entries 
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['PROMPT']['login'] = 'Please select a checkout method.';
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['PROMPT']['shipping_information'] = 'Enter your shipping information or select an existing address.';
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['PROMPT']['billing_information'] = (FE_USER_LOGGED_IN) ? 'Enter your billing information or select an existing address.' : 'Enter your billing information';
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['PROMPT']['shipping_method'] = 'Select a shipping method.';
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['PROMPT']['payment_method'] = 'Enter your payment information.';
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['PROMPT']['order_review'] = 'Review and confirm your order details.';

$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['HEADLINE']['login'] = 'Checkout Method';
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['HEADLINE']['shipping_information'] = 'Shipping Information';
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['HEADLINE']['billing_information'] = 'Billing Information';
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['HEADLINE']['shipping_method'] = 'Shipping Method';
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['HEADLINE']['payment_method'] = 'Payment Method';
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['HEADLINE']['order_conditions'] = 'Order Conditions';
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['HEADLINE']['order_review'] = 'Order Review';
$GLOBALS['TL_LANG']['MSC']['CHECKOUT_STEP']['HEADLINE']['order_complete'] = 'Order Complete!';

//Registry language entries 
$GLOBALS['TL_LANG']['MSC']['registry']['lastname'] = 'Search by Last Name:';
$GLOBALS['TL_LANG']['MSC']['registry']['datestr'] = 'Enter Date of Event:';
$GLOBALS['TL_LANG']['MSC']['registry']['registrySearch'] = 'Search Gift Registries';
$GLOBALS['TL_LANG']['MSC']['registry']['registryManage'] = 'Save Your Gift Registry';
$GLOBALS['TL_LANG']['MSC']['registry']['emptyField'] = 'Please fill in both fields';
$GLOBALS['TL_LANG']['MSC']['registry']['noItemsInRegistry'] = 'There are no items in this registry available for purchase.';
$GLOBALS['TL_LANG']['MSC']['registry']['noresultsText'] = 'There are no registries matching your search: %s';
$GLOBALS['TL_LANG']['MSC']['registry']['sResults'] = '%s gift registries were found for %s on or around %s';
$GLOBALS['TL_LANG']['MSC']['buttonLabel']['add_to_registry'] = 'Add To Registry';
$GLOBALS['TL_LANG']['MSC']['buttonActionString']['add_to_registry'] = 'Add product %s to your registry';
$GLOBALS['TL_LANG']['MSC']['notAvailableOnline'] = 'Call for Price';

//Address Book language entries
$GLOBALS['TL_LANG']['addressBookLabel'] = 'Addresses';
$GLOBALS['TL_LANG']['editAddressLabel'] = 'Edit';
$GLOBALS['TL_LANG']['deleteAddressLabel'] = 'Delete';
$GLOBALS['TL_LANG']['createNewAddressLabel'] = 'Create New Address';
$GLOBALS['TL_LANG']['useBillingAddress'] = 'Use billing address';
$GLOBALS['TL_LANG']['differentShippingAddress'] = 'Different shipping address';

//Invoice language Entries
$GLOBALS['TL_LANG']['MSC']['iso_invoice_title'] = 'Invoice';
$GLOBALS['TL_LANG']['MSC']['iso_order_status'] = 'Status';
$GLOBALS['TL_LANG']['MSC']['iso_order_date'] = 'Order date';
$GLOBALS['TL_LANG']['MSC']['iso_billing_address_header'] = 'Billing Address';
$GLOBALS['TL_LANG']['MSC']['iso_shipping_address_header'] = 'Shipping Address';
$GLOBALS['TL_LANG']['MSC']['iso_payment_info_header'] = 'Payment Information';
$GLOBALS['TL_LANG']['MSC']['iso_shipping_info_header'] = 'Shipping Information';
$GLOBALS['TL_LANG']['MSC']['iso_tax_header'] = 'Tax';	
$GLOBALS['TL_LANG']['MSC']['iso_subtotal_header'] = 'Subtotal';
$GLOBALS['TL_LANG']['MSC']['iso_order_shipping_header'] = 'Shipping & Handling';
$GLOBALS['TL_LANG']['MSC']['iso_order_grand_total_header'] = 'Grand Total';
$GLOBALS['TL_LANG']['MSC']['iso_order_items'] = 'Items';
$GLOBALS['TL_LANG']['MSC']['iso_quantity_header'] = 'Quantity';
$GLOBALS['TL_LANG']['MSC']['iso_price_header'] = 'Price';
$GLOBALS['TL_LANG']['MSC']['iso_sku_header'] = 'SKU';
$GLOBALS['TL_LANG']['MSC']['iso_product_name_header'] = 'Product Name';
$GLOBALS['TL_LANG']['MSC']['iso_card_name_title'] = 'Name on Credit Card';


$GLOBALS['TL_LANG']['MSC']['store_title'] = '';

//Admin order notfication language entries
$GLOBALS['TL_LANG']['MSC']['subject_new_order_admin_notify'] = 'New order has been placed on %s';
$GLOBALS['TL_LANG']['MSC']['message_new_order_admin_notify'] = "An new order (ID %s) has been placed! \n\nOrder Details: \n\n %s";

//Customer order notification language entries
$GLOBALS['TL_LANG']['MSC']['subject_new_order_customer_thank_you'] = 'Thank you for your order at %s!';
$GLOBALS['TL_LANG']['MSC']['message_new_order_customer_thank_you'] = "Dear %s, \n\n Thank you for your order!  You will receive a notification once final shipping charges have been assessed with your updated order total.  If you have any questions please email us at %s";


// Order status options
$GLOBALS['TL_LANG']['MSC']['order_status_labels']['pending']	= 'Pending';
$GLOBALS['TL_LANG']['MSC']['order_status_labels']['processing']	= 'Processing';
$GLOBALS['TL_LANG']['MSC']['order_status_labels']['shipped']	= 'Shipped';
$GLOBALS['TL_LANG']['MSC']['order_status_labels']['complete']	= 'Complete';
$GLOBALS['TL_LANG']['MSC']['order_status_labels']['on_hold']	= 'On Hold';
$GLOBALS['TL_LANG']['MSC']['order_status_labels']['cancelled']	= 'Cancelled';

// Payment status options
$GLOBALS['TL_LANG']['MSC']['payment_status_labels']['pending']		= 'Pending';
$GLOBALS['TL_LANG']['MSC']['payment_status_labels']['processing']	= 'Processing';
$GLOBALS['TL_LANG']['MSC']['payment_status_labels']['paid']			= 'Paid';
$GLOBALS['TL_LANG']['MSC']['payment_status_labels']['failed']		= 'Failed';
$GLOBALS['TL_LANG']['MSC']['payment_status_labels']['cancelled']	= 'Cancelled';

//Shipping language entries
$GLOBALS['TL_LANG']['MSC']['noItemsEligibleForShipping'] = 'This order consists solely of items that are not shipped.';


//$GLOBALS['TL_LANG']['MSC'][''] = '';


$GLOBALS['TL_LANG']['MSC']['mp3'] = 'audio/mpeg';
$GLOBALS['TL_LANG']['MSC']['flv'] = 'video/x-flv';


$GLOBALS['TL_LANG']['MSC']['altTextFormat'] = '%s - %s';

$GLOBALS['TL_LANG']['MSC']['thumbnailImageClickEvent'] = 'class="highslide" onclick="return hs.expand(this, { slideshowGroup: ' . "'productImages'" . ' })"';

$GLOBALS['TL_LANG']['MSC']['low_to_high'] = 'lo to hi';
$GLOBALS['TL_LANG']['MSC']['high_to_low'] = 'hi to lo';
$GLOBALS['TL_LANG']['MSC']['a_to_z'] = 'A to Z';
$GLOBALS['TL_LANG']['MSC']['z_to_a'] = 'Z to A';

$GLOBALS['TL_LANG']['MSC']['teaserLength'] = 300;

$GLOBALS['TL_LANG']['MSC']['validMediaFileTypes']['images'] = array('bmp','gif','jpeg','jpg','jpe','png','tiff','tif');
$GLOBALS['TL_LANG']['MSC']['validMediaFileTypes']['audio'] = array('mpga','mp2','mp3','wav','aif','aiff','aifc','ram','rm','rpm','ra');
$GLOBALS['TL_LANG']['MSC']['validMediaFileTypes']['video'] = array('mpeg','mpg','mpe','qt','mov','avi','movie','rv');


/**
 * Data Manager Preprocessing Functions
 */
$GLOBALS['TL_LANG']['MSC']['DATAMANAGER_PREUPDATE_FUNCTION']['getStringChunk'] = array('Grab Partial String (' . $GLOBALS['TL_LANG']['MSC']['teaserLength'] . ' Characters)','Only grab the first ' . $GLOBALS['TL_LANG']['MSC']['teaserLength'] . ' characters (stopping at end of the sentence after or on the 300 character mark).');
$GLOBALS['TL_LANG']['MSC']['DATAMANAGER_PREUPDATE_FUNCTION']['createSKU'] = array('Create a SKU Value','Using this field value, createa a unique SKU for this product');
$GLOBALS['TL_LANG']['MSC']['DATAMANAGER_PREUPDATE_FUNCTION']['productImageImport'] = array('Product Images Import', 'Resize and store images associated with a given product.');
$GLOBALS['TL_LANG']['MSC']['DATAMANAGER_PREUPDATE_FUNCTION']['convertToPrice'] = array('Convert to Price','Attempt to make this field a price (decimal value) in the format %sXX.XX');
$GLOBALS['TL_LANG']['MSC']['DATAMANAGER_PREUPDATE_FUNCTION']['convertToWeight'] = array('Convert to Weight','Attempt to make this field a weight (decimal value) in the foram X.XX%s');



$GLOBALS['TL_LANG']['ISO']['productSingle']		= '1 Product';
$GLOBALS['TL_LANG']['ISO']['productMultiple']	= '%s Products';


/**
 * Shipping modules
 */
$GLOBALS['TL_LANG']['SHIP']['collection']		= array('Collection');
$GLOBALS['TL_LANG']['SHIP']['order_total']		= array('Order total-based shipping');
$GLOBALS['TL_LANG']['SHIP']['flat']				= array('Flat-price shipping');


/**
 * Payment modules
 */
$GLOBALS['TL_LANG']['PAY']['cash']				= array('Cash', 'Use this for all offline processed payment.');
$GLOBALS['TL_LANG']['PAY']['paypal']			= array('PayPal Standard', 'This PayPal module does currently not support IPN (Instant Payment Notifications).');
$GLOBALS['TL_LANG']['PAY']['postfinance']		= array('Postfinance', 'Payment gateway for the swiss post payment system that supports various card types. The store will be instantly notified about successfull transactions.');
$GLOBALS['TL_LANG']['PAY']['authorizedotnet']	= array('Authorize.net', 'An Authorize.net payment gateway.');



/**
 * Currencies
 */
$GLOBALS['TL_LANG']['CUR']['USD'] = 'USD - US Dollar';
$GLOBALS['TL_LANG']['CUR']['EUR'] = 'EUR - Euro';
$GLOBALS['TL_LANG']['CUR']['CHF'] = 'CHF - Swiss Franc';


/**
 * Currency symbols
 */
$GLOBALS['TL_LANG']['CUR_SYMBOL']['USD'] = '$';
$GLOBALS['TL_LANG']['CUR_SYMBOL']['EUR'] = '€';


/** 
 * Default attributes
 */
$GLOBALS['TL_LANG']['ISO_ATTR']['name']					= array('Name', '');
$GLOBALS['TL_LANG']['ISO_ATTR']['type']					= array('Type', '');
$GLOBALS['TL_LANG']['ISO_ATTR']['sku']					= array('SKU', '');
$GLOBALS['TL_LANG']['ISO_ATTR']['weight']				= array('Weight', '');
$GLOBALS['TL_LANG']['ISO_ATTR']['quantity']				= array('Quantity', '');
$GLOBALS['TL_LANG']['ISO_ATTR']['alias']				= array('Alias', '');
$GLOBALS['TL_LANG']['ISO_ATTR']['visibility']			= array('Visibility', '');
$GLOBALS['TL_LANG']['ISO_ATTR']['teaser']				= array('Teaser', '');
$GLOBALS['TL_LANG']['ISO_ATTR']['description']			= array('Description', '');
$GLOBALS['TL_LANG']['ISO_ATTR']['price']				= array('Price', '');
$GLOBALS['TL_LANG']['ISO_ATTR']['price_override']		= array('Price Override', '');
$GLOBALS['TL_LANG']['ISO_ATTR']['use_price_override']	= array('Use Price Override', '');
$GLOBALS['TL_LANG']['ISO_ATTR']['main_image']				= array('Media', '');

