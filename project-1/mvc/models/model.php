<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

class connection_object
{
   public function __construct(public $host, public $username, public $password, public $database)
   {
   }
}

// PETS
class pets_Model
{
   private $mysqli;
   private $connectionObject;
   public function __construct($connectionObject)
   {
      $this->connectionObject = $connectionObject;
   }

   public function connect()
   {
      try {
         $mysqli = new mysqli(
            $this->connectionObject->host,
            $this->connectionObject->username,
            $this->connectionObject->password,
            $this->connectionObject->database
         );

         if ($mysqli->connect_error) {
            throw new Exception('Could not connect');
         }
         return $mysqli;
      } catch (Exception $e) {
         error_log($e->getMessage());
         return false;
      }
   }

   // Select Species
   public function select_species()
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $result = $mysqli->query("SELECT * FROM species");
         while ($row = $result->fetch_assoc()) {
            $results[] = $row;
         }
         $mysqli->close();
         return $results;
      } else {
         return false;
      }
   }

   // Select Breeds
   public function select_breeds()
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $result = $mysqli->query("SELECT * FROM breeds");
         while ($row = $result->fetch_assoc()) {
            $results[] = $row;
         }
         $mysqli->close();
         return $results;
      } else {
         return false;
      }
   }

   // Select Toys
   public function select_toys()
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $result = $mysqli->query("SELECT * FROM toys");
         while ($row = $result->fetch_assoc()) {
            $results[] = $row;
         }
         $mysqli->close();
         return $results;
      } else {
         return false;
      }
   }

   // Select Pets
   public function select_pets()
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $result = $mysqli->query(
            "SELECT pets.*, 
            species.species_name, 
            breeds.breeds_name,
            toys.toys_name
            FROM pets
            INNER JOIN species ON pets.species_id = species.species_id
            INNER JOIN breeds ON pets.breeds_id = breeds.breeds_id
            INNER JOIN toys ON pets.toys_id = toys.toys_id;
         "
         );
         while ($row = $result->fetch_assoc()) {
            $results[] = $row;
         }
         $mysqli->close();
         return $results;
      } else {
         return false;
      }
   }

   // Add new pet
   public function add_new_pets($pets_name, $species_id, $breeds_id, $pets_age, $pets_gender, $pets_neutered, $pets_price, $toys_id)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $mysqli->query(
            "INSERT INTO pets (pet_name, species_id, breeds_id, pets_age, pets_gender, pets_neutered, pets_price, toys_id) VALUES ('$pets_name', '$species_id', '$breeds_id', '$pets_age', '$pets_gender', '$pets_neutered', '$pets_price', '$toys_id')"
         );
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }

   // Delete Pet
   public function delete_pets($pets_id)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $mysqli->query("DELETE FROM pets WHERE pets_id = '$pets_id'");
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }

   // Updating Pets
   public function updating_pets($pets_id, $pets_name, $species_id, $breeds_id, $pets_age, $pets_gender, $pets_neutered, $pets_price, $toys_id)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $mysqli->query(
            "UPDATE pets 
            SET pets_name = '$pets_name',
            species_id = '$species_id',
            breeds_id = '$breeds_id',
            pets_age = '$pets_age',
            pets_gender = '$pets_gender',
            pets_neutered = '$pets_neutered',
            pets_price = '$pets_price',
            toys_id = '$toys_id'            
            WHERE pets_id = '$pets_id'"
         );
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }

   // Select Pet by ID
   public function get_pets_by_their_id($pets_id)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $result = $mysqli->query("SELECT * FROM pets WHERE pets_id = '$pets_id'");
         $pets = $result->fetch_assoc();
         $mysqli->close();
         return $pets;
      } else {
         return false;
      }
   }
}

// BREEDS
class breeds_model
{

   private $mysqli;
   private $connectionObject;
   public function __construct($connectionObject)
   {
      $this->connectionObject = $connectionObject;
   }

   public function connect()
   {
      try {
         $mysqli = new mysqli(
            $this->connectionObject->host,
            $this->connectionObject->username,
            $this->connectionObject->password,
            $this->connectionObject->database
         );

         if ($mysqli->connect_error) {
            throw new Exception('Could not connect');
         }
         return $mysqli;
      } catch (Exception $e) {
         error_log($e->getMessage());
         return false;
      }
   }

