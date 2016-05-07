 <div class="content-subhead">
            当前位置：<a href='{$host}'>首页</a> &gt; <a href="{$article.Category.Url}" title="查看 {$article.Category.Name} 分类下的更多文章" target="_blank">{$article.Category.Name}</a>           
        <span class="date">{$article.Time('Y年m月d日')}</span>

        
        </div>
<article class="post">
            <header class="post-header">
                <a href="{$article.Url}" class="post-title">
                  {$article.Title}
                </a>
            </header>
            <div class="post-description">
                <p>
                   {$article.Content}
                </p>
            </div>
            <div class="tags">
                {if $article.Tags}
        {foreach $article.Tags as $tag}<a href="{$tag.Url}">{$tag.Name}</a>{/foreach}
        {/if}
            </div>
            <div class="digg">
                
            </div>
        </article>
        <ul class="pager">
        {if $article.Prev}
            <li class="previous">
                <a href="{$article.Prev.Url}" title="{$article.Prev.Title}">← 上一篇文章</a>
            </li>{/if}
            {if $article.Next}
            <li class="next">
               <a href="{$article.Next.Url}" title="{$article.Next.Title}">下一篇文章 →</a>
            </li>{/if}
            
        </ul>
        <br>
        {if !$article.IsLock}
{template:comments}
{/if}