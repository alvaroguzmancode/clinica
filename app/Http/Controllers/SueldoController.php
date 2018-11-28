<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSueldoRequest;
use App\Http\Requests\UpdateSueldoRequest;
use App\Repositories\SueldoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SueldoController extends AppBaseController
{
    /** @var  SueldoRepository */
    private $sueldoRepository;

    public function __construct(SueldoRepository $sueldoRepo)
    {
        $this->sueldoRepository = $sueldoRepo;
    }

    /**
     * Display a listing of the Sueldo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sueldoRepository->pushCriteria(new RequestCriteria($request));
        $sueldos = $this->sueldoRepository->all();

        return view('sueldos.index')
            ->with('sueldos', $sueldos);
    }

    /**
     * Show the form for creating a new Sueldo.
     *
     * @return Response
     */
    public function create()
    {
        return view('sueldos.create');
    }

    /**
     * Store a newly created Sueldo in storage.
     *
     * @param CreateSueldoRequest $request
     *
     * @return Response
     */
    public function store(CreateSueldoRequest $request)
    {
        $input = $request->all();

        $sueldo = $this->sueldoRepository->create($input);

        Flash::success('Sueldo saved successfully.');

        return redirect(route('sueldos.index'));
    }

    /**
     * Display the specified Sueldo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sueldo = $this->sueldoRepository->findWithoutFail($id);

        if (empty($sueldo)) {
            Flash::error('Sueldo not found');

            return redirect(route('sueldos.index'));
        }

        return view('sueldos.show')->with('sueldo', $sueldo);
    }

    /**
     * Show the form for editing the specified Sueldo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sueldo = $this->sueldoRepository->findWithoutFail($id);

        if (empty($sueldo)) {
            Flash::error('Sueldo not found');

            return redirect(route('sueldos.index'));
        }

        return view('sueldos.edit')->with('sueldo', $sueldo);
    }

    /**
     * Update the specified Sueldo in storage.
     *
     * @param  int              $id
     * @param UpdateSueldoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSueldoRequest $request)
    {
        $sueldo = $this->sueldoRepository->findWithoutFail($id);

        if (empty($sueldo)) {
            Flash::error('Sueldo not found');

            return redirect(route('sueldos.index'));
        }

        $sueldo = $this->sueldoRepository->update($request->all(), $id);

        Flash::success('Sueldo updated successfully.');

        return redirect(route('sueldos.index'));
    }

    /**
     * Remove the specified Sueldo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sueldo = $this->sueldoRepository->findWithoutFail($id);

        if (empty($sueldo)) {
            Flash::error('Sueldo not found');

            return redirect(route('sueldos.index'));
        }

        $this->sueldoRepository->delete($id);

        Flash::success('Sueldo deleted successfully.');

        return redirect(route('sueldos.index'));
    }
}
