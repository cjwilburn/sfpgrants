<div class="boardSmallRanks index">
	<h2><?php __('Board Small Ranks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('project_title');?></th>
			<th><?php echo $this->Paginator->sort('duration');?></th>
			<th><?php echo $this->Paginator->sort('project_budget');?></th>
			<th><?php echo $this->Paginator->sort('topic_area');?></th>
			<th><?php echo $this->Paginator->sort('avg_merit');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($boardSmallRanks as $boardSmallRank):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $boardSmallRank['BoardSmallRank']['id']; ?>&nbsp;</td>
		<td><?php echo $boardSmallRank['BoardSmallRank']['project_title']; ?>&nbsp;</td>
		<td><?php echo $boardSmallRank['BoardSmallRank']['duration']; ?>&nbsp;</td>
		<td><?php echo $boardSmallRank['BoardSmallRank']['project_budget']; ?>&nbsp;</td>
		<td><?php echo $boardSmallRank['BoardSmallRank']['topic_area']; ?>&nbsp;</td>
		<td><?php echo $boardSmallRank['BoardSmallRank']['avg_merit']; ?>&nbsp;</td>
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