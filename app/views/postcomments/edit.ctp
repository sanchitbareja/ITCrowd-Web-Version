<div class="postcomments form">
<?php echo $this->Form->create('Postcomment');?>
	<fieldset>
		<legend><?php __('Edit Postcomment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('post_id');
		echo $this->Form->input('name');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Postcomment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Postcomment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Postcomments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Posts', true), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post', true), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>