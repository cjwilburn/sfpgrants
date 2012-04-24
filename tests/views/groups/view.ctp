<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<h5>Groups</h5>
			<ul class="menu">				
				<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Group', true)), array('action' => 'edit', $group['Group']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Group', true)), array('action' => 'delete', $group['Group']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $group['Group']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Groups', true)), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Group', true)), array('action' => 'add')); ?> </li>
			</ul>			
				
			<h5>Users</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div class="grid_12">

<div class="box">
	<div class="groups view">
	<h2><?php  __('Group');?></h2>
		<div class="block">
			<dl><?php $i = 0; $class = ' class="altrow"';?>
						<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $group['Group']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $group['Group']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $group['Group']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $group['Group']['modified']; ?>
			&nbsp;
		</dd>
			</dl>
		</div>
	</div>
</div>

<div class="box">
	<h2>
		<a href="#" id="toggle-related-records"><?php echo (__('Related', true)); ?></a>
	</h2>
	<div class="block" id="related-records">
				<div class="related">
			<h3><?php printf(__('Related %s', true), __('Users', true));?></h3>
			<?php if (!empty($group['User'])):?>
			<table cellpadding = "0" cellspacing = "0">
				<thead>
					<tr>
								<th><?php __('Id'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Associated Grants'); ?></th>
		<th><?php __('Group Id'); ?></th>
						<th class="actions"><?php __('Actions');?></th>
					</tr>
				</thead>
			<?php
				$i = 0;
				foreach ($group['User'] as $user):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['first_name'];?></td>
			<td><?php echo $user['last_name'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $user['type'];?></td>
			<td><?php echo $user['associated_grants'];?></td>
			<td><?php echo $user['group_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo ' | '. $this->Html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo ' | '. $this->Html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			<div class="actions">
				<ul>
					<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add'));?> </li>
				</ul>
			</div>
		</div>
			</div>
</div>

</div>
<div class="clear"></div>
