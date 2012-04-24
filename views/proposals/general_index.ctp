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
    <?php $tableHeaders = $html->tableHeaders(array($paginator->sort('id'),$paginator->sort('date_submitted'),$paginator->sort('inv_first_name'),$paginator->sort('inv_last_name'),$paginator->sort('inv_institution'),$paginator->sort('inv_telephone'),$paginator->sort('inv_email'),$paginator->sort('inv_address_1'),$paginator->sort('inv_address_2'),$paginator->sort('inv_city'),$paginator->sort('inv_state'),$paginator->sort('inv_zip'),$paginator->sort('fin_first_name'),$paginator->sort('fin_last_name'),$paginator->sort('fin_telephone'),$paginator->sort('fin_email'),$paginator->sort('con_first_name'),$paginator->sort('con_last_name'),$paginator->sort('con_institution'),$paginator->sort('con_address_1'),$paginator->sort('con_address_2'),$paginator->sort('con_city'),$paginator->sort('con_state'),$paginator->sort('con_zip'),$paginator->sort('project_type'),$paginator->sort('duration'),$paginator->sort('project_title'),$paginator->sort('project_abstract'),$paginator->sort('project_budget'),$paginator->sort('project_dates'),$paginator->sort('research_type'),$paginator->sort('topic_area'),$paginator->sort('proposal_file'),$paginator->sort('proposal_file_link'),$paginator->sort('appendicies_file'),$paginator->sort('appendicies_file_link'),$paginator->sort('grant_number'),$paginator->sort('grant_award_date'),$paginator->sort('irb_date'),$paginator->sort('irb_date_revised'),$paginator->sort('budget_file'),$paginator->sort('budget_file_link'),$paginator->sort('budget_award_amount'),$paginator->sort('payment_1_check_num'),$paginator->sort('payment_2_check_num'),$paginator->sort('payment_1_amount'),$paginator->sort('payment_2_amount'),$paginator->sort('payment_1_date_sent'),$paginator->sort('payment_2_date_sent'),$paginator->sort('project_start_date'),$paginator->sort('project_estimated_end_date'),$paginator->sort('project_revised_end_date'),$paginator->sort('progress_report_due_date'),$paginator->sort('progress_report_date'),$paginator->sort('final_report_due_date'),$paginator->sort('final_report_date'),$paginator->sort('financial_report_due_date'),$paginator->sort('financial_report_date'),$paginator->sort('admin_comments'),$paginator->sort('average_merit_score'),$paginator->sort('additional_files'),$paginator->sort('irs_file'),$paginator->sort('irs_file_link'),__('Actions', true),));
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
		<td><?php echo $proposal['Proposal']['date_submitted']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['inv_first_name']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['inv_last_name']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['inv_institution']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['inv_telephone']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['inv_email']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['inv_address_1']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['inv_address_2']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['inv_city']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['inv_state']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['inv_zip']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['fin_first_name']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['fin_last_name']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['fin_telephone']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['fin_email']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['con_first_name']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['con_last_name']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['con_institution']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['con_address_1']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['con_address_2']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['con_city']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['con_state']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['con_zip']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['project_type']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['duration']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['project_title']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['project_abstract']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['project_budget']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['project_dates']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['research_type']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['topic_area']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['proposal_file']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['proposal_file_link']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['appendicies_file']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['appendicies_file_link']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['grant_number']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['grant_award_date']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['irb_date']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['irb_date_revised']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['budget_file']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['budget_file_link']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['budget_award_amount']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['payment_1_check_num']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['payment_2_check_num']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['payment_1_amount']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['payment_2_amount']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['payment_1_date_sent']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['payment_2_date_sent']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['project_start_date']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['project_estimated_end_date']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['project_revised_end_date']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['progress_report_due_date']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['progress_report_date']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['final_report_due_date']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['final_report_date']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['financial_report_due_date']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['financial_report_date']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['admin_comments']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['average_merit_score']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['additional_files']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['irs_file']; ?>&nbsp;</td>
		<td><?php echo $proposal['Proposal']['irs_file_link']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $proposal['Proposal']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Edit', true), array('action' => 'edit', $proposal['Proposal']['id'])); ?>
			<?php echo ' | ' . $this->Html->link(__('Delete', true), array('action' => 'delete', $proposal['Proposal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $proposal['Proposal']['id'])); ?>
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
