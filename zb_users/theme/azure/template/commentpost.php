<div class="post" id="divCommentPost">
	<p class="posttop"><a name="comment">{if $user.ID>0}{$user.StaticName}{/if}发表评论:</a><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;"><small>取消回复</small></a></p>
	<form id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}" >
	<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
{if $user.ID>0}
	<input type="hidden" name="inpName" id="inpName" value="{$user.Name}" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />
{else}
	<p><input placeholder="名称" type="text" name="inpName" id="inpName" class="text" value="{$user.Name}" size="28" tabindex="1" />
	<input placeholder="邮箱" type="text" name="inpEmail" id="inpEmail" class="text" value="{$user.Email}" size="28" tabindex="2" />
	<input placeholder="网址" type="text" name="inpHomePage" id="inpHomePage" class="text" value="{$user.HomePage}" size="28" tabindex="3" /></p>
{if $option['ZC_COMMENT_VERIFY_ENABLE']}
	<p><input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="4" /> <label for="inpVerify">验证码(*)</label>
	<img style="width:{$option['ZC_VERIFYCODE_WIDTH']}px;height:{$option['ZC_VERIFYCODE_HEIGHT']}px;cursor:pointer;" src="{$article.ValidCodeUrl}" alt="" title="" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();"/>
	</p>
{/if}

{/if}
	<p><label for="txaArticle">正文(*)</label></p>
	<p><textarea name="txaArticle" id="txaArticle" class="text" cols="50" rows="4" tabindex="5" ></textarea></p>
	<p><input name="sumbit" type="submit" tabindex="6" value="提交评论" onclick="return VerifyMessage()" class="button" /></p>
	</form>
</div>