<div class="averageMerit2011s index">
	<h2><?php __('Average Merit2011s');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('proposal_id');?></th>
			<th><?php echo $this->Paginator->sort('avg_merit');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($averageMerit2011s as $averageMerit2011):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($averageMerit2011['Proposal']['project_title'], array('controller' => 'proposals', 'action' => 'view', $averageMerit2011['Proposal']['id'])); ?>
		</td>
		<td><?php echo $averageMerit2011['AverageMerit2011']['avg_merit']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $averageMerit2011['AverageMerit2011']['proposal_id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $averageMerit2011['AverageMerit2011']['proposal_id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $averageMerit2011['AverageMerit2011']['proposal_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $averageMerit2011['AverageMerit2011']['proposal_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Average Merit2011', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Proposals', true), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal', true), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
	</ul>
</div>