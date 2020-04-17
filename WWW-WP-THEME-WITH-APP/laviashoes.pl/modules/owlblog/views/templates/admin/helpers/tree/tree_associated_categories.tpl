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

<div class="panel">
	{if isset($header)}{$header nofilter}{/if}
	{if isset($nodes)}
	<ul id="{$id|escape:'html':'UTF-8'}" class="tree">
		{$nodes nofilter}
	</ul>
	{/if}
</div>
<script type="text/javascript">
	{if isset($use_checkbox) && $use_checkbox == true}
		function checkAllAssociatedCategories($tree)
		{
			$tree.find(":input[type=checkbox]").each(
				function()
				{
					$(this).prop("checked", true);
                    if (!$('select#id_category_default').find('option[value="'+$(this).val()+'"]').length)
					   $('select#id_category_default').append('<option value="'+$(this).val()+'">'+$(this).parent().find('label').html()+'</option>');
					if ($('select#id_category_default option').length > 0)
					{
						$('select#id_category_default').closest('.form-group').show();
						$('#no_default_category').hide();
					}

					$(this).parent().addClass("tree-selected");
				}
			);
		}

		function uncheckAllAssociatedCategories($tree)
		{
			$tree.find(":input[type=checkbox]").each(
				function()
				{
					$(this).prop("checked", false);

					$('select#id_category_default option[value='+$(this).val()+']').remove();
					if ($('select#id_category_default option').length == 0)
					{
						$('select#id_category_default').closest('.form-group').hide();
						$('#no_default_category').show();
					}

					$(this).parent().removeClass("tree-selected");
				}
			);
		}
	{/if}
	{if isset($use_search) && $use_search == true}
		$("#{$id|escape:'html':'UTF-8'}-categories-search").bind("typeahead:selected", function(obj, datum) {
		    $("#{$id|escape:'html':'UTF-8'}").find(":input").each(
				function()
				{
					if ($(this).val() == datum.id_category)
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents("ul.tree").each(
							function()
							{
								$(this).children().children().children(".icon-folder-close")
									.removeClass("icon-folder-close")
									.addClass("icon-folder-open");
								$(this).show();
							}
						);
					}
				}
			);
		});
	{/if}
	$(document).ready(function () {
		$("#{$id|escape:'html':'UTF-8'}").tree("collapseAll");
        $('#{$id|escape:'html':'UTF-8'}').tree('expandAll');
		$("#{$id|escape:'html':'UTF-8'}").find(":input[type=radio]").click(
			function()
			{
				location.href = location.href.replace(
					/&id_category=[0-9]*/, "")+"&id_category="
					+$(this).val();
			}
		);

		{if isset($selected_categories)}
			$('#no_default_category').hide();
			{assign var=imploded_selected_categories value='","'|implode:$selected_categories}
			var selected_categories = new Array("{$imploded_selected_categories nofilter}");

			$("#{$id|escape:'html':'UTF-8'}").find(":input").each(
				function()
				{
					if ($.inArray($(this).val(), selected_categories) != -1)
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents("ul.tree").each(
							function()
							{
								$(this).children().children().children(".icon-folder-close")
									.removeClass("icon-folder-close")
									.addClass("icon-folder-open");
								$(this).show();
							}
						);
					}
				}
			);
		{/if}

		$("#{$id|escape:'html':'UTF-8'}").find(":input[type=checkbox]").click(
			function()
			{
				if ($(this).prop("checked"))
				{
				    if (!$('select#id_category_default').find('option[value="'+$(this).val()+'"]').length)
					   $('select#id_category_default').append('<option value="'+$(this).val()+'">'+$(this).parent().find('label').html()+'</option>');
					if ($('select#id_category_default option').length > 0)
					{
						$('select#id_category_default').closest('.form-group').show();
						$('#no_default_category').hide();
					}
				}
				else
				{
					$('select#id_category_default option[value='+$(this).val()+']').remove();
					if ($('select#id_category_default option').length == 0)
					{
						$('select#id_category_default').closest('.form-group').hide();
						$('#no_default_category').show();
					}
				}
			}
		);
	});
</script>