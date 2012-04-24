<div class="smallGrantRanks form">
<?php echo $this->Form->create('SmallGrantRank');?>
	<fieldset>
 		<legend><?php __('Add Small Grant Rank'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Small Grant Ranks', true), array('action' => 'index'));?></li>
	</ul>
</div>