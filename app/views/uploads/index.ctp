<div class="uploads index">
	<h2><?php __('Flyers');?></h2>
	<table>
		<tr>
			<td align="center">
				<div class="Tabs segmentedControlBase">
					<?php echo $this->Html->link('&#x1030E; Block','/uploads/index', array('class'=>"button segmentedControl leftEnd tab selected", 'escape'=>false)); //'Block view tab' ?>
					<?php echo $this->Html->link('&#x2254; List','/uploads/listview', array('class'=>"button segmentedControl rightEnd tab", 'escape'=>false)); //'List view tab' ?>
				</div>
			</td>
		</tr>
		<tr>
			<td align="middle"><?php echo $this->Html->link('&#x27F1; Download ALL files', 'http://www.flypn.com/itcrowd/app/webroot/uploadedstuff/allflyers.zip', array('id'=>'downloadlink', 'escape'=>false)); ?></td>
		</tr>
	</table>
	<table cellpadding="0" cellspacing="0">
	<?php
	$i = 0;
	foreach ($uploads as $upload):
		if($i == 3) { 
			$i = 0; ?>
			<tr> 
		<?php } ?>
			<td>
				<table>
					<tr><td align="middle"><?php echo $this->Html->image('http://www.flypn.com/itcrowd/app/webroot/'.$upload['uploads']['uploadlink'], array('alt'=>'ITCrowd', 'height'=>'150' , 'url'=> array('controller'=>'uploads','action'=>'view',$upload['uploads']['id']))); ?></p></tr>
					<tr><td align="middle"><?php
												$targetlength = 50;
												if(strlen($upload['uploads']['title'])>$targetlength){
													$substring = substr($upload['uploads']['title'],0,$targetlength-3);
													$finalstring = $substring."...";
												}
												else {
													$finalstring = $upload['uploads']['title'];
												}
												
												echo $this->Html->link($finalstring, array('action' => 'view', $upload['uploads']['id']), array('id'=>'view')); ?></td></tr>
				</table>
			</td>
			<?php if($i == 3) { ?>
		</tr>
			<?php echo $i; } $i++; ?>
	<?php endforeach; ?>
	
	</table>

</div>
