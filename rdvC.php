

<?php

include 'config.php';

class rdvC
{

    public function listerdv()
    {
        $sql = "SELECT * FROM rdv ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleterdv($id)
    {
        $sql = "DELETE FROM rdv WHERE id_rdv = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function addrdv($rdv){
        $db = config::getConnexion();
        try{
            $query = $db->prepare('INSERT INTO rdv 
            VALUES ( NULL,:firstName, :lastName, :email , :Desiredcarservicedate ,:OperationType ,:Ownedcar ,:id_car )');
            $query->execute([
                
                'firstName' => $rdv->getfirstName(),
                'lastName' => $rdv->getlastName(),
                'email' => $rdv->getemail(),
                'Desiredcarservicedate' => $rdv->getDesiredcarservicedate(),
                'OperationType' => $rdv->getOperationType(),
                'Ownedcar' => $rdv->getOwnedcar(),
                'id_car' => $rdv->getid_car()
               
            ]);			
        }
        catch (Exception $e){
            die ('Erreur: '.$e->getMessage());
        }			        
    }
    function updaterdv($rdv, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE rdv SET 
                
                    firstName = :firstName, 
                    lastName = :lastName, 
                    email = :email, 
                    Desiredcarservicedate = :Desiredcarservicedate,
                    OperationType =:OperationType,
                    Ownedcar =:Ownedcar,
                    id_car = :id_car

                WHERE id_rdv =:id_rdv '
            );
            $query->execute([
                'id_rdv' => $rdv->getid_rdv(),
                'firstName' => $rdv->getfirstName(),
                'lastName' => $rdv->getlastName(),
                'email' => $rdv->getemail(),
                'Desiredcarservicedate' => $rdv->getDesiredcarservicedate(),
                'OperationType' => $rdv->getOperationType(),
                'Ownedcar' => $rdv->getOwnedcar(),
                'id_car' => $rdv->getid_car()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function showrdv($id)
    {
        $sql = "SELECT * from rdv where id_rdv = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $rdv = $query->fetch();
            return $rdv;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

}

  