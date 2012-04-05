<? foreach ($navs as $nav_title=>$nav_url) : ?>
<a href="<?=$nav_url?>" class="clearfix"><div class="nav-container left">
	<div class="nav"><?=$nav_title?></div>
</div></a>
<? endforeach; ?>