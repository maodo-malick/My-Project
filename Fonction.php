<?php
function Stringer($a)
{
    $cpt=0;
    $i=0;
    while(!empty($a[$i]))
    {
        
        $cpt= $cpt+1;
        $i=$i+1;
    }
    return $cpt;
}
function Replace($b)
{
    $mot=""; 
    $i=0;
    while(!empty($b[$i]))
    {
       if ($b[$i]!=" ")
       {
           $mot=$b[$i];
           $i++;
       }else
       {
           if ($b[$i+1]== "  ") {
               $i=$i+1;
           }else
           {
               $mot=$b[$i];
               $i++;
           }
       }

    }
    return $mot;
}



function deletespace($texte){
    $i=0;
    $mot="";
    while (!empty($texte[$i])) {
        if ($texte[$i]!=" ") {
            $mot=$texte[$i];
        }else{
            if ($texte[$i+1]!=" ") {
                $mot=$texte[$i];
            }
        }
        $i++;
    }

    return $mot;
}

function Convertire($a)
{
    return($a>='a'&& $a<='z')||($a>='A'&& $a<='Z');
}
//fonction is lower
function is_lower($a)
{
  return ($a>='a'&& $a<='z');
}

//function is upper
function is_upper($a)
{
  return($a>='A' && $a<='Z');
}

function is_numerik($n)
{
  return($n>='0' && $n<='9');
}

function my_strln($t)
{

    $cpt=0;
    $i=0;
    while(!empty($t[$i]))
    {
        
        $cpt= $cpt+1;
        $i=$i+1;
    }
    return $cpt;
}
function is_valide($a)
{
  $valide=false;
  $i=0;
  while(!empty($a[$i])&&(($a>='a') ||($a<='A'))&&(($a<='z')||($a<='Z'))) {
    # code...
    $valide=true;
    $i++;
  }
  return $valide;
}
function is_valide1($a)
{
  for($i=0;$i<my_strln($a);$i++)
  {
    if (!(is_lower($a[$i]))&& !(is_upper($a[$i])))
    {
      return false;
    }
  }
  return true;
}
function is_number($a)
{
  for($i=0;$i<my_strln($a);$i++)
{
  if(!(is_numerik($a[$i])))
  {
      return false;
    
  } 
}
return($a>0);
}
function is_car_in_string($a,$s)
{
  for($i=0;$i<my_strln($a);$i++)
  {
    if($a[$i]==$s)
    {
      return true;
    }
  }
  return false;
}
function count_char_in_string($s,$r)
{
  $count=0;
  for($i=0;$i<my_strln($s);$i++)
  {
    if($s[$i]==$r)
    {
      $count++;
    }
  }
    return $count;
}
function trim_delete($b)
{
    $mot=""; 
    $i=0;
    while(!empty($b[$i]))
    {
       if ($b[$i]!=" ")
       {
           $mot=$b[$i];
           $i++;
       }else
       {
           if ($b[$i+1]== " ") {
               $i=$i+1;
           }else
           {
               $mot=$b[$i];
               $i++;
           }
       }

    }
    return $mot;
}
function Word_test($n)
{
  for($i=0;$i<my_strln($n);$i++)
  {
    if(is_upper($n[$i]))
    {
      if(preg_match("#[.|!|?]$#",$n))
      {
       return true;
      }
    }
 
}
return false;
}
function Decoupage($a)
{
  $phrase=[];
  if(Word_test($a))
{
  for($i=0;$i<my_strln($a);$i++)
  {
     $phrase=preg_split("#[.|!|?]#",$a);
    }
}
  return $phrase;
}
function espace_deleted($r)
{
      # code...
     return $r=preg_split("/[\s]{1,} \s/",$r);
}
?>