<?php

namespace Stores;

use Abstracts\Pizza;
use Abstracts\PizzaStore;
use Pizzas\ChicagoCheesePizza;
use Pizzas\ChicagoPepperoniPizza;
use Pizzas\ChicagoVeggiePizza;


class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'veggie':
                return new ChicagoVeggiePizza();
            case 'pepperoni':
                return new ChicagoPepperoniPizza();
            default:
                return new ChicagoCheesePizza();
        }
    }
}