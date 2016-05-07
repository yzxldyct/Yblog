 <h1 class="content-subhead">
            当前位置：<a href='{$host}'>首页</a> &gt; {$article.Title}                    
        
        </h1>
<div class="post page">
	<h2 class="post-title">{$article.Title}</h2>
	<div class="post-body">{$article.Content}</div>
</div>

{if !$article.IsLock}
{template:comments}
{/if}