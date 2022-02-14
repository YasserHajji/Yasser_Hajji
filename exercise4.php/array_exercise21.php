<?php
/*
1. Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
*/

    $courses= array('PHP', 'HTML', 'JavaScript', 'CMS', 'Project');
     $num=count($courses);
     for ($i=0;$i<$num;$i++) {
        echo "<li>"."$courses[$i]"."<br>";
     }
     echo "<br>";
   
/* 2. The unset() function is used to remove element from the array.
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
*/

    
     $courses1=array("PHP","HTML", "JavaScript", "CMS","Project");
     unset($courses1[0]);
       foreach ($courses1 as $y){
          echo $y ."<br>";
       }
       echo "<br>";
   
/* 
3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
*/
  echo "a) ascending order sort by value";
  echo "<br>";
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
     sort($courses3);
     $num=count($courses3);
     foreach ($courses3 as $x){
        echo $x."<br>";
     }
      echo "<br>";
     echo" b) ascending order sort by Key";
     echo "<br>";
     $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
      ksort($courses3);
      $num=count($courses3);
      foreach ($courses3 as $x){
        echo $x."<br>";
     }
     echo "<br>";
      echo" c) descending order sort by Value";
      echo "<br>";
      $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
       rsort($courses3);
       $num=count($courses3);
       foreach ($courses3 as $x){
        echo $x."<br>";
     }
     echo "<br>";
       echo" d) descending order sort by Key";
       echo "<br>";
       $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
        krsort($courses3);
        $num=count($courses3);
        foreach ($courses3 as $x){
           echo $x."<br>";
        }
        echo "<br>";
/* 
 4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
*/

$courses4=array("php", "html", "javascript", "cms", "project");
    
$courses4= array_flip($courses4);

$courses4= array_change_key_case($courses4, CASE_UPPER);

$courses4= array_flip($courses4);

$num=count($courses4);
for ($i=0;$i<$num;$i++) {
   echo $courses4[$i].", ";
}
echo "<br>";
echo "<br>";

// 5. Create an array that holds your favorite colors and print them. (indexed arrays)

$colors=array("black","white","purple","green");
    foreach($colors as $x){
       echo $x ."<br>";
    }
    echo "<br>";


// 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
$favcolors=array("black"=>'#000000',"white"=>'#FFFFFF',"purple"=>'#800080',"green"=>'#008000');
    foreach($favcolors as $x => $hex){
       echo "My favorite colors is <b> $x </b> and it's hexcode is <b> $hex </b> " ."<br>";
    }
    echo "<br>";

// 7. Include 12 months in an array named month and print them using loop statement.
include"months.php";
foreach($months as $x)
   echo $x ."  ";

echo "<br>";

/*
 8. PHP script to calculate and display average temperature, five lowest and highest temperatures.

Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Write comments to explain the following code (when asked):
*/
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
 echo"<b>Explode()</b> is a built in function in PHP used to split a string in different strings.   And the code splited the string from the the previous one by a line. <br>";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count? 
echo "The <b>count()</b> function returns the number of elements in an array.<br>";
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"."<br>"; 
// what does sort do?
echo "The <b>sort()</b>  function is an inbuilt function in PHP and is used to sort an array in ascending order.<br>";
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop :
echo" The loop start with the lenghts minus five,so the loop count from the last five inputs since the array is sorted from lowest to least.";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>