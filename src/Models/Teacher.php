<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/

namespace Tcc\Src\Models;

use CoffeeCode\DataLayer\DataLayer;

class Teacher extends DataLayer
{
    public function __construct()
    {
        parent::__construct("Teachers", ["first_name", "last_name", "email"]);
    }
}