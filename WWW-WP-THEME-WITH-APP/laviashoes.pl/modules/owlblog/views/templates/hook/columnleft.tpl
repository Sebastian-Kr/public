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

{if $page.page_name == 'module-owlblog-categoryPost' || $page.page_name == 'module-owlblog-post' || $page.page_name == 'module-owlblog-tag' || $page.page_name == 'module-owlblog-rss'}
	<div class="block-categories blog-categories-show">
		{include file="./contents/blockcategories.tpl"}
	</div>

	<div id="blog_lastest" class="tab-pane fade in active blog_lastest_posts" >
		{include file="./contents/blocklastestposts.tpl"}
	</div>
	<!-- <div id="blog_comments" class="tab-pane fade in blog-comments">

		{include file="./contents/blockcomments.tpl"}
	</div>
		 -->
	<div class="block tags_block" id="blog_tags">
	{include file="./contents/blocktags.tpl"}
	</div>
{/if}
