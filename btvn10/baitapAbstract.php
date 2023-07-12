<!-- 1. Tạo một class trừu tượng "Shape" (Hình dạng) có một phương thức trừu tượng là "calculateArea". 
Tạo các lớp con "Circle" (Hình tròn) và "Rectangle" (Hình chữ nhật) kế thừa từ lớp Shape và triển khai phương thức 
calculateArea cho từng hình. -->

<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(5);
echo "Diện tích hình tròn: " . $circle->calculateArea() . "<br>";

$rectangle = new Rectangle(4, 6);
echo "Diện tích hình chữ nhật: " . $rectangle->calculateArea();

?>

<!-- 2. Tạo một abstract class "Animal" (Động vật) với một phương thức trừu tượng là "makeSound". 
Tạo các lớp con "Dog" (Chó) và "Cat" (Mèo) kế thừa từ lớp Animal và triển khai phương thức makeSound 
theo cách riêng của từng loại động vật. -->

<?php
abstract class Animal {
    abstract protected function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Gâu gâu";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meo meo";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output: Gâu gâu!
$cat = new Cat();
$cat->makeSound(); // Output: Meo meo!
?>

<!-- 3. Tạo một abstract class "Employee" (Nhân viên) với các thuộc tính trừu tượng như "name" (tên) và "salary" (mức lương). 
Tạo các lớp con "Manager" (Quản lý) và "Staff" (Nhân viên) kế thừa từ lớp Employee và triển khai các thuộc tính 
và phương thức theo cách riêng của từng lớp. -->
<?php
abstract class Employee {
    protected $name;
    protected $salary;
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    abstract public function calculateBonus();
    public function getName() {
        return $this->name;
    }
    public function getSalary() {
        return $this->salary;
    }
}
class Manager extends Employee {
    private $bonusPercentage;
    public function __construct($name, $salary, $bonusPercentage) {
        parent::__construct($name, $salary);
        $this->bonusPercentage = $bonusPercentage;
    }
    public function calculateBonus() {
        return $this->salary * ($this->bonusPercentage / 100);
    }
}
class Staff extends Employee {
    private $overtimeHours;
    private $hourlyRate;
    public function __construct($name, $salary, $overtimeHours, $hourlyRate) {
        parent::__construct($name, $salary);
        $this->overtimeHours = $overtimeHours;
        $this->hourlyRate = $hourlyRate;
    }
    public function calculateBonus() {
        return 0; // Staff không có tiền thưởng
    }
    public function calculateOvertimePay() {
        return $this->overtimeHours * $this->hourlyRate;
    }
}
// Sử dụng các lớp con để tạo đối tượng và truy cập các thuộc tính và phương thức
$manager = new Manager("John Doe", 5000, 20);
echo "Manager Name: " . $manager->getName() . "\n";
echo "Manager Salary: " . $manager->getSalary() . "\n";
echo "Manager Bonus: " . $manager->calculateBonus() . "\n";
$staff = new Staff("Jane Smith", 2000, 10, 15);
echo "Staff Name: " . $staff->getName() . "\n";
echo "Staff Salary: " . $staff->getSalary() . "\n";
echo "Staff Bonus: " . $staff->calculateBonus() . "\n";
echo "Staff Overtime Pay: " . $staff->calculateOvertimePay() . "\n";
?>

<!-- 4. Tạo một abstract class "Vehicle" (Phương tiện) với một phương thức trừu tượng là "start". 
Tạo các lớp con "Car" (Xe hơi) và "Motorcycle" (Xe máy) kế thừa từ lớp Vehicle và triển khai phương thức start 
theo cách riêng của từng loại phương tiện. -->
<?php
abstract class Vehicle {
    abstract public function start();
}
class Car extends Vehicle {
    public function start() {
        echo "Car";
    }
}
class Motorcycle extends Vehicle {
    public function start() {
        echo "Motorcycle";
    }
}
$car = new Car();
$car->start(); // Output: Car
$motorcycle = new Motorcycle();
$motorcycle->start(); // Output: Motorcycle
?>

<!-- 5. Tạo một abstract class "Database" (Cơ sở dữ liệu) với các phương thức trừu tượng như "connect", "query" và "disconnect". 
Tạo các lớp con "MySQLDatabase" và "PostgreSQLDatabase" kế thừa từ lớp Database và triển khai các phương thức theo cách riêng 
của từng loại cơ sở dữ liệu. -->
<?php
abstract class Database {
    abstract public function connect();
    abstract public function query($sql);
    abstract public function disconnect();
}
class MySQLDatabase extends Database {
    public function connect() {
        echo "Connecting to MySQL database.\n";
        // Code kết nối đến cơ sở dữ liệu MySQL
    }
    public function query($sql) {
        echo "Running MySQL query: $sql\n";
        // Code thực thi câu truy vấn trên cơ sở dữ liệu MySQL
    }
    public function disconnect() {
        echo "Disconnecting from MySQL database.\n";
        // Code ngắt kết nối cơ sở dữ liệu MySQL
    }
}
class PostgreSQLDatabase extends Database {
    public function connect() {
        echo "Connecting to PostgreSQL database.\n";
        // Code kết nối đến cơ sở dữ liệu PostgreSQL
    }
    public function query($sql) {
        echo "Running PostgreSQL query: $sql\n";
        // Code thực thi câu truy vấn trên cơ sở dữ liệu PostgreSQL
    }
    public function disconnect() {
        echo "Disconnecting from PostgreSQL database.\n";
        // Code ngắt kết nối cơ sở dữ liệu PostgreSQL
    }
}
// Sử dụng các lớp con để gọi phương thức connect, query và disconnect
$mysql = new MySQLDatabase();
$mysql->connect(); // Output: Connecting to MySQL database.
$mysql->query("SELECT * FROM users"); // Output: Running MySQL query: SELECT * FROM users
$mysql->disconnect(); // Output: Disconnecting from MySQL database.

$postgres = new PostgreSQLDatabase();
$postgres->connect(); // Output: Connecting to PostgreSQL database.
$postgres->query("SELECT * FROM employees"); // Output: Running PostgreSQL query: SELECT * FROM employees
$postgres->disconnect(); // Output: Disconnecting from PostgreSQL database.
?>