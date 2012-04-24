<?php
class TicketmasterComponent extends object{
	var $sitename='SFP Grants Application';
	var $linkdomain='grants.societyfp.org';
	//how many hours to honor token
	var $hours=24;
/*
 *  Startup - Link the component to the controller.
 */
    function startup(&$controller)
    {
		$this->controller =& $controller;
    }
	function getExpirationDate(){
		$date=strftime('%c');
		$date=strtotime($date);
		$date+=($this->hours*60*60);
		$expired=date('Y-m-d H:i:s',$date);
		return $expired;

	}

	function createMessage($token){

		$ms='Password Reset Request';
		$ms='Your email has been used in a password reset request at '.$this->sitename.'. If you did not initiate this request, then ignore this message. Copy all of the link below (some of the link may not be hyperlinked) and paste into your browser to reset your password. http://'.$this->linkdomain.'/users/useticket/'.$token.      '';
		return $ms;

	}

	function purgeTickets(){
		$this->controller->Ticket->deleteAll('Ticket.expires <= now() LIMIT 1');

	}

	/*
	 * actually for logical reason well be indiscrimnate and clean ALL tockets for this email
	 */
	function voidTicket($hash){
		$this->controller->Ticket->deleteAll(array('hash' => $hash));
	}

	function checkTicket($hash){
		$this->purgeTickets();
		$ret=false;
		$tick=$this->controller->Ticket->findByHash($hash);

		if(empty($tick)){
			//no more ticket
		}else{
			$ret=$tick;
		}
		return $ret;
	}
}
?>