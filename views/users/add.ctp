<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<h5>Users</h5>
			<ul class="menu">
								<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index'));?></li>
			</ul>
			
			<h5>Groups</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Groups', true)), array('controller' => 'groups', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Group', true)), array('controller' => 'groups', 'action' => 'add')); ?> </li>
			</ul>

			<h5>Proposals</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Proposals', true)), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Proposal', true)), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php printf(__('Add %s', true), __('User', true)); ?></h2>
    
	<div class="users form">
	<?php echo $this->Form->create('User');?>
		<fieldset>
	 		<legend><?php printf(__('User Record', true)); ?></legend>
		<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('type');
		echo $this->Form->input('associated_grants');
		echo $this->Form->input('group_id');
		echo $this->Form->input('Proposal');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
