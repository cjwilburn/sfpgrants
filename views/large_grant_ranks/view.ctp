<div class="largeGrantRanks view">
<h2><?php  __('Large Grant Rank');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $largeGrantRank['LargeGrantRank']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $largeGrantRank['LargeGrantRank']['project_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $largeGrantRank['LargeGrantRank']['project_title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $largeGrantRank['LargeGrantRank']['duration']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Budget'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $largeGrantRank['LargeGrantRank']['project_budget']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Topic Area'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $largeGrantRank['LargeGrantRank']['topic_area']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Avg Merit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $largeGrantRank['LargeGrantRank']['avg_merit']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Large Grant Rank', true), array('action' => 'edit', $largeGrantRank['LargeGrantRank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Large Grant Rank', true), array('action' => 'delete', $largeGrantRank['LargeGrantRank']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $largeGrantRank['LargeGrantRank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Large Grant Ranks', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Large Grant Rank', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
