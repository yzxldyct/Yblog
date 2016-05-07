<?php  include $this->GetTemplate('header');  ?>
	<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
    <div class="content grid-u-1 grid-u-med-3-4">
         
<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
<?php  include $this->GetTemplate('post-single');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-page');  ?>
<?php } ?>
        
        
		<?php  include $this->GetTemplate('footer');  ?>
		</div>
		
        
