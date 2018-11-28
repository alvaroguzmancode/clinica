<?php

namespace App\Repositories;

use App\Models\Sueldo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SueldoRepository
 * @package App\Repositories
 * @version November 25, 2018, 4:52 am UTC
 *
 * @method Sueldo findWithoutFail($id, $columns = ['*'])
 * @method Sueldo find($id, $columns = ['*'])
 * @method Sueldo first($columns = ['*'])
*/
class SueldoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_inicio',
        'fecha_fin',
        'isr',
        'imss',
        'neto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sueldo::class;
    }
}
