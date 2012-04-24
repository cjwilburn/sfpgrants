<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<!--h5>Evaluations</h5-->
			<ul class="nav">
								<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Evaluations', true)), array('action' => 'index'));?></li>
			</ul>

			<!--h5>Users</h5-->
			<ul class="nav">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
			</ul>

			<!--h5>Proposals</h5-->
			<ul class="nav">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Proposals', true)), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Proposals', true)), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php printf(__('Add %s', true), __('Evaluation', true)); ?></h2>

	<div class="evaluations form">
	<?php echo $this->Form->create('Evaluation');?>
		<fieldset>
	 		<legend><?php printf(__('Evaluation Record', true)); ?></legend>
		<?php
		echo $this->Form->input('date_submitted');
		echo $this->Form->input('users_id');
		echo $this->Form->input('proposals_id');
		echo $this->Form->input('research_plan');
		echo $this->Form->input('significance');
		echo $this->Form->input('qualifications');
		echo $this->Form->input('environment');
		echo $this->Form->input('funder_absence');
		echo $this->Form->input('budget_timeline');
		echo $this->Form->input('responsiveness');
		echo $this->Form->input('comments');
		echo $this->Form->input('summary');
		echo $this->Form->input('merit');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>

