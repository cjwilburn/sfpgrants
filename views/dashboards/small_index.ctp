<div class="grid_4">
	<div class="box menu">
		<?php echo $this->element('small/small_left_menu'); ?>
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
        echo $this->Html->link('View all small grant submissions', array('controller'=>'proposals', 'action'=>'index', 'small'=>true));
        echo $this->Html->tag('li');
        echo $this->Html->link('View small grants ranked by average merit score', array('controller'=>'small_grant_ranks', 'action'=>'index', 'small'=>true));
        echo $this->Html->tag('li');
        echo $this->Html->link('View grants that you will be evaluating', array('controller'=>'users_proposals', 'action'=> 'index', 'small'=>true));
        echo $this->Html->tag('li');
        echo $this->Html->link('View and edit evaluations that you have already submitted', array('controller'=>'evaluations', 'action'=> 'index', 'small'=>true));
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