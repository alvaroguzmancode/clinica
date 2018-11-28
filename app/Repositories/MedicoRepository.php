<?php

namespace App\Repositories;

use App\Models\Medico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MedicoRepository
 * @package App\Repositories
 * @version November 25, 2018, 3:37 am UTC
 *
 * @method Medico findWithoutFail($id, $columns = ['*'])
 * @method Medico find($id, $columns = ['*'])
 * @method Medico first($columns = ['*'])
*/
class MedicoRepository extends BaseRepository
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
        return Medico::class;
    }
}
