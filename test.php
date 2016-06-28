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
            public $name;//屬性
            protected $position;
            
            public function __construct($name) //方法,建構子(未必要有)
                    {
                     $this->name = $name;
                     $this->position = ['x'=>0,'y'=>0];
                    }
                    public function moveTo($x,$y)
                    {
                        $this->position['x'] = $x;
                        $this->position['y'] = $y;
                        return $this->position;
                    }
                    public function resetPosition()
                    {
                        $this->moveTo(0, 0);
                        return $this->position;
                                
                    }
        }
        
        $pet = new Cat("Kitty");
                //$pet = new Cat();
                
        echo $pet->name;
        echo "<br>";
       
        echo "(".$pet->position['x'].",".$pet->position['y'].")";
       
        
        ?>
    </body>
</html>
