 
<?php 

/**
* class testing in chapter 6
*/
class Entree
{	
	public $name;
	public $ingredients = array();
	public function __construct($name,$ingredient){
		if(!is_array($ingredient)){
		throw new Exception("ingredients must be array");
		}
		$this->name = $name;
		$this->ingredient = $ingredient;
	}
	public function has_ingredient($ingredient){
		return in_array($ingredient, $this->ingredient);
	}
	public static function getSizes(){
		return array('small','medium','large');
	}

	
}
/**
* testing extend class
*/
class ComboMeal extends Entree
{
	public function __construct($name,$entrees){
		parent::__construct($name,$entrees);
		foreach ($entrees as $entree) {
			if(!$entree instanceof Entree){
				throw new Exception("Elements of $entrees must be Entree objects");
			}
		}
	}
	public function has_ingredient($ingredient){
		foreach ($this->ingredient as $entree){
			if ($entree->has_ingredient($ingredient)){
				return true;
			}
		}
		return false;
	}
}

	$soup = new Entree('Chicken Soup', array('chicken', 'water'));
	$sandwich = new Entree('Chicken Sandwich', array('chicken', 'bread'));
	$combo = new ComboMeal('Soup + Sandwich', array($soup, $sandwich));
	foreach (['chicken','water','pickles','bread'] as $ing) {
		if ($combo->has_ingredient($ing)) {
			print "Something in the combo contains $ing.<br/>";
		}
	}

/**
	#$soup 		= New Entree;
	#$soup->name = 'Chicken Soup';
	$soup->ingredients = array('chicken','water');
	$sandwich	= New Entree;
	$sandwich->name = 'Chicken Sandwish';
	$sandwich->ingredients = array('chicken','bread');

	foreach (['chicken','lemon','bread','water']as $ing) {
		if ($soup->has_ingredient($ing)) {
			print "Soup contains $ing.\n";
		}
		if ($sandwich->has_ingredient($ing)){
			print "Sandwish contains $ing.\n";
		}
	}


try {
		$drink = New Entree('Glass of Milk','milk');

		if($drink->has_ingredient('milk')){
			print "Yammy";
		}		
	} catch (Exception $e) {
		print "Couldn't create the drink: " . $e->getMessage();
	}

 */
 ?>