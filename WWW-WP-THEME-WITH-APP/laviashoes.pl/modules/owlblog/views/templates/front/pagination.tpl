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

{if isset($p) AND $p}
	<!-- Pagination -->
	{if isset($owl_blog_category['id_owl_blog_category']) && $owl_blog_category['id_owl_blog_category']}
		{assign var='requestPage' value=$OWLLink->getCategoryPostLink($owl_blog_category['id_owl_blog_category'],$owl_blog_category['link_rewrite'])|escape:'UTF-8'}
	{elseif isset($owl_blog_tag)}

		{assign var='requestPage' value=$OWLLink->getTagLink($owl_blog_tag->id,$owl_blog_tag->name)|escape:'UTF-8'}
	{else}

		{assign var='requestPage' value=$link->getModuleLink('owlblog','categoryPost')|escape:'UTF-8'}
	{/if}
	
<nav class="pagination">
	<div id="pagination" class="pagination-nav clearfix">
	{if $start!=$stop}
		<ul class="page-list text-xs-center">
		{if $p != 1}
			{assign var='p_previous' value=$p-1}
			<li>
				<a href="{$link->goPage($requestPage, $p_previous)|escape:'html':'UTF-8'}" class="previous">
					 <i class="material-icons">&#xE314;</i>
				</a>
			</li>
		{else}
			<li>
				<a href="javascript:void(0)" class="disabled previous js-search-link">
					<i class="material-icons">&#xE314;</i>
				</a>
			</li>
		{/if}
		{if $start>3}
			<li><a href="{$link->goPage($requestPage, 1)|escape:'html':'UTF-8'}"><span>1</span></a></li>
			<li class="truncate">
				<span>
					<span>...</span>
				</span>
			</li>
		{/if}
		{section name=pagination start=$start loop=$stop+1 step=1}
			{if $p == $smarty.section.pagination.index}
				<li class="current"><a class="disabled js-search-link" href="{$link->goPage($requestPage, $smarty.section.pagination.index)|escape:'html':'UTF-8'}">{$p|escape:'html':'UTF-8'}</a></li>
			{else}
				<li><a href="{$link->goPage($requestPage, $smarty.section.pagination.index)|escape:'html':'UTF-8'}">{$smarty.section.pagination.index|escape:'html':'UTF-8'}</a></li>
			{/if}
		{/section}
		{if $pages_nb>$stop+2}
			<li class="truncate">
				<span>
					<span>...</span>
				</span>
			</li>
			<li><a href="{$link->goPage($requestPage, $pages_nb)|escape:'html':'UTF-8'}">{$pages_nb|intval}</a></li>
		{/if}
		{if $pages_nb > 1 AND $p != $pages_nb}
			{assign var='p_next' value=$p+1}
			<li id="pagination_next" class="pagination_next">
				<a href="{$link->goPage($requestPage, $p_next)|escape:'html':'UTF-8'}">
					<i class="material-icons">&#xE315;</i>
				</a>
			</li>
		{else}
			
			<li>
				<a href="javascript:void(0)" class="disabled js-search-link">
					<i class="material-icons">&#xE315;</i>
				</a>
			</li>
		{/if}
		</ul>
	{/if}
	</div>
</nav>
{/if}
