<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Consultorio
 * @package App\Models
 * @version November 25, 2018, 4:50 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection empleadoPuesto
 * @property \Illuminate\Database\Eloquent\Collection paga
 * @property \Illuminate\Database\Eloquent\Collection Consultum
 * @property \Illuminate\Database\Eloquent\Collection Rentum
 * @property \Illuminate\Database\Eloquent\Collection medicoHasEvento
 * @property \Illuminate\Database\Eloquent\Collection medicoHasHorario
 * @property string descripcion
 */
class Consultorio extends Model
{

    public $table = 'consultorio';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function consulta()
    {
        return $this->hasMany(\App\Models\Consultum::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function renta()
    {
        return $this->hasMany(\App\Models\Rentum::class);
    }
}
