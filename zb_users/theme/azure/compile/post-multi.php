
<article class="post">
<header class="post-header">
<a href="<?php  echo $article->Url;  ?>" class="post-title"><?php  echo $article->Title;  ?></a>
<p class="post-meta">
<span class="date">
<?php  echo $article->Time('Y年m月d日');  ?>
</span>
<span class="commentsnum"><a href="<?php  echo $article->Url;  ?>#comment"><?php if (0==$article->CommNums) { ?>快抢沙发<?php }else{  ?>沙发被抢<?php } ?></a></span>
</p>
</header>
<div class="post-content">
<?php  echo $article->Intro;  ?>
</div>
</article>
<hr>