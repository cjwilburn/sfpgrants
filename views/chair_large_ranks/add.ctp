<div class="chairLargeRanks form">
<?php echo $this->Form->create('ChairLargeRank');?>
	<fieldset>
 		<legend><?php __('Add Chair Large Rank'); ?></legend>
	<?php
		echo $this->Form->input('inv_first_name');
		echo $this->Form->input('inv_last_name');
		echo $this->Form->input('project_type');
		echo $this->Form->input('project_title');
		echo $this->Form->input('duration');
		echo $this->Form->input('project_budget');
		echo $this->Form->input('topic_area');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Chair Large Ranks', true), array('action' => 'index'));?></li>
	</ul>
</div>