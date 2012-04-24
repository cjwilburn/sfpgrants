<h2>
	<a href="#" id="toggle-board-left-menu">Board Menu</a>
</h2>
<div class="block" id="board-left-menu">
	<ul class="nav">
		<li>
			<?php
			if(($this->params['controller'] == 'dashboards') && ($this->params['action'] == 'board_index')) {
				echo $this->Html->link(__('Dashboard', true), array('controller' => 'dashboards', 'action' => 'index', 'board' => true), array('class' => 'menuitem current'));
			} else {
				echo $this->Html->link(__('Dashboard', true), array('controller' => 'dashboards', 'action' => 'index', 'board' => true), array('class' => 'menuitem'));
			}
			?>
		</li>
		<li>
			<?php
			if($this->params['controller'] == 'users') {
				echo $this->Html->link(__('User Management', true), array('controller' => 'users', 'action' => 'index', 'board' => true), array('class' => 'menuitem current'));
			} else {
				echo $this->Html->link(__('User Management', true), array('controller' => 'users', 'action' => 'index', 'board' => true), array('class' => 'menuitem'));
			}
			?>
		</li>
		<li>
			<a class="menuitem" href="/board/users/logout">Logout</a>
		</li>
	</ul>
</div>
