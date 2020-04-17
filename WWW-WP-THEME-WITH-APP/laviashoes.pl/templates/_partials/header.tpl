{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
	<div class="nav1 progremo1 hidden-sm-down">
		<div class="container-nav1">
			<div class="hidden-sm-down" id="_desktop_logo">
			  <a href="{$urls.base_url}">
				<img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
			  </a>
			</div>
			{hook h='displayNav1'}
		</div>
	</div>
	<div class="nav">
		<div class="container-nav2 clearfix">
			<div class="hidden-sm-down">
				{block name='header_nav'}
					<nav class="header-nav">
						{hook h='displayNav2'}
					</nav>
				{/block}



			</div>

			<div class="hidden-md-up text-xs-center mobile">
				<div class="pull-xs-left" id="menu-icon">
				  <i class="material-icons">&#xE5D2;</i>
				</div>
				<div class="pull-xs-right" id="_mobile_cart"></div>
				<div class="pull-xs-right" id="_mobile_user_info"></div>
				<div class="top-logo" id="_mobile_logo"></div>
				<div class="clearfix"></div>
			</div>
			<div id="_mobile_search_widget" class="hidden-md-up"></div>
			<div id="mobile_top_menu_wrapper" class="row hidden-md-up">
				<div class="js-top-menu mobile owl-menu-horizontal" id="_mobile_top_menu_owl"></div>
				<div class="js-top-menu-bottom">
				  <div id="_mobile_currency_selector"></div>
				  <div id="_mobile_language_selector"></div>
				  <div id="_mobile_wishlist_top" class="wishlist-nav"></div>
				  <div id="_mobile_compare_nav" class="compare-nav"></div>
				  <div id="_mobile_contact_link"></div>
				</div>
			</div>
		</div>
	</div>
