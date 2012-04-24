<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<!--h5>Uploads</h5>
			<ul class="menu">
				<li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('Upload', true)), array('action' => 'add')); ?></li>
			</ul>
			
			<h5>Proposals</h5>
			<ul class="menu">
				<li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('Proposals', true)), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('Proposal', true)), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
			</ul-->
                        <ul class="nav">
                        <li><a href="#"><span>Uploads</span></a>
                            <ul>
                                 <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Uploads', true)), array('action' => 'index'));?></li>
                            </ul>
                        </li>
                        <li><a href="#"><span>Proposals</span></a>
                            <ul>
                                 <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Proposals', true)), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Proposal', true)), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
                            </ul>
                        </ul>
		</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php __('Uploads');?></h2>
	
		
	<table cellpadding="0" cellspacing="0">
    <?php $tableHeaders = $html->tableHeaders(array($paginator->sort('id'),$paginator->sort('proposal_id'),$paginator->sort('name'),$paginator->sort('type'),$paginator->sort('size'),$paginator->sort('created'),$paginator->sort('modified'),__('Actions', true),));
echo '<thead>'.$tableHeaders.'</thead>'; ?>

<?php
	$i = 0;
	foreach ($uploads as $upload):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $upload['Upload']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($upload['Proposal']['id'], array('controller' => 'proposals', 'action' => 'view', $upload['Proposal']['id'])); ?>
		</td>
		<td><?php echo $upload['Upload']['name']; ?>&nbsp;</td>
		<td><?php echo $upload['Upload']['type']; ?>&nbsp;</td>
		<td><?php echo $upload['Upload']['size']; ?>&nbsp;</td>
		<td><?php echo $upload['Upload']['created']; ?>&nbsp;</td>
		<td><?php echo $upload['Upload']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $upload['Upload']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Edit', true), array('action' => 'edit', $upload['Upload']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Delete', true), array('action' => 'delete', $upload['Upload']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $upload['Upload']['id'])); ?>
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
