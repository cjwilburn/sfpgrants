<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<h5>Proposals</h5>
			<!--ul class="menu">
				<li><?php //echo $this->Html->link(sprintf(__('Edit %s', true), __('Proposal', true)), array('action' => 'edit', $proposal['Proposal']['id'])); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('Delete %s', true), __('Proposal', true)), array('action' => 'delete', $proposal['Proposal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $proposal['Proposal']['id'])); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('Proposals', true)), array('action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('Proposal', true)), array('action' => 'add')); ?> </li>
			</ul>

			<h5>Users</h5>
			<ul class="menu">
				<li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
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
                                     <li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
                            </ul>
		</div>
	</div>
</div>

<div class="grid_12">

<div class="box">
	<div class="proposals view">
	<h2><?php  __('Proposal');?></h2>
		<div class="block">
			<dl><?php $i = 0; $class = ' class="altrow"';?>
						<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date Submitted'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['date_submitted']; ?>
			&nbsp;
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['project_type']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Budget'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['project_budget']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Budget Award Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['budget_award_amount']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['project_title']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Average Merit Score'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['average_merit_score']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Abstract'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['project_abstract']; ?>
			&nbsp;
		</dd>
			</dl>
		</div>
	</div>
</div>

</div>

</div>
<div class="clear"></div>