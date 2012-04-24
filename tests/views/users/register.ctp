<h1>User Registration</h1>
<div style="background-color:yellow;" ><?php if ($session->check('Message.flash')) { $session->flash(); } ?></div>

<p>Please remember to enter your email address in a proper format. A validation email will be sent to that email address.</p>
<p>Please remember to add <a href="mailto:mpolonsky@societyfp.org">mpolonsky@societyfp.org</a> to your address book to prevent this message from being sent as spam.</p>

<?php
 echo $this->Form->create('User', array('action' => 'register'));
    echo $this->Form->input('username');
    echo $this->Form->input('first_name');
    echo $this->Form->input('last_name');
    echo $this->Form->input('email');
    echo $this->Form->end('Create Account');
?>

