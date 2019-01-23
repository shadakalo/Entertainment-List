<?php namespace MdTanvirHaque\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMdtanvirhaqueMoviesGenre extends Migration
{
    public function up()
    {
        Schema::table('mdtanvirhaque_movies_genre', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('mdtanvirhaque_movies_genre', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->increments('id')->unsigned()->change();
            $table->string('slug', 191)->change();
        });
    }
}
