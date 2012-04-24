<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<!--h5>Proposals</h5-->
			<!--ul class="menu">
				<li><?php //echo $this->Html->link(sprintf(__('Edit %s', true), __('Proposal', true)), array('action' => 'edit', $proposal['Proposal']['id'])); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('Delete %s', true), __('Proposal', true)), array('action' => 'delete', $proposal['Proposal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $proposal['Proposal']['id'])); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('Proposals', true)), array('action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('Proposal', true)), array('action' => 'add')); ?> </li>
			</ul>

			<!--h5>Users</h5-->
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

<div class="box">
	<div class="proposals view">
	<h2><?php  __('Proposal');?></h2>
		<div class="block">
			<dl><?php $i = 0; $class = ' class="altrow"';?>
						<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date Submitted'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['date_submitted']; ?>
			&nbsp;
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['ProjectType']['project_type']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Budget'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['project_budget']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Budget Award Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['budget_award_amount']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['project_title']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Average Merit Score'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['AverageMerit2011']['0']['avg_merit']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project Abstract'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['project_abstract']; ?>
			&nbsp;
		</dd>
			</dl>
		</div>
	</div>
</div>
<div class="box">
	<h2>
		<a href="#" id="toggle-related-records"><?php echo (__('Related', true)); ?></a>
	</h2>
	<div class="block" id="related-records">
				<div class="related">
			<h3><a name="fileList"></a><?php printf(__('Related %s', true), __('Evaluations', true));?></h3>
			<?php if (!empty($proposal['Upload'])):?>
			<table cellpadding = "0" cellspacing = "0">
				<thead>
					<tr>
								<th><?php __('Id'); ?></th>
		<th><?php __('proposal_id'); ?></th>
		<th><?php __('research_plan'); ?></th>
		<th><?php __('significance'); ?></th>
		<th><?php __('qualifications'); ?></th>
		<th><?php __('environment'); ?></th>
		<th><?php __('funder_absence'); ?></th>
		<th><?php __('budget_timeline'); ?></th>
		<th><?php __('responsiveness'); ?></th>
		<th><?php __('comments'); ?></th>
		<th><?php __('summary'); ?></th>
		<th><?php __('merit'); ?></th>
						<th class="actions"><?php __('Actions');?></th>
					</tr>
				</thead>
			<?php
				$i = 0;
				foreach ($proposal['Evaluation'] as $evaluation):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
		<tr<?php echo $class;?>>
			<td><?php echo $evaluation['id']; ?></td>
			<td><?php echo $evaluation['proposal_id']; ?></td>
			<td><?php echo $evaluation['research_plan']; ?></td>
			<td><?php echo $evaluation['significance']; ?></td>
			<td><?php echo $evaluation['qualifications']; ?></td>
			<td><?php echo $evaluation['environment']; ?></td>
			<td><?php echo $evaluation['funder_absence']; ?></td>
			<td><?php echo $evaluation['budget_timeline']; ?></td>
			<td><?php echo $evaluation['responsiveness']; ?></td>
			<td><?php echo $evaluation['comments']; ?></td>
			<td><?php echo $evaluation['summary']; ?></td>
			<td><?php echo $evaluation['merit']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'evaluations', 'action' => 'view', $evaluation['id'])); ?>
				<?php //echo ' | '. $this->Html->link(__('Edit', true), array('controller' => 'uploads', 'action' => 'edit', $upload['id'])); ?>
				<?php //echo  $this->Html->link(__('Delete', true), array('controller' => 'uploads', 'action' => 'delete', $upload['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $upload['id'])); ?>
                           
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

</div>
<div class="clear"></div>