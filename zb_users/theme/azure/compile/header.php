<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php if ($article->Tags) { ?><?php  foreach ( $article->Tags as $tag) { ?><?php  echo $tag->Name;  ?>,<?php }   ?><?php } ?>"/>
    <title><?php  echo $title;  ?> - <?php  echo $name;  ?></title>    
    <link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/<?php  echo $style;  ?>.css" type="text/css" media="all"/>
    <script src="<?php  echo $host;  ?>zb_system/script/common.js" type="text/javascript"></script>
    <script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/custom.js" type="text/javascript"></script>
    <script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
    <link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" />
   <?php  echo $header;  ?>
  </head>
<body>
<div class="grid-g">
    <div class="sidebar grid-u-1 grid-u-med-1-4">
        <div class="header">
            <hgroup>
                <a href="<?php  echo $host;  ?>">
                    <h1 class="title">
                       <?php  echo $name;  ?>
                    </h1>
                </a>
                <h2 class="description">
                   <?php  echo $subname;  ?>
                </h2>
            </hgroup>
			<nav class="nav">
                <ul class="nav-list">
					<?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>                       
                </ul>
            </nav>
            <?php  if(isset($modules['searchpanel'])){echo $modules['searchpanel']->Content;}  ?><br/>
            </div>
    </div>    