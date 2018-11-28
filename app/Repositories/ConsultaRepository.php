<?php

namespace App\Repositories;

use App\Models\Consulta;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConsultaRepository
 * @package App\Repositories
 * @version November 25, 2018, 4:55 am UTC
 *
 * @method Consulta findWithoutFail($id, $columns = ['*'])
 * @method Consulta find($id, $columns = ['*'])
 * @method Consulta first($columns = ['*'])
*/
class ConsultaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'importe',
        'monto',
        'descuento',
        'total',
        'metodo_pago',
        'consultorio_id',
        'medico_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Consulta::class;
    }
}
