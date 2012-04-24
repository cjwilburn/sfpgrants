<div class="boardLargeRanks view">
<h2><?php  __('Board Large Rank');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardLargeRank['BoardLargeRank']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardLargeRank['BoardLargeRank']['project_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardLargeRank['BoardLargeRank']['project_title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardLargeRank['BoardLargeRank']['duration']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Budget'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardLargeRank['BoardLargeRank']['project_budget']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Topic Area'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardLargeRank['BoardLargeRank']['topic_area']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Avg Merit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $boardLargeRank['BoardLargeRank']['avg_merit']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Board Large Rank', true), array('action' => 'edit', $boardLargeRank['BoardLargeRank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Board Large Rank', true), array('action' => 'delete', $boardLargeRank['BoardLargeRank']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $boardLargeRank['BoardLargeRank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Board Large Ranks', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Board Large Rank', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
