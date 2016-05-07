<?php
#注册插件
RegisterPlugin("lianxitop","ActivePlugin_lianxitop");

function ActivePlugin_lianxitop() {Add_Filter_Plugin('Filter_Plugin_Zbp_MakeTemplatetags','lianxitop_main');}

function lianxitop_main() {global $zbp;

	$zbp->header .= '<link href="'.$zbp->host.'zb_users/plugin/lianxitop/css/style.css" rel="stylesheet" type="text/css" />
' . "\r\n";
	
	$zbp->header .= '<script src="'.$zbp->host.'zb_users/plugin/lianxitop/js/script.js" type="text/javascript"></script>' . "\r\n";
	
	$zbp->footer .= '<div class="actlianxitop"><a href="#0" class="cd-top">Top</a></div>' . "\r\n";
	
	}

function InstallPlugin_lianxitop() {}
function UninstallPlugin_lianxitop() {}