{template:header}
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
    <div class="content grid-u-1 grid-u-med-3-4">
         
{if $article.Type==ZC_POST_TYPE_ARTICLE}
{template:post-single}
{else}
{template:post-page}
{/if}
        
        
		{template:footer}
		</div>
		
        
