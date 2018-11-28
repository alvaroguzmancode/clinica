<?php

namespace App\Repositories;

use App\Models\Evento;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EventoRepository
 * @package App\Repositories
 * @version November 25, 2018, 4:53 am UTC
 *
 * @method Evento findWithoutFail($id, $columns = ['*'])
 * @method Evento find($id, $columns = ['*'])
 * @method Evento first($columns = ['*'])
*/
class EventoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'tipo_evento',
        'certificado_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Evento::class;
    }
}
