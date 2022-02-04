 <b>Welcome <b><?php echo $_POST["name"]; ?><br>
Your age is : <?php  echo $_POST["age"] ; ?><br>

<?php

if (empty($_POST['age']>=18)) {
    echo "<b>You can not vote.<b>";
} 
    else {
        echo"<b>You can vote.<b>";
    }
?>

