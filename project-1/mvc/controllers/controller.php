<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '_includes/connection.php';
include_once 'models/model.php';

$connection2 = create_connection();
$controller = new Controller($connection2);
class Controller
{
    private $model;

    public function __construct($connection)
    {
        $this->model = new species_model($connection);
    }

    public function show_species()
    {
        $species = $this->model->select_species();
        include 'views/home.php';
    }

    public function show_form()
    {
        include 'views/form.php';
    }

    public function add()
    {
        $species_name = $_POST['species_name'];
        $species_price = $_POST['species_price'];

        if (!$species_name || !$species_price) {
            echo "<p>Species Who?</p>";
            $this->show_form();
            return;
        } else if ($this->model->insert_species($species_name, $species_price)) {
            echo "<p>This new species was added: $species_name</p>";
            echo "<p>With this price: $species_price</p>";
        } else {
            echo "<p>Could not add any new species 😭</p>";
            echo "<p>Could not add any new prices either, sorry, not sorry.</p>";
            $this->show_form();
        }

        $this->show_species();
    }
}

$connection2 = create_connection();
$controller = new Controller($connection2);

if (isset($_POST['submit'])) {
    $controller->add();
} else {
    $controller->show_form();
}

?>