<div class="grid_4">	
	<div class="box">			
				<h2>
			<a href="#" id="toggle-admin-actions">Actions</a>
		</h2>
		<div class="block" id="admin-actions">			
			<!--h5>Uploads</h5>
			<ul class="menu">
								<li><?php //echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Upload.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Upload.id'))); ?></li>
								<li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('Uploads', true)), array('action' => 'index'));?></li>
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
    <h2 id="page-heading"><?php printf(__('Edit %s', true), __('Upload', true)); ?></h2>
    
	<div class="uploads form">
	<?php echo $this->Form->create('Upload');?>
		<fieldset>
	 		<legend><?php printf(__('Upload Record', true)); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('proposal_id');
		echo $this->Form->input('name');
		echo $this->Form->input('type');
		echo $this->Form->input('size');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
<div class="clear"></div>
