<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<table id="black">
			<tr id="black">
			<td id="black" style="width:50px;"><?php echo $this->Html->image('ITCrowd.jpg', array('alt'=>'ITCrowd', 'url'=> array('controller'=>'uploads','action'=>'index'))); //'Home' button and logo as well?></td>
			<td id="black" align="center" style="vertical-align:middle; width:100px;" ><?php echo $this->Html->link('Hot Discussions',array('controller'=>'uploadcomments','action'=>'index')); //'Hot discussion button' ?></td>
			<!--Form that acts as search engine-->
			<?php echo $this->Form->create(null , array('url'=>'/uploads/search'));?></td>
			<?php
				//echo $this->Form->input('title',array('placeholder'=>"Search flyers here (e.g. laptops, phones)", 'size'=>"100"));
			?>
			<td id="black"><input name="data[Upload][title]" type="text" placeholder="Search flyers here (e.g. laptops, phones)" size="255" maxlength="255" id="UploadTitle" style="width:100%;"/></td>
			<td id="black" style="width:55px"><?php echo $this->Form->submit('search.gif');  ?></td></form><!-- need to close form tag if not form never ends! MAJOR CONSEQUENCES -->
			<td id="black" style="width:100px"><?php echo $this->Html->link($this->Html->image("upload4.png",array('alt'=>'Upload Flyers')),'/uploads/add', array('escape'=>false)); //'Contact Us' Link ?></td>
			</tr>
			<table>
		</div>

		<!--Body stuff goes here-->
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>

		</div>
		<!--Footer stuff goes here-->
		<div id="footer">
			<?php echo $this->Html->link('Contact Us','/pages/contactus'); //'Contact Us' Link ?>
			|
			<?php echo $this->Html->link('iPhone app for on-the-go viewers','http://itunes.apple.com/app/itcrowd/id430529211?mt=8'); //'Link to itunes store' Link ?>
			|
			<?php echo $this->Html->link('iPhone app for on-the-go uploaders','http://itunes.apple.com/us/app/itcrowd-pro/id430547230?mt=8'); //'Link to itunes store' Link ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>