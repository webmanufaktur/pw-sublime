<?php namespace ProcessWire;

// Home sweet home
$home = $pages->get('template=home');

// First section
$firstSection = $home->sections->eq(1)->name;

// Global settings page
$settings = $pages->get('template=settings');


// Brand short cuts
$brand          =   $settings->brandName;
$brandLogo      =   $settings->brandLogo->url;

// Contact short cuts
$contactAddress =   $settings->contactAddress;
$contactPhone   =   $settings->contactPhone;
$contactFax     =   $settings->contactFax;
$contactMail    =   $settings->contactMail;


// Social media accounts
$behance        =   $settings->socialBehance;
$dribbble       =   $settings->socialDribbble;
$facebook       =   $settings->socialFacebook;
$instagram      =   $settings->socialInstagram;
$twitter        =   $settings->socialTwitter;