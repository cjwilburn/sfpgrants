<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<h5>Users Proposals</h5>
			<ul class="menu">
								<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('UsersProposal.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('UsersProposal.id'))); ?></li>
								<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users Proposals', true)), array('action' => 'index'));?></li>
			</ul>
					</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php printf(__('Edit %s', true), __('Users Proposal', true)); ?></h2>
    
	<div class="usersProposals form">
	<?php echo $this->Form->create('UsersProposal');?>
		<fieldset>
	 		<legend><?php printf(__('Users Proposal Record', true)); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('users_id');
		echo $this->Form->input('proposals_id');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
