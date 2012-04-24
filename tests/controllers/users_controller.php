<?php
class UsersController extends AppController {

	var $name = 'Users';
        var $uses = array('User','Ticket', 'Proposal');


        function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allowedActions = array('index','edit', 'view', 'add');
        $this->Auth->allow(array('logout','register','otpregister', 'message','success','login', 'resetpassword', 'newpassword', 'useticket'));
        }



        function login(){
            if ($this->Session->read('Auth.User')) {
		$this->Session->setFlash('You are logged in!');
$this->Session->read('Auth.User.group_id');
if ($this->Auth->user('group_id') == '1'){
    $this->redirect(array('admin'=> true, 'controller'=>'dashboards', 'action'=>'index'));
}
if ($this->Auth->user('group_id') == '2'){
    $this->redirect(array('manager'=> true, 'controller'=>'dashboards', 'action'=>'index'));
}
if ($this->Auth->user('group_id') == '3'){
    $this->redirect(array('controller'=>'dashboards', 'action'=>'index'));
}
if ($this->Auth->user('group_id') == '4'){
    $this->redirect(array('board'=> true, 'controller'=>'dashboards', 'action'=>'index'));
}
if ($this->Auth->user('group_id') == '5'){
    $this->redirect(array('chair'=> true, 'controller'=>'dashboards', 'action'=>'index'));
}
if ($this->Auth->user('group_id') == '6'){
    $this->redirect(array('small'=> true, 'controller'=>'dashboards', 'action'=>'index'));
}
if ($this->Auth->user('group_id') == '7'){
    $this->redirect(array('large'=> true, 'controller'=>'dashboards', 'action'=>'index'));
}
if ($this->Auth->user('group_id') == '8'){
    $this->redirect(array('general'=> true, 'controller'=>'dashboards', 'action'=>'index'));
}
if ($this->Auth->user('group_id') == '9'){
    $this->redirect(array('grantee'=> true, 'controller'=>'dashboards', 'action'=>'index'));
}

        }
        }

        function logout(){
$this->Session->setFlash('Good-Bye');
$this->redirect($this->Auth->logout());
        }

        function admin_logout(){
            $this->Session->setFlash('Good-Bye');
            $this->redirect($this->Auth->logout());
        }
        function grantee_logout(){
            $this->Session->setFlash('Good-Bye');
            $this->redirect($this->Auth->logout());
        }
        function large_logout(){
            $this->Session->setFlash('Good-Bye');
            $this->redirect($this->Auth->logout());
        }
        function manager_logout(){
            $this->Session->setFlash('Good-Bye');
            $this->redirect($this->Auth->logout());
        }
        function small_logout(){
            $this->Session->setFlash('Good-Bye');
            $this->redirect($this->Auth->logout());
        }

        function admin_index() {
            $this->User->recursive = 0;
            $this->set('users', $this->paginate());
        }

	function index() {
		$this->User->recursive = 0;
		//$this->set('users', $this->paginate());
                $this->paginate = array('conditions'=>array('User.id' => ($this->Session->read('Auth.User.id'))));
                $this->set('users', $this->paginate('User'));
	}

        function grantee_index() {
		$this->User->recursive = 0;
		//$this->set('users', $this->paginate());
                $this->paginate = array('conditions'=>array('User.id' => ($this->Session->read('Auth.User.id'))));
                $this->set('users', $this->paginate('User'));
	}

        function admin_view($id = null) {
          if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
        }

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

        function grantee_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

        function admin_add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$proposals = $this->User->Proposal->find('list');
		$this->set(compact('proposals'));
                $groups = $this->User->Group->find('list');
                $this->set(compact('groups'));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$proposals = $this->User->Proposal->find('list');
		$this->set(compact('proposals'));
	}

        function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$proposals = $this->User->Proposal->find('list');
		$this->set(compact('proposals'));
	}

        function board_edit($id = null){
            if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$proposals = $this->User->Proposal->find('list');
		$this->set(compact('proposals'));
        }

        function board_index(){
            $this->User->recursive = 0;
		//$this->set('users', $this->paginate());
                $this->paginate = array('conditions'=>array('User.id' => ($this->Session->read('Auth.User.id'))));
                $this->set('users', $this->paginate('User'));
        }

        function board_view($id = null){
          if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
        }

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$proposals = $this->User->Proposal->find('list');
		$this->set(compact('proposals'));
	}

        function grantee_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been updated', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$proposals = $this->User->Proposal->find('list');
		$this->set(compact('proposals'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

        function initDB() {
    $group =& $this->User->Group;
    //Allow admins to everything
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');

    //allow managers to posts and widgets
    $group->id = 2;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Dashboards/manager_index');
    $this->Acl->allow($group, 'controllers/Proposals');
    $this->Acl->allow($group, 'controllers/Proposals/add');
    $this->Acl->allow($group, 'controllers/Proposals/edit');
    $this->Acl->allow($group, 'controllers/Proposals/index');
    $this->Acl->allow($group, 'controllers/Proposals/view');
    $this->Acl->allow($group, 'controllers/Evaluations');
    $this->Acl->allow($group, 'controllers/Evaluations/add');
    $this->Acl->allow($group, 'controllers/Evaluations/edit');
    $this->Acl->allow($group, 'controllers/Evaluations/index');
    $this->Acl->allow($group, 'controllers/Evaluations/view');
    $this->Acl->allow($group, 'controllers/Evaluations/manager_add');
    $this->Acl->allow($group, 'controllers/Evaluations/manager_edit');
    $this->Acl->allow($group, 'controllers/Evaluations/manager_index');
    $this->Acl->allow($group, 'controllers/Evaluations/manager_view');

    //allow users to only add and edit on posts and widgets
    $group->id = 3;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Dashboards/index');
    $this->Acl->allow($group, 'controllers/Proposals/grant_submission');

    //allow board members to see board pages
    $group->id = 4;
    //$this->Acl->deny($group, 'controllers');
    //$this->Acl->allow($group, 'controllers/Proposals/edit');
    $this->Acl->allow($group, 'controllers/Dashboards/board_index');
    $this->Acl->allow($group, 'controllers/Proposals/board_index');
    $this->Acl->allow($group, 'controllers/Proposals/board_view');
    $this->Acl->allow($group, 'controllers/Proposals/board_large');
    $this->Acl->allow($group, 'controllers/Proposals/board_small');

    //allow chair to see chair pages
    $group->id = 5;
    //$this->Acl->deny($group, 'controllers');
    //$this->Acl->allow($group, 'controllers/Proposals/chair_add');
    $this->Acl->allow($group, 'controllers/Dashboards/chair_index');
    $this->Acl->allow($group, 'controllers/Proposals/chair_edit');
    $this->Acl->allow($group, 'controllers/Proposals/chair_index');
    $this->Acl->allow($group, 'controllers/Proposals/chair_view');

    //allow small grant reviewers to view small grants
    $group->id = 6;
    //$this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Dashboards/small_index');
    $this->Acl->allow($group, 'controllers/Proposals');
    $this->Acl->allow($group, 'controllers/Proposals/small_edit');
    $this->Acl->allow($group, 'controllers/Proposals/small_index');
    $this->Acl->allow($group, 'controllers/Proposals/small_view');
    $this->Acl->allow($group, 'controllers/Evaluations');
    $this->Acl->allow($group, 'controllers/Evaluations/small_add');
    $this->Acl->allow($group, 'controllers/Evaluations/small_edit');
    $this->Acl->allow($group, 'controllers/Evaluations/small_index');
    $this->Acl->allow($group, 'controllers/Evaluations/small_view');

    //allow large grant
    $group->id = 7;
    //$this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Dashboards/large_index');
    $this->Acl->allow($group, 'controllers/Proposals');
    $this->Acl->allow($group, 'controllers/Proposals/large_edit');
    $this->Acl->allow($group, 'controllers/Proposals/large_index');
    $this->Acl->allow($group, 'controllers/Proposals/large_view');
    $this->Acl->allow($group, 'controllers/Evaluations');
    $this->Acl->allow($group, 'controllers/Evaluations/large_add');
    $this->Acl->allow($group, 'controllers/Evaluations/large_edit');
    $this->Acl->allow($group, 'controllers/Evaluations/large_index');
    $this->Acl->allow($group, 'controllers/Evaluations/large_view');

    //allow general
    $group->id = 8;
    //$this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Dashboards/general_index');
    $this->Acl->allow($group, 'controllers/Proposals');
    $this->Acl->allow($group, 'controllers/Proposals/general_edit');
    $this->Acl->allow($group, 'controllers/Proposals/general_index');
    $this->Acl->allow($group, 'controllers/Proposals/general_view');

    //allow grantee
    $group->id = 9;
    //$this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Dashboards/grantee_index');
    $this->Acl->allow($group, 'controllers/Proposals');
    $this->Acl->allow($group, 'controllers/Proposals/grantee_edit');
    $this->Acl->allow($group, 'controllers/Proposals/grantee_index');
    $this->Acl->allow($group, 'controllers/Proposals/grantee_view');

    //we add an exit to avoid an ugly "missing views" error message
    echo "all done";
    exit;
}

function register() {
        if (!empty($this->data)) {

            $username = $this->data["User"]["username"];
            $user = $this->User->FindByUsername($username);
            $first_name = $this->data["User"]["first_name"];
            $last_name = $this->data["User"]["last_name"];
            $email = $this->data["User"]["email"];
            $groupID = 3;

                if(!$user){
                    // TODO validate that username is in an EMAIL format

                    // create an non-active user (with random password)
                    $randomPass = $this->Auth->password($this->generatePassword());
                    $user = array(
                                'User' => array(
                                'first_name'=>$first_name,
                                'last_name'=>$last_name,
                                'password' => $randomPass,
                                'username' =>$username,
                                'email' =>$email,
                                'group_id'=>$groupID
                                ),

                            );
                            $this->User->create();
                            $this->User->save($user);

                    // setup the TIME TO LIVE (valid until date) for the next two days
                    $now = microtime(true);
                    $ttl =$now + 48*3600; // the invitation is good for the next two days

                    // create the OTP - TTL = time to live
                    $otp = $this->Otp->createOTP(array('user'=>$username,'password'=>$randomPass,'ttl'=> $ttl) );

                    $link = '<a href="http://' . $_SERVER['SERVER_NAME'] . Dispatcher::baseUrl()."/users/otpregister/".$username."/".$ttl."/".$otp.'"> Click here for to register for the SFP Grant Application</a>';
                     // send mail
                    $this->Email->from    = "mpolonsky@societyfp.org";
                    $this->Email->to      = $email;

                    $this->Email->subject = "SFP Grant Proposal Registration";
                    $this->Email->sendAs = 'html';


                    $body = "The following link will give you access the SFP grant website.Please remember to add mpolonsky@societyfp.org to your contact list to prevent this message from being marked as spam.<br>";
                    $body .= $link;

                    $this->Email->send($body);
                    $this->Session->setFlash("Email sent, please check your email for your confirmation mesage");
                    $this->redirect("/");
                }else{
                   $this->Session->setFlash("This user is already in the system, please try another email");

                }

        }
}

function otpregister($email,$ttl,$otp) {
            if($email){
                $user = $this->User->FindByUsername($email);
                if($user){
                    $passwordHash = $user["User"]["password"];

                    $now = microtime(true);
                    // check expiration date. the experation date should be greater them now.
                    if($now <  $ttl){
                        // validate OTP
                        if($this->Otp->authenticateOTP($otp,array('user'=>$email,'password'=>$passwordHash,'ttl'=> $ttl)) ){
                               if($this->data){
                                   // set the password
                                   //$password = $this->data["User"]["pass"];
                                   $password = $this->data["User"]["password"];
                                   $this->User->id =  $user["User"]["id"];

                                   if(strlen($password)<6){
                                    $this->Session->setFlash("Password Must be at least 6 characters long. Please enter a longer password.");

                                   }else if ($this->Auth->password($this->data["User"]["password"]) != $this->Auth->password($password)) {

                                       $this->Session->setFlash( 'Password and Confirmation password do not match. Please try again.');
                                   }else{

                                     $this->User->saveField('password',   $this->Auth->password($password));
                                      //$this->Session->setFlash( 'Password Changed');
                                     $this->redirect(array('action' => 'success'));
                                   }

                               }
                               $this->set('email',$email);
                               $this->set('ttime',$ttl);
                               $this->set('hash',$otp);

                        }else{
                            $this->Session->setFlash("Invalid request. Please contact the website administration.");
                            $this->redirect(array('action' => 'message'));

                        }
                    }else{
                        $this->Session->setFlash("Your invitation has expired. Please contact the website administration.");
                        $this->redirect(array('action' => 'message'));
                    }
                }
            }
            //TODO: handle invalid request with no parameters
	}





     function generatePassword($length=6, $strength=0){
		$vowels = 'aeuy';
		$consonants = 'bdghjmnpqrstvz';
		if ($strength & 1) {
			$consonants .= 'BDGHJLMNPQRSTVWXZ';
		}
		if ($strength & 2) {
			$vowels .= "AEUY";
		}
		if ($strength & 4) {
			$consonants .= '23456789';
		}
		if ($strength & 8) {
			$consonants .= '@#$%';
		}

		$password = '';
		$alt = time() % 2;
		for ($i = 0; $i < $length; $i++) {
			if ($alt == 1) {
				$password .= $consonants[(rand() % strlen($consonants))];
				$alt = 0;
			} else {
				$password .= $vowels[(rand() % strlen($vowels))];
				$alt = 1;
			}
		}
		return $password;
	}

        function success() {}

        function message() {}

        function resetpassword($email=null){
		//grab a fresh botcheck question from the db
                // for this example youll need to static code these, my botcheck article is coming soon though
		// $bc=$this->Botcheck->getFreshBotcheck();
		$this->whatWeAsk="Is water a liquid at room temperature?";
		$this->humanWouldType=array('Yes', 'of course', 'yes');
		$this->set('botQuestion', $this->whatWeAsk);
		if(empty($this->data)){
			$this->data['User']['email']=$email;
			//show form
		}else{
			//already entered email
			$botcheck = $this->data['User']['check'];
				//set email to passed variable if present
				if(!$email) $email=$this->data['User']['email'];
				// make sure whave email and a check
				if(!$email){
					$this->User->invalidate('email');
				}elseif(!in_array(strtolower($botcheck),$this->humanWouldType)){
				 	$this->User->invalidate('check');
				}else{
					//email entered, check for it
					$account=$this->User->findByEmail($email);
					if($account['User']['isBanned']){
						//banned user, tell em where to go
						$this->Session->setFlash('<h3>This account is locked due to violation of terms</h3>');
						$this->redirect('/');
					}
					if(!isset($account['User']['email'])){
						$this->Session->setFlash('<h3>We Don\'t have such and email on record.</h3>');
						$this->redirect('/');

					}
					$hashyToken=md5(date('mdY').rand(4000000,4999999));
					$message = $this->Ticketmaster->createMessage($hashyToken);
                                        $this->Email->from    = 'Marlo Polonsky <mpolonsky@societyfp.org>';
                                        $this->Email->to      = $email;
                                        $this->Email->subject = $account['User']['username'];
                                        $this->Email->send($message);

					$data['Ticket']['hash']=$hashyToken;
					$data['Ticket']['data']=$email;
					$data['Ticket']['expires']=$this->Ticketmaster->getExpirationDate();

					if ($this->Ticket->save($data)){
						$this->Session->setFlash('An email has been sent with instructions to reset your password');
						$this->redirect('/');
					}else{
						$this->Session->setFlash('Ticket could not be issued');
						$this->redirect('/');

					}
				}

		}
	}

	function useticket($hash){
		//purge all expired tickets
		//built into check
		$results=$this->Ticketmaster->checkTicket($hash);

		if($results){
			//now pull up mine IF still present
			$passTicket=$this->User->findByEmail($results['Ticket']['data']);

			$this->Ticketmaster->voidTicket($hash);
			$this->Session->write('tokenreset',$passTicket['User']['id']);
			$this->Session->setFlash('Enter your new password below');
			$this->redirect('/users/newpassword/'.$passTicket['User']['id']);
		}else{
			$this->Session->setFlash('Your ticket is lost or expired.');
			$this->redirect('/');
		}

	}


	function newpassword($id = null) {

		if($this->Session->check('tokenreset')){
			//user is not logged in, BUT has TOKEN in hand
		}else{
			// But you only want authenticated users to access this action.
//lines like the one below 'checkSession are  authentication code, so you can ignore these or use Auth
			$this->checkSession(1,'/users/edit/'.$id);

			//But youll need to read the user info somehow, and only the user who owns the profile
			$attempter=$this->Session->read('User');

			//make sure its the admin or the rigth user
			if($attempter['User']['id']!=$id && $attempter['Role']['rights']<4)
			{
				//not  the user, not the admin and not a reset request via toekns
				/*
				 * SHAME
				 */
				$this->Userban->banuser('Edit Anothers Password');
				$this->Session->setFlash('Your account has been banned');
				$this->redirect('/');
			}

		}

		if (empty($this->data)) {
			if($this->Session->check('tokenreset')) $id=$this->Session->read('tokenreset');
			if (!$id) {
				$this->Session->setFlash('Invalid id for User');
				$this->redirect('/users/index');
			}
			$this->data = $this->User->read(null, $id);
		} else {

			$this->data['User']['password']=md5($this->data['User']['password']);
			if ($this->User->save($this->data,true,array('password'))) {
				//delkete session token and dlete used ticket from table
				$this->Session->delete('tokenreset');
				$this->Session->setFlash('The User\'s Password has been updated');
				$this->redirect('/');
			} else {
				$this->Session->setFlash('Please correct errors below.');
			}
		}
	}

}
?>