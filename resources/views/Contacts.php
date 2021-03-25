<style>
form {
  /* Uniquement centrer le formulaire sur la page */
  margin: 0 auto;
  width: 400px;
  /* Encadré pour voir les limites du formulaire */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input, textarea {
  /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */
  font: 1em sans-serif;

  /* Pour que tous les champs texte aient la même dimension */
  width: 300px;
  box-sizing: border-box;

  /* Pour harmoniser le look & feel des bordures des champs texte */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* Pour souligner légèrement les éléments actifs */
  border-color: #000;
}

textarea {
  /* Pour aligner les champs texte multi‑ligne avec leur étiquette */
  vertical-align: top;

  /* Pour donner assez de place pour écrire du texte */
  height: 5em;
}

.button {
  /* Pour placer le bouton à la même position que les champs texte */
  padding-left: 90px; /* même taille que les étiquettes */
}

button {
  /* Cette marge supplémentaire représente grosso modo le même espace que celui
     entre les étiquettes et les champs texte */
  margin-left: .5em;
}
</style>


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
    <link href="http://localhost/info_voyage/resources/css/app.css" rel="stylesheet">
    </head>
<body>


    <div id="page">
        <div class="container px-0 px-md-4 mt-0"  style="margin-top: -0.3rem;">
            <nav class="navbar navbar-expand-md p-0 navbar-light justify-content-around justify-content-md-center fixed-top pl-md-8">
                <a class="navbar-brand mr-5 mr-md-6" href="http://localhost:8000/">
                                        <img class="logo" src="image/logo.gif" alt="logo">
                                </a>
                
                                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar top-bar"></span>
                                    <span class="icon-bar middle-bar"></span>
                                    <span class="icon-bar bottom-bar"></span>
                                </button>
                <div class="collapse navbar-collapse text-right pl-3 pr-5 px-md-4" id="navbarCollapse">

            
                
    <ul class="navbar-nav mr-auto d-flex align-items-md-center">
	<li class="nav-item d-block dropdown"><a aria-expanded="false" aria-haspopup="true" class="nav-link chevron" data-toggle="dropdown" href="http://localhost/info_voyage/resources/views/Consulats.php" id="navbarDropdownMenuLink" role="button">Consulats</a>
	<div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu text-right animate slideIn" id="visa"> 



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
<h1 class="my-1 my-md-4 mb-md-2">INFO-VOYAGE</h1>

<div class="slogan mb-md-3">
<div class="text-bold mb-4"><strong>i want to go far away !</strong></div>
</div>
</div>
</div>
</div>        </header>

    <section>

        
<div class="container">
<div class="row">
<div class="col-11 col-md-10 mx-auto px-md-0">
<div class="card overlapping-lg-card card-with-bars py-md-7 px-md-8 p-5">
<p class="text-grey pb-md-5" style="text-align: center";><a href="mailto:mehdi.azzazene@gmail.com">Ecrivez Nous via Notre Mail</a> ou via le formulaire ci-dessous : </p>

<form action="Contacts.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
    
    
</form>

</div>
</div>
</div>
</div>
</section>


    <section id="top" class="my-5 mt-md-9 mb-md-6">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-8 mx-auto text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.461403617886!2d6.1606211151953!3d48.696661320035226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794a2a188d1e15f%3A0xed2b14f0a5d35d17!2sR%C3%A9sidence%20Monbois!5e0!3m2!1sfr!2sfr!4v1616444610439!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
         </div>
      </div>
   </section>


    
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
       <li><a class="font-weight-normal" href="http://localhost/info_voyage/ACCEUIL.html" ><span style="color:null;">FRANCE</span></a></li>
	<li><a class="font-weight-normal" href="http://localhost/info_voyage/ACCEUIL.html" ><span style="color:null;">ALGERIE</span></a></li>
<li><a class="font-weight-normal" href="http://localhost/info_voyage/ACCEUIL.html" ><span style="color:null;">MAROC</span></a></li>
         <li><a class="font-weight-normal" href="http://localhost/info_voyage/ACCEUIL.html" ><span style="color:null;">CAMEROUN</span></a></li>
	
</ul>
</div>

<div class="col-xs-12 col-sm-3">
<ul class="list-unstyled quick-links">
	<li class="text-bold" style="font-size: 20px"><span style="color:null;"><span class="text-white"><span class="text-white">Mentions légales</span></span></span></li>
	<li><a class="font-weight-normal" href="http://localhost/info_voyage/ACCEUIL.html" ><span style="color:null;">Politique de confidentialité</span></a></li>
	<li><a class="font-weight-normal" href="http://localhost/info_voyage/ACCEUIL.html" ><span style="color:null;">Politique des cookies</span></a></li>
	<li><a class="font-weight-normal" href="http://localhost/info_voyage/ACCEUIL.html" >Conditions d'utilisation du Service</a></li>
<li><a class="font-weight-normal" href="http://localhost/info_voyage/ACCEUIL.html" >Conditions d'utilisation du site Web</a></li>
</ul>
</div>


</div>


<hr />
<div class="row sub-footer pt-3 pb-5 py-lg-4">
<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white d-flex justify-content-around align-items-center"><img alt="logo" class="logo pl-5 d-none d-lg-flex mr-4 pb-3" src="logo.gif"/>
<ul class="list-unstyled d-md-flex">
	<li>© 2021 Info-Voyage. Tous droits réservés.</li>
</ul>


</div>
</div>
</div>
</footer>




    
    
</body>
</html>

