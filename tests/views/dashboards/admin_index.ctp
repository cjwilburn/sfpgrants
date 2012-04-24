<div class="grid_4">
	<div class="box menu">
		<?php echo $this->element('admin/admin_left_menu'); ?>
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
        echo $this->Html->link('View all large grant submissions', array('controller'=>'proposals', 'action'=>'large', 'admin'=>true));
        echo $this->Html->tag('li');
        echo $this->Html->link('View all small grant submissions', array('controller'=>'proposals', 'action'=>'small', 'admin'=>true));
        echo $this->Html->tag('li');
        echo $this->Html->link('View past and current grant evaluation assignments', array('controller'=>'users_proposals', 'action'=> 'index', 'admin'=>true));
        echo $this->Html->tag('li');
        echo $this->Html->link('Make new grant evaluation assignments', array('controller'=>'users_proposals', 'action'=> 'add', 'admin'=>true));
        echo $this->Html->tag('h2','Resources');
        echo $this->Html->tag('ul');
        echo $this->Html->tag('li');
        echo $this->Html->link('RFP', 'http://www.societyfp.org/_documents/grants/SFP-rfp2011.pdf');
        echo $this->Html->tag('li');
        echo $this->Html->link('Grant Submissions Process', 'http://www.societyfp.org/research/applying.asp' );
        echo $this->Html->tag('h2','Tools');
        echo $this->Html->tag('ul');
        echo $this->Html->tag('li');
        echo $this->Html->url('/webroot/files/', true);
        echo $this->Html->tag('li');
        echo $this->Html->link('Change your password', array('controller'=>'users','action'=>'resetpassword'));
        ?>
</div>
<div class="clear"></div>

