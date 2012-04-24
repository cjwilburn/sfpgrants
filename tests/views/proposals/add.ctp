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
                        </li>
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
                echo $this->Html->tag('h2','Principal Investigator');
		//echo $this->Form->input('date_submitted');
		echo $this->Form->input('inv_first_name', array('label'=>'First (Given) Name'));
		echo $this->Form->input('inv_last_name', array('label'=> 'Last (Family) Name'));
		echo $this->Form->input('inv_institution', array('label'=> 'Institution'));
		echo $this->Form->input('inv_telephone', array('label'=>'Telephone'));
		echo $this->Form->input('inv_email', array('label'=>'Email'));
		echo $this->Form->input('inv_address_1', array('label'=>'Address'));
		echo $this->Form->input('inv_address_2',array('label'=>'Address Line 2'));
		echo $this->Form->input('inv_city',array('label'=>'City'));
		echo $this->Form->input('inv_state',array('label'=>'State'));
		echo $this->Form->input('inv_zip',array('label'=>'Zip'));
                echo $this->Html->tag('h2','Financial Accounts Officer');
		echo $this->Form->input('fin_first_name',array('label'=>'First Name'));
		echo $this->Form->input('fin_last_name',array('label'=>'Last Name'));
		echo $this->Form->input('fin_telephone',array('label'=>'Telephone'));
		echo $this->Form->input('fin_email',array('label'=>'Email'));
                echo $this->Html->tag('h2','Contracts & Grants Department or authorized organizational official');
		echo $this->Form->input('con_first_name',array('label'=>'First Name'));
		echo $this->Form->input('con_last_name',array('label'=>'Last Name'));
		echo $this->Form->input('con_institution',array('label'=>'Institution'));
		echo $this->Form->input('con_address_1',array('label'=>'Address'));
		echo $this->Form->input('con_address_2',array('label'=>'Address Line 2'));
		echo $this->Form->input('con_city',array('label'=>'City'));
		echo $this->Form->input('con_state',array('label'=>'State'));
		echo $this->Form->input('con_zip',array('label'=>'Zip'));
                echo $this->Html->tag('h2','Grant information ');
		//echo $this->Form->input('project_type');
                echo $this->Html->tag('caption', '<p>Note: All small grants are limited to a 12-month duration. <br />Researchers applying for small grants should just skip the duration field.</p>');
                echo $this->Form->radio('project_type_id', $project, array('label'=>'Project Type'));
		//echo $this->Form->input('duration');
                echo $this->Form->radio('duration_id', $duration, array('label'=>'Duration'));
		echo $this->Form->input('project_title');
		echo $this->Form->input('project_abstract');
		echo $this->Form->input('project_budget');
		echo $this->Form->input('project_dates');
		echo $this->Form->input('research_type');
                echo $this->Html->tag('p', 'e.g., qualitative, quantitative, clinical, social science, etc.');
		echo $this->Form->input('topic_area');
                echo $this->Html->tag('p', 'e.g., IUD use in adolescents, Abortion, etc. ');
                echo $this->Html->tag('p','Please combine all proposal information, excluding appendices, into one file and attach that as your proposal. Download and fill out your <a href="http://www.societyfp.org/_documents/SFP_grant_budget_2011form.pdf" target="_blank">budget summary</a> and upload that where it says "budget form." "IRS form" below refers to your IRS Status Determination Letter of Tax Exemption. Download and fill out your <a href="http://www.societyfp.org/_documents/signature-page-2011.pdf" target="_blank">signature page</a> and upload where it says “signature page.”');
                echo $this->Html->tag('p', 'NOTE: Only appendices that include descriptions of methodology, survey instruments, and tools will be accepted. Please keep appendices to a minimum. Applicants should note that reviewers will be advised that reading this additional material is optional.');
		//echo $this->Form->input('proposal_file');
                echo $this->Html->tag('label', 'Proposal');
                echo $this->FileUpload->input();
                //echo $this->Form->file('Proposal.proposal_file');
                echo $this->Html->tag('br');
		//echo $this->Form->input('appendicies_file');
                echo $this->Html->tag('label', 'Appendices');
                echo $this->FileUpload->input();
                //echo $this->Form->file('Proposal.appendicies_file');
                echo $this->Html->tag('br');
		//echo $this->Form->input('budget_file');
                echo $this->Html->tag('label', 'Budget');
                echo $this->FileUpload->input();
                //echo $this->Form->file('Proposal.budget_file');
                echo $this->Html->tag('br');
		//echo $this->Form->input('irs_file');
                echo $this->Html->tag('label', 'IRS Letter');
                echo $this->FileUpload->input();
                //echo $this->Form->file('Proposal.irs_file');
                 echo $this->Html->tag('br');
		//echo $this->Form->input('signature_page');
                echo $this->Html->tag('label', 'Signature Page');
                echo $this->FileUpload->input();
                //echo $this->Form->file('Proposal.irs_file');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
