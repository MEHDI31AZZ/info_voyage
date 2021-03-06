


<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Besoin d'un visa ou non, besoin d'informations sur votre prochaine destination ?">
    <meta name="author" content="Mehdi Azzazene">
    <title>Info_Voyage</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="fr" />
    <meta http-equiv="Expires" content="0" />
    <meta name="Copyright" content="Copyright 2021 Info_Voyage" />
    <meta name="robots" content="nosnippet" />
    <meta name="revisit-after" content="30 days" />
    <link rel="stylesheet" type="text/css" href="" />
    <link href="" rel="stylesheet" type="text/css">
    <link href="http://localhost/info_voyage/resources/css/style9.css" rel="stylesheet">
    </head>
<body>


    <div id="page">
        <div class="container px-0 px-md-4 mt-0"  style="margin-top: -0.3rem;">
            <nav class="navbar navbar-expand-md p-0 navbar-light justify-content-around justify-content-md-center fixed-top pl-md-8">
                <a class="navbar-brand mr-5 mr-md-6" href="http://localhost:8000/">
                                        <img class="logo" src="http://localhost/info_voyage/resources/views/logo.gif" alt="logo">
                                </a>
                
                                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar top-bar"></span>
                                    <span class="icon-bar middle-bar"></span>
                                    <span class="icon-bar bottom-bar"></span>
                                </button>
                <div class="collapse navbar-collapse text-right pl-3 pr-5 px-md-4" id="navbarCollapse">

            
                
    <ul class="navbar-nav mr-auto d-flex align-items-md-center">
	<li class="nav-item d-block dropdown"><a aria-expanded="false" aria-haspopup="true" class="nav-link chevron" data-toggle="dropdown" href="http://localhost/info_voyage/resources/views/Consulats.php" id="navbarDropdownMenuLink" role="button">Consulats</a>
	<div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu text-right animate slideIn" id="visa">??




</div>
	</li>
	<li class="nav-item"><a class="nav-link" href="http://localhost/info_voyage/resources/views/Top_destination.php">Top destinations 2020</a></li>
	<li class="nav-item"><a class="nav-link" href="http://localhost/info_voyage/resources/views/News.php">News</a></li>
	<li class="nav-item"><a class="nav-link" href="http://localhost/info_voyage/resources/views/contacts.php">Nous contacter</a></li>
	<li class="nav-item"><a class="nav-link text-uppercase login" href="http://localhost/info_voyage/resources/views/connexion.php">Se connecter</a></li>
	<li class="nav-item"><a class="nav-link btn-nav" href="http://localhost/info_voyage/resources/views/inscription.php">S'enregistrer</a></li>

</ul>



                            </div>
        </nav>
    </div>
</div>
                <header style="background:image(1.jpg) no-repeat center center;"  class="py-8">
                   <div class="container">
<div class="row">
<div class="col-12 mx-auto">

