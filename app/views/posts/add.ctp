<div class="posts form">
<?php echo $this->Form->create('Post');?>
	<fieldset>
		<legend><?php __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Postcomments', true), array('controller' => 'postcomments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postcomment', true), array('controller' => 'postcomments', 'action' => 'add')); ?> </li>
	</ul>
</div>