<?PHP
	class rec{
		private $idd=null;
		private $firstname=null;
        private $lastname=null;
		private $email=null;
		private $typecar=null;	
        private $messager=null;	
        private $idrec=null;
		private $rdv=null;	
		
		function __construct($firstname,$lastname,$email,$typecar,$messager,$idrec,$rdv)
        {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->typecar = $typecar;
            $this->messager = $messager;
            $this->idrec = $idrec;
			$this->rdv = $rdv;
			
			
			
		}
		
		function getidd(){
			return $this->idd;
		}
		function getfirstname(){
			return $this->firstname;
		}
        function getlastname(){
			return $this->lastname;
		}
		function getemail(){
			return $this->email;
		}
		function gettypecar(){
			return $this->typecar;
		}
        function getmessager(){
			return $this->messager;
		}
        function getidrec(){
			return $this->idrec;
		}
		function getrdv(){
			return $this->rdv;
		}
		
		
		
		function setfirstname($firstname){
			$this->firstname=$firstname;
		}
        function setlastname($lastname){
			$this->lastname=$lastname;
		}
		function setemail($email){
			$this->email=$email;
		}
		function settypecar($typecar){
			$this->typecar=$typecar;
		}
        function setmessager($messager){
			$this->messager=$messager;
		}
        function setidrec($idrec){
			$this->idrec=$idrec;
		}
		
	}

?>