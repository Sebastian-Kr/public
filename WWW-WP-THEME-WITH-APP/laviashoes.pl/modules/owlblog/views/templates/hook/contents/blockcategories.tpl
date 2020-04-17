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
{if $owl_blockCategTree.children|@count > 0}
<h4 class="h6 title_block">{l s='Categories' mod='owlblog'}</h4>
	<div class="block_content">
		<ul class="category-sub-menu">
		{foreach from=$owl_blockCategTree.children item=child name=owl_blockCategTree}
			{if $smarty.foreach.owl_blockCategTree.last}
				{include file="$owl_branche_tpl_path" node=$child last='true'}
			{else}
				{include file="$owl_branche_tpl_path" node=$child}
			{/if}
		{/foreach}
		</ul>
	</div>
{/if}