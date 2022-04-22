<?php
class Farm
{
  public $animals_and_products = [];
  public $animals = [
  ];
  public $products = [
  ];

  public $have_products = [];

  function get_day_product($days)
  {
    for ($g = 0; $g <= $days; $g++)
    {
      foreach ($this->animals_and_products as $key => $val)
      {
        if (is_array($val))
        {
          $i = array_rand($val, 1);
          $product = $val[$i];
          if (array_key_exists($key, $this->have_products))
          {
            $this->have_products[$key] += $product;
          }
          else
          {
            $i = array_rand($val, 1);
            $product = $val[$i];
            $this->have_products += [
              $key => $product,
            ];
          }
        }
      }
    }
  }

  function get_product()
  {
    var_dump($this->products);
  }
}



