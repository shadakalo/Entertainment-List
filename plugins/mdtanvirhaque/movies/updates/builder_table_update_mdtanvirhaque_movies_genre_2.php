<?php namespace MdTanvirHaque\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMdtanvirhaqueMoviesGenre2 extends Migration
{
    public function up()
    {
        Schema::table('mdtanvirhaque_movies_genre', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('genre_title')->change();
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('mdtanvirhaque_movies_genre', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('genre_title', 191)->change();
            $table->string('slug', 191)->change();
        });
    }
}
