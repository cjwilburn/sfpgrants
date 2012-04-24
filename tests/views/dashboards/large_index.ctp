<div class="grid_4">
	<div class="box menu">
		<?php echo $this->element('large/large_left_menu'); ?>
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
        echo $this->Html->link('View all large grant submissions', array('controller'=>'proposals', 'action'=>'index', 'large'=>true));
        echo $this->Html->tag('li');
        echo $this->Html->link('View grants that you will be evaluating', array('controller'=>'proposals', 'action'=> 'assignment', 'large'=>true));
        echo $this->Html->tag('li');
        echo $this->Html->link('View and edit evaluations that you have already submitted', array('controller'=>'evaluations', 'action'=> 'index', 'large'=>true));
        echo $this->Html->tag('h2','Resources');
        echo $this->Html->tag('ul');
        echo $this->Html->tag('li');
        echo $this->Html->link('RFP', 'http://www.societyfp.org/_documents/grants/SFP-rfp2011.pdf');
        echo $this->Html->tag('li');
        echo $this->Html->link('Grant Submissions Process', 'http://www.societyfp.org/research/applying.asp' );
        echo $this->Html->tag('h2','Tools');
        ?>
</div>
<div class="clear"></div>