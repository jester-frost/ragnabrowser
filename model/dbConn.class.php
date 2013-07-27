<?php

	class dbConn extends PDO
	{
		private $user = "root2";
		private $pass = "";
		private $host = "localhost";
		private $dtbs = "ragnarok";
		
		public $db;
		
		public function __construct() {
		
			try
			{
				$this->db = parent::__construct('mysql:host=' . $this->host . ';dbname=' . $this->dtbs,$this->user, $this->pass);
				return $this->db;
				
			} catch (PDOException $e) {
				print "Error! ->" . $e->getMessage() . "<br />";
				die();
			}
		}
			
		
	}