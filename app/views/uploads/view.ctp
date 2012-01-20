<?php $this->set('title_for_layout',$upload['Upload']['title']);?>
<!--Upload details-->

<div class="uploads view">
	
	<h2><?php echo $upload['Upload']['title']; ?></h2>
	
	<table cellpadding="0" cellspacing="0">
		<tr> 
			<td>
				<table>
					<tr><td align="middle"><?php echo $this->Html->image('http://www.flypn.com/itcrowd/app/webroot/'.$upload['Upload']['uploadlink'], array('alt'=>'ITCrowd', 'width'=>'1000' , 'url'=> 'http://www.flypn.com/itcrowd/app/webroot/'.$upload['Upload']['uploadlink'])); ?></td></tr>
					<tr><td align="middle"><?php echo $html->link('Download File','http://www.flypn.com/itcrowd/app/webroot/'.$upload['Upload']['uploadlink']); ?></td></tr>
				</table>
			</td>
		</tr>	
	</table>
	
	<hr />
	<hr />
	<hr />

<!--Uploadcomments details-->
	
	<table cellpadding="0" cellspacing="0">
		<?php if (!empty($upload['Uploadcomment'])){?>
		<tr>
		<td class="comments top"><h6><?php __('Comments');?></h6></td>
		</tr>

		
			<?php
			$i = 0;
			foreach ($upload['Uploadcomment'] as $uploadcomment):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="comments altrow"';
				} ?>
				<tr>
					<table <?php echo $class;?>>
						<tr>
						<td rowspan="2" align="right" width="200px"><?php $randomno=rand(1,20); 
								  				echo $this->Html->link($this->Html->image('avatars/'.$randomno.'.png', array('height'=>'50px')), array('controller' => 'uploads', 'action' => 'view', $uploadcomment['upload_id']), array('escape'=>false)); //Random Emoticon ?></td>
						<td class="wordwrap" align="left" width="500px"><b><?php echo $uploadcomment['name'].' said...  '; ?></b><?php echo $uploadcomment['comment'];?></td>
						</tr>
						<tr><td align="left" width="500px"><tt><i><?php echo $uploadcomment['created'];?></i></tt></td></tr>
					</table>
			<?php endforeach; ?>
		<?php } else {$class=null;} ?>
		
	</table>
	
	<hr />
<!--UploadComments form-->

	<table <?php echo $class;?>>
		<?php echo $this->Form->create('Uploadcomment', array('controller' => 'uploadcomments', 'action' => 'add'));?>
		<tr><td><h6><?php __('Add Comment'); ?></h6></td></tr>
				
		<tr><td class="wordwrap"><?php echo $this->Form->input('name', array('placeholder'=>"What's your name?", 'label'=>'Name*', 'size'=>'50')); ?></td></tr>
		<tr><td class="wrapword"><?php echo $this->Form->input('comment', array('placeholder'=>'Thinking about smth?', 'label'=>'Comment*')); ?></td></tr>
		<tr><td><?php echo $this->Form->hidden('upload_id',array('value'=>$upload['Upload']['id'])); ?></td></tr>
				
		<tr><td><?php echo $this->Form->end(__('Comment', true)); ?></td></tr>
	</table>

</div>

