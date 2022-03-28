<?php

class Animale
{
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "testare";
	private $conn; 

	
function __construct()
{
		$this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
	 }
	 
function getDataResult($query)
{
		 $sql_statement = $this->conn->prepare($query);
		 $sql_statement->execute();
		 $result = $sql_statement->get_result();

		 if ($result->num_rows > 0) 
		 {
			 while ($row = $result->fetch_assoc()) 
			 {
				$resultset[] = $row;
			 }
		 }

		 if (! empty($resultset)) 
		 {
			return $resultset;
		 }
	 }
	 
//lista cu toate animalele
function getAnimale($tab_animal)
{
		 $query = "SELECT * FROM ".$tab_animal;
		 $result = $this->getDataResult($query);
		 return $result;
	 }
	 
}
?>