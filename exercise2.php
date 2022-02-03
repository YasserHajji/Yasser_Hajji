<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise2</title>
     <style>
   body{
    color:black;
    font-size:arial;
}
 h1{
  font-weight:bold;
  background-color: rgb(196, 133, 18);
 }
 h2{
     padding: 10px;
     width: 65px;
     background-color: thistle;
 }
.op{
    padding: 10px;
     width: 110px;
     background-color: thistle;
}
 h3{
     font-weight:bold;
     background-color: rgb(243, 234, 196);
 }

     </style>
</head>
<body>
    <div> 
       <h1>Assignement2</h1>
        <h2>String</h2>
          <h3>1.Write PhP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string.(Hint: string function)</h3>

   <?php
       $string1="<b>we are going to count the lenght of this paragraph<b>";
       $string2= "<b>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, ullam<b>";
        echo "$string1. $string2."."<br>";
        echo"<b>the lenght of the string is :<b>" ;
        echo strlen("<b>$string1. $string2.<b>")."<br>";
     ?>
         
          <h3>2.In your above code, Change the double quotes to single quotes.Then run the script again. Did it have any effect?</h3>
       
  
        <h4> #After changing double quotes to one quote the variables are no longer considered as variables(they are considered as a normal string).</h4>
     
        
          <h3>3.Put a single quote at the beginning of your text and double quote at the end. What happens now when you run your code?</h3>
  
      
        <h4>#It gives an error </h4>
   
       
          <h3>4.Delete the dollar sign from the variable name. Run your code. What error did you get? Write the error message?</h3>
   
      
      <h4>#Syntax error, unexpected token "="</h4>
  

        
          <h3>5.Put the dollar sign back and remove one of the semicolon from the code. Run your code again. What error did you get this time?</h3>
   
          <h4>#Syntax error, unexpected variable "$string2"</h4>

   
      
          <h3>6.Write a PHP script to get the following display 
               " It is Markku's car."
                Random characters: del c:\*.* "</h3>
    <?php
       echo  " <b>It is Markku's car.<b><br>";
       echo  "<b>Random characters: del c:\*.* \"<b>" ."<br>";

   ?>
       <h2 class="op">Operators</h2>
         
          <h3>1.Write a script to add up the numbers: 298, 234, 46. Use echo statement to output your answer.
          </h3>
          
    <?php
       $x=298; 
       $y=234;
       $z=46;
       echo "The sum of x,y and z is : ". ($x+$y+$z) ."<br>";
   ?>
       
          <h3>2.Use variables to calculate the following : (87 + 44)+(200 * 15) / 10
          </h3>
   <?php
       $x=87; 
       $y=44;
       $z=200;
       $a= 15;
       $t=10;
       echo "The sum  is : ".($x + $y)+($z * $a) / $t  . "<br>";
   ?>
  </div>
</body>
</html>
