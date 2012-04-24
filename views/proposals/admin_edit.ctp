<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<!--h5>Proposals</h5>
			<ul class="menu">
								<li><?php //echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Proposal.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Proposal.id'))); ?></li>
								<li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('Proposals', true)), array('action' => 'index'));?></li>
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
    <h2 id="page-heading"><?php printf(__('Edit %s', true), __('Proposal', true)); ?></h2>

	<div class="proposals form">
	<?php echo $this->Form->create('Proposal', array('enctype'=>'multipart/form-data'));?>
		<fieldset>
	 		<legend><?php printf(__('Proposal Record', true)); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date_submitted');
		echo $this->Form->input('inv_first_name');
		echo $this->Form->input('inv_last_name');
		echo $this->Form->input('inv_institution');
		echo $this->Form->input('inv_telephone');
		echo $this->Form->input('inv_email');
		echo $this->Form->input('inv_address_1');
		echo $this->Form->input('inv_address_2');
		echo $this->Form->input('inv_city');
		echo $this->Form->input('inv_state');
		echo $this->Form->input('inv_zip');
		echo $this->Form->input('fin_first_name');
		echo $this->Form->input('fin_last_name');
		echo $this->Form->input('fin_telephone');
		echo $this->Form->input('fin_email');
		echo $this->Form->input('con_first_name');
		echo $this->Form->input('con_last_name');
		echo $this->Form->input('con_institution');
		echo $this->Form->input('con_address_1');
		echo $this->Form->input('con_address_2');
		echo $this->Form->input('con_city');
		echo $this->Form->input('con_state');
		echo $this->Form->input('con_zip');
                echo $this->Html->tag('caption', 'Note: All small grants are limited to a 12-month duration. Researchers applying for small grants should just skip the duration field.');
                echo $this->Form->radio('project_type_id', $project, array('label'=>'Project Type', 'separator'=>'<br />'));
                echo $this->Form->radio('duration_id', $duration, array('label'=>'Duration', 'separator'=>'<br />'));
		echo $this->Form->input('project_title');
		echo $this->Form->input('project_abstract');
		echo $this->Form->input('project_budget');
		echo $this->Form->input('project_dates');
		echo $this->Form->input('research_type');
		echo $this->Form->input('topic_area');
		echo $this->Form->input('grant_number');
		echo $this->Form->input('grant_award_date');
		echo $this->Form->input('irb_date');
		echo $this->Form->input('irb_date_revised');
		echo $this->Form->input('budget_award_amount');
		echo $this->Form->input('payment_1_check_num');
		echo $this->Form->input('payment_2_check_num');
		echo $this->Form->input('payment_1_amount');
		echo $this->Form->input('payment_2_amount');
		echo $this->Form->input('payment_1_date_sent');
		echo $this->Form->input('payment_2_date_sent');
		echo $this->Form->input('project_start_date');
		echo $this->Form->input('project_estimated_end_date');
		echo $this->Form->input('project_revised_end_date');
		echo $this->Form->input('progress_report_due_date');
		echo $this->Form->input('progress_report_date');
		echo $this->Form->input('final_report_due_date');
		echo $this->Form->input('final_report_date');
		echo $this->Form->input('financial_report_due_date');
		echo $this->Form->input('financial_report_date');
		echo $this->Form->input('admin_comments');
		echo $this->Form->input('average_merit_score');
                echo $this->Html->tag('label', 'Proposal');
                echo $this->Form->input('Upload.0.file', array('type'=>'file'));
                echo $this->Html->tag('br');
                echo $this->Html->tag('label', 'Appendix');
                echo $this->Form->input('Upload.1.file', array('type'=>'file'));
                echo $this->Html->tag('br');
                echo $this->Html->tag('label', 'Budget');
                echo $this->Form->input('Upload.2.file', array('type'=>'file'));
                echo $this->Html->tag('br');
                echo $this->Html->tag('label', 'IRS Letter');
                echo $this->Form->input('Upload.3.file', array('type'=>'file'));
                echo $this->Html->tag('br');
                echo $this->Html->tag('label', 'Signature Page');
                echo $this->Form->input('Upload.4.file', array('type'=>'file'));
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>
<h2>
		<a href="#" id="toggle-related-records"><?php echo (__('Related', true)); ?></a>
	</h2>
	<div class="block" id="related-records">
				<div class="related">
			<h3><?php printf(__('Related %s', true), __('Uploads', true));?></h3>
			<?php if (!empty($proposal['Upload'])):?>
			<table cellpadding = "0" cellspacing = "0">
				<thead>
					<tr>
								<th><?php __('Id'); ?></th>
		<th><?php __('Proposal ID'); ?></th>
		<th><?php __('name'); ?></th>
		<th><?php __('type'); ?></th>
		<th><?php __('size'); ?></th>
		<th><?php __('created'); ?></th>
		<th><?php __('modified'); ?></th>
						<th class="actions"><?php __('Actions');?></th>
					</tr>
				</thead>
			<?php
				$i = 0;
				foreach ($proposal['Upload'] as $upload):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
		<tr<?php echo $class;?>>
			<td><?php echo $upload['id']; ?></td>
			<td><?php echo $upload['proposal_id']; ?></td>
			<td><?php //echo $upload['name']; ?></td>
                        <td><?php $this->Html->url(__('../files/'.$upload['name'],true)); ?></td>
			<td><?php echo $upload['type']; ?></td>
			<td><?php echo $upload['size']; ?></td>
			<td><?php echo $upload['created']; ?></td>
			<td><?php echo $upload['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'uploads', 'action' => 'view', $upload['id'])); ?>
				<?php echo ' | '. $this->Html->link(__('Edit', true), array('controller' => 'uploads', 'action' => 'edit', $upload['id'])); ?>
				<?php echo ' | '. $this->Html->link(__('Delete', true), array('controller' => 'uploads', 'action' => 'delete', $upload['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $upload['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			<div class="actions">
			</div>
		</div>
			</div>
</div>
<div class="clear"></div>