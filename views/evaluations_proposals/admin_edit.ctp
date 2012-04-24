<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<h5>Evaluations Proposals</h5>
			<ul class="menu">
								<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EvaluationsProposal.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EvaluationsProposal.id'))); ?></li>
								<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Evaluations Proposals', true)), array('action' => 'index'));?></li>
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
    <h2 id="page-heading"><?php printf(__('Edit %s', true), __('Evaluations Proposal', true)); ?></h2>

	<div class="evaluationsProposals form">
	<?php echo $this->Form->create('EvaluationsProposal');?>
		<fieldset>
	 		<legend><?php printf(__('Evaluations Proposal Record', true)); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('evaluation_id');
		echo $this->Form->input('proposal_id');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
