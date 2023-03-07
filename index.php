 <?php
 require_once "controllers/RestaurantsController.php";
$restaurantController = new RestaurantsController;

if(empty($_GET['page'])){
    require "views/accueil.view.php";
} else {
    switch($_GET['page']){
        case "accueil" : require "views/accueil.view.php";
        break;
        case "restaurants" : $restaurantController->afficherRestaurants();
        break;
        case "restaurants_new" : $restaurantController->afficherForm();
        break;
        case "restaurants_create" : $restaurantController->ajouterRestaurant();
        break;
        case "restaurants_delete" : $restaurantController->supprimerRestaurant($_GET['id']);
        break;
    }
}

?>
