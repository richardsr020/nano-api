<?php 

class Model{

   public $pdo;

   public $pass='';

   public $conn;

   public $sdn = "mysql:host=localhost;dbname=nanodb";

   public function connect(){

       $host=$this->sdn;

       try{

       $this->pdo = new PDO($host,'root','');

       }catch(PDOException $e){

        printf("Échec de la connexion : %s\n", $e->getMessage());

       }

   }



  

  

   

}

 

$md = new Model();

$md->connect();



?>