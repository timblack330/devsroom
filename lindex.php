
<?php
   session_start();
   //if($_SESSION["autoriser"]!="oui"){
     // header("location:login.php");
      //exit();
   //}
   //if($_SESSION['org']=='non'){
     // header('location:session2.php');
   //}
   if(date("H")<18)
      $bienvenue="Bonjour ".
      @$_SESSION["prenomNom"].
      " Bienvenue dans votre espace personnel";
   else
      $bienvenue="Bonsoir ".
      @$_SESSION["prenomNom"].
      " Bienvenue dans votre espace personnel";

      /*include("connexionbd.php");
        
      $reponse = $pdo->query("Select * from evenements where valide='oui'");
      if(isset($_GET['recherche']) AND !empty($_GET['recherche'])){
         $recherche=htmlspecialchars($_GET['recherche']);
         $reponse = $pdo->query('Select * from evenements where valide="oui" and nom like "%'.$recherche.'%"  ');
         if($reponse->rowCount()==0){
            $reponse=$pdo->query('Select * from evenements where valide="oui" and CONCAT(nom,description_evenement) like "%'.$recherche.'%"  ');
            if($reponse->rowCount()==0){
               $reponse=$pdo->query('Select * from evenements where valide="oui" and CONCAT(nom,date_debut) like "%'.$recherche.'%"  ');
               if($reponse->rowCount()==0){
                  $reponse=$pdo->query('Select * from evenements where valide="oui" and CONCAT(nom,heure_debut) like "%'.$recherche.'%"  ');
                  if($reponse->rowCount()==0){
                     $reponse=$pdo->query('Select * from evenements where valide="oui" and CONCAT(nom,prix) like "%'.$recherche.'%"  ');
                  }
               }
            }
         }
    echo "<div class='actions'><a class='button' href='index.php'>Retour</a>
    
    </div>";  }
      
      $donnees = $reponse->fetchAll();*/
      
?>
<!DOCTYPE html>
<html>
   <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
      <meta charset="utf-8" />
      <link rel="stylesheet" href="style.css"/>
   </head>
   <body >

        <script src="jquery-3.5.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
      <!-- Navbar debut-->
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="Index.html">
          <img src="logo4.png" width="250" height="100" class="d-inline-block align-top" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Index.html">Acceuil
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="artist.html">Artistes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
      <!--       <div class="d-flex">
                <ul>
                    <li><span class="social-icon social-facebook"><i class="fa fa-facebook"></i></span></li>
                    <li><span class="social-icon social-google"><i class="fa fa-google"></i></span></li>
                    <li><span class="social-icon social-linkedin"><i class="fa fa-linkedin"></i></span></li>
                    <li><span class="social-icon social-instagram"><i class="fa fa-instagram"></i></span></li>
                    <li><span class="social-icon social-twitter"><i class="fa fa-twitter"></i></span></li>
                </ul>
            </div> -->
</nav>
            <a>
             <?php 
                if (empty($_SESSION["autoriser"])){
                 echo("<form action='login.php'>
                   <button type='submit'>Se connecter</button>
                 </form><br>");}
              ?>
             </a>
         </li>
         <li class="nav-item nav-link px-3">
             <a>
             <?php 
              if (empty($_SESSION["autoriser"])){
               echo("<form action='inscription.php'>
                 <button type='submit'>S'inscrire</button>
               </form>");}
   
              ?>
      
             </a>
<div id="welcome">
      <h2><?php echo $bienvenue?></h2></div>
 <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
  <div class="container">
    <div class="container">
     <div class="description">
       <h1>Ticket</h1>
       <p>Acheter plus qu'un ticket</p>
       <div class="input-group">
          <input type="search" class="form-control rounded" placeholder="Trouver un evenement" aria-label="Search"
           aria-describedby="search-addon" />
         <button type="button" class="btn btn-outline-primary">Rechercher</button>
       </div>
     </div>
   </div>
</div>
</main>
      
      <div class="actions">
         <br>
         <br>
         <!-- Write your comments here
         <form method="$_GET">
         <input type="search" name="recherche" placeholder="Rechercher un évènement" />
         <input type="submit" value="valider" class="button" /></form>
         -->
         <div class="container">
  
         <div class="container">
  <a>
         <?php 
   if (isset($_SESSION["autoriser"])){
      if($_SESSION["autoriser"]=="oui"){
         echo("<form action='deconnexion.php'>
         <button type='submit'>Se déconnecter</button>
       </form><br>");
       echo("<form action='mes_reservations.php'>
       <button type='submit'>Mes reservations</button>
     </form><br>");}
   }
   if (isset($_SESSION["org"])){
      if($_SESSION["org"]=="oui"){
         echo("<form action='creation_event.php'>
         <button type='submit'>Créer un évènement</button>
       </form>");}
      }
   ?>
</a>
      <br></div>

      <?php  
      
      
      
   
      /*foreach ($donnees as  $values) {

         $nom=str_replace("¬","'",$values['nom']);
         if($values['adulte']=="oui"){$limite="Interdit aux moins de 18 ans";}
         elseif($values['adulte']=="non"){$limite="Ouvert à tous";}
         
         echo"<div class='card'><br><table id='table1'>"; 
          echo "<tr><td><span>" .$nom . "</span> par :".$values['createur'] . " ".$limite."</td></tr>";
          echo '<tr><td><a href="evenement.php?id_evenement='.$values['id'].'"><div class="affiche"><img src="affiches/'.$values["id_affiche"].'"/></div></a></td></tr>';
          
          
          echo "<td>Du " . $values['date_debut'] . " au " . $values['date_fin'] . " entre " . $values['heure_debut'] . " et ". $values['heure_fin'] . "</td>";
          echo '<tr><td>Entrée :' . htmlspecialchars($values['prix']) . "FCFA <a class='button' href='reserver.php?id_evenement=" .$values['id'] . "'>Reserver une place</a></td></tr>";
          echo "<tr><td><a class='button' href='".htmlspecialchars($values['localisation'])."'target='_blank'>Localisation</a>  <a class='button' href='evenement.php?id_evenement=" .htmlspecialchars($values['id']) . "'>Plus...</a>
          </td></tr>";
          echo "</tr>";
          echo "</div></table>";
      }

      if(count($donnees)==0){
         echo "<div class='msg'>Aucun Resultat<br>
         <form>
 <input class='button' type = 'button' value = 'Retour'  onclick = 'history.back()'>
 </form>
         </div>" ;
       }*/
      

      ?>
<script type="text/javascript">
    function hidewelcome() {
      document.getElementById("welcome").style.visibility = "hidden";
    }
    setTimeout("hidewelcome()", 10000); // aprés 10 sec
    
   </script>

<!-- footer debut-->
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h6 class="text-uppercase font-weight-bold">Informations</h6>
                <p>Ce site a ete cree avec Boostrap et est unn prototype pour un projet</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <p>Lome, TOGO
            <br/>info@mywebsite.com
            <br/>+ 228 90 00 00 00
            <br/>+ 228 90 00 00 00</p>
        </div>
    </div>
    <div class="footer-copyright text-center">© 2021 Copyright: MyWebsite.com</div>
</footer>
<!-- footer fin-->

   </body>
</html>