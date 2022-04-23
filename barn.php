<?php
class Barn extends Farm
{
  public $burn_animal = [];


  function add_animal($animal_name, $amount_animal, 
  $product_name, $amount_product)
  {
    if (array_key_exists($animal_name, $this->animals_and_products))
    {
      $max = $amount_product[1];
      $min = $amount_product[0];
      $amount_product = [];
      while ($min <= $max)
      {
        array_push($amount_product, $min);
        $min++;
      }
      $this->animals_and_products[$animal_name] += $amount_animal;
      $this->animals[$animal_name] += $amount_animal;
    }
    else
    {
      $max = $amount_product[1];
      $min = $amount_product[0];
      $amount_product = [];
      while ($min <= $max)
      {
        array_push($amount_product, $min);
        $min++;
      }
      $this->animals_and_products += [
        $animal_name => $amount_animal,
        $product_name => $amount_product
      ];
      $this->animals += [$animal_name => $amount_animal];
      $this->products += [$product_name => $amount_product];
    }
  }


}