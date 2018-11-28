<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Certificado
 * @package App\Models
 * @version November 25, 2018, 5:12 am UTC
 *
 * @property string descripcion
 */
class Certificado extends Model
{

    public $table = 'certificado';
    


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
        'descripcion' => 'tipo_certificado string text'
    ];

    
}
