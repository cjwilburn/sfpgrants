<div class="smallGrantRanks index">
	<h2><?php __('Small Grant Ranks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('project_title');?></th>
			<th><?php echo $this->Paginator->sort('duration');?></th>
			<th><?php echo $this->Paginator->sort('project_budget');?></th>
			<th><?php echo $this->Paginator->sort('topic_area');?></th>
			<th><?php echo $this->Paginator->sort('avg_merit');?></th>
		
	<?php
	$i = 0;
	foreach ($smallGrantRanks as $smallGrantRank):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $smallGrantRank['SmallGrantRank']['id']; ?>&nbsp;</td>
		<td><?php echo $smallGrantRank['SmallGrantRank']['project_title']; ?>&nbsp;</td>
		<td><?php echo $smallGrantRank['SmallGrantRank']['duration']; ?>&nbsp;</td>
		<td><?php echo $smallGrantRank['SmallGrantRank']['project_budget']; ?>&nbsp;</td>
		<td><?php echo $smallGrantRank['SmallGrantRank']['topic_area']; ?>&nbsp;</td>
		<td><?php echo $smallGrantRank['SmallGrantRank']['avg_merit']; ?>&nbsp;</td>
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