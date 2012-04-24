<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<h5>Users Proposals</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Users Proposal', true)), array('action' => 'add')); ?></li>
			</ul>
					</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php __('Users Proposals');?></h2>
	
		
	<table cellpadding="0" cellspacing="0">
    <?php $tableHeaders = $html->tableHeaders(array($paginator->sort('id'),$paginator->sort('users_id'),$paginator->sort('proposals_id'),__('Actions', true),));
echo '<thead>'.$tableHeaders.'</thead>'; ?>

<?php
	$i = 0;
	foreach ($usersProposals as $usersProposal):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $usersProposal['UsersProposal']['id']; ?>&nbsp;</td>
		<td><?php echo $usersProposal['UsersProposal']['users_id']; ?>&nbsp;</td>
		<td><?php echo $usersProposal['UsersProposal']['proposals_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $usersProposal['UsersProposal']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Edit', true), array('action' => 'edit', $usersProposal['UsersProposal']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Delete', true), array('action' => 'delete', $usersProposal['UsersProposal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usersProposal['UsersProposal']['id'])); ?>
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