<section id="top" class="my-5 mt-md-9 mb-md-6">
      <div class="container">
      <h1 class="my-1 my-md-4 mb-md-2">Inscription d'un nouveau membre</h1>

      <?php
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "root";
$BDD['pass'] = "";
$BDD['db'] = "infovoyage";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(!$mysqli) {
    echo "Connexion non ??tablie.";
    exit;
}
$AfficherFormulaire=1;
if(isset($_POST['pseudo'],$_POST['mail'],$_POST['mdp'])){
    if(empty($_POST['pseudo'])){
        echo "Le champ Pseudo est vide.";
    } elseif(!preg_match("#^[a-z0-9]+$#",$_POST['pseudo'])){
        echo "Le Pseudo doit ??tre renseign?? en lettres minuscules sans accents, sans caract??res sp??ciaux.";
    } elseif(strlen($_POST['pseudo'])>25){
        echo "Le pseudo est trop long, il d??passe 25 caract??res.";
    } elseif(empty($_POST['mail'])){
        echo "Le champ Mail est vide.";
    } elseif(empty($_POST['mdp'])){
        echo "Le champ Mot de passe est vide.";
    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo='".$_POST['pseudo']."'"))==1){
        echo "Ce pseudo est d??j?? utilis??.";
    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM membres WHERE mail='".$_POST['mail']."'"))==1){
        echo "Ce mail est d??j?? utilis??.";
    }
    
    
    else {
 
        if(!mysqli_query($mysqli,"INSERT INTO membres SET pseudo='".$_POST['pseudo']."', mail='".$_POST['mail']."', mdp='".md5($_POST['mdp'])."'")){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {

           echo "F??licitation, Vous ??tes inscrit avec succ??s!";
           echo "<a  href='http://localhost/info_voyage/resources/views/connexion.php'  class='couleur_texte'> Se connecter </a>";
            $AfficherFormulaire=0;
        }
    }
}
if($AfficherFormulaire==1){
    ?>



         <div class="row">
            <div class="col-12 col-md-8 mx-auto text-center">
            <form method="post" action="inscription.php">
        Nom d'utilsateur : <input type="text" name="pseudo">
        <br />
        Mail : <input type="text" name="mail">
        <br />
        Mot de passe : <input type="password" name="mdp">
        <br />
        <input type="submit" value="S'inscrire">
    </form>
            </div>
         </div>
      </div>
   </section>
</div>
</div>
</div>
</div>        </header>



    
    <br />


    
    




    <?php
}
?>
    


    
    <footer class="footer text-white">
<div class="container">
<div class="row text-center text-xs-center text-sm-left text-md-left d-none d-lg-flex p-5 pt-6">
<div class="col-xs-12 col-sm-3">
<ul class="list-unstyled quick-links">
	<li class="text-bold" style="font-size: 20px"><span style="color:null;"><span class="text-white">Informations</span></span></li>
	<li><a class="font-weight-normal" href="page.php?pid=added_value_services" >Services additionnels</a></li>
	<li><a class="font-weight-normal" href="page.php?pid=center_info" >Adresse et horaires d'ouverture</a></li>
	<li><a class="font-weight-normal" href="inquiry.php" >Nous contacter</a></li>
</ul>
</div>

<div class="col-xs-12 col-sm-3">
<ul class="list-unstyled quick-links">
	<li class="text-bold" style="font-size: 20px"><span style="color:#ffffff;">Consulats </span></li>
       <li><a class="font-weight-normal" href="http://localhost/info_voyage/resources/views/consulats/France.php" ><span style="color:null;">FRANCE</span></a></li>
	<li><a class="font-weight-normal" href="http://localhost/info_voyage/resources/views/consulats/Algerie.php" ><span style="color:null;">ALGERIE</span></a></li>
<li><a class="font-weight-normal" href="http://localhost/info_voyage/resources/views/consulats/Maroc.php" ><span style="color:null;">MAROC</span></a></li>
         <li><a class="font-weight-normal" href="http://localhost/info_voyage/resources/views/consulats/cameroun.php" ><span style="color:null;">CAMEROUN</span></a></li>
	
</ul>
</div>

<div class="col-xs-12 col-sm-3">
<ul class="list-unstyled quick-links">
	<li class="text-bold" style="font-size: 20px"><span style="color:null;"><span class="text-white"><span class="text-white">Mentions l??gales</span></span></span></li>
	<li><a class="font-weight-normal" href="http://localhost:8000/" ><span style="color:null;">Politique de confidentialit??</span></a></li>
	<li><a class="font-weight-normal" href="http://localhost:8000/" ><span style="color:null;">Politique des cookies</span></a></li>
	<li><a class="font-weight-normal" href="http://localhost:8000/" >Conditions d'utilisation du Service</a></li>
<li><a class="font-weight-normal" href="http://localhost:8000/" >Conditions d'utilisation du site Web</a></li>
</ul>
</div>


</div>



<hr />
<div class="row sub-footer pt-3 pb-5 py-lg-4">
<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white d-flex justify-content-around align-items-center"><img alt="logo" class="logo pl-5 d-none d-lg-flex mr-4 pb-3" src="http://localhost/info_voyage/resources/views/logo.gif"/>
<ul class="list-unstyled d-md-flex">
	<li>?? 2021 Info-Voyage. Tous droits r??serv??s.</li>
</ul>


</div>
</div>
</div>
</footer>




    
    
</body>
</html>