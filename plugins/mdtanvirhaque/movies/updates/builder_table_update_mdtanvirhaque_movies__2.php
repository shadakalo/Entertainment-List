<?php namespace MdTanvirHaque\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMdtanvirhaqueMovies2 extends Migration
{
    public function up()
    {
        Schema::table('mdtanvirhaque_movies_', function($table)
        {
            $table->text('actor')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mdtanvirhaque_movies_', function($table)
        {
            $table->dropColumn('actor');
        });
    }
}
