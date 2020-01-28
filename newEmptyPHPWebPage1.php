

        <?php
        // 1 tableau numeriques
        $tableau = array ('Jean','Robert','Paul','Joe','Alain');
        echo $tableau[0];
        $tableau[1]='Nadia';
        
        // creation tableau vide et affectation de valeurs
        $tableau = array();
        $tableau[0] = 'Jean';
        $tableau[1] = 'Robert';
        $tableau[2] = 'Paul' ;  
        $tableau[3] = 'Joe';
        $tableau[4] = 'Alain';
        
        //autre façon
        $tableau = array();
        $tableau[] = 'Jean';
        $tableau[] = 'Robert';
        $tableau[] = 'Paul' ;  
        $tableau[] = 'Joe';
        $tableau[] = 'Alain';
        
        //autre syntaxe
        $tableau= ['Jean','Robert','Paul','Joe','Alain'];
        
        // 2 tableau associatifs
        $tableau= array('A1'=>'Jean','B4'=>'Robert',3=>'Paul','Toto'=>'Joe');
        
        ///// autre syntaxe
        $personne=array();
        $personne['A1']='Jean';
        $personne['B4']='Robert';
        $personne[3]=
        $personne['Toto']='Joe';
        $personne['H']='Alain';
        
        //Pertinence des clés
          $personne['Nom']='Jean';
          $personne['prenon']='Robert';
          $personne['Age']='50';
          
          echo '<br>Age : '.$personne['Age'];
          
          //////  3 Constantes de Type tableau
          const Couleurs=array('rouge','vert','noir');
          echo couleur[1].'<br>';
          
          define ('colors',array ('rouge','vert','noir'));
          echo colors[1];        
          
          $tableau=array('Jean','Robert','Paul','Joe','Alain');
          // boucle sur tableau
          for($i=0;i<5;$i++){
              echo $tableau[$i].'<br>';
          }
          
          //// avec la fonction sizeof() ou count()
          for($i=0;i< sizeof($tableau);$i++){
              echo $tableau[$i].'<br>';
          }
          
          ////La boucle foreach
          ////creation du tableau
          $tableau=array('Jean','Robert','Paul','Joe','Alain');
          ///boucle sur le tableau
          foreach($tableau as $val){
              //// affichage des valeurs du tableau concaténées avec un saut de ligne
              echo $val.'<br /';
          }
          
          
          ////// affichage du clé
          ////creation du tableau
          $tableau=array('Al'=>'Jean','B4'=>'Robert',3=>'Paul','Toto'=>'Joe','H'=>'Alain');
          ///boucle sur le tableau
          foreach($tableau as $cle=>$val){
              //// affichage des valeurs du tableau concaténées avec un saut de ligne
              echo 'Clé: '.$cle.'Valeur : '.$val.'<br />';
          }
          //////// Depuis PHP 7 foreach travaile sur une copie du tableau 
          //// le pointeur du tableau n'est plus modifié pendant son parcours 
          ///// reste modifiable s'il est passé par  réference
          $tab=[0];
          foreach ($tab as $val){
              var_dump($val);
              $tab[1]=1;
          }
          
          //// La fonction print_r 
          ///// création du tableau
          $tableau=array('Al'=>'Jean','B4'=>'Robert',3=>'Paul','Toto'=>'Joe','H'=>'Alain');
          print_r($tableau);
        ?>
