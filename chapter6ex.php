<?php 

/**
* chapter 6 exercise . Ingredient should be array. If not we are difficult to find the total values.
*/
class Ingredient
{	
	public $name;
	public $cost;
	
	public function __construct($name,$cost){
		if(!is_int($cost)){
		throw new Exception("Cost Should be integer");
		}
		$this->name 	= $name;
		$this->cost 	= $cost;	# constructor.
	}	

	public function getName(){
		return $this->name;
	}
	public function getCost(){
		return $this->cost;
	}
	public function setCost($cost){
		$this->cost = $cost; 
	}
	public function Total($ing){
		$totalcost = 0;
		$totalcost += $this->cost;
		return $totalcost;
	}

}
	
	$ingredient1 = new Ingredient("Max",500);
	$ingredient2 = new Ingredient("VEVE",400);
	$tol = $ingredient1->Total($ingredient1->getCost());
	print $tol;
 ?>

