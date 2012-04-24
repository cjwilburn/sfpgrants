<div class="averageMerit2011s form">
<?php echo $this->Form->create('AverageMerit2011');?>
	<fieldset>
 		<legend><?php __('Edit Average Merit2011'); ?></legend>
	<?php
		echo $this->Form->input('proposal_id');
		echo $this->Form->input('avg_merit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('AverageMerit2011.proposal_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('AverageMerit2011.proposal_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Average Merit2011s', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Proposals', true), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal', true), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
	</ul>
</div>