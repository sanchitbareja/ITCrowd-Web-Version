<div class="uploadcomments index">
	<h2><?php __('Hot Discussions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th width="100px" align="center"><?php echo $this->Paginator->sort('name');?></th>
			<th ><?php echo $this->Paginator->sort('comment');?></th>
			<th width="100px" align="center"><?php __('Flyer') ?></th>
			<th width="200px" align="center"><?php echo $this->Paginator->sort('Commented On..','created');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($uploadcomments as $uploadcomment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td align="center"><table cellspacing="0" cellpadding="0"><tr><td class="wordwrap"><?php echo $uploadcomment['Uploadcomment']['name']; ?></td></tr>
								  <tr><td><?php $randomno=rand(1,20); 
								  				echo $this->Html->link($this->Html->image('avatars/'.$randomno.'.png', array('height'=>'50px')), array('controller' => 'uploads', 'action' => 'view', $uploadcomment['Upload']['id']), array('escape'=>false)); //Random Emoticon ?></tr></td>
							</table>
		</td>
		<td class="wordwrap"><?php echo $uploadcomment['Uploadcomment']['comment']; ?>&nbsp;</td>
		<td align="center"><?php
		echo $this->Html->link($this->Html->image('../'.$uploadcomment['Upload']['uploadlink'], array('height'=>'100px')), array('controller' => 'uploads', 'action' => 'view', $uploadcomment['Upload']['id']), array('escape'=>false)); ?></td>
		<td align="center"><?php echo $uploadcomment['Uploadcomment']['created']; ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	<tr><table><tr><td align="center">
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p></td></tr>
	<tr><td><div class="paging" align="center">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div></td></tr>
	</table>
	</tr>
	</table>
</div>
