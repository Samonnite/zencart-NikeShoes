<?php
/**
 * Footer Menu Definitions
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V3.0
 * @version $Id: footer_menu_deines.php 1.0 5/9/2009 wel $
 */

/*BOF Menu Column 1 link Definitions*/
Define('TITLE_ONE', 'Customer Service');
Define('GVFAQ', '<li><a href="' .  zen_href_link(FILENAME_GV_FAQ) . '">' . BOX_INFORMATION_GV . '</a></li>');
Define('SHIPPING','<li><a href="' . zen_href_link(FILENAME_SHIPPING) . '">' .  BOX_INFORMATION_SHIPPING .  '</a></li>');
Define('PRIVACY', '<li><a href="' . zen_href_link(FILENAME_PRIVACY) . '">' . BOX_INFORMATION_PRIVACY . '</a></li>');
/*EOF Menu Column 1 link Definitions*/

/*BOF Menu Column 2 link Definitions*/
Define('TITLE_TWO', 'My Account');
Define('HOME', '<li><a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HEADER_TITLE_CATALOG . '</a></li>');
Define('ACCOUNT', '<li><a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') .'">' . HEADER_TITLE_MY_ACCOUNT . '</a></li>');
Define('ABOUT', '<li><a href="index.php?main_page=shopping_cart">View Cart</a></li>');
// Define('SPECIALS', '<li><a href="' . zen_href_link(FILENAME_SPECIALS) . '">' . BOX_HEADING_SPECIALS . '</a></li>');
// Define('NEWPRODUCTS', '<li><a href="' . zen_href_link(FILENAME_PRODUCTS_NEW) . '">' . BOX_HEADING_WHATS_NEW . '</a></li>');
// Define('ALLPRODUCTS', '<li><a href="' . zen_href_link(FILENAME_PRODUCTS_ALL) . '">' .CATEGORIES_BOX_HEADING_PRODUCTS_ALL . '</a></li>');
/*EOF Menu Column 2 link Definitions*/

/*OF Menu Column 3 link Definitions*/
Define('TITLE_THREE', 'Worry Free Shopping');

Define('SITEMAP', '<li><a href="' . zen_href_link(FILENAME_SITE_MAP) . '">' . BOX_INFORMATION_SITE_MAP . '</a></li>');
Define('COUPON', '<li><a href="' . zen_href_link(FILENAME_DISCOUNT_COUPON) . '">' .  BOX_INFORMATION_DISCOUNT_COUPONS . '</a></li>');
Define('UNSUBSCRIBE', '<li><a href="' . zen_href_link(FILENAME_UNSUBSCRIBE) . '">' . BOX_INFORMATION_UNSUBSCRIBE . '</a></li>');
/*EOF Menu Column 3 link Definitions*/

/*BOF Menu Column 4 link Definitions*/
Define('TITLE_FOUR', 'Information');
Define('CONTACT','<li><a href="' . zen_href_link(FILENAME_CONTACT_US) . '">' . BOX_INFORMATION_CONTACT . '</a></li>');
Define('CONDITIONS','<li><a href="' . zen_href_link(FILENAME_CONDITIONS) . '">' . BOX_INFORMATION_CONDITIONS . '</a></li>');

/*EOF Menu Column 4 link Definitions*/

/*BOF Footer Menu Definitions*/
Define('TITLES', '<tr><td class="menuTitle first">' . TITLE_ONE . '</td>' . '<td class="menuTitle second">' . TITLE_TWO . '</td>' . '<td class="menuTitle third">' . TITLE_THREE . '</td>' . '<td class="menuTitle">' . TITLE_FOUR . '</td></tr>');



Define('CONTACT_INFO', '<tr><td class="column first">'. GVFAQ . SHIPPING . PRIVACY . '</td>');

Define('QUICKLINKS', '<td class="column second"><ul>' . HOME . ACCOUNT . ABOUT . '</ul></td>');

Define('INFORMATION', '<td class="column third"><ul>' . SITEMAP . COUPON . UNSUBSCRIBE . '</ul></td>');

Define('CUSTOMER_SERVICE', '<td class="column fourth"><ul>' . CONTACT . CONDITIONS .  '</ul></td></tr>');
/*EOF Footer Menu Definitions*/

//EOF