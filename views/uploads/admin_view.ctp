<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">
			<!--h5>Uploads</h5>
			<ul class="menu">				
				<li><?php //echo $this->Html->link(sprintf(__('Edit %s', true), __('Upload', true)), array('action' => 'edit', $upload['Upload']['id'])); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('Delete %s', true), __('Upload', true)), array('action' => 'delete', $upload['Upload']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $upload['Upload']['id'])); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('Uploads', true)), array('action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('Upload', true)), array('action' => 'add')); ?> </li>
			</ul>			
				
			<h5>Proposals</h5>
			<ul class="menu">
				<li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('Proposals', true)), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('Proposal', true)), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
			</ul-->
                        <ul class="nav">
                        <li><a href="#"><span>Uploads</span></a>
                            <ul>
                                 <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Uploads', true)), array('action' => 'index'));?></li>
                            </ul>
                        </li>
                        <li><a href="#"><span>Proposals</span></a>
                            <ul>
                                 <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Proposals', true)), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Proposal', true)), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
                            </ul>
                        </ul>
		</div>
	</div>
</div>

<div class="grid_12">

<div class="box">
	<div class="uploads view">
	<h2><?php  __('Upload');?></h2>
		<div class="block">
			<dl><?php $i = 0; $class = ' class="altrow"';?>
						<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Proposal'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($upload['Proposal']['id'], array('controller' => 'proposals', 'action' => 'view', $upload['Proposal']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Size'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['size']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['modified']; ?>
			&nbsp;
		</dd>
			</dl>
		</div>
	</div>
</div>


</div>
<div class="clear"></div>
