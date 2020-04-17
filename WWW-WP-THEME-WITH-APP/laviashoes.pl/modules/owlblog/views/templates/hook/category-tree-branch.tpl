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
<li data-depth=0 {if isset($last) && $last == 'true'}class="last"{/if}>
	<a href="{$node.link|escape:'html':'UTF-8'}"  {if isset($id_owl_blog_category_current) && ($node.id == $id_owl_blog_category_current)}class="selected"{/if} title="{$node.desc|escape:'html':'UTF-8'}">{$node.name|escape:'html':'UTF-8'}</a>
	{if $node.children|@count > 0}
		  <div class="arrows collapse-icons" data-toggle="collapse" data-target="#exblogcat_{$node.id|intval}">
				  <i class="material-icons add"></i>
				  <i class="material-icons remove"></i>
		 </div>
		<div class="collapse" id="exblogcat_{$node.id|intval}">

		</div>
	{/if}
</li>
