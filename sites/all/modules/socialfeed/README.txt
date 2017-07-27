CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Dependencies
 * Requirements
 * Installation
 * Configuration
 * Maintainers

INTRODUCTION
------------

 - Social Feed module provides the user to fetch the data from their respective
 Facebook, Twitter, and Instagram profiles and then display them accordingly as
 per their requirement using the Drupal block system.

 - PHP SDK for Facebook APIs will allow you to display particular post types,
 pictures, videos of your posts also the date of your post with
 provision to provide number of count.

 - Instagram APIs will allow you to display pictures from your
 instagram profile with provision to provide number of count to be displayed
 also provision to select the resolution of the image with options and you can
 also provide the post link.

 - PHP SDK for Twitter APIs will allow you get the latest tweets with date
 of your format and provision to provide number of count. Twitter APIs will
 not work locally but only on live sites.

 - This module is easy and simple to install and use if the project page
 description or the README.txt file is followed correctly.

 - This module is highly recommended for the both developers & non-developers since the default layout of the blocks are plain and in simple text hence if you're aware of working with CSS then this module will work you like a charm.

DEPENDENCIES
------------

 - Libraries API 2 - https://www.drupal.org/project/libraries
 - X Autoload - https://www.drupal.org/project/xautoload

REQUIREMENTS
------------

 - PHP 5.4
 - PHP Curl Extension
 - Facebook PHP SDK 4 - http://git.io/AM4F
 - Twitter API PHP - http://git.io/AM4x

INSTALLATION
------------

The Social Feed module is very similar to other Drupal modules which require
Libraries and X Autoload Module to use for the 3rd party code integration. Hence
for installation of the Social Feed module please follow the below-mentioned
steps:

 - Download and install the Libraries Module - 2.x and after the module
 installation create a new folder called libraries under your sites/all/ folder.
 (Creating this folder will help us to locate our 3rd party code integration.)

 - Download and install the X Autoload Module

 - Install as usual, see https://www.drupal.org/node/1294804 for further
 information.

 - For Facebook, download the compressed version of Facebook PHP SDK 4 and
 extract the files into sites/all/libraries/facebook/

 - For Twitter, download the compressed version of Twitter API PHP and extract
 the files into sites/all/libraries/twitter/

 - For Instagram, there is no such dependent library hence you can continue henceforth by enabling the module.

 - Now, in your sites/all/modules/ directory download the Social Feed module downloaded from https://www.drupal.org/project/socialfeed

 - Enable the Social Feed module.

CONFIGURATION
-------------

For installing the module:
 After enabling it, please check your admin/reports/status where there should be
 some new options:
 - For using Facebook: PHP SDK for Facebook APIs v4.0.16 installed
 - For using Twitter: PHP SDK for Twitter APIs v1.1 installed
 - Once done, clear all caches.

For removing the module:
 - Disable the Social Feed module.
 - Uninstall the Social Feed module.
 - Clear Caches.

This module has menu or modifiable settings. There is configuration link for
this which you can access at admin/config/services/socialfeed.

When enabled and configured properly, this module will display the Social Feed
form at admin/config/services/socialfeed, after this step you can use the
blocks from Drupal system to show the feeds from their respective services.

MAINTAINERS
-----------

 - Hemangi Gokhale - https://www.drupal.org/user/2008064/
