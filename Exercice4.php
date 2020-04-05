<?php
$message="";
$decoupe=[];
include("Fonction.php");
if(isset($_POST['Valider']))
{
    if(!(empty($_POST['phrase'])))
    {
        $t=$_POST['phrase'];
        
            if(Word_test($t))
            {
                        $message="phrase valider";
                        $t=espace_deleted($t);
                     

            }  
                else {
                    
                      $message= "invalide phrase";
                    }
          
    }      
   
       else
      {
        $message= "Merci de remplir le champs de saisie";
       } 
       var_dump($decoupe);
       echo "<textarea readonly>";
       foreach ($t as $key => $value) {
           # code...
           echo $value;
       }
       echo "</textarea>";
      
    } 
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="" method="POST">
            <label for="phrase">Ecriver une phrase:</label>
            <textarea id="phrase" name="phrase" cols='100px' rows='10px'><?php echo @$_POST['phrase']; ?> </textarea>
            <input type="submit" value="Valider" name="Valider"><br /><br />
            <span class="exist"><?php echo $message;?></span>
      </form>
        </body>
</html>
