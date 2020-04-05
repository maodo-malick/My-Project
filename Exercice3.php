<!DOCTYPE html>
<html>
<head>
  <?php
include("Fonction.php");
$Valide=false;
$indice=0;
$alert="";
$table=[];
$cpt=0;
  if(isset($_POST['envoie']))
{
    if(!(empty($_POST['nbre'])))
    {
         if(!(is_number($_POST['nbre'])))  
         {
          $alert="votre saisie n'est pas de type nombre";
         } 
         else
         {
                 $alert= "Saisie traitable";
          $Valide=true;
          $indice=$_POST['nbre'];
         }                                                     /* $table1=trim_delete($_POST['mot'])*/
         for($i=1;$i<=$indice;$i++)
         {
           if (!(empty($_POST['nombre'.$i]))) {
             # code...
             if(!(is_number($_POST['nombre'.$i])))
             {
                if(preg_match("/m/i",$_POST['nombre'.$i]))
                {
                  $cpt++;
                }
                
             }
             else
             {
               echo "votre saisie n'est pas souhaitable";
             }
            
             
              $table=$_POST['nombre'.$i];
             }
           else {
             
            $alert="faite une saisie dans le champs";
           }
         }
       
    }
    else
    {
        $alert="veillez faire une entrée de saisie";
    }

  }
  ?>
</head>
<body>
<form  action="" method="POST">
<label for="mot">Quleque mots:</label>
<input type="text" name="nbre" value="<?php echo @$_POST['nbre']; ?>" <br /><br /> <!-- garder la saisie du input visible--->
<span class="erreur"><?php echo $alert?></span></br>
<?php

  if($Valide)
{
  for($i=1;$i<=$indice;$i++)
  {
?> 
  <input type="text" name="nombre<?php echo $i ?>" value="<?php echo @$_POST['nombre'.$i];?>" id="">
  <br /><br />
<?php
    } 
  }
  ?>
  <br />
<input type="submit" value="Valider" name="envoie">
<?php var_dump($table);?>
<?php echo" il ya ".$cpt."qui contient la lettre m";?>

</form>
</body>
</html>
<!-- debut de transfert de la saisie dans un tableau-->


