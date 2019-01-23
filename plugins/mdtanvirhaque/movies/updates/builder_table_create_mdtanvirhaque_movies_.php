<?php namespace MdTanvirHaque\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMdtanvirhaqueMovies extends Migration
{
    public function up()
    {
        Schema::create('mdtanvirhaque_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->text('year');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mdtanvirhaque_movies_');
    }
}
