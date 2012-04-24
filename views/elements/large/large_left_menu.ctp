<h2>
	<a href="#" id="toggle-admin-left-menu">Large Grant Review Menu</a>
</h2>
<div class="block" id="admin-left-menu">
	<ul class="section menu">
		<li>
			<?php
			if(($this->params['controller'] == 'dashboards') && ($this->params['action'] == 'large_index')) {
				echo $this->Html->link(__('Dashboard', true), array('controller' => 'dashboards', 'action' => 'index', 'large' => true), array('class' => 'menuitem current'));
			} else {
				echo $this->Html->link(__('Dashboard', true), array('controller' => 'dashboards', 'action' => 'index', 'large' => true), array('class' => 'menuitem'));
			}
			?>
		</li>
		<li>
			<?php
			if($this->params['controller'] == 'users') {
				echo $this->Html->link(__('User Management', true), array('controller' => 'users', 'action' => 'index', 'large' => true), array('class' => 'menuitem current'));
			} else {
				echo $this->Html->link(__('User Management', true), array('controller' => 'users', 'action' => 'index', 'large' => true), array('class' => 'menuitem'));
			}
			?>
		</li>
		<li>
			<a class="menuitem" href="users/logout">Logout</a>
		</li>
	</ul>
</div>