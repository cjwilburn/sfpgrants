<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			 <ul class="nav">

			<ul class="menu">
								<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Evaluations', true)), array('action' => 'index'));?></li>
			</ul>

			<!--h5>Users</h5-->
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
			</ul>

			<!--h5>Proposals</h5-->
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Proposals', true)), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Proposals', true)), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
			</ul>
                        </ul>
		</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php __('Evaluations');?></h2>


	<table cellpadding="0" cellspacing="0">
    <?php $tableHeaders = $html->tableHeaders(array($paginator->sort('id'),
        $paginator->sort('date_submitted'),
        //$paginator->sort('users_id'),
        $paginator->sort('proposals_id'),
        $paginator->sort('research_plan'),
        $paginator->sort('significance'),
        $paginator->sort('qualifications'),
        $paginator->sort('environment'),
        $paginator->sort('funder_absence'),
        $paginator->sort('budget_timeline'),
        $paginator->sort('responsiveness'),
        $paginator->sort('comments'),
        $paginator->sort('summary'),
        $paginator->sort('merit'),__('Actions', true),));
echo '<thead>'.$tableHeaders.'</thead>'; ?>

<?php
	$i = 0;
	foreach ($evaluations as $evaluation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $evaluation['Evaluation']['id']; ?>&nbsp;</td>
		<td><?php echo $evaluation['Evaluation']['date_submitted']; ?>&nbsp;</td>
		<!--td><?php //echo $evaluation['User']['username']; ?></td-->
		<td><?php echo $evaluation['Proposal']['project_title']; ?></td>
		<td><?php echo $evaluation['Evaluation']['research_plan']; ?>&nbsp;</td>
		<td><?php echo $evaluation['Evaluation']['significance']; ?>&nbsp;</td>
		<td><?php echo $evaluation['Evaluation']['qualifications']; ?>&nbsp;</td>
		<td><?php echo $evaluation['Evaluation']['environment']; ?>&nbsp;</td>
		<td><?php echo $evaluation['Evaluation']['funder_absence']; ?>&nbsp;</td>
		<td><?php echo $evaluation['Evaluation']['budget_timeline']; ?>&nbsp;</td>
		<td><?php echo $evaluation['Evaluation']['responsiveness']; ?>&nbsp;</td>
		<td><?php echo $evaluation['Evaluation']['comments']; ?>&nbsp;</td>
		<td><?php echo $evaluation['Evaluation']['summary']; ?>&nbsp;</td>
		<td><?php echo $evaluation['Evaluation']['merit']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $evaluation['Evaluation']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Edit', true), array('action' => 'edit', $evaluation['Evaluation']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Delete', true), array('action' => 'delete', $evaluation['Evaluation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluation['Evaluation']['id'])); ?>
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

