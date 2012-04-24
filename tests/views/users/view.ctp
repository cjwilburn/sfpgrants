<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<!--h5>Users</h5>
			<ul class="menu">				
				<li><?php //echo $this->Html->link(sprintf(__('Edit %s', true), __('User', true)), array('action' => 'edit', $user['User']['id'])); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('Delete %s', true), __('User', true)), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('action' => 'add')); ?> </li>
			</ul>			
				
			<h5>Groups</h5>
			<ul class="menu">
				<li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('Groups', true)), array('controller' => 'groups', 'action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('Group', true)), array('controller' => 'groups', 'action' => 'add')); ?> </li>
			</ul>

			<h5>Proposals</h5>
			<ul class="menu">
				<li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('Proposals', true)), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('Proposal', true)), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
			</ul-->
                        <ul class="nav">
                        <li><a href="#"><span>Groups</span></a>
                            <ul>
                                 <li><a href="#">New Group</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span>Users</span></a>
                            <ul>
                                     <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?></li>
                            </ul>
                            <li><a href="#"><span>Dashboard</span></a>
                            <ul>
                                     <li><?php echo $this->Html->link('Return to Dashboard', array('controller' => 'dashboards', 'action' => 'index', 'grantee' => true)); ?></li>
                            </ul>
                         </ul>
		</div>
	</div>
</div>

<div class="grid_12">

<div class="box">
	<div class="users view">
	<h2><?php  __('User');?></h2>
		<div class="block">
			<dl><?php $i = 0; $class = ' class="altrow"';?>
						<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Associated Grants'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['associated_grants']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
	</div>
</div>



</div>
<div class="clear"></div>