   // Select Breeds
   public function select_breeds()
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $result = $mysqli->query("SELECT breeds.*, species.species_name FROM breeds INNER JOIN species ON breeds.species_id = species.species_id");
         while ($row = $result->fetch_assoc()) {
            $results[] = $row;
         }
         $mysqli->close();
         return $results;
      } else {
         return false;
      }
   }

   // Add new breeds
   public function add_new_breeds($breeds_name, $breeds_is_mixed, $breeds_price, $species_id)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $mysqli->query(
            "INSERT INTO breeds (breeds_name, breeds_is_mixed, breeds_price, species_id) VALUES ('$breeds_name', '$breeds_is_mixed', '$breeds_price', '$species_id')"
         );
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }

   // Delete Breeds
   public function delete_breeds($breeds_id)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $mysqli->query("DELETE FROM breeds WHERE breeds_id = '$breeds_id'");
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }

   // Updating Breeds
   public function updating_breeds($breeds_id, $breeds_name, $breeds_is_mixed, $breeds_price, $species_id)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $mysqli->query(
            "UPDATE breeds 
             SET breeds_name = '$breeds_name',
             breeds_is_mixed = '$breeds_is_mixed',
             breeds_price = '$breeds_price',
             species_id = '$species_id'
             WHERE breeds_id = '$breeds_id'"
         );
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }

   // get breeds by their id
   public function get_breeds_by_their_id($breeds_id)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $result = $mysqli->query("SELECT * FROM breeds WHERE breeds_id = '$breeds_id'");
         $breeds = $result->fetch_assoc();
         $mysqli->close();
         return $breeds;
      } else {
         return false;
      }
   }
}

// SPECIES
class species_model
{

   private $mysqli;
   private $connectionObject;
   public function __construct($connectionObject)
   {
      $this->connectionObject = $connectionObject;
   }

   public function connect()
   {
      try {
         $mysqli = new mysqli(
            $this->connectionObject->host,
            $this->connectionObject->username,
            $this->connectionObject->password,
            $this->connectionObject->database
         );

         if ($mysqli->connect_error) {
            throw new Exception('Could not connect');
         }
         return $mysqli;
      } catch (Exception $e) {
         error_log($e->getMessage());
         return false;
      }
   }

   // Select Species
   public function select_species()
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $result = $mysqli->query("SELECT * FROM species");
         while ($row = $result->fetch_assoc()) {
            $results[] = $row;
         }
         $mysqli->close();
         return $results;
      } else {
         return false;
      }
   }

   // Add new species
   public function add_new_species($species_name, $species_price)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $mysqli->query(
            "INSERT INTO species (species_name, species_price) VALUES ('$species_name', '$species_price')"
         );
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }

   // Delete Species
   public function delete_species($species_id)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $mysqli->query("DELETE FROM species WHERE species_id = '$species_id'");
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }

   // Updating Species
   public function updating_species($species_id, $species_name, $species_price)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $mysqli->query(
            "UPDATE species 
             SET species_name = '$species_name',
             species_price = '$species_price'
             WHERE species_id = '$species_id'"
         );
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }

   // get species by their id
   public function get_species_by_their_id($species_id)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $result = $mysqli->query("SELECT * FROM species WHERE species_id = '$species_id'");
         $species = $result->fetch_assoc();
         $mysqli->close();
         return $species;
      } else {
         return false;
      }
   }
}

// TOYS
class toys_model
{

   private $mysqli;
   private $connectionObject;
   public function __construct($connectionObject)
   {
      $this->connectionObject = $connectionObject;
   }

   public function connect()
   {
      try {
         $mysqli = new mysqli(
            $this->connectionObject->host,
            $this->connectionObject->username,
            $this->connectionObject->password,
            $this->connectionObject->database
         );

         if ($mysqli->connect_error) {
            throw new Exception('Could not connect');
         }
         return $mysqli;
      } catch (Exception $e) {
         error_log($e->getMessage());
         return false;
      }
   }

   // Select Toys
   public function select_toys()
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $result = $mysqli->query("SELECT * FROM toys");
         while ($row = $result->fetch_assoc()) {
            $results[] = $row;
         }
         $mysqli->close();
         return $results;
      } else {
         return false;
      }
   }

   // Add new toys
   public function add_new_toys($toys_name, $toys_price)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $mysqli->query(
            "INSERT INTO toys (toys_name, toys_price) VALUES ('$toys_name', '$toys_price')"
         );
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }

   // Delete Toys
   public function delete_toys($toys_id)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $mysqli->query("DELETE FROM toys WHERE toys_id = '$toys_id'");
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }

   // Updating Toys
   public function updating_toys($toys_id, $toys_name, $toys_price)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $mysqli->query(
            "UPDATE toys 
             SET toys_name = '$toys_name',
             toys_price = '$toys_price'
             WHERE toys_id = '$toys_id'"
         );
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }
   
   // get toys by their id
   public function get_toys_by_their_id($toys_id)
   {
      $mysqli = $this->connect();
      if ($mysqli) {
         $result = $mysqli->query("SELECT * FROM toys WHERE toys_id = '$toys_id'");
         $toys = $result->fetch_assoc();
         $mysqli->close();
         return $toys;
      } else {
         return false;
      }
   }
}