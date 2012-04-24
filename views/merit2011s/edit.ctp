<div class="merit2011s form">
<?php echo $this->Form->create('Merit2011');?>
	<fieldset>
 		<legend><?php __('Edit Merit2011'); ?></legend>
	<?php
		echo $this->Form->input('proposal_id');
		echo $this->Form->input('evaluation_id');
		echo $this->Form->input('merit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Merit2011.evaluation_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Merit2011.evaluation_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Merit2011s', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Proposals', true), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal', true), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
	</ul>
</div>