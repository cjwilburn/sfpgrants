<h1>Yahoo!!</h1>
<div ><?php if ($session->check('Message.flash')) { $session->flash(); } ?></div>
<div style="clear:both">
	<div class="container_header">Process successful! You successfully activated your account you may now login to the website.</div>
	<div class="container_body">
	<br/>
	<br/>You can now <a href="<?php echo Dispatcher::baseUrl() ?>login/">login to the system</a> using your username and password.</div>
</div>
