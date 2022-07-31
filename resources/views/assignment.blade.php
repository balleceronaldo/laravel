<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <!-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <h1>Kodego Assignment</h1>
            <br>

            <?php
            echo "<br>";
            echo "1. Write a PHP program to print alphabet pattern 'A'."."<br>";
$space = '&nbsp';
$a = 1;
$j=20;
$x=1;
while($a<=1){
    echo str_repeat($space,$j)."*"."<br>";
    $a++;
    $j--;
    while($a<=4){
        echo str_repeat($space,$j)."*".str_repeat($space,$x)."*"."<br>";
        $a++;
        $j--;
        $x+=2;
    }    while($a<=5){
        echo str_repeat($space,$j)."* * * *"."<br>";
        $a++;
        $j--;
        $x+=2;
    }
    while($a<=8){
        echo str_repeat($space,$j)."*".str_repeat($space,$x)."*"."<br>";
        $a++;
        $j--;
        $x+=2;
    }
}


echo "<br>";
echo "2. Write a PHP script to get JSON representation of a value from an array."."<br>";


$arr = array("Name"=> "Ronaldo", "Age"=> 44, "Sport"=> "Chess" ,"hasWork"=> false); 

var_dump(json_encode($arr));

echo "<br>";
echo "<br>"."3. Write a PHP function to display JSON decode errors."."<br>";
echo "<br>";
echo "4. Write a PHP program to find a missing number(s) from an array."."<br>";


$input = [1,2,3,6,7,8];

echo "<br>";

function missing_number($num_list)
{
 // construct a new array
$new_arr = range($num_list[0],max($num_list));                                                    
// use array_diff to find the missing elements 
return array_diff($new_arr, $num_list);

}
print_r(missing_number(array(1,2,3,6,7,8)));
echo "<br>";
echo "<br>";
echo "5. Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to zero."."<br>";

echo "<br>";
echo "6. Write a PHP program to compute and return the square root of a given number."."<br>";
echo "Number is ".$number = 16;
function squareRoot($number){
    return $number**0.5;
}
echo "<br> Square root is ".squareRoot($number);

echo "<br>";
echo "<br>";
echo "7. Write a PHP program to find the single element in an array where every element appears three times except for one."."<br>";

echo "Array is: ";
print_r ($array1 = [1,1,1,2,2,2,3,4,4,4]);
echo "<br>";

$single = array_keys(                          
        array_intersect(                 
        array_count_values($array1), [1]                         
    )
    );
echo "Result is ".$single[0];

echo "<br>";
echo "<br>";
echo "8. Write a PHP program to check whether a sequence of numbers is an arithmetic progression or not.
In mathematics, an arithmetic progression or arithmetic sequence is a sequence of numbers such that the difference between the consecutive terms is constant."."<br>";


function is_arithmetic($arr)
  {
   $delta = $arr[1] - $arr[0];
   for($index=0; $index<sizeof($arr)-1; $index++)
    {
        if (($arr[$index + 1] - $arr[$index]) != $delta)
        {
             
             return "Not an arithmetic sequence";
        }       
    }
    return "An arithmetic sequence";
}
$my_arr1 = array(6, 7, 9, 11);
$my_arr2 = array(5, 7, 9, 11);

print_r(is_arithmetic($my_arr1)."\n");
print_r(is_arithmetic($my_arr2)."\n");

echo "<br>";
echo "<br>";
echo "9. Write a PHP program to reverse the bits of an integer (32 bits unsigned)."."<br>";

echo "Input: "."1234"."<br>"."Output: ";

function reverse_integer($n)
{
    $result = 0;
    for($i= 0; $i<32; $i++)
        {
            $result <<= 1;
            $result|= ($n & 1);
            $n >>= 1;
        }
        return $result;

}   
print_r(reverse_integer(1234)."<br>");

echo "<br>";
echo "<br>";
echo "10. Write a PHP program to add the digits of a positive integer repeatedly until the result has a single digit."."<br>";

function add_digits($num)
{
      if ( $num > 0)
      {
      return ($num - 1) % 9 + 1;
      }
      else
      {
          return 0;
      }
}

print_r(add_digits(48)."<br>");
print_r(add_digits(59)."<br>");


?>
        </div>
    </body>
</html>
