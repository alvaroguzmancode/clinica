<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $curp
 * @property string $cedula
 * @property string $profesion
 * @property string $especialidad
 * @property string $fotografia
 * @property string $telefono_fijo
 * @property string $telefono_movil
 * @property string $domicilio
 * @property int $codigo_postal
 * @property string $rfc
 * @property string $numero_seguro_social
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Consultum[] $consultas
 * @property MedicoHasEvento[] $medicoHasEventos
 * @property MedicoHasHorario[] $medicoHasHorarios
 */
class Medico extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'medico';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'curp', 'cedula', 'profesion', 'especialidad', 'fotografia', 'telefono_fijo', 'telefono_movil', 'domicilio', 'codigo_postal', 'rfc', 'numero_seguro_social', 'email', 'password', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultas()
    {
        return $this->hasMany('App\Consulta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicoHasEventos()
    {
        return $this->hasMany('App\MedicoHasEvento');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicoHasHorarios()
    {
        return $this->hasMany('App\MedicoHasHorario');
    }
}
