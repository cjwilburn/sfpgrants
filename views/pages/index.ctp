<?phpecho "Welcome to the SFP research grant site"; ?><br /><br /><?php echo $this->Html->link(__('Login', true), array('controller'=>'users','action'=>'login'));?><br /><?php echo $this->Html->link(__('Logout', true), array('controller'=>'users','action'=>'logout')); ?><br /><?php echo $this->Html->link(__('Forgot your password?', true), array('controller'=>'users','action'=>'resetpassword')); ?><br /> <br /><h3>New to the site?</h3><?php echo $this->Html->link(__('Register here', true), array('controller'=>'users','action'=>'register')); ?>