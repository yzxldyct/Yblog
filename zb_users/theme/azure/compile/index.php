<?php  include $this->GetTemplate('header');  ?>
        <div class="content grid-u-1 grid-u-med-3-4">
            <div class="posts"> 
<?php  foreach ( $articles as $article) { ?>
<?php if ($article->IsTop) { ?>
<?php  include $this->GetTemplate('post-istop');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-multi');  ?>
<?php } ?>
<?php }   ?>
            </div>
			<div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div>
            <?php if ($type=='index') { ?>
                <h1 class="subhead">
                友情链接
                </h1>
                <div class="links">
                    <ul>
                        <?php  if(isset($modules['link'])){echo $modules['link']->Content;}  ?>
                    </ul>   
                </div>
            <?php } ?>
		
		<?php  include $this->GetTemplate('footer');  ?>