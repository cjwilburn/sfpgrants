<div class="smallGrantRanks view">
<h2><?php  __('Small Grant Rank');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $smallGrantRank['SmallGrantRank']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $smallGrantRank['SmallGrantRank']['project_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $smallGrantRank['SmallGrantRank']['project_title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $smallGrantRank['SmallGrantRank']['duration']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Budget'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $smallGrantRank['SmallGrantRank']['project_budget']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Topic Area'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $smallGrantRank['SmallGrantRank']['topic_area']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Avg Merit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $smallGrantRank['SmallGrantRank']['avg_merit']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Small Grant Rank', true), array('action' => 'edit', $smallGrantRank['SmallGrantRank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Small Grant Rank', true), array('action' => 'delete', $smallGrantRank['SmallGrantRank']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $smallGrantRank['SmallGrantRank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Small Grant Ranks', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Small Grant Rank', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
