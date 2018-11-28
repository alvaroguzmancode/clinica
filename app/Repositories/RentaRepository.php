<?php

namespace App\Repositories;

use App\Models\Renta;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RentaRepository
 * @package App\Repositories
 * @version November 25, 2018, 4:53 am UTC
 *
 * @method Renta findWithoutFail($id, $columns = ['*'])
 * @method Renta find($id, $columns = ['*'])
 * @method Renta first($columns = ['*'])
*/
class RentaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'cobro',
        'consultorio_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Renta::class;
    }
}
