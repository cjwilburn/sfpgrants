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
    <h2 id="page-heading"><?php printf(__('Edit %s', true), __('Evaluation', true)); ?></h2>

	<div class="evaluations form">
	<?php echo $this->Form->create('Evaluation');?>
		<fieldset>
	 		<legend><?php printf(__('Evaluation Record', true)); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date_submitted');
                 echo $this->Html->tag('caption', '<b>Please make sure that your username and the grant you are evaluating are selected in the drop down menus below.</b>');
		echo $this->Form->input('user_id');
		echo $this->Form->input('proposal_id');
                echo $this->Html->tag('caption', '<br><br><b>Research Plan</b><br><br>This should receive major emphasis in review of the proposal. Be as specific as you can, concentrating on the most salient strengths and weaknesses of the rationale, conceptual framework, methodology, feasibility, soundness, and innovativeness of each proposal.');
		echo $this->Form->input('research_plan');
                echo $this->Html->tag('caption','<br><br><b>Significance and potential for advancing science/knowledge in family planning</b><br><br>Project\'s potential contribution to the body of knowledge in family planning and likelihood that research results will inform scientific concepts and methods. Potential for impact on family planning programs and policies. Does the project develop or employ novel concepts, approaches, methodologies, tools, or technologies for this area.');
		echo $this->Form->input('significance');
                echo $this->Html->tag('caption', '<br><br><b>Quanifications of Investigator(s)</b><br><br>Investigator\'s(s\') demonstrated experience and training, or potential (if new investigator) to conduct the proposed research.');
		echo $this->Form->input('qualifications');
                echo $this->Html->tag('caption','<br><br><b>Environment</b><br><br>The extent to which the scientific environment in which the work will be done contributes to the probability of success. The unique features of the scientific environment or use of collaborative arrangements will be assessed, as well as evidence of organizational support for research.');
		echo $this->Form->input('environment');
                echo $this->Html->tag('tag', '<br><br><b>Absence of Other Funders</b><br><br>The likelihood that the proposal would not be funded by another agency/organization. SFP is especially interested in supporting projects difficult to fund by government agencies and/or private foundations.');
		echo $this->Form->input('funder_absence');
                echo $this->Html->tag('caption', '<br><br><b>Budget and Timeline</b><br><br>Reasonable and cost-effective budget with clear justifications and realistic timeline for completion. Budgets may include indirect costs at a maximum rate of 20% for large grants and 10% for small grants.');
		echo $this->Form->input('budget_timeline');
                echo $this->Html->tag('caption', '<br><br><b>Responsiveness to SFP mission and research goals and priorities</b><br><br>Priority will be given to those proposals that effectively respond to the high-priority research areas outlined in the RFP.');
		echo $this->Form->input('responsiveness');
                 echo $this->Html->tag('caption','Other Comments:<br>For example, comments relating to the proposal\'s clarity, organization, formatting, etc. <br> Feel free to include any suggestions for future submissions');
		echo $this->Form->input('comments');
		echo $this->Html->tag('caption','Overall Evaluation:<br>Summarize your recommendation and select an appropriate Scientific Merit Score from<br>the list below.The comments in this section should help to explain or justify the given<br>merit score.&nbsp;</p>');
		echo $this->Form->input('summary');
                echo $this->Html->tag('caption','1.0 - 1.4  Outstanding<br>1.5 - 1.9  Excellent<br>2.0 - 2.4 Very Good<br>2.5 - 2.9  Good<br>3.0 - 3.4  Satisfactory<br>3.5 - 3.9  Fair<br>4.0 - 4.9  Acceptable<br>5.0  Disapproved </td>');
		echo $this->Form->input('merit');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>

