<!-- 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. -->
<?php
function checkNumber($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number không là số chẵn.";
    }
}
$number = 10; // Thay đổi giá trị số ở đây để kiểm tra
checkNumber($number);
?>

<!-- 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
function total($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}


$n = 10; // Thay đổi giá trị n ở đây để tính tổng của các số khác


$tong = total($n);
echo "Tổng của các số từ 1 đến $n là: $tong";
?>

<!-- 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<?php
function multiplicationTable($n) {
    echo "<br>"."Bảng cửu chương $n:";
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result\n";
    }
    echo "\n";
}
for ($j = 1; $j <= 10; $j++) {
    multiplicationTable($j);
}
?>

<!-- 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
function checkString($string1, $string2) {
    $check = strpos($string1, $string2);
    if ($check !== false) {
        echo "Chuỗi '$string1' chứa từ '$string2'.";
    } else {
        echo "Chuỗi '$string1' không chứa từ '$string2'.";
    }
}
$string1 = "Hello, world!"; 
$string2= "world"; 
checkString($string1, $string2);
?>

<!-- 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
function maxMin($mang) {
    $min = $mang[0]; // Giả sử phần tử đầu tiên là giá trị nhỏ nhất
    $max = $mang[0]; // Giả sử phần tử đầu tiên là giá trị lớn nhất
foreach ($mang as $value) {
        if ($value < $min) {
            $min = $value; // Cập nhật giá trị nhỏ nhất
        }
        if ($value > $max) {
            $max = $value; // Cập nhật giá trị lớn nhất
        }
    }
    echo "Giá trị nhỏ nhất trong mảng là: $min\n"."<br>";
    echo "Giá trị lớn nhất trong mảng là: $max\n";
}
$mang = [2, 9, 10, 7, 3, 16]; 
maxMin($mang);
?>

<!-- 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
function sortArray($numbers) {
	return sort($numbers);
}
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
echo "Mảng sau khi được sắp xếp tăng dần là:<br> ";
foreach( $numbers as $n) {
    echo "$n <br>";
}
?>

<!-- 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
function factorialCalculation($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorialCalculation($n - 1);
    }
}
$number = 9; 
$factorial = factorialCalculation($number);
echo "Giai thừa của $number là: $factorial";
?>

<!-- 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
function checkPrimes($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function checkPrimes1($start, $end) {
    echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        if (checkPrimes($i)) {
            echo $i . " ";
        }
    }
}
$start = 1; 
$end = 50; 
checkPrimes1($start, $end);
?>

<!-- 9. Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
function sumArray($array) {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum;
}
$array = [1,3,5,7,9]; 
$sum = sumArray($array);
echo "Tổng của các số trong mảng là: $sum";
?>

<!-- 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
function printFibonacci ($start, $end) {
    $fib1 = 0;
    $fib2 = 1;
    $fib = $fib1 + $fib2;
    echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
    while ($fib <= $end) {
        if ($fib >= $start) {
            echo $fib . " ";
        }
        $fib1 = $fib2;
        $fib2 = $fib;
        $fib = $fib1 + $fib2;
    }
}
$start = 1; // Thay đổi giá trị của số bắt đầu khoảng ở đây
$end = 100; // Thay đổi giá trị của số kết thúc khoảng ở đây
printFibonacci($start, $end);
?>

<!-- 11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
function checkArmstrong($number)
{
    $sum = 0;
    $originalNumber = $number;
    $numDigits = strlen($number);

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }

    // Kiểm tra xem số có phải là số Armstrong hay không
    if ($sum === $originalNumber) {
        return true;
    } else {
        return false;
    }
}
$number = 30;
if (checkArmstrong($number)) {
    echo "$number là số Armstrong.";
} else {
    echo "$number không là số Armstrong.";
}
?>

<!-- 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
function insertElement($arr, $element, $position)
{
   array_splice($arr, $position, 0, $element); // Sử dụng hàm array_splice để chèn phần tử vào mảng
   return $arr;// Trả về mảng sau khi chèn phần tử
}
$array = [2,3,4,6,7];// Mảng ban đầu
$element = 5;  // Phần tử cần chèn
$position = 3;  // Vị trí muốn chèn phần tử (vị trí tính từ 0)
$resultArray = insertElement($array, $element, $position); // Gọi hàm insertElement để chèn phần tử vào mảng ở vị trí bất kỳ
print_r($resultArray);
?>

