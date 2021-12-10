<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('productos', function (Blueprint $table) {
         $table->id();
         $table->string('nombre', 50);
         $table->text('descripcion');
         $table->decimal('precio', $precision = 6, $scale = 3);
         $table->date('expiracion');
         $table->bigInteger('stock');
         $table->double('pesoKg', 3, 2);
         $table->string('imgLink', 500);
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('productos');
   }
}
