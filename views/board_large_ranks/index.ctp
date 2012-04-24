<div class="boardLargeRanks index">
	<h2><?php __('Board Large Ranks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('project_type');?></th>
			<th><?php echo $this->Paginator->sort('project_title');?></th>
			<th><?php echo $this->Paginator->sort('duration');?></th>
			<th><?php echo $this->Paginator->sort('project_budget');?></th>
			<th><?php echo $this->Paginator->sort('topic_area');?></th>
			<th><?php echo $this->Paginator->sort('avg_merit');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($boardLargeRanks as $boardLargeRank):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $boardLargeRank['BoardLargeRank']['id']; ?>&nbsp;</td>
		<td><?php echo $boardLargeRank['BoardLargeRank']['project_type']; ?>&nbsp;</td>
		<td><?php echo $boardLargeRank['BoardLargeRank']['project_title']; ?>&nbsp;</td>
		<td><?php echo $boardLargeRank['BoardLargeRank']['duration']; ?>&nbsp;</td>
		<td><?php echo $boardLargeRank['BoardLargeRank']['project_budget']; ?>&nbsp;</td>
		<td><?php echo $boardLargeRank['BoardLargeRank']['topic_area']; ?>&nbsp;</td>
		<td><?php echo $boardLargeRank['BoardLargeRank']['avg_merit']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $boardLargeRank['BoardLargeRank']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $boardLargeRank['BoardLargeRank']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $boardLargeRank['BoardLargeRank']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $boardLargeRank['BoardLargeRank']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Board Large Rank', true), array('action' => 'add')); ?></li>
	</ul>
</div>