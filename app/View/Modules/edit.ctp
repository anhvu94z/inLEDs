<div class="modules form">
<?php echo $this->Form->create('Module');?>
	<fieldset>
		<legend><?php echo __('Edit Module'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('controller');
		echo $this->Form->input('pass');
		echo $this->Form->input('on_nav');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keywords');
		echo $this->Form->input('stylesheets');
		echo $this->Form->input('scripts');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Module.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Module.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Modules'), array('action' => 'index'));?></li>
	</ul>
</div>
