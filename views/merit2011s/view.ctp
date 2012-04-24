<div class="merit2011s view">
<h2><?php  __('Merit2011');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Proposal'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($merit2011['Proposal']['project_title'], array('controller' => 'proposals', 'action' => 'view', $merit2011['Proposal']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Evaluation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($merit2011['Evaluation']['id'], array('controller' => 'evaluations', 'action' => 'view', $merit2011['Evaluation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Merit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $merit2011['Merit2011']['merit']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Merit2011', true), array('action' => 'edit', $merit2011['Merit2011']['evaluation_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Merit2011', true), array('action' => 'delete', $merit2011['Merit2011']['evaluation_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $merit2011['Merit2011']['evaluation_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Merit2011s', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Merit2011', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals', true), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal', true), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
	</ul>
</div>
