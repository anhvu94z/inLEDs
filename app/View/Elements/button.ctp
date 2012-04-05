<?php if (isset($action)) : ?><a href="<?=(is_array($action)?$action['controller'].(isset($action['pass'])?$action['pass']:""):$action)?>"><?php endif; ?>
<div class="button-wrapper clearfix<?php if (isset($class)) echo " $class";?>"<?php if (isset($id)) : ?> id="<?=$id?>"<?php endif; ?>>
	<div class="button-container light-text clearfix">
		<?=$caption?>
	</div>
</div>
<?php if (isset($action)) : ?></a><?php endif; ?>