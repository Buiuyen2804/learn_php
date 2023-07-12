<!-- 1. Tạo một interface "Resizable" (Có thể điều chỉnh kích thước) với một phương thức là "resize". 
Tạo một lớp "Rectangle" (Hình chữ nhật) và triển khai interface Resizable để thay đổi kích thước của hình chữ nhật. -->
<?php
interface Resizable {
    public function resize($percentage);
}
class Rectangle implements Resizable {
    private $width;
    private $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function resize($percentage) {
        $this->width *= $percentage;
        $this->height *= $percentage ;
    }
    public function getWidth() {
        return $this->width;
    }
    public function getHeight() {
        return $this->height;
    }
}
// Sử dụng lớp Rectangle để thay đổi kích thước của hình chữ nhật
$rectangle = new Rectangle(10, 5);
echo "Original Width: " . $rectangle->getWidth() . "\n"; // Output: Original Width: 10
echo "Original Height: " . $rectangle->getHeight() . "\n"; // Output: Original Height: 5
$rectangle->resize(2);
echo "Resized Width: " . $rectangle->getWidth() . "\n"; // Output: Resized Width: 20
echo "Resized Height: " . $rectangle->getHeight() . "\n"; // Output: Resized Height: 10
?>

<!-- 2. Tạo một interface "Logger" với các phương thức "logInfo", "logWarning" và "logError". Tạo một lớp "FileLogger" (Ghi log vào file) 
và một lớp "DatabaseLogger" (Ghi log vào cơ sở dữ liệu) và triển khai interface Logger cho cả hai lớp. -->
<?
interface Logger {
  public function logInfo();
  public function logWarning();
  public function logError();
}
class FileLogger implements Logger {
  public function logInfo() {

  }
  public function logWarning() {
      
  }
  public function logError() {
      
  }
  protected $log;
  public function __construct($log) {
      $this->log = $log;
      $this->logInfo();
      $this->logWarning();
      $this->logError();
  }
  public function getLog() {
      return $this->log;
  }
}
class DatabaseLogger implements Logger {
  public function logInfo() {

  }
  public function logWarning() {
      
  }
  public function logError() {
      
  }
  protected $log;
  public function __construct($log) {
      $this->log = $log;
      $this->logInfo();
      $this->logWarning();
      $this->logError();
  }
  public function getLog() {
      return $this->log;
  }
}
$FileLogger = new FileLogger("bug...1");
$DatabaseLogger = new DatabaseLogger("bug...2");
echo $FileLogger->getLog(). "<br>";
echo $DatabaseLogger->getLog(). "<br>";
?>


<!-- 3. Tạo một interface "Drawable" (Có thể vẽ) với phương thức "draw". Tạo một lớp "Circle" (Hình tròn) 
và một lớp "Square" (Hình vuông) kế thừa từ interface Drawable và triển khai phương thức draw cho mỗi hình. -->
<?php
interface Drawable {
    public function draw();
}

class circle implements Drawable{
    protected $radius;

    public function __construct($radius)
    {
        $this -> radius = $radius;
    }

    public function draw(){
        echo "Hình tròn có bán kính " . $this -> radius . "cm" . "<br>";
    }
}

class Square implements Drawable{
    protected $length;
    protected $width;

    public function __construct($length, $width){
        $this -> length = $length;
        $this -> width = $width;
    }

    public function draw(){
        echo "Hình chữ nhật có chiều dài là " . $this -> length . " cm chiều rộng là " . $this -> width . "cm" ;
    }
}

$Circle = new circle(8);
$Circle -> draw();

$square = new Square(10,5);
$square -> draw();
?>

<!-- 4. Tạo một interface "Sortable" với phương thức "sort". Tạo một lớp "ArraySorter" (Sắp xếp mảng) 
và một lớp "LinkedListSorter" (Sắp xếp danh sách liên kết) và triển khai interface Sortable cho cả hai lớp. -->
<?php
interface Sortable {
    public function sort();
}

class ArraySorter implements Sortable {
    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function sort() {
        sort($this->data);
        return $this->data;
    }
}
$arraySorter = new ArraySorter([1,6,2,4,9]);
$sortedArray = $arraySorter->sort();
echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedArray);
?>
<!-- 5. Tạo một interface "Encryptable" (Có thể mã hóa) với phương thức "encrypt" và "decrypt". 
Tạo một lớp "AES" và một lớp "DES" kế thừa từ interface Encryptable và triển khai các phương thức theo thuật toán mã hóa tương ứng. -->
<?php
interface Encryptable {
    public function encrypt($data);
    public function decrypt($encryptedData);
}

class AES implements Encryptable {
    public function encrypt($data) {
        echo "Encrypting data using AES...";
    }

    public function decrypt($encryptedData) {
        echo "Decrypting AES encrypted data...";
    }
}

class DES implements Encryptable {
    public function encrypt($data) {
        echo "Encrypting data using DES...";
    }

    public function decrypt($encryptedData) {
        echo "Decrypting DES encrypted data...";
    }
}

$aes = new AES();
$aes->encrypt("Data to encrypt"); 
$aes->decrypt("Encrypted data"); 
echo "<br>";
$des = new DES();
$des->encrypt("Data to encrypt"); 
$des->decrypt("Encrypted data"); 
?>