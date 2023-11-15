<?php
// 1st Exercise: Write a php class called Animal with a method called makeSound(). Create a subclass called Cat that overrides the makeSound() method to bark.
class Animal {
  public function makeSound() {
      echo "Animal sound";
  }
}

class Cat extends Animal {
  public function makeSound() {
      echo "Meow";
  }
}

$testanimal = new Animal();
echo "<br>";
$testanimal->makeSound();
echo "<br>";
$testcat = new Cat();
echo "<br>";
$testcat->makeSound();
echo "<br><br>";

// 2nd Exercise: Write a php class called Vehicle with a method called drive(). Create a subclass called Car that overrides the drive() method to print "Repairing a car".
class Vehicle {
  public function drive() {
      echo "Im driving the car";
  }
}

class Car extends Vehicle {
  public function drive() {
      echo "Repairing a car";
  }
}

$testvehicle = new Vehicle();
echo "<br>";
$testvehicle->drive();
echo "<br>";
$testcar = new Car();
echo "<br>";
$testcar->drive();
echo "<br><br>";

// 3rd Exercise: Write a php class called Shape with a method called getArea(). Create a subclass called Rectangle that overrides the getArea() method to calculate the area of a rectangle.
class Shape {
  public function getArea() {
      echo "Area of the shape";
  }
}

class Rectangle extends Shape {
  public function getArea() {
      echo "Area of the rectangle";
  }  
}

$testshape = new Shape();
echo "<br>";
$testshape->getArea();
echo "<br>";
$testrectangle = new Rectangle();
echo "<br>";
$testrectangle->getArea();
echo "<br><br>";

// 4th Exercise: Write a php class called Employee with methods called work() and getSalary(). Create a subclass called HRManager that overrides the work() method and adds a new method called addEmployee().
class Employee {
  public function work() {
      echo "Im Working...";
  }

  public function getSalary() {
      echo "Finally getting paid";
  }
}

class HRManager extends Employee {
  public function work() {
      echo "Your new boss is here!";
  }

  public function addEmployee() {
      echo "Let me hire a new employee";
  }

}

$testemployee = new Employee();
echo "<br>";
$testemployee->work();
echo "<br>";
$testhrmanager = new HRManager();
echo "<br>";
$testhrmanager->work();
echo "<br>";
$testhrmanager->addEmployee();
echo "<br><br>";

// 5th Exercise: Write a php class known as "BankAccount" with methods called deposit() and withdraw(). Create a subclass called SavingsAccount that overrides the withdraw() method to prevent withdrawals if the account balance falls below one hundred.
class BankAccount {
  public function __construct($balance) {
      $this->balance = $balance;
  }

  public function deposit() {
      echo "Depositing my pennies...";
  }

  public function withdraw() {
      echo "Withdrawing my pennies...";
  }
}

class SavingsAccount extends BankAccount {
  public function withdraw() {
      if ($this->balance < 100) {
          echo "I dont have enough money to withdraw";
      } else {
          echo "Withdrawing my Cents...";
      }
  }
}

$testbankaccount = new BankAccount(110);
echo "<br>";
$testbankaccount->withdraw();
echo "<br>";
$testsavingsaccount = new SavingsAccount(69);
echo "<br>";
$testsavingsaccount->withdraw();
echo "<br><br>";

// 6th Exercise: Write a php class called Animal with a method named move(). Create a subclass called Cheetah that overrides the move() method to run.
class Animals {
  public function move() {
      echo "the animal is moving...";
  }
}

class Cheetah extends Animals {
  public function move() {
      echo "look at the cheetah running away...";
  }
}

$testanimal = new Animals();
echo "<br>";
$testanimal->move();
echo "<br>";
$testcheetah = new Cheetah();
echo "<br>";
$testcheetah->move();
echo "<br><br>";

// 8th Exercise: Write a php class called Shapes with methods called getPerimeter() and getArea(). Create a subclass called Circle that overrides the getPerimeter() and getArea() methods to calculate the area and perimeter of a circle.
class Shapes {
  public function getPerimeter() {
      echo "the perimeter of the shape is...";
  }

  public function getArea() {
      echo "the area of the shape is...";
  }
}

class Circle extends Shapes {
  public function getPerimeter() {
      echo "the perimeter of the circle is...";
  }

  public function getArea() {
      echo "the area of the circle is...";
  }
}

$testshapes = new Shapes();
echo "<br>";
$testshapes->getPerimeter();
echo "<br>";
$testshapes->getArea();
echo "<br>";
$testcircle = new Circle();
echo "<br>";
$testcircle->getPerimeter();
echo "<br>";
$testcircle->getArea();
echo "<br><br>";

// 9th Exercise: Write a php vehicle class hierarchy. The base class should be Vehicles, with subclasses Truck, Cars and Motorcycle. Each subclass should have properties such as make, model, year, and fuel type. Implement methods for calculating fuel efficiency, distance traveled, and maximum speed.

class Vehicles {
  public function __construct($make, $model, $year, $fueltype) {
      $this->make = $make;
      $this->model = $model;
      $this->year = $year;
      $this->fueltype = $fueltype;
  }

