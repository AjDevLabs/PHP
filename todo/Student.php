<?php 

/**
 * summary
 */
class Student
{

	private $name;
	private $roll;

    /**
     * summary
     */
    public function __construct($name="",$roll="")
    {
        $this->name = $name;
        $this->roll = $roll;

        echo "constructor is called";
    }


    public  function __toString()
    {
    		return "<br>Roll : {$this->roll}<br>Name : {$this->name}";
    }
    public function __destruct()
    {
    	echo "<br>distruct is called";
    }


}

$rohit  =  new Student("Rohit","13011");
echo $rohit;
unset($rohit);


 ?>