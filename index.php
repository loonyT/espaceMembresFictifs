<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8" />
<title> tp espace membre </title>
<link rel="stylesheet" href="css/style.css" />
</head>


<body> 

<header>
<h1> le site de tp espace membre</h1>
<p> bienvenue veuillez vous inscrire pour check ce que les membres partagent entre eux"</p>

<p>
    <nav id="menu">
<form method="post" action="index.php">

<p>
    <input type="submit" name="inscription" value="inscription" />
</p>
</form>
<form method="post" action="index.php">

<p>
    <input type="submit" name="connexion" value="connexion" />
</p>
</form>
<form method="post" action="index.php">

<p>
    <input type="submit" name="deconnexion" value="deconnexion" />
</p>


</form>
</nav>
</header>

<?php 
// si bouton connexion choisi
if (isset($_POST['connexion'] ))

{    

?>
<section>

<form method="post" action="connexion.php" >
<p>
<label for="pseudo">Pseudo</label><input type="text" name="peusdo" id="peusdo" autofocus required />
<label for="mdp">Mot de passe</label><input type="text" name="mdp" id="mdp" />
<label for="connect_auto">Connexion automatique</label><input type="checkbox" name="connect_auto" />
<input type="submit" value="connexion please" />
</p>
</form>
</section>

<?php 

}

?>

<section>
<h2> actualité </h2>
<p> super, depuis ajd un nouvel espace membre</p>
</section> 


<footer>
<p> le site de tp espace membre </p>
</footer>



</body>



</html>