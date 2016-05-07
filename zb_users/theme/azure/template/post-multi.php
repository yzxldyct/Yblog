
<article class="post">
<header class="post-header">
<a href="{$article.Url}" class="post-title">{$article.Title}</a>
<p class="post-meta">
<span class="date">
{$article.Time('Y年m月d日')}
</span>
<span class="commentsnum"><a href="{$article.Url}#comment">{if 0==$article.CommNums}快抢沙发{else}沙发被抢{/if}</a></span>
</p>
</header>
<div class="post-content">
{$article.Intro}
</div>
</article>
<hr>