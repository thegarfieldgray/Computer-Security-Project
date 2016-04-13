<?php

require_once('Database.php');

class User
{	

	private $connection;
	
	public function __construct()
	{
		$database = new Database();
		$this->connection = $database->connect();;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->connection->prepare($sql);
		return $stmt;
	}
	
	public function signup($fname, $lname, $username, $password, $creditCard, $address)
	{
		try
		{
			//$new_password = password_hash($upass, PASSWORD_DEFAULT);
			
			$stmt = $this->connection->prepare("INSERT INTO customer(First_Name,Last_Name,Username,Password,Credit_Card, Address) 
		                                               VALUES(:fname, :lname, :username, :password, :creditcard, :address)");
												  
			$stmt->bindparam(":fname", $fname);
			$stmt->bindparam(":lname", $lname);
			$stmt->bindparam(":username", $username);
            $stmt->bindparam(":password", $password);
            $stmt->bindparam(":creditcard", $creditCard);
            $stmt->bindparam(":address", $address);										  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	
	public function login($uname, $pass)
	{
		try
		{
			$stmt = $this->connection->prepare("SELECT * FROM customer WHERE Username = :uname ");
			$stmt->execute(array(':uname'=>$uname));
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
            
			if($stmt->rowCount() == 1)
			{
				if($pass === $result['Password'])
				{
					$_SESSION['user'] = $result;
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function isLoggedin()
	{
		if(isset($_SESSION['user']))
		{
			return true;
		}
        
        return false;
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function logout()
	{
		session_destroy();
		unset($_SESSION['user']);
		return true;
	}
}
?>