{*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="block-contact col-sm-6 col-md-6 col-lg-4 links wrapper">
	<div class="hidden-sm-down">
		<h3 class="h3  block-contact-title">{l s='Kontakt' d='Shop.Theme'}</h3>
	</div>

	<div class="hidden-md-up">
    <div class="title" data-target="#contact_footer" data-toggle="collapse">
      <a class="h3" href="{$urls.pages.stores}">{l s='Kontakt' d='Shop.Theme'}</a>
	   <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
    </div>
	</div>
  <div id="contact_footer" class="collapse block_content">
		<div class="contact-add arrow_box">
			Adress: {$contact_infos.address.formatted nofilter}
		</div>
      {if $contact_infos.phone}
		<div class="contact-phone arrow_box">


			{* [1][/1] is for a HTML tag. *}
			{l s='Telefon: [1]%phone%[/1]'
			  sprintf=[
			  '[1]' => '<span>',
			  '[/1]' => '</span>',
			  '%phone%' => $contact_infos.phone
			  ]
			  d='Shop.Theme'
			}
		</div>
      {/if}

      {if $contact_infos.fax}
        <div class="contact-fax arrow_box">
			<i class="material-icons">&#xE8AD;</i>
        {* [1][/1] is for a HTML tag. *}
        {l
          s='Fax: [1]%fax%[/1]'
          sprintf=[
            '[1]' => '<span>',
            '[/1]' => '</span>',
            '%fax%' => $contact_infos.fax
          ]
          d='Shop.Theme'
        }
		</div>
      {/if}

	   {if $contact_infos.email}
				<div class="contact-mail arrow_box">
				{* [1][/1] is for a HTML tag. *}
				{l
					s='Email:: [1]%fax%[/1]'
					sprintf=[
						'[1]' => '<span>',
						'[/1]' => '</span>',
						'%fax%' => $contact_infos.email
					]
					d='Shop.Theme'
				}
		</div>
			{/if}

  </div>

</div>
