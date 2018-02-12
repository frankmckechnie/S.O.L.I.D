<?php 
/**
 * Single-responsibility Principle
 * 
 * A class should have one and only one reason to change, meaning that a class should have 
 * only one job.
 */
 
 class Circle {
 	
 	public $radius;

 	public function __construct()
 	{
 		$this->radius - $radius;
 	}

 }

 class Square {
    public $length;

    public function __construct($length) {
        $this->length = $length;
    }
}

/**
 * First, we create our shapes classes and have the constructors setup the required parameters. 
 * Next, we move on by creating the AreaCalculator class and then write up our logic to sum up 
 * the areas of all provided shapes.
 */

Class AreaCalculator {

    protected $shapes;

    public function __construct($shapes = array()) {
        $this->shapes = $shapes;
    }

    public function sum() {
        // logic to sum the areas
    }

    public function output() {
        return implode('', array(
            "",
                "Sum of the areas of provided shapes: ",
                $this->sum(),
            ""
        ));
    }
}