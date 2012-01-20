<div class="uploadcomments form">
<?php echo $this->Form->create('Uploadcomment');?>
	<fieldset>
		<legend><?php __('Edit Uploadcomment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('comment');
		echo $this->Form->input('upload_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Uploadcomment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Uploadcomment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uploadcomments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Uploads', true), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload', true), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
	</ul>
</div>