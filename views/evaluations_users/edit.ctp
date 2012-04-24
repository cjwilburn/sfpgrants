<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<h5>Evaluations Users</h5>
			<ul class="menu">
								<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EvaluationsUser.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EvaluationsUser.id'))); ?></li>
								<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Evaluations Users', true)), array('action' => 'index'));?></li>
			</ul>
			
			<h5>Evaluations</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Evaluations', true)), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Evaluation', true)), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
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
    <h2 id="page-heading"><?php printf(__('Edit %s', true), __('Evaluations User', true)); ?></h2>
    
	<div class="evaluationsUsers form">
	<?php echo $this->Form->create('EvaluationsUser');?>
		<fieldset>
	 		<legend><?php printf(__('Evaluations User Record', true)); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('evaluation_id');
		echo $this->Form->input('user_id');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