<!-- 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
function removeDuplicates($arr)
{
    $counts = array_count_values($arr);// Sử dụng hàm array_count_values để đếm số lần xuất hiện của từng phần tử
    $result = array_filter($arr, function ($value) use ($counts) {   // Lặp qua mảng ban đầu và chỉ giữ lại các phần tử có số lần xuất hiện là 1
        return $counts[$value] === 1;
    });
    return array_values($result);  // Trả về mảng sau khi loại bỏ các phần tử trùng lặp
}
$originalArray = [2,3,4,6,2,7,5,4];    // Mảng ban đầu
$filteredArray = removeDuplicates($originalArray);
print_r($filteredArray);
?>

<!-- 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
function findLocation ($arr, $element)
{
    $position = array_search($element, $arr);  // Sử dụng hàm array_search để tìm vị trí của phần tử trong mảng
    if ($position !== false) {
        return $position; // Trả về vị trí của phần tử nếu tìm thấy
    } else {
        return -1; // Trả về -1 nếu không tìm thấy phần tử trong mảng
    }
}
$array = [3,5,7,8,9];
$element = 3;
$position = findLocation($array, $element);
if ($position !== -1) {
    echo "Vị trí của phần tử $element là $position";
} else {
    echo "Không tìm thấy phần tử $element trong mảng";
}
?>

<!-- 15. Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
function reverseString($string)
{
 $n = strlen($string);
 if($n == 1)
   {
    return $string;
   }
 else
   {
   $n--;
   return reverseString(substr($string,1, $n)) . substr($string, 0, 1);
   }
}
print_r(reverseString('3579')."\n");
?>

<!-- 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
function countNumber($array) {
    $number = count($array);
    return $number;
}
$array = [1,3,6,5,8,9,7]; 
$number = countNumber($array);
echo "Số lượng phần tử trong mảng là: $number";
?>

<!-- 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
        function checkPalindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return 1;  
		  else  
			  return 0;  
		}  
		echo checkPalindrome('madam')."<br>";
       ?>

<!-- 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->

<?php
function countOccurrences($arr, $element)
{
    $count = 0;
    foreach ($arr as $value) {
        // Kiểm tra nếu phần tử trùng khớp với phần tử cần đếm
        if ($value == $element) {
            $count++;
        }
    }
    return $count;
}
$array = [1, 2, 3, 4, 5,6];
$element = 1;
$occurrences = countOccurrences($array, $element);
echo "Số lần xuất hiện của phần tử $element trong mảng là: " . $occurrences;
?>

<!-- 19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
function sortArray1($numbers) {
	return rsort($numbers);
}
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
echo "Mảng sau khi được sắp xếp giảm dần là:<br> ";
foreach( $numbers as $n) {
    echo "$n <br>";
}
?>

<!-- 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
function addElement($arr, $element, $position)
{
    if ($position === 'beginning') {    // Thêm phần tử vào đầu mảng
        array_unshift($arr, $element);
    } elseif ($position === 'end') {
        $arr[] = $element;             // Thêm phần tử vào cuối mảng
    }
    return $arr;
}
$array = [ 3, 4, 5,6];
$element = 7;
$position = 'end';
$resultArray = addElement($array, $element, $position);
print_r($resultArray);
?>

<!--21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
function findSecond($arr)
{
    $count = count($arr);     // Kiểm tra số phần tử trong mảng
    if ($count < 2) {         // Nếu mảng có ít hơn hai phần tử, không có số lớn thứ hai
        return "Không có số lớn thứ hai trong mảng.";
    }
    rsort($arr); // Sắp xếp mảng theo thứ tự giảm dần
    return $arr[1];  // Trả về số lớn thứ hai
}
$array = [3,10,15,9,7];
$secondLargest = findSecond($array);
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
?>

