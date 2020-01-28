<?php
        // put your code here
        // 1 TABLEAUX NUMERIQUES
        $tabelau = array('Jean','Robert','Paul','Joe','Alain');
        // REMPLACER ROBERT PAR NADIA
        echo $tableau[1]='Nadia';
        // CREATION TABLEAU VIDE ET AFFECTATION DE VALEURS
        $tableau = array();
        $tableau[0] = 'Jean' ;
        $tableau[1] = 'Robert' ;
        $tableau[2] = 'Paul' ;
        $tableau[3] = 'Joe' ;
        $tableau[4] = 'Alain' ;
        // AUTRE SYNTAXE
        $tableau = array();
        $tableau[] = 'Jean';
        $tableau[] = 'Robert';
        $tableau[] = 'Paul';
        $tableau[] = 'Joe';
        $tableau[] = 'Alain';
        // AUTRE SYNTAXE
        $tableau = ['Jean','Robert','Paul','Joe','Alain' ];
        // 2 TABLEAU ASSOCIATIFS
        $tableau = array('A1'=>'jean','B2'=>'Robert',3=>'Paul',"toto"=>"Joe","H"=>"Alain");
        //// AUTRE SYNTAXE
        $tableau = array();
        $tableau['A1'] = 'Jean';
        $tableau['B2'] = 'Robert';
        $tableau[3] = 'Paul';
        $tableau['Toto'] = 'Joe';
        $tableau['H'] = 'Alain';
        //PERTINENCE DES CLES
        $personne = array();
        $personne['Nom'] = 'Martin';
        $personne['Prenom'] = 'Monique';
        $personne['Age'] = 50;
        echo 'Age : ' .$personne ['Age'].'<br>';
        // 3 CONSTANTES DE TYPE TABLEAU
        const COULEURS = array('rouge', 'vert', 'noir');
        echo COULEURS[1];
        define('COLORS', array (
            'rouge',
            'vert',
            'noir',
        ));
        echo COLORS[1];
        // 4 PARCOURS D'UN TABLEAU
        //
        // BOUCLE FOR
        //
        // CREATION DU TABLEAU
        $tableau = array('Jean','Robert','Paul','Joe','Alain');
        // BOUCLE SUR LE TABLEAU
        for ($i = 0 ; $i < 5 ; $i++){
            echo $tableau[$i]; '<br>' ;
        }
        // AVEC LA FONCTION COUNT() OU SIZEOF()
        // CREATION DU TABLEAU
        $tableau = array ('Jean','Robert','Paul','Joe','Alain');
        // BOUCLE SUR LA TABLEAU
        for ($i = 0 ; $i < sizeof($tableau); $i++) {
            // AFFICHAGE DES VALEURS DU TABLEAU CONCATENEES
            // AVEC UN SAUT DE LIGNE
            echo $tableau[$i].'<br>';
        }
        // LA BOUCLE FOREACH
        // CREATION DU TABLEAU
        $tableau = array('Jean','Robert','Paul','Joe','Alain');
        // BOUCLE SUR LE TABLEAU
        foreach ($tableau as $val) {
            //AFFICHAGE DES VALEURS DU TABLEAU CONCATENEES
            // AVEC UN SAUT DE LIGNE
            echo $val.'<br />';
        }
        // AFFICHAGE DES CLES
        // CREATION DU TABLEAU
        $tableau = array('A1'=>'Jean','B2'=>'Robert','3'=>'Paul','Toto'=>'Joe','H'=>'Alain');
        // BOUCLE SUR LE TABLEAU
        foreach ($tableau as $cle => $val) {
            // AFFICHAGE DES VALEURS DU TABLEAU CONCATENEES
            //AVEC UN SAUT DE LIGNE
            echo 'clé : '.$cle.', valeur: '.$val.'<br>';
        }
        // FOREACH SANS LA CLE
        $tableau = array('A1'=>'Jean','B2'=>'Robert','3'=>'Paul','Toto'=>'Joe','H'=>'Alain');
        // BOUCLE SUR LE TABLEAU
        foreach ($tableau as $val) {
            // AFFICHAGE  DES VALEURS DU TABLEAU CONCATENEES
            // AVEC UN SAUT DE LIGNE
            echo 'valeur:'.$val.'<br>';
        }
        // DEPUISPHP 7 FOREACH TRAVAILLE SUR UNE COPIE DU TABLEAU
        // LE POINTEUR DU TABLEAU N'EST PLUS MODIFIE PENDANT SON PARCOURS
        // RESTE MODIFIABLE S'IL EST PASSE PAR REFERENCE
        $tab = [0];
        foreach ($tab as &$val){
            var_dump($val);
            $tab[1] = 1 ;
        }
        // LA FONCTION print_r
        // CREATION DU TABLEAU
        $tableau = array('A1'=>'Jean','B2'=>'Robert','3'=>'Paul','Toto'=>'Joe','H'=>'Alain');
        print_r($tableau);
        
        /// Fonction sur les tableau
        
        /// A- Longeur d'un tableau
        $tableau = array('A1'=>'Jean','B2'=>'Robert','3'=>'Paul','Toto'=>'Joe','H'=>'Alain');
        $taille= count ($tableau);
        echo 'la taille du tableau est : '.$taille;
        
        //// B- Existance dans le tableau
        $tableau = array('A1'=>'Jean','B2'=>'Robert','3'=>'Paul','Toto'=>'Joe','H'=>'Alain');
        if(in_array('Robert',$tableau)){
            echo '<br>Robert est dans le tableau';
        }
        
        //// "ieme param : false par defaut(ne tient pas compte de type)
        $tableau=array('10','33','55','78');
                if (in_array(33,$tableau,true)) ///ajout true pour tenir compte de type
                        {
                echo '<br>33 est dans le tableau';}
                else {echo "<br>33 n'est pas dans le tableau";}
                
        /// C- existance d'une clé
         $tableau = array('A1'=>'Jean','B2'=>'Robert',3=>'Paul','Toto'=>'Joe','H'=>'Alain');        
        if(array_key_exists(3, $tableau))
        {   echo'<br>oui';}
        else {echo '<br>non';}
        

        /////existance d'une clé et sortir sa valeur
        $tableau = array('Jean','Robert','Paul','Joe','Alain');       
        if(array_key_exists(4, $tableau))
                echo '<br> oui '.$tableau[4];
        else    echo '<br> non';
        
        ////:D- tri d'un tableau
        //// sort() : tri les valeurs de la plus petite à la plus grande
        $tableau = array('A1'=>'Jean','B2'=>'Robert',3=>'Paul','Toto'=>'Joe','H'=>'Alain');
        sort($tableau); ///tri tableau par valeur
        echo '<br>';
        foreach ($tableau as $cle => $val) {
            // AFFICHAGE DES VALEURS DU TABLEAU CONCATENEES
            //AVEC UN SAUT DE LIGNE
            echo 'clé : '.$cle.', valeur: '.$val.'<br>';
        }
        
        ///// a sort tri et il garde le clé
        $tableau = array('A1'=>'Jean','B2'=>'Robert',3=>'Paul','Toto'=>'Joe','H'=>'Alain');
        asort($tableau); ///tri tableau
        echo '<br>';
        foreach ($tableau as $cle => $val) {
            // AFFICHAGE DES VALEURS DU TABLEAU CONCATENEES
            //AVEC UN SAUT DE LIGNE
            echo 'clé : '.$cle.', valeur: '.$val.'<br>';
        }
        $tableau = array('A1'=>'Jean','B2'=>'Robert',3=>'Paul','Toto'=>'Joe','H'=>'Alain');
        rsort($tableau); ///tri tableau
        echo '<br>';
        foreach ($tableau as $cle => $val) {
            // AFFICHAGE DES VALEURS DU TABLEAU CONCATENEES
            //AVEC UN SAUT DE LIGNE
            echo 'clé : '.$cle.', valeur: '.$val.'<br>';
        }
        $tableau = array('A1'=>'Jean','B2'=>'Robert',3=>'Paul','Toto'=>'Joe','H'=>'Alain');
        arsort($tableau); ///tri tableau et garder les clé
        echo '<br>';
        foreach ($tableau as $cle => $val) {
            // AFFICHAGE DES VALEURS DU TABLEAU CONCATENEES
            //AVEC UN SAUT DE LIGNE
            echo 'clé : '.$cle.', valeur: '.$val.'<br>';
        }
        $tableau = array('A1'=>'Jean','B2'=>'Robert',3=>'Paul','Toto'=>'Joe','H'=>'Alain');
        ksort($tableau); ///tri tableau par clé
        echo '<br>';
        foreach ($tableau as $cle => $val) {
            // AFFICHAGE DES VALEURS DU TABLEAU CONCATENEES
            //AVEC UN SAUT DE LIGNE
            echo 'clé : '.$cle.', valeur: '.$val.'<br>';
        }
        
        /////// krsort k : trier les clés , r: renversé =décroissant , tri 
        $tableau = array('A1'=>'Jean','B2'=>'Robert',3=>'Paul','Toto'=>'Joe','H'=>'Alain');
        krsort($tableau); ///tri tableau
        echo '<br>';
        foreach ($tableau as $cle => $val) {
            // AFFICHAGE DES VALEURS DU TABLEAU CONCATENEES
            //AVEC UN SAUT DE LIGNE
            echo 'clé : '.$cle.', valeur: '.$val.'<br>';
            
        }
        
        $tableau = array('A1'=>'Jean','B2'=>'Robert',3=>'Paul','Toto'=>'Joe','H'=>'Alain');
        if ($cle_element=array_search('Robert', $tableau))
                echo $cle_element;
        
        /// autre exemple
        $tableau = array('Jean','Robert','Paul','Joe','Alain'); 
        $cle_element=array_search('Robert', $tableau);
        echo "La clé de l'élément recherché est : ".$cle_element;
        
        
        ///// F- Decouper une chaine dans un tableau
        //////// explode() permet de découper une chaine dans un tableau en utilisant un séparation
        $ensemble="1;2;3;4;5";
        $tableau = explode(";",$ensemble);
        echo "La première valeur du tableau est : ".$tableau[0];
        echo"La dernière valeur du tableau est :  ".$tableau[count ($tableau)-1];
        
        $ensemble="1;2;3;4;5";
        $tableau = explode(";",$ensemble);
        echo "Les valeurs du tableau sont : ";
        foreach ($tableau as $valeur) {
            echo $valeur.";";}
            echo '<br>';
        ////Regrouper les valeurs d'un tableau dans une chaine
            //////implode() permet de regroupper les valeurs d'un tableau dans une chaine en utilisant un séparateur
        $tableau = array('Jean','Robert','Paul');
        $chaine=implode($tableau,";");
        echo "<br>Les nom sont : ".$chaine;
        

        ////H découper une chaine en morceaux de longeur fixe
        ///// str_split() permet de découper une chaine en morceau de longeur fixe dans 
        ///// parametre indiquant la taille des morceaux de chaine.
       $ensemble="1;2;3;4;5";
       echo "<br> Les éléments sont :";
       $tableau=str_split($ensemble,2);
       foreach ($tableau as $valeur) {
           echo $valeur." ";  
        }
        
        ///// I-  ajouter des éléments à la fin du tableau
        /// array_push()permet d'ajouter un ou plusieur éléments à la fin du tableau
        $tableau = array('Jean','Robert','Paul'); 
        array_push($tableau, 'Alain','Joe');
        echo"<br> Tableau avec valeur ajouté : ";
        foreach ($tableau as $valeur) {
           echo $valeur." ";  
        }
        
        /////// J-  Suppression d'un élément à la fin du tableau
        $tableau = array('Jean','Robert','Paul'); 
        $supp=array_pop($tableau);
        echo "<br>Le nom supprimé : ".$supp; 
        
        $tableau = array('Jean','Robert','Paul'); 
        