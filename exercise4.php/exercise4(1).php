<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise4</title>
    <style>
      body{
         color:black;
         font-size:arial;
         background-color:rgb(198, 233, 243);
      }
      h1{
         font-weight:bold;
         color: white;
         background:black;
         width: 220px;
         padding: 15px;
         
      }
      h4{
         color: white;
         background-color: rgb(8, 106, 131);
         width: 70%;
         padding: 10px;
      }
      h5{
         color: white;
         width: 18%;
         background-color: rgb(8, 152, 172);
      }

    </style>
</head>
<body>
<h1>Assignement4</h1>
            
      <h4>1. Write a php script to display courses as list.$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")</h4>
   <?php
    $courses= array('PHP', 'HTML', 'JavaScript', 'CMS', 'Project');
     $num=count($courses);
     for ($i=0;$i<$num;$i++) {
        echo "<li>"."$courses[$i]"."<br>";
     }
     echo "<br>";
   ?>
   <h4>2. Delete an element from the array below: $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");</h4>
    <?php
    
     $courses1=array("PHP","HTML", "JavaScript", "CMS","Project");
     unset($courses1[0]);
       foreach ($courses1 as $y){
          echo $y ."<br>";
       }
       echo "<br>";
    ?>
     <h4>3. Sort the following array:$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");</h4>
      <h5>a) ascending order sort by value</h5>
    <?php
    
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
     sort($courses3);
     $num=count($courses3);
     for ($i=0;$i<$num;$i++) {
        echo $courses3[$i]."<br>";
     }
    ?>
      <h5>b) ascending order sort by Key</h5>
    <?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
     ksort($courses3);
     $num=count($courses3);
     for ($i=0;$i<$num;$i++) {
        echo $courses3[$i]."<br>";
     }
    ?>
    <h5>c) descending order sort by Value</h5>

    <?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
     rsort($courses3);
     $num=count($courses3);
     for ($i=0;$i<$num;$i++) {
        echo $courses3[$i]."<br>";
     }
    ?>
     <h5>d) descending order sort by Key</h5>

    <?php  
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
     krsort($courses3);
     $num=count($courses3);
     foreach ($courses3 as $x){
        echo $x."<br>";
     }
    ?>
      <h4>4. Change the following array's all values to upper case.$courses4=array("php", "html", "javascript", "cms", "project");</h4>
    <?php
    $courses4=array("php", "html", "javascript", "cms", "project");
    
      $courses4= array_flip($courses4);
  
      $courses4= array_change_key_case($courses4, CASE_UPPER);

      $courses4= array_flip($courses4);

      $num=count($courses4);
      for ($i=0;$i<$num;$i++) {
         echo $courses4[$i].", ";
      }
      echo "<br>";
 ?>
    <h4>5. Create an array that holds your favorite colors and print them. (indexed arrays)</h4>
  <?php
   $colors=array("black","white","purple","green");
    foreach($colors as $x){
       echo $x ."<br>";
    }
    echo "<br>";
  ?>
   <h4> 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
   </h4>
  <?php
   $favcolors=array("black"=>'#000000',"white"=>'#FFFFFF',"purple"=>'#800080',"green"=>'#008000');
    foreach($favcolors as $x => $hex){
       echo "My favorite colors is <b> $x </b> and it's hexcode is <b> $hex </b> " ."<br>";
    }
    echo "<br>";
  ?>
   <h4>7. Include 12 months in an array named month and print them using loop statement.</h4>
  <?php
   include"months.php";
    foreach($months as $x)
       echo $x ."  ";

    echo "<br>";
  ?>
   <h4>8. PHP script to calculate and display average temperature, five lowest and highest temperatures.
    </h4>
  <?php
      $temprature =array(78, 60, 62, 68, 71, 68, 73,85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73,72,  
      65,74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
      $average = array_sum($temprature) / count($temprature);
      echo "The average is : <b> $average</b>"."<br>";
      ?>
   <?php
      sort($temprature);
      $num=count($temprature);
      echo "The five lowest degrees are :";
      for ($i=0;$i<5;$i++) {
         echo "<b>$temprature[$i] </b>".",";
      }
      ?>
   <?php
         echo "<br>";
         rsort($temprature);
         $num=count($temprature);
         echo "The five highest degrees are :";
         for ($i=0;$i<5;$i++) {
          echo "<b>$temprature[$i]</b>" .",";
         }
         echo "<br>";
   ?>
   
      <h4>8.1/What is explode and what does the below code do?</h4>
       <b>Explode()</b> is a built in function in PHP used to split a string in different strings.
         And the code splited the string from the the previous one by a line.
      
      <h4>8.2/What is count? </h4>
      The <b>count()</b> function returns the number of elements in an array.
     
      <h4>8.3/ What does sort do?</h4> 
      The <b>sort()</b>  function is an inbuilt function in PHP and is used to sort an array in ascending order.
     
      <h4>8.4/Explain the following loop</h4>
       The loop start with the lenghts minus five,so the loop count from the last five inputs since the array is sorted from lowest to least.



</body>
</html>