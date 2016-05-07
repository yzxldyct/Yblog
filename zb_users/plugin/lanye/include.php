<?php
#注册插件
RegisterPlugin("lanye","ActivePlugin_lanye");

function ActivePlugin_lanye() {
	Add_Filter_Plugin('Filter_Plugin_Zbp_MakeTemplatetags','lanye_main');
}

function lanye_main() {
	global $zbp;
	$zbp->header .= '<link href="'.$zbp->host.'zb_users/plugin/lanye/uptop.css" rel="stylesheet" type="text/css" />
' . "\r\n";
	$zbp->footer .= '<script src="'.$zbp->host.'zb_users/plugin/lanye/uptop.js"></script>' . "\r\n";
	$zbp->footer .= '<div id="uptop"> <div style="opacity:0;display:block;" class="level-2"></div> <div class="level-3"></div></div>' . "\r\n";
}

function InstallPlugin_lanye() {

}

function UninstallPlugin_lanye() {

}