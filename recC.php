<?php

include_once 'config.php';


class recC
{
    public function listerec()
    {
        $sql = "SELECT * FROM rec";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleterec($id)
    {
        $sql = "DELETE FROM rec WHERE idd= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function addrec($rec){
        $db = config::getConnexion();
        try{
            $query = $db->prepare('INSERT INTO rec (firstname, lastname, email, typecar, messager, idrec, rdv)
            VALUES (:firstname,:lastname,:email,:typecar,:messager,:idrec ,:rdv )');
            $query->execute([
				'firstname' => $rec->getfirstname(),
                'lastname' => $rec->getlastname(),
				'email' => $rec->getemail(),
		 		'typecar' => $rec->gettypecar(),
		 		'messager' => $rec->getmessager(),
		 		'idrec' => $rec->getidrec(),
                'rdv'=>$rec->getrdv()
               
            ]);			
        }
        catch (Exception $e){
            die ('Erreur: '.$e->getMessage());
        }			        
    } 
    function updaterec($rec, $idd)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE rec SET 
                        firstname = :firstname,
                        lastname = :lastname,
						email = :email,
						typecar = :typecar,
                        messager = :messager,
                        idrec = :idrec,
                        rdv = :rdv
					    WHERE idd = :idd'
            );
            $query->execute([
                    'firstname' => $rec->getfirstname(),
                    'lastname' => $rec->getlastname(),
					'email' => $rec->getemail(),
					'typecar' => $rec->gettypecar(),
                    'messager' => $rec->getmessager(),
                    'idrec' => $rec->getidrec(),
                    'rdv'=>$rec->getrdv(),
                    'idd' => $idd		
					
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function showrec($id)
    {
        $sql = "SELECT * from rec where idd = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $rec = $query->fetch();
            return $rec;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function recherche($message)
    {
        $sql=" SELECT * FROM rec where messager like '$message' ";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>