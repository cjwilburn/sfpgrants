<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<h5>Evaluations Users</h5>
			<ul class="menu">				
				<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Evaluations User', true)), array('action' => 'edit', $evaluationsUser['EvaluationsUser']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Evaluations User', true)), array('action' => 'delete', $evaluationsUser['EvaluationsUser']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluationsUser['EvaluationsUser']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Evaluations Users', true)), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Evaluations User', true)), array('action' => 'add')); ?> </li>
			</ul>			
				
			<h5>Evaluations</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Evaluations', true)), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Evaluation', true)), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
			</ul>

			<h5>Users</h5>
			<ul class="menu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div class="grid_12">

<div class="box">
	<div class="evaluationsUsers view">
	<h2><?php  __('Evaluations User');?></h2>
		<div class="block">
			<dl><?php $i = 0; $class = ' class="altrow"';?>
						<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evaluationsUser['EvaluationsUser']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Evaluation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($evaluationsUser['Evaluation']['id'], array('controller' => 'evaluations', 'action' => 'view', $evaluationsUser['Evaluation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($evaluationsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $evaluationsUser['User']['id'])); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
	</div>
</div>


</div>
<div class="clear"></div>
