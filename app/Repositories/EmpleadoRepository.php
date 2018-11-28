<?php

namespace App\Repositories;

use App\Models\Empleado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmpleadoRepository
 * @package App\Repositories
 * @version November 25, 2018, 4:52 am UTC
 *
 * @method Empleado findWithoutFail($id, $columns = ['*'])
 * @method Empleado find($id, $columns = ['*'])
 * @method Empleado first($columns = ['*'])
*/
class EmpleadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Empleado::class;
    }
}
