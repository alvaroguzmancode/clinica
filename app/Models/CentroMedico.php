<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class CentroMedico
 * @package App\Models
 * @version November 25, 2018, 10:52 am UTC
 *
 * @property string descripcion
 */
class CentroMedico extends Model
{

    public $table = 'centromedico';
    


    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required'
    ];

    
}
