		<?php $loggeduser = $session->read('Auth.User.id');?>
		<div id="full_footer" class="span-24 last">
		
			<div class="span-11">
				<ul class="quickLinks">
					<li><?php echo $this->Html->link('Performance+', array('controller'=>'performancetools', 'action'=>'add')); ?> |</li>
					<li><?php echo $this->Html->link('Reports & Whitepapers', '/insight-ideas/industry_whitepapers'); ?> |</li>
					<li><?php echo $this->Html->link('NuVista Collaterals', '/insight-ideas/nuvista_collaterals'); ?> |</li>
					<?php if(!isset($loggeduser)){?>
						<li><?php echo $this->Html->link('Log-In', array('controller'=>'users' ,'action'=>'login', 'admin'=>false), array('id'=>'login')); ?></li>
					<?php } else {?>
						<li><?php echo $this->Html->link('Log-out', array('controller'=>'users' ,'action'=>'logout', 'admin'=>false), array('id'=>'logout')); ?></li>
					<?php }?>
				</ul>
				<br/>
				<span class="copyright clearfix">Copyright 2010. &copy; Nuvista Technologies Pte. Ltd. All Rights Reserved. </span>
			</div>
			<div class="span-13 last">     	
				<ul class="miscLinks">
					<li><?php echo $this->Html->link('Sitemap',
							array('controller'=>'pages', 'action'=>'display', 'sitemap'));
						?>
					</li>
					<li><?php echo $this->Html->link('Terms Of Use',
							array('controller'=>'pages', 'action'=>'display', 'terms'));
						?> |
					</li>
					<li><?php echo $this->Html->link('Privacy Statement',
							array('controller'=>'pages', 'action'=>'display', 'privacy'));
						?> |
					</li>
					<li><?php echo $this->Html->link('Nuvista Website Link', 'http://www.nuvistastech.com',array('target'=>'_blank')); ?> |</li>
		<?php
					if(!empty($loggeduser)) { 
						echo "<li>".$this->Html->link($session->read('Auth.User.first_name').' '.$session->read('Auth.User.last_name').'\'s'.' '.'Profile', array('controller'=>'users' ,'action'=>'profile', 'admin'=>false), array('id'=>'logout'))." |</li>"; 
					}
				?>				    
					
				</ul>
				<br/>
				<?php echo $this->Html->image('linkedin.png', array('alt' => 'Join Us On LinkedIn',
						'url' => 'http://www.linkedin.com/companies/nuvista-technologies-pte.ltd')); ?>
			</div>
			
		</div><!-- full_footer end -->