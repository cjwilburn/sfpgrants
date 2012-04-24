<div class="chairLargeRanks index">
	<h2><?php __('Chair Large Ranks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('inv_first_name');?></th>
			<th><?php echo $this->Paginator->sort('inv_last_name');?></th>
			<th><?php echo $this->Paginator->sort('project_title');?></th>
			<th><?php echo $this->Paginator->sort('duration');?></th>
			<th><?php echo $this->Paginator->sort('project_budget');?></th>
			<th><?php echo $this->Paginator->sort('topic_area');?></th>
			<th><?php echo $this->Paginator->sort('avg_merit');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($chairLargeRanks as $chairLargeRank):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $chairLargeRank['ChairLargeRank']['inv_first_name']; ?>&nbsp;</td>
		<td><?php echo $chairLargeRank['ChairLargeRank']['inv_last_name']; ?>&nbsp;</td>
		<td><?php echo $chairLargeRank['ChairLargeRank']['project_title']; ?>&nbsp;</td>
		<td><?php echo $chairLargeRank['ChairLargeRank']['duration']; ?>&nbsp;</td>
		<td><?php echo $chairLargeRank['ChairLargeRank']['project_budget']; ?>&nbsp;</td>
		<td><?php echo $chairLargeRank['ChairLargeRank']['topic_area']; ?>&nbsp;</td>
		<td><?php echo $chairLargeRank['ChairLargeRank']['avg_merit']; ?>&nbsp;</td>
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
</div>