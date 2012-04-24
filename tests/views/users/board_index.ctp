<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
                        <ul class="nav">
                            <li><a href="#"><span>Dashboard</span></a>
                            <ul>
                                     <li><?php echo $this->Html->link('Return to dashboard', array('controller' => 'dashboards', 'action' => 'index')); ?></li>
                            </ul></li>
                        <li><a href="#"><span>Users</span></a>
                            <ul>
                                     <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('users', true)), array('controller' => 'users', 'action' => 'index')); ?></li>
                            </ul></li>
                                <li><a href="#"><span>Proposals</span></a>
                            <ul>
                                     <li><?php echo $this->Html->link(sprintf(__('New %s', true), __('proposal', true)), array('controller' => 'proposals', 'action' => 'grant_submission')); ?></li>
                                     <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('proposals', true)), array('controller' => 'proposals', 'action' => 'index')); ?></li>
                            </ul></li>
                        </ul>
		</div>
	</div>
</div>

<div class="grid_12">
    <h2 id="page-heading"><?php __('Users');?></h2>
    <p>To edit your password or other user information, use the "edit" link provided under "actions."</p>


	<table cellpadding="0" cellspacing="0">
    <?php $tableHeaders = $html->tableHeaders(array($paginator->sort('id'),
        $paginator->sort('username'),
        //$paginator->sort('password'),
        $paginator->sort('first_name'),
        $paginator->sort('last_name'),
        //$paginator->sort('email'),
        $paginator->sort('type'),__('Actions', true),));
        //$paginator->sort('associated_grants'),
        //$paginator->sort('group_id'),__('Actions', true),));
echo '<thead>'.$tableHeaders.'</thead>'; ?>

<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['id']; ?>&nbsp;</td>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>
		<!--td><?php //echo $user['User']['password']; ?>&nbsp;</td-->
		<td><?php echo $user['User']['first_name']; ?>&nbsp;</td>
		<td><?php echo $user['User']['last_name']; ?>&nbsp;</td>
		<!--td><?php //echo $user['User']['email']; ?>&nbsp;</td-->
		<td><?php echo $user['User']['type']; ?>&nbsp;</td>
		<!--td><?php //echo $user['User']['associated_grants']; ?>&nbsp;</td-->
		<!--td>
			<?php// echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td-->
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id'])); ?>
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