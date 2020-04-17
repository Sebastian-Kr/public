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
            <div id="content-wrapper" class="left-column right-column col-sm-8 col-md-9">

			{if isset($errorposts) && $errorposts}
				<div class="error">{l s='There is no post' mod='owlblog'}</div>
			{else}
			{if isset($post)}
				<div id="owl_post">

					{if isset($post['image']) && $post['image'] != ''}
						<div class="blog-img">
						<img class="" src="{$post['image']|escape:'htmlall':'UTF-8'}" title="{$post['name']|escape:'html':'UTF-8'}" alt="{$post['name']|escape:'htmlall':'UTF-8'}" />
						</div>
					{/if}

					<h5 class="post_title">{$post['name']|escape:'htmlall':'UTF-8'}</h5>

					<div class="blog-content">
						<p>{$post['description_short'] nofilter}</p>
						<p>{$post['description'] nofilter}</p>

						<div class="blog-info">
							<div class="blog-date">{l s='Data posta :' mod='owlblog'} {$post.date_add|date_format|escape:'htmlall':'UTF-8'}</div>
							<!-- <div class="blog-cat">
								{l s='Post in :' mod='owlblog'} <span>{l s='Blog' mod='owlblog'}</span>
							</div> -->
							<div class="blog-author">{l s='Autor :' mod='owlblog'} {$post.author|escape:'htmlall':'UTF-8'}</div>
						</div>
					</div>


				</div>

				<!--related posts-->
				{if isset($related_posts) && $related_posts }
				<div class="related_posts blog_block">
					<div class="block-home-title">
						<div class="owl-out-title"><h3>{l s='Related Articles' mod='owlblog'}</h3></div>
					</div>
					<ul class="blog_content">
					{foreach from=$related_posts item=related_post name=related_posts}
						<li class="item-related-post">
							<strong><a href="{$OWLLink->getLinkPostDetail($related_post['id_owl_blog_post'],$related_post['link_rewrite'],$related_post['id_owl_blog_category'])|escape:'htmlall':'UTF-8'}" title="{$related_post['name']|escape:'htmlall':'UTF-8'}">{$related_post['name']|escape:'htmlall':'UTF-8'}</a></strong>
						</li>
					{/foreach}
					</ul>
				</div>
				{/if}
					<!-- display comment list -->
					<!-- /display comment list -->
				<!-- display form comment-->
					<div class="comment_form-disabled"></div>

			  <!-- end display form comment-->
			{/if}<!--end isset post-->
			{/if}
			<!--end content-->
            </div>
          {/block}

			{if $layout != 'layouts/layout-full-width.tpl'}
				</div>
			{/if}
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
