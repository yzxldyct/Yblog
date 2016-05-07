<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="{if $article.Tags}{foreach $article.Tags as $tag}{$tag.Name},{/foreach}{/if}"/>
    <title>{$title} - {$name}</title>    
    <link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/{$style}.css" type="text/css" media="all"/>
    <script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
    <script src="{$host}zb_users/theme/{$theme}/script/custom.js" type="text/javascript"></script>
    <script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
    <link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
   {$header}
  </head>
<body>
<div class="grid-g">
    <div class="sidebar grid-u-1 grid-u-med-1-4">
        <div class="header">
            <hgroup>
                <a href="{$host}">
                    <h1 class="title">
                       {$name}
                    </h1>
                </a>
                <h2 class="description">
                   {$subname}
                </h2>
            </hgroup>
			<nav class="nav">
                <ul class="nav-list">
					{module:navbar}                       
                </ul>
            </nav>
            {module:searchpanel}<br/>
            </div>
    </div>    