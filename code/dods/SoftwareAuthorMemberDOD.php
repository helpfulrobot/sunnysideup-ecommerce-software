<?php

/**
 *
 *
 *
 *
 **/


class SoftwareAuthorMemberDOD extends DataObjectDecorator {

	function extraStatics () {
		return array(
			"db" => array(
				"ScreenName" => "Varchar(255)",
				"GithubURL" => "Varchar(255)",
				"SilverstripeDotOrgURL" => "Varchar(255)",
				"CompanyName" => "Varchar(255)",
				"CompanyURL" => "Varchar(255)",
				"AreYouHappyForPeopleToContactYou" => "Boolean",
				"ContactDetailURL" => "Varchar(255)",
				"OtherURL" => "Varchar(255)",
				"AreYouAvailableForPaidSupport" => "Boolean",
				"Rate15Mins" => "Currency",
				"Rate120Mins" => "Currency",
				"Rate480Mins" => "Currency"
			),
			"belongs_many_many" => array(
				"ModuleProducts" => "ModuleProduct"
			),
			"defaults" => array(
				"Rate15Mins" => 0,
				"Rate120Mins" => 0,
				"Rate480Mins" => 0
			),

		);
	}

	function updateMemberFormFields(&$fields) {
		$currency = Payment::site_currency();
		$field = $fields->fieldByName("ScreenName"); $field->setTitle("Screen Name / Alias");
		$field = $fields->fieldByName("GithubURL"); $field->setTitle("Github URL - e.g. https://github.com/mynamehere");
		$field = $fields->fieldByName("SilverstripeDotOrgURL"); $field->setTitle("www.silverstripe.org URL - e.g. http://www.silverstripe.org/ForumMemberProfile/show/1");
		$field = $fields->fieldByName("CompanyName"); $field->setTitle("Company Name (if any)");
		$field = $fields->fieldByName("CompanyURL"); $field->setTitle("Company Link - e.g. http://www.the-company-i-work-for.com/");
		$field = $fields->fieldByName("AreYouHappyForPeopleToContactYou"); $field->setTitle("Are you happy to answer private questions about your code?");
		$field = $fields->fieldByName("ContactDetailURL"); $field->setTitle("Contact Details URL - e.g. http://www.mysite.com/contact/");
		$field = $fields->fieldByName("OtherURL"); $field->setTitle("other URL - e.g.  - e.g. http://www.mysite.com/about-me/");
		$field = $fields->fieldByName("AreYouAvailableForPaidSupport"); $field->setTitle("Are you available for paid support?");
		$field = $fields->fieldByName("Rate15Mins"); $field->setTitle("If applicable, how much do you charge (in $currency) for a fifteen minute skype chat?");
		$field = $fields->fieldByName("Rate120Mins"); $field->setTitle("If applicable, how much do you charge (in $currency) for a two hour support block?");
		$field = $fields->fieldByName("Rate480Mins"); $field->setTitle("If applicable, how much do you charge (in $currency) for a development day (eight hours)?");
		Requirements::javascript("ecommerce_software/javascript/SoftwareAuthorMemberDOD.js");
	}



}

