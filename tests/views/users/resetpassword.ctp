<div id="view_page">
<h2>Reset Lost Password</h2>
<form action="<?php echo $html->url('/users/resetpassword/'); ?>" method="post">
<div class="required">
	<?php echo $form->label('User.email', 'E-mail');?>
 	<?php echo $form->text('User.email', array('size' => '40'));?>
	<?php echo $form->error('User.email', 'Please enter email');?>
</div>
<div>
	<p>
	   	   <?php echo $form->input('User.check', array('size'=>'10','label'=>$botQuestion,'error'=>'Are you human?'));?>
	</p>
	<?php echo $form->error('User.check', 'Are you human!');?>
</div>

<div class="submit">
	<?php echo $form->submit('Reset Password');?>
</div>
</form>
</div>