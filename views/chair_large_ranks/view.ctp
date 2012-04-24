<div class="chairLargeRanks view">
<h2><?php  __('Chair Large Rank');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inv First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairLargeRank['ChairLargeRank']['inv_first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inv Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairLargeRank['ChairLargeRank']['inv_last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairLargeRank['ChairLargeRank']['project_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairLargeRank['ChairLargeRank']['project_title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairLargeRank['ChairLargeRank']['duration']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Budget'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairLargeRank['ChairLargeRank']['project_budget']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Topic Area'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairLargeRank['ChairLargeRank']['topic_area']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Avg Merit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chairLargeRank['ChairLargeRank']['avg_merit']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Chair Large Rank', true), array('action' => 'edit', $chairLargeRank['ChairLargeRank']['avg_merit'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Chair Large Rank', true), array('action' => 'delete', $chairLargeRank['ChairLargeRank']['avg_merit']), null, sprintf(__('Are you sure you want to delete # %s?', true), $chairLargeRank['ChairLargeRank']['avg_merit'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Chair Large Ranks', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chair Large Rank', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
