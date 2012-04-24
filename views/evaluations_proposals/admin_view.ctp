<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<h5>Evaluations Proposals</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Evaluations Proposal', true)), array('action' => 'edit', $evaluationsProposal['EvaluationsProposal']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Evaluations Proposal', true)), array('action' => 'delete', $evaluationsProposal['EvaluationsProposal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluationsProposal['EvaluationsProposal']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Evaluations Proposals', true)), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Evaluations Proposal', true)), array('action' => 'add')); ?> </li>
			</ul>

			<h5>Evaluations</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Evaluations', true)), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Evaluation', true)), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
			</ul>

			<h5>Proposals</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Proposals', true)), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Proposal', true)), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div class="grid_12">

<div class="box">
	<div class="evaluationsProposals view">
	<h2><?php  __('Evaluations Proposal');?></h2>
		<div class="block">
			<dl><?php $i = 0; $class = ' class="altrow"';?>
						<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evaluationsProposal['EvaluationsProposal']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Evaluation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($evaluationsProposal['Evaluation']['id'], array('controller' => 'evaluations', 'action' => 'view', $evaluationsProposal['Evaluation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Proposal'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($evaluationsProposal['Proposal']['id'], array('controller' => 'proposals', 'action' => 'view', $evaluationsProposal['Proposal']['id'])); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
	</div>
</div>


</div>
<div class="clear"></div>