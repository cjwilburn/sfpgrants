<div class="grid_4">		<div class="box">							<h2>			<a href="#" id="toggle-admin-actions">Actions</a>		</h2>		<div class="block" id="admin-actions">			                        <ul class="nav">                                 <li><a href="#"><span>Dashboard</span></a>                            <ul>                                     <li><?php echo $this->Html->link('Return to dashboard', array('controller' => 'dashboards', 'action' => 'index')); ?></li>                            </ul></li>                        <li><a href="#"><span>Users</span></a>                            <ul>                                     <li><?php echo $this->Html->link(sprintf(__('List %s', true), __('users', true)), array('controller' => 'users', 'action' => 'index')); ?></li>                            </ul></li>                                <li><a href="#"><span>Proposals</span></a>                            <ul>                                     <!--li><?php //echo $this->Html->link(sprintf(__('New %s', true), __('proposal', true)), array('controller' => 'proposals', 'action' => 'grant_submission')); ?></li>                                     <li><?php //echo $this->Html->link(sprintf(__('List %s', true), __('proposals', true)), array('controller' => 'proposals', 'action' => 'index')); ?></li-->                            </ul></li>                        </ul>		</div>	</div></div><div class="grid_12">	<h2 id="page-heading">Welcome <?php echo $first_name; ?></h2>	<div class="box">	</div>         <?php        echo $this->Html->tag('h2','Grants');        echo $this->Html->tag('ul');        //echo $this->Html->tag('li');        //echo $this->Html->link('Submit a grant', array('controller'=>'proposals', 'action'=>'grant_submission'));        echo $this->Html->tag('li');        echo $this->Html->link('Review and edit your submitted grants', array('controller'=>'proposals', 'action'=>'index'));        echo $this->Html->tag('li');        echo $this->Html->link('If you would like to change any user information, including your password, please click here.', array('controller'=>'users', 'action'=>'index'));        ?></div><div class="clear"></div>