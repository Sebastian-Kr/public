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
{block name='product_miniature_item'}
<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
  <div class="product-container-img">
		{block name='product_thumbnail'}
		  <a href="{$product.url}" class="thumbnail product-thumbnail product_img_link">
			<img
			  src = "{$product.cover.bySize.home_default.url}"
			  alt = "{$product.cover.legend}"
			  data-full-size-image-url = "{$product.cover.large.url}"
			>

		  </a>
		{/block}
		<div class="owl-label">
			{if $product.has_discount}
			  <a class="sale-box" href="{$product.link|escape:'html':'UTF-8'}">
				 {if $product.discount_type === 'percentage'}
					<span class="price-percent-reduction">{l s='Sale' d='Shop.Theme.Actions'}</span>
				{else}
					<span class="sale-label">{l s='Sale'}</span>
				{/if}
				</a>
			{else}
				{if isset($product.new) && $product.new == 1}
				<a class="new-box" href="{$product.link|escape:'html':'UTF-8'}">
					<span class="new-label">{l s='New' d='Shop.Theme.Actions'}</span>

				</a>
				{/if}
			{/if}
		</div>

		<div class="prod-hover">
			<div class="out-button">
				<!-- <a href="#" class="quick-view" data-link-action="quickview">
					<i class="fa fa-eye"></i> {l s='Quick view' d='Shop.Theme.Actions'}
				</a> -->
<a href="{$product.url}" class="seeMore"></a>
				{hook h='displayProductListFunctionalButtons' id_product={$product.id_product} product=$product}
			</div>

			<!-- {block name='product_buy'}
			<div class="product-actions">
				<a class="add-to-cart btn btn-primary js-ajax-add-to-cart" href="{$product.url}" data-id-product="{$product.id_product}" title="{l s='Add To Cart' d='Shop.Theme.Actions'}">
					{l s='Add To Cart' d='Shop.Theme.Actions'}
				</a>

			</div>
			{/block} -->

		</div>
	</div>
    <div class="product-description">
		<div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
		  {block name='product_variants'}
			{if $product.main_variants}
			  {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
			{/if}
		  {/block}
		</div>
      {block name='product_name'}
        <h1 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h1>
      {/block}
	  <p class="category-name">{$product.category_name}</p>
      {block name='product_price_and_shipping'}
        {if $product.show_price}
          <div class="product-price-and-shipping">
            {if $product.has_discount}
              {hook h='displayProductPriceBlock' product=$product type="old_price"}
              <span class="regular-price">{$product.regular_price}</span>
            {/if}

            {hook h='displayProductPriceBlock' product=$product type="before_price"}

            <span itemprop="price" class="price">{$product.price}</span>

            {hook h='displayProductPriceBlock' product=$product type='unit_price'}

            {hook h='displayProductPriceBlock' product=$product type='weight'}
          </div>
        {/if}
      {/block}

    </div>
    {block name='product_flags'}
      <ul class="product-flags" style="display:none">
        {foreach from=$product.flags item=flag}
          <li class="{$flag.type}">{$flag.label}</li>
        {/foreach}
      </ul>
    {/block}
  </div>
</article>
{/block}
