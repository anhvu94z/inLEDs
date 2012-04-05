<div class="modules index">
	<h2><?php echo __('Modules');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('controller');?></th>
			<th><?php echo $this->Paginator->sort('pass');?></th>
			<th><?php echo $this->Paginator->sort('on_nav');?></th>
			<th><?php echo $this->Paginator->sort('meta_title');?></th>
			<th><?php echo $this->Paginator->sort('meta_description');?></th>
			<th><?php echo $this->Paginator->sort('meta_keywords');?></th>
			<th><?php echo $this->Paginator->sort('stylesheets');?></th>
			<th><?php echo $this->Paginator->sort('scripts');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($modules as $module): ?>
	<tr>
		<td><?php echo h($module['Module']['id']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['controller']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['pass']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['on_nav']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['meta_keywords']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['stylesheets']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['scripts']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $module['Module']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $module['Module']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $module['Module']['id']), null, __('Are you sure you want to delete # %s?', $module['Module']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Module'), array('action' => 'add')); ?></li>
	</ul>
</div>
