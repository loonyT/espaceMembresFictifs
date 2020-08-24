
<?php

//inscription
// connexion à la base de données


try 

{
  $bdd=new PDO('mysql:host=localhost; dbname =testoc; cbarset=utf', 'test', 'mdp' );
}

catch (Exeption $e)
{

die{'Erreur :  ' . $e->getMessages () };

}

//echappement
$pseudo = htmlspecialchars($_POST['pseudo']);
$pass = htmlspecialchars($_POST ['mdp']);
$passverif = htmlspecialchars($_POST ['mdp_valide']);
$email = htmlspecialchars($_POST['email']);


//test si pseudo déjà pris
$response=$bdd->prepare('Select peuso FROM membres WHERE pseudo=?');
$response->execute(array(['pseudo']));
while ($données = $response->fetch())
{
if (isset($response))
{  
echo 'pseudo déjà utilisé'
}
}
//test si mdp différent 

if ($pass != $passverif)

{echo 'les mdps sont différents, revérifier svp'}

//test du formattage de l'adresse mail 
//ya une faute dans la regex .... 

if {preg_match("#^[a-z]0-9,-]->$[a-z]0-9,-]+ \.[a-z] {2,4] + petite crolle#", $email )}

{echo 'adresse ok"';}

else 

{

    echo 'L\adresse mail est invalide, revérifier '
}





elseif ($pass == $passverif)
{  
echo 'les mots de passes sont différents, veuillez vérifier';
}

//verification validité des informations
//hachage du mot de passe 
$pass_hache= password_hash($_POST ['pass'], PASSWORD_DEFAULT);
//insertion
$_REQUEST = $bdd->prepare('INSERT INTO membres ( peuso, pass, email, date_inscription) VALUES (:pseudo, :pass, :email, CURDATE())');

$_REQUEST=>execute (array (
    'pseudo' => $pseudo,
    'pass' => $pass_hache,
    'email' => $emai )) ;


    // je suis arrivé à 10 min de la vidéo et ya full fautes de syntaxes : 

    https://www.youtube.com/watch?v=PzjykWjLH9U