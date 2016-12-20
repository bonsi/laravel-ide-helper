<?php

namespace Barryvdh\LaravelIdeHelper;

use Illuminate\Database\Eloquent\Factory;

class EloquentFactory extends Factory
{

    public function getDefinitions()
    {
        return $this->definitions;
    }

}