  public function fuelEfficiency() {
      echo "the fuel efficiency of the vehicle is...";
  }

  public function distanceTraveled() {
      echo "the distance traveled by the vehicle is...";
  }

  public function maxSpeed() {
      echo "the maximum speed of the vehicle is...";
  }
}

class Truck extends Vehicles {
  public function fuelEfficiency() {
      echo "the fuel efficiency of the truck is...";
  }

  public function distanceTraveled() {
      echo "the distance traveled by the truck is...";
  }

  public function maxSpeed() {
      echo "the maximum speed of the truck is...";
  }
}

class Cars extends Vehicles {
  public function fuelEfficiency() {
      echo "the fuel efficiency of the car is...";
  }

  public function distanceTraveled() {
      echo "the distance traveled by the car is...";
  }

  public function maxSpeed() {
      echo "the maximum speed of the car is...";
  }
}

class Motorcycle extends Vehicles {
  public function fuelEfficiency() {
      echo "the fuel efficiency of the motorcycle is...";
  }

  public function distanceTraveled() {
      echo "the distance traveled by the motorcycle is...";
  }

  public function maxSpeed() {
      echo "the maximum speed of the motorcycle is...";
  }
}

$testvehicles = new Vehicles("mazda", "3", 2024, "Gas");
echo "<br>";
$testvehicles->fuelEfficiency();
echo "<br>";
$testvehicles->distanceTraveled();
echo "<br>";
$testvehicles->maxSpeed();
echo "<br>";

$testtruck = new Truck("chevrolet", "Silverado", 2021, "Gas");
echo "<br>";
$testtruck->fuelEfficiency();
echo "<br>";
$testtruck->distanceTraveled();
echo "<br>";
$testtruck->maxSpeed();
echo "<br>";

$testcars = new Cars("tesla", "model s", 2024, "Electric");
echo "<br>";
$testcars->fuelEfficiency();
echo "<br>";
$testcars->distanceTraveled();
echo "<br>";
$testcars->maxSpeed();
echo "<br>";

$testmotorcycle = new Motorcycle("suzuki", "hayabusa", 2024, "Gas");
echo "<br>";
$testmotorcycle->fuelEfficiency();
echo "<br>";
$testmotorcycle->distanceTraveled();
echo "<br>";
$testmotorcycle->maxSpeed();
echo "<br><br>";

// 10th Exercise: Write a php class hierarchy for employees of a company. The base class should be Employee, with subclasses Manager, Developer, and Programmer. Each subclass should have properties such as name, address, salary, and job title. Implement methods for calculating bonuses, generating performance reports, and managing projects.
class Employeee {
  public function __construct($name, $address, $salary, $jobtitle) {
      $this->name = $name;
      $this->address = $address;
      $this->salary = $salary;
      $this->jobtitle = $jobtitle;
  }

  public function bonuses() {
      echo "the bonus of the employee is...";
  }

  public function performanceReports() {
      echo "the performance report of the employee is...";
  }

  public function managingProjects() {
      echo "the project managed by the employee is...";
  }
}

class Manager extends Employeee {
  public function bonuses() {
      echo "the bonus of the manager is...";
  }

  public function performanceReports() {
      echo "the performance report of the manager is...";
  }

  public function managingProjects() {
      echo "the project managed by the manager is...";
  }
}

class Developer extends Employeee {
  public function bonuses() {
      echo "the bonus of the developer is...";
  }

  public function performanceReports() {
      echo "the performance report of the developer is...";
  }

  public function managingProjects() {
      echo "the project managed by the developer is...";
  }
}

class Programmer extends Employeee {
  public function bonuses() {
      echo "the bonus of the programmer is...";
  }

  public function performanceReports() {
      echo "the performance report of the programmer is...";
  }

  public function managingProjects() {
      echo "the project managed by the programmer is...";
  }
}

$testemployeee = new Employeee("Ruben", "1234 Rainbow st", 56000, "Animator");
echo "<br>";
$testemployeee->bonuses();
echo "<br>";
$testemployeee->performanceReports();
echo "<br>";
$testemployeee->managingProjects();
echo "<br>";

$testmanager = new Manager("Kevin", "4321 Rainbow st", 75500, "Manager");
echo "<br>";
$testmanager->bonuses();
echo "<br>";
$testmanager->performanceReports();
echo "<br>";
$testmanager->managingProjects();
echo "<br>";

$testdeveloper = new Developer("Jessica", "1st ave Rainbow st", 969696, "Developer");
echo "<br>";
$testdeveloper->bonuses();
echo "<br>";
$testdeveloper->performanceReports();
echo "<br>";
$testdeveloper->managingProjects();
echo "<br>";

$testprogrammer = new Programmer("Karen", "2nd ave Rainbow st", 696969, "Programmer");
echo "<br>";
$testprogrammer->bonuses();
echo "<br>";
$testprogrammer->performanceReports();
echo "<br>";
$testprogrammer->managingProjects();
echo "<br><br>";