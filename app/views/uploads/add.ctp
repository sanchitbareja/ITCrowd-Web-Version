<div class="uploads form">
<?php echo $this->Form->create('Upload',  array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Add Upload'); ?></legend>
	<?php
		echo $this->Form->file('fileToUpload');
		echo $this->Form->hidden('uploadlink');
		echo $this->Form->input('title', $options = array('label'=>'What would you like the name of your file to be?'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Upload and Save', true));?>
</div>
