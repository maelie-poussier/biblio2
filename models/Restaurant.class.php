<?php
require_once "Model.class.php";

class Restaurant extends Model{

  // méthode pour récupérer tout les livres
  public function chargementRestaurants(){
    $req = $this->getBdd()->prepare("SELECT * FROM restaurants");
    $req->execute();
    return $mesRestaurants = $req->fetchAll();
  }

  public function ajoutRestaurant(string $name){
    $sqlQuery = 'INSERT INTO restaurants (name) VALUES (:name)';
    $insertRestaurant = $this->getBdd()->prepare($sqlQuery);
    $insertRestaurant->execute([
      'name' => $name
    ]);
  }

  public function destroyRestaurant(int $id){
    $req = "Delete from restaurants where id = :id";
    $deleteRestaurant = $this->getBdd()->prepare($req);
    $deleteRestaurant->execute([
      'id' => $id
    ]);
  }

}

