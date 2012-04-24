<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<!--h5>Proposals</h5>
			<ul class="menu">
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
    <h2 id="page-heading"><?php printf(__('Add %s', true), __('Proposal', true)); ?></h2>

	<div class="proposals form">
	<?php echo $this->Form->create('Proposal');?>
		<fieldset>
	 		<legend><?php printf(__('Proposal Record', true)); ?></legend>
		<?php
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
		echo $this->Form->input('project_type');
		echo $this->Form->input('duration');
		echo $this->Form->input('project_title');
		echo $this->Form->input('project_abstract');
		echo $this->Form->input('project_budget');
		echo $this->Form->input('project_dates');
		echo $this->Form->input('research_type');
		echo $this->Form->input('topic_area');
		echo $this->Form->input('proposal_file');
		echo $this->Form->input('proposal_file_link');
		echo $this->Form->input('appendicies_file');
		echo $this->Form->input('appendicies_file_link');
		echo $this->Form->input('grant_number');
		echo $this->Form->input('grant_award_date');
		echo $this->Form->input('irb_date');
		echo $this->Form->input('irb_date_revised');
		echo $this->Form->input('budget_file');
		echo $this->Form->input('budget_file_link');
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
		echo $this->Form->input('additional_files');
		echo $this->Form->input('irs_file');
		echo $this->Form->input('irs_file_link');
		echo $this->Form->input('User');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
