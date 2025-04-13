<?php

    class Utilisateurs {
        public $nom;
        public $prenom;
        public $age;
        public $email;

        public function seConnecter(){
            echo "Je suis inscrit sur votre site web";
        
        }
        public function seDeconnecter(){
            echo "Je me déconnecte";
        }
    }

    // $utilisateur1 = new Utilisateurs();
    // $utilisateur1->nom = 'Dupon ';
    // $utilisateur1-> prenom = 'karine';
    // echo $utilisateur1->nom;
    // echo $utilisateur1->prenom;








?>