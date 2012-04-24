<div class="boardSmallRanks view">
<h2><?php  __('Board Small Rank');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardSmallRank['BoardSmallRank']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardSmallRank['BoardSmallRank']['project_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardSmallRank['BoardSmallRank']['project_title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardSmallRank['BoardSmallRank']['duration']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Budget'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardSmallRank['BoardSmallRank']['project_budget']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Topic Area'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardSmallRank['BoardSmallRank']['topic_area']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Avg Merit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardSmallRank['BoardSmallRank']['avg_merit']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Board Small Rank', true), array('action' => 'edit', $boardSmallRank['BoardSmallRank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Board Small Rank', true), array('action' => 'delete', $boardSmallRank['BoardSmallRank']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $boardSmallRank['BoardSmallRank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Board Small Ranks', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Board Small Rank', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
