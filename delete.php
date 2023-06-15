
            <?php
               
               require_once ("pdo.php");
               $id_etd=$_GET['id_etd'];
               $sql = "DELETE FROM produit WHERE id=$id_etd";

               $pdo->exec( $sql);

               echo " Suppression de l'étudiant ".$id_etd." avec succès !! ";
               header('location:liste_produit_vendeur.php');

               ?>
