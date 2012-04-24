<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<!--h5>Proposals</h5>
			<ul class="menu">
				<li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('Proposal', true)), array('action' => 'add')); ?></li>
			</ul>

			<h5>Users</h5>
			<ul class="menu">
				<li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
			</ul-->
                         <ul class="nav">
                        <li><a href="#"><span>Groups</span></a>
                            <ul>
                                 <li><a href="#">New Group</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span>Users</span></a>
                            <ul>
                                     <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?></li>
                                     <li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
                            </ul>
		</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php __('Proposals');?></h2>


	<table cellpadding="0" cellspacing="0">
    <?php $tableHeaders = $html->tableHeaders(array($paginator->sort('id'),
      $paginator->sort('date_submitted'),
        $paginator->sort('project_type'),
        $paginator->sort('budget_award_amount'),
        $paginator->sort('project_budget'),
        $paginator->sort('project_title'),
        $paginator->sort('average_merit_score'),
        $paginator->sort('project_abstract'),
        __('Actions', true),));
        echo '<thead>'.$tableHeaders.'</thead>'; ?>

<?php
	$i = 0;
	foreach ($proposals as $proposal):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $proposal['Proposal']['id']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['created']; ?>&nbsp;</td>
		<td><?php echo $proposal['ProjectType']['project_type']; ?>&nbsp;</td>
        <td><?php echo $proposal['Proposal']['budget_award_amount']; ?>&nbsp;</td>
                <td><?php echo $proposal['Proposal']['project_budget']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['project_title']; ?>&nbsp;</td>
                <td><?php echo $proposal['AverageMerit2011']['0']['avg_merit']; ?>&nbsp;</td>
  
    	
<?php foreach ($evaluations as $evaluation): ?>	
<tr><td><ol><li><?php echo $evaluation['Evaluation']['user_id']; ?></li></ol></td></tr> 
 <?php endforeach; ?>    
    

        <td><?php echo $proposal['Proposal']['project_abstract']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $proposal['Proposal']['id'])); ?>
			<?php //echo ' | ' . $this->Html->link(__('Edit', true), array('action' => 'edit', $proposal['Proposal']['id'])); ?>
			<?php //echo ' | ' . $this->Html->link(__('Delete', true), array('action' => 'delete', $proposal['Proposal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $proposal['Proposal']['id'])); ?>
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
