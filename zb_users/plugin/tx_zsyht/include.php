<?php
#注册插件
RegisterPlugin("tx_zsyht","ActivePlugin_tx_zsyht");

function ActivePlugin_tx_zsyht() {
	Add_Filter_Plugin('Filter_Plugin_Admin_Header','tx_zsyht_Css');
	Add_Filter_Plugin('Filter_Plugin_Login_Header','tx_zsyht_Css');
	Add_Filter_Plugin('Filter_Plugin_Other_Header','tx_zsyht_Css');
	Add_Filter_Plugin('Filter_Plugin_Admin_Footer','tx_zsyht_sm');
}

function tx_zsyht_Css() {
	global $zbp;
	echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">' . "\r\n";
    echo '<link rel="stylesheet" type="text/css" href="'. $zbp->host .'zb_users/plugin/tx_zsyht/txcstx.css"/>' . "\r\n";
}

function tx_zsyht_sm() {
	global $zbp;
	echo '<div class="clear"></div><div id="txcstxsm"><h2>&nbsp;插件使用说明&nbsp;</h2>
<p><b>这个插件仅仅用来在手机上发发文章，删删评论用的。因为↓</b></p>
<p>在官方的后台不进行大换血更新之前，zblog后台想实现全部功能都自适应那估计还是有点...</p>
<p>PS：使用此插件可以发布文章并上传图片，但是请注意<b>仅支持UE编辑器</b>，并且要<b>升级到最新版</b>。而且只能发布一张图，发的图多了大了你会发现有一种深深的无力感，不建议去尝试！</p>
</div>' . "\r\n";
   echo '<a href="'. $zbp->host .'zb_system/cmd.php?act=PluginDis&amp;name=tx_zsyht&amp;token='. $zbp->GetToken() .'" title="' . $zbp->lang['msg']['disable'] . '" class="tingyong">停用此插件</a>' . "\r\n";
}



function UninstallPlugin_tx_zsyht() {
	global $zbp;
//	$zbp->DelConfig('tx_zsyht');
}