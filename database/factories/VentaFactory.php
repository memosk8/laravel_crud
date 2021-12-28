<?php

namespace Database\Factories;

use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VentaFactory extends Factory
{
   /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Venta::class;

   /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
      return [
         'fecha' => $this->faker->date(),
         'userid' => $this->faker->randomNumber(2),
         'producto' => $this->faker->randomNumber(2),
         'total' => $this->faker->randomFloat()
      ];
   }

   /**
    * Indicate that the model's email address should be unverified.
    *
    * @return \Illuminate\Database\Eloquent\Factories\Factory
    */
   public function unverified()
   {
      return $this->state(function (array $attributes) {
         return [
            'email_verified_at' => null,
         ];
      });
   }
}
