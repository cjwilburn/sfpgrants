<h2>
	<a href="#" id="toggle-admin-left-menu">Small Grant Review Menu</a>
</h2>
<div class="block" id="admin-left-menu">
	<ul class="section menu">
		<li>
			<?php
			if(($this->params['controller'] == 'dashboards') && ($this->params['action'] == 'small_index')) {
				echo $this->Html->link(__('Dashboard', true), array('controller' => 'dashboards', 'action' => 'index', 'small' => true), array('class' => 'menuitem current'));
			} else {
				echo $this->Html->link(__('Dashboard', true), array('controller' => 'dashboards', 'action' => 'index', 'small' => true), array('class' => 'menuitem'));
			}
			?>
		</li>
		<li>
			<?php
			if($this->params['controller'] == 'users') {
				echo $this->Html->link(__('User Management', true), array('controller' => 'users', 'action' => 'index', 'small' => true), array('class' => 'menuitem current'));
			} else {
				echo $this->Html->link(__('User Management', true), array('controller' => 'users', 'action' => 'index', 'small' => true), array('class' => 'menuitem'));
			}
			?>
		</li>
		<li>
			<a class="menuitem" href="/small/users/logout">Logout</a>
		</li>
	</ul>
</div>
