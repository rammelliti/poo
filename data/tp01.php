<!DOCTYPE html>

<html>
    <head >
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
      <?php
        if ($_POST){
            var_dump($_POST);
            die();
        }
        if($_GET){
            var_dump($_GET);
            die(); 
        }
        ?>
        <main role="main">
            <div class="py-5 bg-light">
                <div class="container">
                    <div class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
                        <form method="get" enctype="multipart/from-data" action="">
                            <div class="from-group">
                                <label for="name">Nom</label>
                                <input type="text" class="from-control" name="name" id="name">
                            </div>
                             <div class="from-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="from-control" name="prenom" id="prenom">
                            </div>
                            <!-- exemple pour apprendre et voir      -->
                            <div class="form-group">
                                <label for="file">File</label>
                                <input type="file" class="from-control-file" name="file" id="file">
                            </div>
                            <button type="submit" class="btn btn-primary">Valider</button>
                        </form>
                        <a href="\get_recoit.php"> Afficher la page</a>
                      </div>              
                </div>
            </div>ù                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
        <?php
        // put your code here
        ?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
