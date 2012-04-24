<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<h5>Evaluations Proposals</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Evaluations Proposal', true)), array('action' => 'add')); ?></li>
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
    <h2 id="page-heading"><?php __('Evaluations Proposals');?></h2>


	<table cellpadding="0" cellspacing="0">
    <?php $tableHeaders = $html->tableHeaders(array($paginator->sort('id'),$paginator->sort('evaluation_id'),$paginator->sort('proposal_id'),__('Actions', true),));
echo '<thead>'.$tableHeaders.'</thead>'; ?>

<?php
	$i = 0;
	foreach ($evaluationsProposals as $evaluationsProposal):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $evaluationsProposal['EvaluationsProposal']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evaluationsProposal['Evaluation']['id'], array('controller' => 'evaluations', 'action' => 'view', $evaluationsProposal['Evaluation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($evaluationsProposal['Proposal']['id'], array('controller' => 'proposals', 'action' => 'view', $evaluationsProposal['Proposal']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $evaluationsProposal['EvaluationsProposal']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Edit', true), array('action' => 'edit', $evaluationsProposal['EvaluationsProposal']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Delete', true), array('action' => 'delete', $evaluationsProposal['EvaluationsProposal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluationsProposal['EvaluationsProposal']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
<?php echo '<tfoot class=\'dark\'>'.$tableHeaders.'</tfoot>'; ?>    </table>


	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>

</div>
<div class="clear"></div>