<div class="grid_4">
	<div class="box menu">
		<?php echo $this->element('general/general_left_menu'); ?>
	</div>
</div>

<div class="grid_12">
	<h2 id="page-heading">Welcome <?php echo $first_name; ?></h2>
	<div class="box">
	</div>
        <?php
        echo $this->Html->tag('h2','Grants');
        echo $this->Html->tag('ul');
        echo $this->Html->tag('li');
        echo $this->Html->link('View All Large Grant Submissions', array('controller'=>'proposals', 'action'=>'large', 'general'=>true));
        echo $this->Html->tag('li');
        echo $this->Html->link('View All Small Grant Submissions', array('controller'=>'proposals', 'action'=>'small', 'general'=>true));
        echo $this->Html->tag('h2','Resources');
        echo $this->Html->tag('ul');
        echo $this->Html->tag('li');
        echo $this->Html->link('RFP');
        echo $this->Html->tag('li');
        echo $this->Html->link('Proposal Review Guide');
        echo $this->Html->tag('h2','Tools');
        echo $this->Html->tag('ul');
        echo $this->Html->tag('li');
        echo $this->Html->link('Change your password', array());
        ?>
</div>
<div class="clear"></div>