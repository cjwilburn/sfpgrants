<h2>
	<a href="#" id="toggle-admin-left-menu">Chair Menu</a>
</h2>
<div class="block" id="chair-left-menu">
	<ul class="nav">
	  <ul class="nav">
		<li>
			<?php 
			if(($this->params['controller'] == 'dashboards') && ($this->params['action'] == 'chair_index')) {
				echo $this->Html->link(__('Dashboard', true), array('controller' => 'dashboards', 'action' => 'index', 'chair' => true), array('class' => 'menuitem current')); 
			} else {
				echo $this->Html->link(__('Dashboard', true), array('controller' => 'dashboards', 'action' => 'index', 'chair' => true), array('class' => 'menuitem')); 
			}
			?>
		</li>
		<li>			
			<?php 
			if($this->params['controller'] == 'users') {
				echo $this->Html->link(__('User Management', true), array('controller' => 'users', 'action' => 'index', 'chair' => true), array('class' => 'menuitem current')); 
			} else {
				echo $this->Html->link(__('Add New User', true), array('controller' => 'users', 'action' => 'add', 'chair' => true), array('class' => 'menuitem'));
			}
			?>		
		</li>
		<li>
			<?php echo $this->Html->link('Logout', array('chair'=>false, 'controller'=>'users', 'action'=>'logout')); ?>
		</li>
	</ul>
	</ul>
</div>