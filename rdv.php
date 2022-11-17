
<?php
	class rdv
    
    {
        private $id_rdv=null;
		private $FirstName=null;
		private $lastName=null;
		private $email=null;
		private $Desiredcarservicedate=null;
        private $OperationType=null;
        private $Ownedcar=null;
        private $id_car=null;
       


		function __construct($id_rdv,$FirstName,$lastName,$email, $Desiredcarservicedate,$OperationType,$Ownedcar,$id_car){
			 $this->id_rdv=$id_rdv;
			$this->firstName=$FirstName;
			$this->lastName=$lastName;
			$this->email=$email;
			$this->Desiredcarservicedate=$Desiredcarservicedate;
			$this->OperationType=$OperationType;
            $this->Ownedcar=$Ownedcar;
            $this->id_car=$id_car;
           


		}function getid_rdv(){
			return $this->id_rdv;
		}
		
		function getfirstNAme(){
			return $this->firstName;
		}
		
		function getlastName(){
			return $this->lastName;
		}
		
		function getemail(){
			return $this->email;
		}
		function getDesiredcarservicedate(){
			return $this->Desiredcarservicedate;
		}
		function getOperationType(){
			return $this->OperationType;
		}
        function getOwnedcar(){
			return $this->Ownedcar;
		}
        function getid_car(){
			return $this->id_car;
		}
        
        
        
        
        function setfirstNAme(string $firstNAme){
			$this->firstNAme=$firstNAme;
		}
        function setlastName(string $lastName){
			$this->lastName=$lastName;
		}
		
		function setemail(string $email){
			$this->email=$email;
		}
		function setDesiredcarservicedate($Desiredcarservicedate){
			$this->Desiredcarservicedate=$Desiredcarservicedate;
		}
        function setOperationType(string $OperationType){
			$this->OperationType=$OperationType;
		}
        function id_car(string $id_car){
			$this->id_car=$id_car;
		}
		
	}


?>
