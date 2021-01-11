<?php
	// Data base Connection We can continue the Api is Begin here. 
	class DBconfig 
	{
		private $_hostName 	= 	"localhost";
		private $_userName 	= 	"phpmyadmin";
		private $_password 	= 	"Ecrow@21";
		private $_dbName 	=	"google_clone";

		protected $_connection_obj;

		private $_option 	= 	array(
									PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
									PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
								);
		public function __construct()
		{

			$server_setup 	=	"mysql:host=".$this->_hostName.";dbname=".$this->_dbName.";charset=utf8";
			if( !isset( $this->_connection_obj ) )
			{
				try
				{
					$this->_connection_obj 	=	new PDO( $server_setup,$this->_userName,$this->_password,$this->_option ); 					
				}
				catch( PDOException $e )
				{
					echo "can't connect to the database ".$e->getMessage();
					exit;
				}

				return $this->_connection_obj;
			}
		}
		public function prepare( $query )
		{
			return $this->_connection_obj->prepare( $query );
		}
	}


	class Operation extends DBconfig
	{
		function __construct()
		{
			parent::__construct();
		}

		public function search_data_for_keyword( $keyword )
		{			
			$response 		=	array();
			$status 		=	"active";
			$keyword 		=	"%$keyword%";
			$select_query 	=	"	SELECT * FROM gc_google_search_list 
									WHERE 
										(
											( ggsl_search_title LIKE :keyword ) 		|| 
											( ggsl_search_link 	LIKE :keyword ) 		||
											( ggsl_search_description LIKE  :keyword )
										) 	AND  
										ggsl_search_status = :status
								"; 
			$prepare_obj 	=	$this->prepare( $select_query );

			$prepare_obj->bindParam( "keyword",$keyword );
			$prepare_obj->bindParam( "status",$status 	);
			// $prepare_obj->debugDumpParams();
			if( $prepare_obj->execute() )
			{

				if( $get_data = $prepare_obj->fetchAll() )
				{
					$response["appresponse"]  	=	"success";
					$response["resultData"] 	= 	$get_data; 
				}
				else 
				{
					$response["appresponse"]  =	"failed";
					$response["errorMessage"] = "No Records Found!. Please Write the Correct keyword. "; 		
				}
			}
			else 
			{
				$response["appresponse"]  =	"failed";
				$response["errorMessage"] = "Err-001 Unable to process your request."; 
			}
			return $response; 
		}
	}


?>