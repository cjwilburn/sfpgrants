<div class="adminSmallRanks index">
	<h2><?php __('Admin Small Ranks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('inv_first_name');?></th>
			<th><?php echo $this->Paginator->sort('inv_last_name');?></th>
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
	foreach ($adminSmallRanks as $adminSmallRank):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $adminSmallRank['AdminSmallRank']['inv_first_name']; ?>&nbsp;</td>
		<td><?php echo $adminSmallRank['AdminSmallRank']['inv_last_name']; ?>&nbsp;</td>
		<td><?php echo $adminSmallRank['AdminSmallRank']['project_type']; ?>&nbsp;</td>
		<td><?php echo $adminSmallRank['AdminSmallRank']['project_title']; ?>&nbsp;</td>
		<td><?php echo $adminSmallRank['AdminSmallRank']['duration']; ?>&nbsp;</td>
		<td><?php echo $adminSmallRank['AdminSmallRank']['project_budget']; ?>&nbsp;</td>
		<td><?php echo $adminSmallRank['AdminSmallRank']['topic_area']; ?>&nbsp;</td>
		<td><?php echo $adminSmallRank['AdminSmallRank']['avg_merit']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $adminSmallRank['AdminSmallRank']['avg_merit'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $adminSmallRank['AdminSmallRank']['avg_merit'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $adminSmallRank['AdminSmallRank']['avg_merit']), null, sprintf(__('Are you sure you want to delete # %s?', true), $adminSmallRank['AdminSmallRank']['avg_merit'])); ?>
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
		<li><?php echo $this->Html->link(__('New Admin Small Rank', true), array('action' => 'add')); ?></li>
	</ul>
</div>