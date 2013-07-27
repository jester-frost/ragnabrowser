<?php

	class secure
	{
		private $session_name = "sec_l";
		
		public function __construct() {
			session_name($this->session_name);
			session_start();
			setcookie(session_name(), session_id(), time()+86400);
			session_regenerate_id(true);
		}
		
		public function login($userid, $user_pass, $rmt) {
			
			$dbh = new dbConn();
			$statement = $dbh->prepare('SELECT * FROM `login` WHERE userid = ? LIMIT 1');
			$statement -> execute(array($userid));
			$results = $statement->fetchAll(PDO::FETCH_ASSOC);

			if($statement->rowCount() > 0) {
				if($results[0]['user_pass'] != $user_pass) {
					return false;
				} 
				$_SESSION['account_id']      = $results[0]['account_id'];
				$_SESSION['userid']  = $results[0]['userid'];
				$_SESSION['ip']      = $_SERVER['REMOTE_ADDR'];
				$_SESSION['rmtPort'] = $_SERVER['REMOTE_PORT'];
				$_SESSION['p_l']     = $this->hashedPhrase($_SERVER['REMOTE_PORT'], $_SERVER['HTTP_USER_AGENT']);
				return true;
			}		
		}
		
		public function checkLogin() {
			if(
			isset($_SESSION['account_id']) &&
			isset($_SESSION['userid']) &&
			isset($_SESSION['ip']) &&
			isset($_SESSION['p_l']) &&
			isset($_SESSION['rmtPort']))
			{
				if(
				$_SESSION['p_l'] == $this->hashedPhrase($_SERVER['REMOTE_PORT'], $_SERVER['HTTP_USER_AGENT']) &&
				$_SESSION['ip'] == $_SERVER['REMOTE_ADDR'])
				{
					return true;
				} else {
					return false;
				}
				
			} else {
				return false;
			}
			
			
		}
		
		public function hashedPhrase($param1, $param2) {
			return hash('sha1', md5($param1) . md5($param2));	
		}
	}