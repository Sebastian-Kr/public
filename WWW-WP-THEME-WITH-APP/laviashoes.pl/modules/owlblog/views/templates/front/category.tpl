{*
* 2007-2018 PrestaShop
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
*  @copyright  2007-2018 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!doctype html>
<html lang="{$language.iso_code|escape:'html':'UTF-8'}">

  <head>
    {block name='head'}
      {include file='_partials/head.tpl'}
    {/block}
  </head>

  <body id="{$page.page_name}" class="blog_module_prgrm {$page.body_classes|classnames}{if $box_mode==1} box-mode{/if}">

    {hook h='displayAfterBodyOpeningTag'}
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

	  </section>
      {block name='notifications'}
        {include file='_partials/notifications.tpl'}
      {/block}

      <section id="wrapper">
        <div class="container">


		<div class="row">
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
            <div id="content-wrapper" class="left-column right-column col-sm-8 col-md-9">
              {if isset($owl_blog_category)}
				<div class="owl-blog-category">

					{if isset($owl_blog_category.image) && $owl_allow_category_image == 1 && $owl_blog_category['image']!=''}
							<div class="content_scene_cat">
								<img src="{$owl_blog_category['image']|escape:'html':'UTF-8'}" title="{$owl_blog_category['name']|escape:'html':'UTF-8'}" alt="{$owl_blog_category['name']|escape:'html':'UTF-8'}" />
							</div>
					{/if}

								<div class="owl-blog-cat-img">
									<div class="container">
										{if isset($owl_blog_category)}
											{if strlen($owl_blog_category['description']) > 350}
											<div id="category_description_short" class="rte">{$owl_blog_category['description']|truncate:120|escape:'html':'UTF-8'}</div>
											{else}
												<div class="rte">{$owl_blog_category['description']|escape:'html':'UTF-8'}</div>
											{/if}
										{/if}
									</div>
								</div>
							</div> <!-- close div cs-category-info -->
							{/if}
							<!--list post-->
							{if $owl_postes_empty == 0}
								{include file="module:owlblog/views/templates/front/post_list.tpl"}
								<div class="content_sortpagebar clearfix">
									<div class="bottom-pagination-content clearfix">
										{if $owl_postes_empty != 1}
											{include file="module:owlblog/views/templates/front/pagination.tpl"}
										{/if}
									</div>
								</div>
							{/if}


							{if $owl_postes_empty == 1}
								<div class="empty">{l s='There are no posts in this category' mod='owlblog'}</div>
							{/if}
            </div>
          {/block}

			</div>
		  </div>
      </section>

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

    {hook h='displayBeforeBodyClosingTag'}

  </body>

</html>
