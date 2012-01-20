<div class="uploads index">
	<h2><?php __('Search Results');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th align="right"><?php __('Content'); ?></th>
		<th align="center"><?php __('Title'); ?></th>
		<th align="left"><?php __('Actions'); ?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($uploads as $upload):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
			<td align="right" width="300px"><?php echo $this->Html->image('http://www.flypn.com/itcrowd/app/webroot/'.$upload['uploads']['uploadlink'], array('alt'=>'ITCrowd', 'height'=>'50px' , 'url'=> array('controller'=>'uploads','action'=>'view',$upload['uploads']['id']))); ?></td>
			<td align="center" style="vertical-align:middle;"><?php
												$targetlength = 100;
												if(strlen($upload['uploads']['title'])>$targetlength){
													$substring = substr($upload['uploads']['title'],0,$targetlength-3);
													$finalstring = $substring."...";
												}
												else {
													$finalstring = $upload['uploads']['title'];
												}
												
												echo $this->Html->link($finalstring, array('action' => 'view', $upload['uploads']['id']), array('id'=>'view')); ?></td>
			<td align="left" width="300px" style="vertical-align:middle;"><?php echo $html->link('Download file','../webroot/'.$upload['uploads']['uploadlink']); ?></td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
