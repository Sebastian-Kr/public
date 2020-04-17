{**
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<form id="blog_config_form" class="defaultForm form-horizontal" action="index.php?controller=AdminModules&configure=owlblog&tab_module=front_office_features&module_name=owlblog&token={Tools::getAdminTokenLite('AdminModules')|escape:'html':'UTF-8'}" method="post" enctype="multipart/form-data">
<input type="hidden" name="submitSliderConfig" value="1">
<input type="hidden" name="id_owlblog_op" id="id_owlblog_op" value="1">
<div class="panel" id="fieldset_0">
	<div class="form-wrapper">
	<div class="group layout_properties">
		<h3>{l s='OWL Blog Config' mod='owlblog'}<span class="icon-dropdown"></span></h3>
		<div class="group_content first">
			<div class="form-group">
				<label class="control-label col-lg-3">{l s='Main Blog URL' mod='owlblog'}</label>
				<div class="form-group col-lg-7">
					<input type="text" id="OWL_MAIN_BLOG_URL" name="OWL_MAIN_BLOG_URL" value="{$options_arr.OWL_MAIN_BLOG_URL|escape:'html':'UTF-8'}">
					<div class="item-unit">Main blog url is <a href="{$main_blog_url|escape:'html':'UTF-8'}" target="_blank">{$main_blog_url|escape:'html':'UTF-8'}</a></div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-5">{l s='Number of post per page' mod='owlblog'}</label>
				<div class="form-group col-lg-3">
					<input type="text" id="OWL_POSTS_PER_PAGE" name="OWL_POSTS_PER_PAGE" value="{$options_arr.OWL_POSTS_PER_PAGE|intval}">
					<div class="item-unit">Number of post per page is displayed on post list page.</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-5">{l s='Using captcha' mod='owlblog'}</label>
				<div class="col-lg-7">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="OWL_DISPLAY_CAPTCHA" id="OWL_DISPLAY_CAPTCHA_on" value="1" {if $options_arr.OWL_DISPLAY_CAPTCHA == 1}checked="checked" {/if}>
						<label for="OWL_DISPLAY_CAPTCHA_on">Yes</label>
						<input type="radio" name="OWL_DISPLAY_CAPTCHA" id="OWL_DISPLAY_CAPTCHA_off" value="0" {if $options_arr.OWL_DISPLAY_CAPTCHA == 0}checked="checked" {/if}>
						<label for="OWL_DISPLAY_CAPTCHA_off">No</label>
						<a class="slide-button btn"></a>
					</span>									
				</div>
			</div>
			<div class="form-group">
				<label class="control-label label-tooltip col-lg-5">{l s='All comments must be validated by an employee' mod='owlblog'}</label>
				<div class="col-lg-7 ">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="OWL_COMMENTS_VALIDATE" id="OWL_COMMENTS_VALIDATE_on" value="1" {if $options_arr.OWL_COMMENTS_VALIDATE == 1}checked="checked" {/if}>
						<label for="OWL_COMMENTS_VALIDATE_on">Yes</label>
						<input type="radio" name="OWL_COMMENTS_VALIDATE" id="OWL_COMMENTS_VALIDATE_off" value="0" {if $options_arr.OWL_COMMENTS_VALIDATE == 0}checked="checked" {/if}>
						<label for="OWL_COMMENTS_VALIDATE_off">No</label>
						<a class="slide-button btn"></a>
					</span>									
				</div>
			</div>
			<div class="form-group">
				<label class="control-label label-tooltip col-lg-5">{l s='Allow guest comments' mod='owlblog'}</label>
				<div class="col-lg-7 ">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="OWL_ALLOW_COMMENTS_BY_GUESTS" id="OWL_ALLOW_COMMENTS_BY_GUESTS_on" value="1" {if $options_arr.OWL_ALLOW_COMMENTS_BY_GUESTS == 1}checked="checked" {/if}>
						<label for="OWL_ALLOW_COMMENTS_BY_GUESTS_on">Yes</label>
						<input type="radio" name="OWL_ALLOW_COMMENTS_BY_GUESTS" id="OWL_ALLOW_COMMENTS_BY_GUESTS_off" value="0" {if $options_arr.OWL_ALLOW_COMMENTS_BY_GUESTS == 0}checked="checked" {/if}>
						<label for="OWL_ALLOW_COMMENTS_BY_GUESTS_off">No</label>
						<a class="slide-button btn"></a>
					</span>									
				</div>
			</div>
		</div>	
	</div>
	<div class="group layout_properties clearfix">
		<h3>{l s='IMAGE SiZE' mod='owlblog'}<span class="icon-dropdown"></span></h3>
		<div class="group_content first">
			<div class="form-group col-sm-6">
				<label class="control-label col-lg-6">{l s='Post image size small (in px)' mod='owlblog'}</label>
				<div class="form-group col-lg-6">
					<div class="col-lg-8">
						<input type="text" id="OWL_IMG_SMALL_SIZE" name="OWL_IMG_SMALL_SIZE" value="{$options_arr.OWL_IMG_SMALL_SIZE|intval}">
					</div>
					<div class="item-unit col-lg-4">Width</div>
				</div>
			</div>
			<div class="form-group col-sm-6">
				<div class="form-group col-lg-6">
					<div class="col-lg-8">
						<input type="text" id="OWL_IMG_SMALL_H_SIZE" name="OWL_IMG_SMALL_H_SIZE" value="{$options_arr.OWL_IMG_SMALL_H_SIZE|intval}">
					</div>
					<div class="item-unit col-lg-4">Height</div>
				</div>
			</div>
			
			<div class="form-group col-sm-6">
				<label class="control-label col-lg-6">{l s='Post image size medium (in px)' mod='owlblog'}</label>
				<div class="form-group col-lg-6">
					<div class="col-lg-8">
						<input type="text" id="OWL_IMG_MEDIUM_SIZE" name="OWL_IMG_MEDIUM_SIZE" value="{$options_arr.OWL_IMG_MEDIUM_SIZE|intval}">
					</div>
					<div class="item-unit col-lg-4">Width</div>
				</div>
			</div>
			<div class="form-group col-sm-6">
				<div class="form-group col-lg-6">
					<div class="col-lg-8">
						<input type="text" id="OWL_IMG_MEDIUM_H_SIZE" name="OWL_IMG_MEDIUM_H_SIZE" value="{$options_arr.OWL_IMG_MEDIUM_H_SIZE|intval}">
					</div>
					<div class="item-unit col-lg-4">Height</div>
				</div>
			</div>
			
			<div class="form-group col-sm-6">
				<label class="control-label col-lg-6">{l s='Post image size large(in px)' mod='owlblog'}</label>
				<div class="form-group col-lg-6">
					<div class="col-lg-8">
						<input type="text" id="OWL_IMG_LARGE_SIZE" name="OWL_IMG_LARGE_SIZE" value="{$options_arr.OWL_IMG_LARGE_SIZE|intval}">
					</div>
					<div class="item-unit col-lg-4">Width</div>
				</div>
			</div>
			<div class="form-group col-sm-6">
				<div class="form-group col-lg-6">
					<div class="col-lg-8">
						<input type="text" id="OWL_IMG_LARGE_H_SIZE" name="OWL_IMG_LARGE_H_SIZE" value="{$options_arr.OWL_IMG_LARGE_H_SIZE|intval}">
					</div>
					<div class="item-unit col-lg-4">Height</div>
				</div>
			</div>
			
			<div class="form-group col-sm-6">
				<label class="control-label col-lg-6">{l s='Category image size (in px)' mod='owlblog'}</label>
				<div class="form-group col-lg-6">
					<div class="col-lg-8">
						<input type="text" id="OWL_IMG_CATEGORY_SIZE" name="OWL_IMG_CATEGORY_SIZE" value="{$options_arr.OWL_IMG_CATEGORY_SIZE|intval}">
					</div>
					<div class="item-unit col-lg-4">Width</div>
				</div>
			</div>
			<div class="form-group col-sm-6">
				<div class="form-group col-lg-6">
					<div class="col-lg-8">
						<input type="text" id="OWL_IMG_CATEGORY_H_SIZE" name="OWL_IMG_CATEGORY_H_SIZE" value="{$options_arr.OWL_IMG_CATEGORY_H_SIZE|intval}">
					</div>
					<div class="item-unit col-lg-4">Height</div>
				</div>
			</div>
		</div>
	</div>
	<div class="group layout_properties clearfix">
		<h3>{l s='BLOCk CATEGORY' mod='owlblog'}<span class="icon-dropdown"></span></h3>
		<div class="group_content first">
			<div class="form-group">
				<label class="control-label col-lg-5">{l s='Dynamic' mod='owlblog'}</label>
				<div class="col-lg-7">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="BLOCK_CATEG_DHTML" id="BLOCK_CATEG_DHTML_on" value="1" {if $options_arr.BLOCK_CATEG_DHTML == 1}checked="checked" {/if}>
						<label for="BLOCK_CATEG_DHTML_on">Yes</label>
						<input type="radio" name="BLOCK_CATEG_DHTML" id="BLOCK_CATEG_DHTML_off" value="0" {if $options_arr.BLOCK_CATEG_DHTML == 0}checked="checked" {/if}>
						<label for="BLOCK_CATEG_DHTML_off">No</label>
						<a class="slide-button btn"></a>
					</span>									
				</div>
			</div>
		</div>
	</div>
	<div class="group layout_properties clearfix">
		<h3>{l s='BLOCk TAG' mod='owlblog'}</h3>
		<div class="group_content first">
			<div class="form-group">
				<label class="control-label col-lg-5">{l s='Number tags displayed' mod='owlblog'}</label>
				<div class="form-group col-lg-3">
					<input type="text" id="OWL_NUMBER_TAG_DISPLAYED" name="OWL_NUMBER_TAG_DISPLAYED" value="{$options_arr.OWL_NUMBER_TAG_DISPLAYED|intval}">
				</div>
			</div>
		</div>
	</div>
	<div class="group layout_properties clearfix">
		<h3>{l s='BLOCK LASTEST POST' mod='owlblog'}</h3>
		<div class="group_content first">
			<div class="form-group">
				<label class="control-label col-lg-5">{l s='Numbers post display' mod='owlblog'}</label>
				<div class="form-group col-lg-3">
					<input type="text" id="OWL_OP_LASTEST_POST" name="OWL_OP_LASTEST_POST" value="{$options_arr.OWL_OP_LASTEST_POST|intval}">
				</div>
			</div>
		</div>
	</div>
	<div class="group layout_properties clearfix">
		<h3>{l s='BLOCK CURRENT COMMENTS' mod='owlblog'}</h3>
		<div class="group_content first">
			<div class="form-group">
				<label class="control-label col-lg-5">{l s='Numbers comments display' mod='owlblog'}</label>
				<div class="form-group col-lg-3">
					<input type="text" id="OWL_NUMBER_CURRENT_COMMENT" name="OWL_NUMBER_CURRENT_COMMENT" value="{$options_arr.OWL_NUMBER_CURRENT_COMMENT|intval}">
				</div>
			</div>
		</div>
	</div>
	<div class="group layout_properties clearfix">
		<h3>{l s='CATEGORY RSS' mod='owlblog'}</h3>
		<div class="group_content first">
			<div class="form-group">
				<label class="control-label col-lg-5">{l s='Numbers rss link display' mod='owlblog'}</label>
				<div class="form-group col-lg-3">
					<input type="text" id="CATEGORY_RSS_NUMBER" name="CATEGORY_RSS_NUMBER" value="{$options_arr.CATEGORY_RSS_NUMBER|intval}">
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="button-save">
			<button type="submit" value="1" id="module_form_submit_btn" name="submitConfiguration" class="btn btn-default pull-right">
				<i class="process-icon-save"></i>{l s='Save' mod='owlblog'}
			</button>
		</div>
	</div>
	</div>
</div>
<form>