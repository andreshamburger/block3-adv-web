<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include_once '_include/connections.php';
include_once 'models/model.php';

$connection2 = create_connection();
$controller = new Controller($connection2);

class Controller
{
    // show the menu
    public function controller_menu()
    {
        include 'views/controller_menu.php';
    }

    private $pets_model;
    private $species_model;
    private $breeds_model;
    private $toys_model;

    public function __construct($connection)
    {
        $this->pets_model = new pets_model($connection);
        $this->species_model = new species_model($connection);
        $this->breeds_model = new breeds_model($connection);
        $this->toys_model = new toys_model($connection);
    }

    // breed - Showing breeds
    public function showing_breeds()
    {
        $breeds = $this->breeds_model->select_breeds();
        include 'views/show_breeds.php';
    }

    // Add breeds
    public function new_breeds_form()
    {
        $species = $this->species_model->select_species();
        include 'views/new_breeds_form.php';
    }

    public function add_new_breeds()
    {
        $breeds_name = $_POST['breeds_name'];
        $species_id = $_POST['species_id'];
        $breeds_is_mixed = $_POST['breeds_is_mixed'];
        $breeds_price = $_POST['breeds_price'];

        $this->breeds_model->add_new_breeds($breeds_name, $breeds_is_mixed, $breeds_price, $species_id);
    }

    // Deleting breeds
    public function delete_breeds()
    {
        if (isset($_POST['delete_breeds'])) {
            $breeds_id = $_POST['breeds_id'];
            $this->breeds_model->delete_breeds($breeds_id);
        }
    }

    // Updating breeds
    public function show_edit_breeds_form()
    {
        $breeds_id = $_POST['breeds_id'];
        $breeds = $this->breeds_model->get_breeds_by_their_id($breeds_id);
        $species = $this->species_model->select_species();
        include 'views/edit_breeds_form.php';
    }

    public function updating_breeds()
    {
        if (isset($_POST['updating_breeds'])) {
            $breeds_id = $_POST['breeds_id'];
            $breeds_name = $_POST['breeds_name'];
            $species_id = $_POST['species_id'];
            $breeds_is_mixed = $_POST['breeds_is_mixed'];
            $breeds_price = $_POST['breeds_price'];

            $this->breeds_model->updating_breeds($breeds_id, $breeds_name, $breeds_is_mixed, $breeds_price, $species_id);
        }
    }

    // species - showing species
    public function showing_species()
    {
        $species = $this->species_model->select_species();
        include 'views/show_species.php';
    }

    // Add species
    public function new_species_form()
    {
        include 'views/new_species_form.php';
    }

    public function add_new_species()
    {
        $species_name = $_POST['species_name'];
        $species_price = $_POST['species_price'];

        $this->species_model->add_new_species($species_name, $species_price);
    }

    // Deleting Species
    public function delete_species()
    {
        if (isset($_POST['delete_species'])) {
            $species_id = $_POST['species_id'];
            $this->species_model->delete_species($species_id);
        }
    }

    // Updating Species
    public function show_edit_species_form()
    {
        $species_id = $_POST['species_id'];
        $species = $this->species_model->get_species_by_their_id($species_id);
        include 'views/edit_species_form.php';
    }

    public function updating_species()
    {
        if (isset($_POST['updating_species'])) {
            $species_id = $_POST['species_id'];
            $species_name = $_POST['species_name'];
            $species_price = $_POST['species_price'];

            $this->species_model->updating_species($species_id, $species_name, $species_price);
        }
    }

    // toys - showing toys
    public function showing_toys()
    {
        $toys = $this->toys_model->select_toys();
        include 'views/show_toys.php';
    }

    // Add toys
    public function new_toys_form()
    {
        include 'views/new_toys_form.php';
    }

    public function add_new_toys()
    {
        $toys_name = $_POST['toys_name'];
        $toys_price = $_POST['toys_price'];

        $this->toys_model->add_new_toys($toys_name, $toys_price);
    }

    // Deleting toys
    public function delete_toys()
    {
        if (isset($_POST['delete_toys'])) {
            $toys_id = $_POST['toys_id'];
            $this->toys_model->delete_toys($toys_id);
        }
    }

    // Updating toys
    public function show_edit_toys_form()
    {
        $toys_id = $_POST['toys_id'];
        $toys = $this->toys_model->get_toys_by_their_id($toys_id);
        include 'views/edit_toys_form.php';
    }

    public function updating_toys()
    {
        if (isset($_POST['updating_toys'])) {
            $toys_id = $_POST['toys_id'];
            $toys_name = $_POST['toys_name'];
            $toys_price = $_POST['toys_price'];

            $this->toys_model->updating_toys($toys_id, $toys_name, $toys_price);
        }
    }

