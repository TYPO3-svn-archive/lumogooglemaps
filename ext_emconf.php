<?php

########################################################################
# Extension Manager/Repository config file for ext: "lumogooglemaps"
#
# Auto generated 23-07-2006 19:14
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title' => 'LumoNet Google Maps',
    'description' => 'Add an interactive map (based on Google Maps) to your website.',
    'category' => 'plugin',
    'shy' => 0,
    'version' => '0.2.1',
    'dependencies' => 'tt_address',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'beta',
    'uploadfolder' => 1,
    'createDirs' => '',
    'modify_tables' => 'tt_address',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'Thomas Off',
    'author_email' => 'typo3@retiolum.de',
    'author_company' => '',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => array(
        'depends' => array(
            'typo3' => '4.0',
            'php' => '',
            'tt_address' => '1.0.4',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
    '_md5_values_when_last_written' => 'a:29:{s:9:"ChangeLog";s:4:"111d";s:22:"GoogleMapAPI.class.php";s:4:"2b27";s:10:"README.txt";s:4:"bc2f";s:12:"ext_icon.gif";s:4:"236a";s:17:"ext_localconf.php";s:4:"caa8";s:14:"ext_tables.php";s:4:"36c9";s:14:"ext_tables.sql";s:4:"3d4e";s:28:"ext_typoscript_constants.txt";s:4:"3f20";s:24:"ext_typoscript_setup.txt";s:4:"fcdc";s:13:"locallang.xml";s:4:"b6bc";s:16:"locallang_db.xml";s:4:"472c";s:14:"doc/manual.sxw";s:4:"4faa";s:14:"pi1/ce_wiz.gif";s:4:"5491";s:35:"pi1/class.tx_lumogooglemaps_pi1.php";s:4:"57a6";s:43:"pi1/class.tx_lumogooglemaps_pi1_wizicon.php";s:4:"9eac";s:13:"pi1/clear.gif";s:4:"cc11";s:23:"pi1/flexform_ds_pi1.xml";s:4:"75e5";s:17:"pi1/locallang.xml";s:4:"2a3d";s:25:"templates/marker_icon.png";s:4:"1f92";s:27:"templates/marker_shadow.png";s:4:"f77b";s:27:"templates/template_css.html";s:4:"2018";s:25:"templates/.svn/README.txt";s:4:"cf1a";s:25:"templates/.svn/empty-file";s:4:"d41d";s:22:"templates/.svn/entries";s:4:"7eeb";s:21:"templates/.svn/format";s:4:"48a2";s:44:"templates/.svn/prop-base/marker.gif.svn-base";s:4:"1131";s:40:"templates/.svn/props/marker.gif.svn-work";s:4:"1131";s:44:"templates/.svn/text-base/marker.gif.svn-base";s:4:"1990";s:51:"templates/.svn/text-base/template_css.html.svn-base";s:4:"e058";}',
    'suggests' => array(
    ),
);

?>