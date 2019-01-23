<?php namespace MdTanvirHaque\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mdtanvirhaque_movies_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    // relations between tables

    public $belongsToMany = [

        'genres' =>[
            'mdtanvirhaque\Movies\Models\Genre',
            'table' => 'mdtanvirhaque_movies_movies_genre',
            'order' => 'genre_title'
         ]
    ];

    protected $jsonable = ['actor'];

    public $attachOne = [

        'poster' => 'System\Models\File'
    ];

     public $attachMany = [

        'gallery' => 'System\Models\File'
    ];


}
