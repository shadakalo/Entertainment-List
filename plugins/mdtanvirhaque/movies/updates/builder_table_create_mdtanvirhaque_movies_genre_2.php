<?php namespace MdTanvirHaque\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMdtanvirhaqueMoviesGenre2 extends Migration
{
    public function up()
    {
        Schema::create('mdtanvirhaque_movies_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mdtanvirhaque_movies_genre');
    }
}
