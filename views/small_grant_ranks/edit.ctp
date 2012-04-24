<div class="smallGrantRanks form">
<?php echo $this->Form->create('SmallGrantRank');?>
	<fieldset>
 		<legend><?php __('Edit Small Grant Rank'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SmallGrantRank.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SmallGrantRank.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Small Grant Ranks', true), array('action' => 'index'));?></li>
	</ul>
</div>