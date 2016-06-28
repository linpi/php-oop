<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Cat
        {
             
        }
        
        $pet = new Cat("Kitty");
                //$pet = new Cat();
                
        echo $pet->name;
        echo "<br>";
       
        echo "(".$pet->position['x'].",".$pet->position['y'].")";
       
        
        ?>
    </body>
</html>
