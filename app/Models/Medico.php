<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Medico
 * @package App\Models
 * @version November 25, 2018, 3:37 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection empleadoPuesto
 * @property \Illuminate\Database\Eloquent\Collection paga
 * @property \Illuminate\Database\Eloquent\Collection Consultum
 * @property \Illuminate\Database\Eloquent\Collection MedicoHasEvento
 * @property \Illuminate\Database\Eloquent\Collection MedicoHasHorario
 * @property string nombre
 * @property string apellido_paterno
 * @property string apellido_materno
 * @property string curp
 * @property string cedula
 * @property string profesion
 * @property string especialidad
 * @property string fotografia
 * @property string telefono_fijo
 * @property string telefono_movil
 * @property string domicilio
 * @property integer codigo_postal
 * @property string rfc
 * @property string numero_seguro_social
 * @property string email
 * @property string password
 * @property string remember_token
 */
class Medico extends Model
{

    public $table = 'medico';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'curp',
        'cedula',
        'profesion',
        'especialidad',
        'fotografia',
        'telefono_fijo',
        'telefono_movil',
        'domicilio',
        'codigo_postal',
        'rfc',
        'numero_seguro_social',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'curp' => 'string',
        'cedula' => 'string',
        'profesion' => 'string',
        'especialidad' => 'string',
        'fotografia' => 'string',
        'telefono_fijo' => 'string',
        'telefono_movil' => 'string',
        'domicilio' => 'string',
        'codigo_postal' => 'integer',
        'rfc' => 'string',
        'numero_seguro_social' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
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
    public function medicoHasEventos()
    {
        return $this->hasMany(\App\Models\MedicoHasEvento::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function medicoHasHorarios()
    {
        return $this->hasMany(\App\Models\MedicoHasHorario::class);
    }
}
