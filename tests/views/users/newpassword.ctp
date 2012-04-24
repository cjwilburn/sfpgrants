<div id="view_page">
	<h2>New Password</h2>
	<form action="<?php echo $html->url('/users/newpassword/'.$form->value('User/id')); ?>" method="post">
	<div class="required">
		<?php echo $this->data['User']['first_name']." ".$this->data['User']['last_name'];?>
	 	<?php echo $form->hidden('User.first_name', array('size' => '60','enabled'=>'false'));?>
	</div>
	<div class="required">
	 	<?php echo $form->hidden('User.last_name', array('size' => '60'));?>
	</div>
	<div class="required">
		<b>Username: </b><?php echo $this->data['User']['username'] ;?>
	 	<?php echo $form->hidden('User.username', array('size' => '60'));?>
	</div>
	<div class="required">
		<?php echo $form->label('User.password', 'Password');?>
	 	<?php echo $form->password('User.password', array('size' => '30','value'=>''));?>
		<?php echo $form->error('User.password', 'Please enter the Password.');?>
	</div>
	<div class="required">
		<?php echo $form->label('User.confirmpassword', 'Confirm Password');?>
	 	<?php echo $form->password('User.confirmpassword', array('size' => '30','value'=>''));?>
		<?php echo $form->error('User.confirmpassword', 'Please enter the Password Again.');?>
		<?php echo $form->error('User.checkpassword', 'Please Be Sure Passwords Match.');?>
	</div>
	<?php echo $form->hidden('User.id')?>
	<div class="submit">
		<?php echo $form->submit('Save');?>
	</div>
	</form>
</div>
<ul class="actions">
<li><?php echo $html->link('Return Home', '/')?></li>
</ul>