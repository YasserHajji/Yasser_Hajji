<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise3</title>
 <style>
   body{
    color:black;
    font-size:arial;
   }
   h1{
    font-weight:bold;
    background-color: rgb(133, 129, 112);
    padding: 10px;
     width: 200px;
   }
   h3{
    font-weight:bold;
    background-color: rgb(177, 171, 145);
   }


     </style>
</head>
<body>
    <div>
    <div> 
       <h1>Assignement3</h1>
            
        <h3>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
        It's August, so it's still holiday.
        Not August, This is Month-name so i don't have any holidays</h3>
        <?php
        $m=date("F");
            if ($m=="August"){
                echo "<b>It's August, so it's still holiday<b><br>";
            }
            else{
                echo "<b>Not August, This is $m so i don't have any holidays.<b><br>";
            }
        ?>
        <h3>2. Assign color red to a variable name $color and check to print one the following responses using if else statement 

         The color is red. 
        The color is not red.</h3>
        <?php
        $color="red";
            if($color=="red"){
                echo "<b>The color is red.<b><br>";
            }
            else{
                echo"<b>The color is not red.<b><br>";
            } 
        ?>
     <h3>3. Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail<'50' </h3>
        <?php
        $grade=70;
            if($grade>80){
                echo"<b>Exccelent<b>.<br>";
            }
            elseif( $grade>70){
                echo "<b>Great<b>.<br>";
            }
            elseif( $grade>60){
                echo "<b>Good<b> .<br>";
            }
            elseif( $grade>50){
                echo "<b>Pass<b>.<br>";
            }
            elseif( $grade<50){
                    echo "<b>Fail<b> .<br>";
                }
            ?>
            <h3>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)</h3>
            <form action="voting.php" method="post">
            Age: <input type="text" name="age"><br>
            Name: <input type="text" name="name"><br>
            <input type="submit">
            </form>
            <h3>5. Use a looping statement to construct the following pattern: 
            12345678
            1234567
            123456
            12345
            1234
            123
            12
            1</h3>
        <?php
        $i=9;
        do{
         for($j=1;$j<$i;$j++){
            echo "<b>$j<b>";
         }
         echo "<br>" ;
            $i--;
        }
        while ($j>1);
        ?>
         <h3>6. Use While loop to print the following pattern: 
            *
            **
            ***
            ****
            *****
            ******
            *******
            ********</h3>
        <?php
        $i=1;
        do{
         for($j=1;$j<$i;$j++){
            echo "<b>*<b>";
         }
         echo "<br>" ;
            $i++;
        }
        while ($j<9);

        ?>






        </div>
    </body>
    </html>