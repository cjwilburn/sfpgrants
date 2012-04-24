<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
	         <ul class="nav">
                            <li><a href="#"><span>Users Proposals</span></a>
                    <ul>
                        <li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Users Proposal', true)), array('action' => 'add')); ?></li>
                    </ul>
                            </li>
                 </ul>
		</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php __('Users Proposals');?></h2>


	<table cellpadding="0" cellspacing="0">
    <?php $tableHeaders = $html->tableHeaders(array($paginator->sort('id'),$paginator->sort('username'),$paginator->sort('project_title'),__('Actions', true),));
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
		<td><?php echo $usersProposal['User']['username']; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($usersProposal['Proposal']['project_title'],array('controller' => 'proposals','action' => 'view',$usersProposal['Proposal']['id'])); ?>&nbsp;</td>
		<td class="actions">
		</td>
	</tr>
        <?php endforeach; ?>
        <?php
	//$i = 0;
	//foreach ($gutters as $gutter):
		//$class = null;
		//if ($i++ % 2 == 0) {
			//$class = ' class="altrow"';
		//}
	?>
        <!--tr<?php //echo $class;?>>
                <td><?php //echo $gutter['UsersProposal']['id']; ?>&nbsp;</td>
		<td><?php //echo $gutter['User']['username']; ?>&nbsp;</td>
		<td><?php //echo $gutter['Proposal']['project_title']; ?>&nbsp;</td>
		<td class="actions">
		</td>
	</tr-->
<?php //endforeach; ?>
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
        <?php
        print_r($this->data); ?>

</div>
<div class="clear"></div>