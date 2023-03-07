<?php
require_once "models/Restaurant.class.php";

class RestaurantsController{
    private $restaurant;

    public function __construct(){
        $this->restaurant = new Restaurant;
    }

    // Fonction pour afficher les livres
    public function afficherRestaurants(){
        // On récupère tout les livres (Model Livre)
        $restaurants = $this->restaurant->chargementRestaurants();
        // On appelle la view pour les afficher
        require "views/restaurants.view.php";
    }

    public function afficherForm() {
      // On appelle la view qu'on veut afficher
      require "views/restaurant.new.view.php";
    }

    public function ajouterRestaurant() {
      if (isset($_POST['name'])) {
        // On récupère ce que le user a mis dans l'input
        $name = $_POST['name'];
        // On ajoute le restaurant à notre DB
        $this->restaurant->ajoutRestaurant($name);
        // On redirect sur la page qui liste tout les restaurants
        header('Location: '."/Restaurant/restaurants/");
      }
    }

    public function supprimerRestaurant($id) {
      $this->restaurant->destroyRestaurant($id);
      header('Location: '."/Restaurant/restaurants/");
    }
}
