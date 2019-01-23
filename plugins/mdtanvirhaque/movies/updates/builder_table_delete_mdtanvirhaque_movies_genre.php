<?php namespace MdTanvirHaque\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMdtanvirhaqueMoviesGenre extends Migration
{
    public function up()
    {
        Schema::dropIfExists('mdtanvirhaque_movies_genre');
    }
    
    public function down()
    {
        Schema::create('mdtanvirhaque_movies_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('genre_title');
            $table->string('slug', 191);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
