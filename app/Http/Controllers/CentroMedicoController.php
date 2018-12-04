<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCentroMedicoRequest;
use App\Http\Requests\UpdateCentroMedicoRequest;
use App\Repositories\CentroMedicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CentroMedicoController extends AppBaseController
{
    /** @var  CentroMedicoRepository */
    private $centroMedicoRepository;

    public function __construct(CentroMedicoRepository $centroMedicoRepo)
    {
        $this->centroMedicoRepository = $centroMedicoRepo;
    }

    /**
     * Display a listing of the CentroMedico.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->centroMedicoRepository->pushCriteria(new RequestCriteria($request));
        $centroMedicos = $this->centroMedicoRepository->all();

        return view('centro_medicos.index')
            ->with('centroMedicos', $centroMedicos);
    }

    /**
     * Show the form for creating a new CentroMedico.
     *
     * @return Response
     */
    public function create()
    {
        return view('centro_medicos.create');
    }

    /**
     * Store a newly created CentroMedico in storage.
     *
     * @param CreateCentroMedicoRequest $request
     *
     * @return Response
     */
    public function store(CreateCentroMedicoRequest $request)
    {
        $request->validate([
            "descripcion"=>"required|max:250"
        ]);

        $input = $request->all();

        $centroMedico = $this->centroMedicoRepository->create($input);

        Flash::success('Centro Medico saved successfully.');

        return redirect(route('centroMedicos.index'));
    }

    /**
     * Display the specified CentroMedico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $centroMedico = $this->centroMedicoRepository->findWithoutFail($id);

        if (empty($centroMedico)) {
            Flash::error('Centro Medico not found');

            return redirect(route('centroMedicos.index'));
        }

        return view('centro_medicos.show')->with('centroMedico', $centroMedico);
    }

    /**
     * Show the form for editing the specified CentroMedico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $centroMedico = $this->centroMedicoRepository->findWithoutFail($id);

        if (empty($centroMedico)) {
            Flash::error('Centro Medico not found');

            return redirect(route('centroMedicos.index'));
        }

        return view('centro_medicos.edit')->with('centroMedico', $centroMedico);
    }

    /**
     * Update the specified CentroMedico in storage.
     *
     * @param  int              $id
     * @param UpdateCentroMedicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCentroMedicoRequest $request)
    {
        $request->validate([
            "descripcion"=>"required|max:250"
        ]);

        $centroMedico = $this->centroMedicoRepository->findWithoutFail($id);

        if (empty($centroMedico)) {
            Flash::error('Centro Medico not found');

            return redirect(route('centroMedicos.index'));
        }

        $centroMedico = $this->centroMedicoRepository->update($request->all(), $id);

        Flash::success('Centro Medico updated successfully.');

        return redirect(route('centroMedicos.index'));
    }

    /**
     * Remove the specified CentroMedico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $centroMedico = $this->centroMedicoRepository->findWithoutFail($id);

        if (empty($centroMedico)) {
            Flash::error('Centro Medico not found');

            return redirect(route('centroMedicos.index'));
        }

        $this->centroMedicoRepository->delete($id);

        Flash::success('Centro Medico deleted successfully.');

        return redirect(route('centroMedicos.index'));
    }
}
