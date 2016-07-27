
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoicesTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('choices', function (Blueprint $table) {
           $table->increments('id');
           $table->unsignedInteger('question_id')->nullable();
           $table->foreign('question_id')->references('id')->on('questions')->onDelete('CASCADE');
           $table->text('content');
           $table->boolean('status');
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
       Schema::drop('choices');
   }
}