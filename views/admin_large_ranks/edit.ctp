<div class="adminLargeRanks form">
<?php echo $this->Form->create('AdminLargeRank');?>
	<fieldset>
 		<legend><?php __('Edit Admin Large Rank'); ?></legend>
	<?php
		echo $this->Form->input('inv_first_name');
		echo $this->Form->input('inv_last_name');
		echo $this->Form->input('project_type');
		echo $this->Form->input('project_title');
		echo $this->Form->input('duration');
		echo $this->Form->input('project_budget');
		echo $this->Form->input('topic_area');
		echo $this->Form->input('avg_merit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('AdminLargeRank.avg_merit')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('AdminLargeRank.avg_merit'))); ?></li>
		<li><?php echo $this->Html->link(__('List Admin Large Ranks', true), array('action' => 'index'));?></li>
	</ul>
</div>