<!-- 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
function findDivisor($a, $b)
{
    // Sử dụng thuật toán Euclid để tìm ước số chung lớn nhất (USCLN)
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function findMultiples($a, $b)
{
    // Tìm bội số chung nhỏ nhất (BSCNN) dựa trên USCLN
    $gcd = findDivisor($a, $b);
    $lcm = ($a * $b) / $gcd;
    return $lcm;
}
$num1 = 3;   // Số nguyên dương thứ nhất
$num2 = 26;   // Số nguyên dương thứ hai
$gcd = findDivisor($num1, $num2);   // Tìm USCLN của hai số
$lcm = findMultiples($num1, $num2);  // Tìm BSCNN của hai số
echo "Ước số chung lớn nhất của $num1 và $num2 là: " . $gcd . "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: " . $lcm;
?>

<!-- 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
function perfectNumber($number)
{
    if ($number <= 0) {    // Kiểm tra số nguyên dương
        return false;
    }
    // Tính tổng các ước số dương của số
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    // Kiểm tra xem tổng ước số có bằng số ban đầu hay không
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
$number = 36;
if (perfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
}
?>

<!-- 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
function findLargestOddNumber($arr)
{
    $largestOddNumber = null;   // Khởi tạo biến tạm thời để lưu trữ số lẻ lớn nhất
    foreach ($arr as $number) {
        // Kiểm tra nếu số là số lẻ và lớn hơn số lẻ lớn nhất hiện tại
        if ($number % 2 != 0 && ($largestOddNumber === null || $number > $largestOddNumber)) {
            $largestOddNumber = $number;
        }
    }  
    return $largestOddNumber;  // Trả về số lẻ lớn nhất
}
$array = [1,2,3,4,5,6,7,8,9];
$largestOdd = findLargestOddNumber($array);
if ($largestOdd !== null) {
    echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd;
} else {
    echo "Không có số lẻ trong mảng.";
}
?>

<!-- 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
function checkPrime($number)
{
    if ($number < 2) {
        return false;
    }
    // Duyệt qua từng số từ 2 đến căn bậc hai của số đầu vào
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            // Nếu có ước số chia hết, không phải là số nguyên tố
            return false;
        }
    }
    // Nếu không có ước số chia hết, là số nguyên tố
    return true;
}
$number = 20;
if (checkPrime($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}
?>

<!-- 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
function findLargestPositiveNumber($arr)
{
    $largestPositiveNumber = null;   // Khởi tạo biến tạm thời để lưu trữ số dương lớn nhất
    // Duyệt qua từng phần tử trong mảng
    foreach ($arr as $number) {
        // Kiểm tra nếu số là số dương và lớn hơn số dương lớn nhất hiện tại
        if ($number > 0 && ($largestPositiveNumber === null || $number > $largestPositiveNumber)) {
            $largestPositiveNumber = $number;
        }
    }
    return $largestPositiveNumber;
}
$array = [-2,1,-6,9,8,15];
$largestPositive = findLargestPositiveNumber($array);
if ($largestPositive !== null) {
    echo "Số dương lớn nhất trong mảng là: " . $largestPositive;
} else {
    echo "Không có số dương trong mảng.";
}
?>

<!-- 27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
function findLargestNegativeNumber($arr)
{
    $largestNegativeNumber = null;  // Khởi tạo biến tạm thời để lưu trữ số âm lớn nhất
    foreach ($arr as $number) {
        // Kiểm tra nếu số là số âm và lớn hơn số âm lớn nhất hiện tại
        if ($number < 0 && ($largestNegativeNumber === null || $number > $largestNegativeNumber)) {
            $largestNegativeNumber = $number;
        }
    }
    return $largestNegativeNumber;
}
$array =  [-2,1,-6,9,8,15];
$largestNegative = findLargestNegativeNumber($array);
if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: " . $largestNegative;
} else {
    echo "Không có số âm trong mảng.";
}
?>

<!-- 28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
function oddTotals($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        // Kiểm tra nếu số là số lẻ
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
    return $sum;
}
$n = 20;
$sum = oddTotals($n);
echo "Tổng các số lẻ từ 1 đến $n là: " . $sum;
?>

<!-- 29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
function findPerfectSquares($start, $end)
{
    $perfectSquares = [];
    for ($i = $start; $i <= $end; $i++) {
        // Kiểm tra nếu số là số chính phương
        if (sqrt($i) == (int)sqrt($i)) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}
$start = 1;
$end = 50;
$perfectSquares = findPerfectSquares($start, $end);
echo "Các số chính phương trong khoảng $start đến $end là: " . implode(', ', $perfectSquares);
?>

<!-- 30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
function CheckString2($string, $substring)
{
    $position = strpos($string, $substring); // Sử dụng hàm strpos để tìm vị trí đầu tiên của chuỗi con trong chuỗi cha
    // Kiểm tra nếu vị trí khác false, tức là chuỗi con được tìm thấy trong chuỗi cha
    if ($position !== false) {
        return true;
    } else {
        return false;
    }
}
$mainString = "Hello, World!";
$subString = "World";
$CheckString2 = CheckString2($mainString, $subString);


if ($CheckString2) {
    echo "Chuỗi '$subString' là chuỗi con của chuỗi '$mainString'.";
} else {
    echo "Chuỗi '$subString' không là chuỗi con của chuỗi '$mainString'.";
}
?>

