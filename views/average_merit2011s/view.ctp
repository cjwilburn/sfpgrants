<div class="averageMerit2011s view">
<h2><?php  __('Average Merit2011');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Proposal'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($averageMerit2011['Proposal']['project_title'], array('controller' => 'proposals', 'action' => 'view', $averageMerit2011['Proposal']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Avg Merit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $averageMerit2011['AverageMerit2011']['avg_merit']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Average Merit2011', true), array('action' => 'edit', $averageMerit2011['AverageMerit2011']['proposal_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Average Merit2011', true), array('action' => 'delete', $averageMerit2011['AverageMerit2011']['proposal_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $averageMerit2011['AverageMerit2011']['proposal_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Average Merit2011s', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Average Merit2011', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals', true), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal', true), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
	</ul>
</div>
