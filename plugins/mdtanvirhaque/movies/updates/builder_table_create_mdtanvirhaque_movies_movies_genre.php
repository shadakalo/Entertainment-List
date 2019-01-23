<?php namespace MdTanvirHaque\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMdtanvirhaqueMoviesMoviesGenre extends Migration
{
    public function up()
    {
        Schema::create('mdtanvirhaque_movies_movies_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mdtanvirhaque_movies_movies_genre');
    }
}
