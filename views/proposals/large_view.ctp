<div class="grid_4">
	<div class="box">
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
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
		</dd>
<!--		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inv First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['inv_first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inv Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['inv_last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inv Institution'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proposal['Proposal']['inv_institution']; ?>
			&nbsp;
		</dd-->
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
				
			<h3><a name="fileList"></a><?php printf(__('Related %s', true), __('Uploads', true));?></h3>
			<?php if (!empty($proposal['Upload'])):?>
			<table cellpadding = "0" cellspacing = "0">
				<thead>
					<tr>
								<th><?php __('Id'); ?></th>
		<th><?php __('proposal_id'); ?></th>
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
			<!--td><?php //echo $upload['name']; ?></td-->
                        <td><?php echo '<a href="/webroot/files/'.$upload['name'].'" target="_blank">'.$upload['name'].'</a><br />'; ?></td>
			<td><?php echo $upload['type']; ?></td>
			<td><?php echo $upload['size']; ?></td>
			<td><?php echo $upload['created']; ?></td>
			<td><?php echo $upload['modified']; ?></td>
			<td class="actions">
				<?php //echo $this->Html->link(__('View', true), array('controller' => 'uploads', 'action' => 'view', $upload['id'])); ?>
				<?php //echo ' | '. $this->Html->link(__('Edit', true), array('controller' => 'uploads', 'action' => 'edit', $upload['id'])); ?>
				<?php //echo  $this->Html->link(__('Delete', true), array('controller' => 'uploads', 'action' => 'delete', $upload['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $upload['id'])); ?>
                                <?php //echo $this->Html->link('Evaluate This Proposal', array('controller'=>'evaluations', 'action'=>'add', '?'=>array('proposal_id'=> $upload['proposal_id']))); ?>
			</td>
		</tr>
                
	<?php endforeach; ?>
                <tr>
                    <td> <?php echo $this->Html->link('Evaluate This Proposal', array('controller'=>'evaluations', 'action'=>'add')) ?></td>
                </tr>
			</table>
		<?php endif; ?>

			<div class="actions">
			</div>
		</div>
			</div>
</div>
</div>
<div class="clear"></div>

