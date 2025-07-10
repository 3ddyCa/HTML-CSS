<?php

function Validation($Mdp1, $Mdp2)
{
    if($Mdp1 == $Mdp2)
        {
            $Message='votre mot de passe a été changé!';
        }
    else
        {
            $Message='Les mots de passe ne sont pas identiques!';        
        }
    echo $Message;
}
?>