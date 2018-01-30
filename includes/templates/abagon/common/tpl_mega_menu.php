<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: tpl_drop_menu.php  2005/06/15 15:39:05 DrByte Exp $
//

?>


<div id="mega-wrapper"><!-- bof mega-wrapper -->

    <ul class="mega-menu"><!-- bof mega-menu -->   
        <li ><a href="<?php echo zen_href_link(FILENAME_DEFAULT); ?>" ><?php echo TOP_MENU_HOME; ?></a></li>  

        <li ><a href="index.php?main_page=index&cPath=1" ><?php echo HEADER_TITLE_CATEGORIES; ?></a></li>   

        <li ><a href="index.php?main_page=index&cPath=2" ><?php echo HEADER_TITLE_MANUFACTURERS; ?></a></li>   

        <li><a href="index.php?main_page=index&cPath=13" ><?php echo HEADER_TITLE_ABOUT_US; ?></a></li>
        
        <li ><a href="index.php?main_page=index&cPath=14" ><?php echo HEADER_TITLE_INFORMATION; ?></a></li>
    </ul><!-- eof mega-menu -->
    
</div><!-- eof mega-wrapper -->


