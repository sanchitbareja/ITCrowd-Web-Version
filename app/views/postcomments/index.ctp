<div class="postcomments index">
	<h2><?php __('Postcomments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('post_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($postcomments as $postcomment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $postcomment['Postcomment']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($postcomment['Post']['title'], array('controller' => 'posts', 'action' => 'view', $postcomment['Post']['id'])); ?>
		</td>
		<td><?php echo $postcomment['Postcomment']['name']; ?>&nbsp;</td>
		<td><?php echo $postcomment['Postcomment']['comment']; ?>&nbsp;</td>
		<td><?php echo $postcomment['Postcomment']['created']; ?>&nbsp;</td>
		<td><?php echo $postcomment['Postcomment']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $postcomment['Postcomment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $postcomment['Postcomment']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $postcomment['Postcomment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $postcomment['Postcomment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Postcomment', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts', true), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post', true), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>