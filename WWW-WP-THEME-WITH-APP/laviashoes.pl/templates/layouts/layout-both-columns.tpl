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
<!doctype html>
<html lang="{$language.iso_code}">

  <head>
    {block name='head'}
      {include file='_partials/head.tpl'}
    {/block}
  </head>
  <body id="{$page.page_name}" class="{$page.body_classes|classnames}{if $box_mode==1} box-mode{/if}">
    {block name='hook_after_body_opening_tag'}
      {hook h='displayAfterBodyOpeningTag'}
    {/block}
    <main>
      {block name='product_activation'}
        {include file='catalog/_partials/product-activation.tpl'}
      {/block}
	  <section id="g-header">
		<header id="header">
			{block name='header'}
			  {include file='_partials/header.tpl'}
			{/block}
		</header>
		{block name='owl_slideshow'}
			{if $page.page_name == 'index'}
				<div class="owl-slideshow">
					{hook h='displayNavFullWidth'}
				</div>
			{/if}
		{/block}
		{if $page.page_name != 'index'}
		<div class="g-breadcrumb">
			<div class="container">
				<div class="breadcrumb-content">
					<h1 class="page-title">{hook h='displayPageTitle'}</h1>
					{block name='breadcrumb'}
						{include file='_partials/breadcrumb.tpl'}
					{/block}
				</div>
			</div>
		</div>
		{/if}
	  </section>

      {block name='notifications'}
        {include file='_partials/notifications.tpl'}
      {/block}

		{block name='home_top'}
		{if $page.page_name == 'index'}
			<div class="home-top">
				{hook h='displayTop'}
			</div>
		{/if}
		{/block}


    {if $page.page_name == 'index'}
    <section class="aboutus-box">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-5">
    				{hook h="displayTopHome"}
    			</div>
    		</div>
    	</div>
    	<div class="bg-box"></div>
    </section>
    {/if}

      <section id="wrapper">
        <div class="container">

		{if $layout != 'layouts/layout-full-width.tpl'}
			<div class="row">
		 {/if}
          {block name="left_column"}
            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
              {if $page.page_name == 'product'}
                {hook h='displayLeftColumnProduct'}
              {else}

                {hook h="displayLeftColumn"}
              {/if}
            </div>
          {/block}

          {block name="content_wrapper"}
            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              {block name="content"}
                <p>Hello world! This is HTML5 Boilerplate.</p>
              {/block}
            </div>
          {/block}

          {block name="right_column"}
            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
              {if $page.page_name == 'product'}
                {hook h='displayRightColumnProduct'}
              {else}
                {hook h="displayRightColumn"}
              {/if}
            </div>
          {/block}
		  {if $layout != 'layouts/layout-full-width.tpl'}
			<div class="row">
		 {/if}
        </div>
      </section>
		{if $page.page_name == 'index'}
			<div class="bottom-home">
				 {hook h="displayBottomHome"}
			</div>
		{/if}

		<div class="g-footer">
			<div class="footer-before">
				<div class="container">
					{hook h='displayFooterBefore'}
				</div>
			</div>

			<footer id="footer">
				{block name="footer"}
				  {include file="_partials/footer.tpl"}
				{/block}
			</footer>

			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						{hook h='displayFooterAfter'}
					</div>
				</div>
			</div>
		</div>

		<div class="owl-footer">
			{hook h="displayOwlFooter"}
		</div>

    </main>

    {block name='javascript_bottom'}
      {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
    {/block}

    {block name='hook_before_body_closing_tag'}
      {hook h='displayBeforeBodyClosingTag'}
    {/block}

  </body>

</html>
