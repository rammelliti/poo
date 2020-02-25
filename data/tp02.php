<!DOCTYPE html>

<html>
    <head >
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
       <?php
                           
                            @$nom=$_POST['nom'];
                            @$prenom=$_POST['prenom'];
                            @$email=$_POST['email'];
                            @$pass=$_POST['pass'];
                            @$cpass=$_POST['cpass'];
                            @$valid=$_POST["valid"];
                            
                          if(isset($valid)){
                            if (empty($nom))
                                $mess='<div class="erreur"> Le nom est obligatoire.</div>';
                            elseif (empty($prenom))
                                $mess='<div class="erreur">Le prenom est obligatoire.</div>';
                            elseif (empty($email))
                                $mess='<div class="erreur">Email est obligatoire.</div>';
                            elseif (empty($pass))
                                $mess='<div class="erreur">Le mot de passe est obligatoire.</div>';
                            elseif ($pass!=$cpass)                               
                                $mess='<div class="erreur">Les deux mots de passe doivent être identiques.</div>';
                            else {
                                $mess='<div class="resume"><strong>Infos transmis : </strong><br />';
                                $mess.=ucfirst(strtolower($prenom)).' '.strtoupper($nom).'<br />';
                                $mess.='Email : '.$email;
                                $mess.='</div>';
                                
                            }   }
                            
                           
                            ?>
        <main role="main">
            <div class="py-5 bg-light">
                <div class="container">
                    <div class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
                        <div class="alert alert-primary" role="alert" >
                           <?php echo $mess  ?>
                        </div>
                        <form method="post" action="">
                            <div class="from-group">
                                <label for="nom">Nom</label><div>
                                <div><input type="text" class="from-control" name="nom" id="nom" value="<?php echo $nom?>" >
                            </div>
                             <div class="from-group">
                                <label for="prenom">Prenom</label></div>
                                <div><input type="text" class="from-control" name="prenom" id="prenom" value="<?php echo $prenom?>">
                            </div>
                             <div class="from-group">
                                 <label for="prenom">Email</label></div>
                                    <div> <input type="email" class="from-control" name="email" id="email" value="<?php echo $email?>">
                            </div>
                             <div class="from-group">
                                 <label for="prenom">Mot de passe</label></div>
                                <input type="password" class="from-control" name="pass" id="pass" value="<?php echo $pass?>">
                            </div>
                             <div class="from-group">
                                 <label for="prenom">Confirmation Mot de passe</label></div>
                                <div> <input type="password" class="from-control" name="cpass" id="cpass" value="<?php echo $cpass?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="valid">Valider</button>
                            <!-- exemple pour apprendre et voir      -->
                           
                            
                        </form>
                        
                      </div>              
                </div>
            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

