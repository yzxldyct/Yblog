{template:header}
        <div class="content grid-u-1 grid-u-med-3-4">
            <div class="posts"> 
{foreach $articles as $article}
{if $article.IsTop}
{template:post-istop}
{else}
{template:post-multi}
{/if}
{/foreach}
            </div>
			<div class="pagebar">{template:pagebar}</div>
            {if $type=='index'}
                <h1 class="subhead">
                友情链接
                </h1>
                <div class="links">
                    <ul>
                        {module:link}
                    </ul>   
                </div>
            {/if}
		
		{template:footer}