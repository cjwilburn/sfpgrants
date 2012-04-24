<h2>
	<a href="#" id="toggle-admin-left-menu">Admin Menu</a>
</h2>
<div class="block" id="admin-left-menu">
	<ul class="section menu">
		<li>
			<?php 
			if(($this->params['controller'] == 'dashboards') && ($this->params['action'] == 'admin_index')) {
				echo $this->Html->link(__('Dashboard', true), array('controller' => 'dashboards', 'action' => 'index', 'admin' => true), array('class' => 'menuitem current')); 
			} else {
				echo $this->Html->link(__('Dashboard', true), array('controller' => 'dashboards', 'action' => 'index', 'admin' => true), array('class' => 'menuitem')); 
			}
			?>
		</li>
		<li>			
			<?php 
			if($this->params['controller'] == 'users') {
				echo $this->Html->link(__('User Management', true), array('controller' => 'users', 'action' => 'index', 'admin' => true), array('class' => 'menuitem current')); 
			} else {
				echo $this->Html->link(__('Add New User', true), array('controller' => 'users', 'action' => 'add', 'admin' => true), array('class' => 'menuitem'));
			}
			?>		
		</li>
		<li>
			<?php echo $this->Html->link('Logout', array('admin'=>false, 'controller'=>'users', 'action'=>'logout')); ?>
		</li>
	</ul>
</div>
