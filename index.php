<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Product {
  // Properties
  private $category, $id, $description, $name, $price;

  //Constuctor...note gap between function and __(two of them, not one underscore)
  
  public function __construct ($category, $id, $description, $name, $price) {
    $this->category = $category;
    $this->id = $id;
    $this->description = $description;
    $this->name = $name;
    $this->price = $price;
  }
 

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
   function set_description($description) {
    $this->description = $description;
  }
  function get_description() {
    return $this->description;
  }
}

$tambourine= new Product('category', 'id', 'description', 'name', 'price');// Must include the five categories in this prototype
$kayamba = new Product('cateDon', 'idNumber', 'descriptive', 'nameSake', 'priceRange');//These decriptions are tweaked 
//but still work.
$tambourine->set_name ('Tambourine');
$kayamba->set_name('Kayamba');
$tambourine->set_description ('A shake music instrument');
$kayamba->set_description('An African shake music instrument');




?>

<p><?php echo $tambourine->get_name();?></p>

<p><?php echo $kayamba->get_name();?></p>

<p><?php echo $tambourine->get_description();?></p>

<p><?php echo $kayamba->get_description();?></p>

    
</body>
</html>



