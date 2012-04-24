<div class="adminSmallRanks view">
<h2><?php  __('Admin Small Rank');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inv First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adminSmallRank['AdminSmallRank']['inv_first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inv Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adminSmallRank['AdminSmallRank']['inv_last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adminSmallRank['AdminSmallRank']['project_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adminSmallRank['AdminSmallRank']['project_title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adminSmallRank['AdminSmallRank']['duration']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Budget'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adminSmallRank['AdminSmallRank']['project_budget']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Topic Area'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adminSmallRank['AdminSmallRank']['topic_area']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Avg Merit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adminSmallRank['AdminSmallRank']['avg_merit']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Admin Small Rank', true), array('action' => 'edit', $adminSmallRank['AdminSmallRank']['avg_merit'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Admin Small Rank', true), array('action' => 'delete', $adminSmallRank['AdminSmallRank']['avg_merit']), null, sprintf(__('Are you sure you want to delete # %s?', true), $adminSmallRank['AdminSmallRank']['avg_merit'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Admin Small Ranks', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin Small Rank', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
