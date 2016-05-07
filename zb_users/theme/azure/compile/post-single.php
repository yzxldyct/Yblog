 <div class="content-subhead">
            当前位置：<a href='<?php  echo $host;  ?>'>首页</a> &gt; <a href="<?php  echo $article->Category->Url;  ?>" title="查看 <?php  echo $article->Category->Name;  ?> 分类下的更多文章" target="_blank"><?php  echo $article->Category->Name;  ?></a>           
        <span class="date"><?php  echo $article->Time('Y年m月d日');  ?></span>

        
        </div>
<article class="post">
            <header class="post-header">
                <a href="<?php  echo $article->Url;  ?>" class="post-title">
                  <?php  echo $article->Title;  ?>
                </a>
            </header>
            <div class="post-description">
                <p>
                   <?php  echo $article->Content;  ?>
                </p>
            </div>
            <div class="tags">
                <?php if ($article->Tags) { ?>
        <?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>"><?php  echo $tag->Name;  ?></a><?php }   ?>
        <?php } ?>
            </div>
            <div class="digg">
                
            </div>
        </article>
        <ul class="pager">
        <?php if ($article->Prev) { ?>
            <li class="previous">
                <a href="<?php  echo $article->Prev->Url;  ?>" title="<?php  echo $article->Prev->Title;  ?>">← 上一篇文章</a>
            </li><?php } ?>
            <?php if ($article->Next) { ?>
            <li class="next">
               <a href="<?php  echo $article->Next->Url;  ?>" title="<?php  echo $article->Next->Title;  ?>">下一篇文章 →</a>
            </li><?php } ?>
            
        </ul>
        <br>
        <?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php } ?>