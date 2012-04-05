<div class="modules view">
<h2><?php  echo __('Module');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($module['Module']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controller'); ?></dt>
		<dd>
			<?php echo h($module['Module']['controller']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pass'); ?></dt>
		<dd>
			<?php echo h($module['Module']['pass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('On Nav'); ?></dt>
		<dd>
			<?php echo h($module['Module']['on_nav']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($module['Module']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($module['Module']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keywords'); ?></dt>
		<dd>
			<?php echo h($module['Module']['meta_keywords']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stylesheets'); ?></dt>
		<dd>
			<?php echo h($module['Module']['stylesheets']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scripts'); ?></dt>
		<dd>
			<?php echo h($module['Module']['scripts']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Module'), array('action' => 'edit', $module['Module']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Module'), array('action' => 'delete', $module['Module']['id']), null, __('Are you sure you want to delete # %s?', $module['Module']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('action' => 'add')); ?> </li>
	</ul>
</div>
