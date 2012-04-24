<div class="grid_4">
	<div class="box menu">
		<?php echo $this->element('chair/chair_left_menu'); ?>
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
        echo $this->Html->link('View all small evaluations', array('controller'=>'evaluations', 'action'=>'small', 'chair'=>true));
        echo $this->Html->tag('li');
        echo $this->Html->link('View all large evaluations', array('controller'=>'evaluations', 'action'=>'large', 'chair'=>true));
        echo $this->Html->tag('li');
        echo $this->Html->link('View all large proposals', array('controller'=>'proposals', 'action'=>'large', 'chair'=>true));
        echo $this->Html->tag('li');
        echo $this->Html->link('View all small proposals', array('controller'=>'proposals', 'action'=>'small', 'chair'=>true));
        echo $this->Html->tag('li');
	    echo $this->Html->link('View small grants ranked by average merit score', array('controller'=>'chair_small_ranks', 'action'=>'index', 'chair'=>true));
	    echo $this->Html->tag('li');
	    echo $this->Html->link('View large grants ranked by average merit score', array('controller'=>'chair_large_ranks', 'action'=>'index', 'chair'=>true));
        echo $this->Html->tag('h2','Resources');
        echo $this->Html->tag('ul');
        echo $this->Html->tag('li');
        echo $this->Html->link('RFP', 'http://www.societyfp.org/_documents/grants/SFP-rfp2011.pdf');
        echo $this->Html->tag('li');
        echo $this->Html->link('Grant Submissions Process', 'http://www.societyfp.org/research/applying.asp' );
        echo $this->Html->tag('h2','Tools');
        echo $this->Html->tag('ul');
        echo $this->Html->tag('li');
        echo $this->Html->link('Change your password', array('controller'=>'users','action'=>'index'));
        ?>
</div>
<div class="clear"></div>