    // Pets - showing pets
    public function showing_pets()
    {
        $pets = $this->pets_model->select_pets();
        include 'views/show_pets.php';
    }

    // Add pets
    public function new_pets_form()
    {
        $species = $this->species_model->select_species();
        $breeds = $this->breeds_model->select_breeds();
        $toys = $this->toys_model->select_toys();
        include 'views/new_pets_form.php';
    }

    public function add_new_pets()
    {
        $pets_name = $_POST['pets_name'];
        $species_id = $_POST['species_id'];
        $breeds_id = $_POST['breeds_id'];
        $pets_age = $_POST['pets_age'];
        $pets_gender = $_POST['pets_gender'];
        $pets_neutered = $_POST['pets_neutered'];
        $pets_price = $_POST['pets_price'];
        $toys_id = $_POST['toys_id'];

        $this->pets_model->add_new_pets($pets_name, $species_id, $breeds_id, $pets_age, $pets_gender, $pets_neutered, $pets_price, $toys_id);
    }

    // Deleting pets
    public function delete_pets()
    {
        if (isset($_POST['delete_pets'])) {
            $pets_id = $_POST['pets_id'];
            $this->pets_model->delete_pets($pets_id);
        }
    }

    // Updating pets
    public function show_edit_pets_form()
    {
        $pets_id = $_POST['pets_id'];
        $pets = $this->pets_model->get_pets_by_their_id($pets_id);
        $species = $this->species_model->select_species();
        $breeds = $this->breeds_model->select_breeds();
        $toys = $this->toys_model->select_toys();
        include 'views/edit_pets_form.php';
    }

    public function updating_pets()
    {
        if (isset($_POST['updating_pets'])) {
            $pets_id = $_POST['pets_id'];
            $pets_name = $_POST['pets_name'];
            $species_id = $_POST['species_id'];
            $breeds_id = $_POST['breeds_id'];
            $pets_age = $_POST['pets_age'];
            $pets_gender = $_POST['pets_gender'];
            $pets_neutered = $_POST['pets_neutered'];
            $pets_price = $_POST['pets_price'];
            $toys_id = $_POST['toys_id'];

            $this->pets_model->updating_pets($pets_id, $pets_name, $species_id, $breeds_id, $pets_age, $pets_gender, $pets_neutered, $pets_price, $toys_id);
        }
    }
}

$controller->controller_menu();

// Controllers - breeds
if (isset($_POST['submit_breeds'])) {
    $controller->add_new_breeds();
} else if (isset($_POST['delete_breeds'])) {
    $controller->delete_breeds();
} else if (isset($_POST['edit_breeds'])) {
    $controller->show_edit_breeds_form();
} else if (isset($_POST['update_breeds'])) {
    $controller->updating_breeds();
}

// Controllers - species
if (isset($_POST['submit_species'])) {
    $controller->add_new_species();
} else if (isset($_POST['delete_species'])) {
    $controller->delete_species();
} else if (isset($_POST['edit_species'])) {
    $controller->show_edit_species_form();
} else if (isset($_POST['update_species'])) {
    $controller->updating_species();
}

// Controllers - toys
if (isset($_POST['submit_toys'])) {
    $controller->add_new_toys();
} else if (isset($_POST['delete_toys'])) {
    $controller->delete_toys();
} else if (isset($_POST['edit_toys'])) {
    $controller->show_edit_toys_form();
} else if (isset($_POST['update_toys'])) {
    $controller->updating_toys();
}

// Controllers - pets

if (isset($_POST['submit_pets'])) {
    $controller->add_new_pets();
} else if (isset($_POST['delete_pets'])) {
    $controller->delete_pets();
} else if (isset($_POST['edit_pets'])) {
    $controller->show_edit_pets_form();
} else if (isset($_POST['update_pets'])) {
    $controller->updating_pets();
}

// Pages - Breeds

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'breeds') {
        $controller->showing_breeds();
    } else if ($_GET['page'] == 'add_new_breeds') {
        $controller->new_breeds_form();
    }
}

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'showing_breeds') {
        $controller->showing_breeds();
    }
}

// Pages - Species

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'species') {
        $controller->showing_species();
    } else if ($_GET['page'] == 'add_new_species') {
        $controller->new_species_form();
    }
}

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'showing_species') {
        $controller->showing_species();
    }
}

// Pages - Toys

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'toys') {
        $controller->showing_toys();
    } else if ($_GET['page'] == 'add_new_toys') {
        $controller->new_toys_form();
    }
}

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'showing_toys') {
        $controller->showing_toys();
    }
}

// Pages - Pets

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'pets') {
        $controller->showing_pets();
    } else if ($_GET['page'] == 'add_new_pets') {
        $controller->new_pets_form();
    }
}

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'showing_pets') {
        $controller->showing_pets();
    }
}
?>