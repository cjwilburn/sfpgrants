<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<h5>Users Proposals</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Users Proposal', true)), array('action' => 'edit', $usersProposal['UsersProposal']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Users Proposal', true)), array('action' => 'delete', $usersProposal['UsersProposal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usersProposal['UsersProposal']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users Proposals', true)), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Users Proposal', true)), array('action' => 'add')); ?> </li>
			</ul>
						</div>
	</div>
</div>

<div class="grid_12">

<div class="box">
	<div class="usersProposals view">
	<h2><?php  __('Users Proposal');?></h2>
		<div class="block">
			<dl><?php $i = 0; $class = ' class="altrow"';?>
						<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersProposal['UsersProposal']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersProposal['UsersProposal']['user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Proposal Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersProposal['UsersProposal']['proposal_id']; ?>
			&nbsp;
		</dd>
			</dl>
		</div>
	</div>
</div>


</div>
<div class="clear"></div>