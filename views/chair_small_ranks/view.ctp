<div class="chairSmallRanks view">
<h2><?php  __('Chair Small Rank');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inv First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairSmallRank['ChairSmallRank']['inv_first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inv Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairSmallRank['ChairSmallRank']['inv_last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairSmallRank['ChairSmallRank']['project_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairSmallRank['ChairSmallRank']['project_title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairSmallRank['ChairSmallRank']['duration']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Budget'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairSmallRank['ChairSmallRank']['project_budget']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Topic Area'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairSmallRank['ChairSmallRank']['topic_area']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Avg Merit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairSmallRank['ChairSmallRank']['avg_merit']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Chair Small Rank', true), array('action' => 'edit', $chairSmallRank['ChairSmallRank']['avg_merit'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Chair Small Rank', true), array('action' => 'delete', $chairSmallRank['ChairSmallRank']['avg_merit']), null, sprintf(__('Are you sure you want to delete # %s?', true), $chairSmallRank['ChairSmallRank']['avg_merit'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Chair Small Ranks', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chair Small Rank', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
