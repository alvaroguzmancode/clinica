<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConsultorioRequest;
use App\Http\Requests\UpdateConsultorioRequest;
use App\Repositories\ConsultorioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ConsultorioController extends AppBaseController
{
    /** @var  ConsultorioRepository */
    private $consultorioRepository;

    public function __construct(ConsultorioRepository $consultorioRepo)
    {
        $this->consultorioRepository = $consultorioRepo;
    }

    /**
     * Display a listing of the Consultorio.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->consultorioRepository->pushCriteria(new RequestCriteria($request));
        $consultorios = $this->consultorioRepository->all();

        return view('consultorios.index')
            ->with('consultorios', $consultorios);
    }

    /**
     * Show the form for creating a new Consultorio.
     *
     * @return Response
     */
    public function create()
    {
        return view('consultorios.create');
    }

    /**
     * Store a newly created Consultorio in storage.
     *
     * @param CreateConsultorioRequest $request
     *
     * @return Response
     */
    public function store(CreateConsultorioRequest $request)
    {

        $request->validate([
            "descripcion"=>"required|max:250",
        ]);

        $input = $request->all();

        $consultorio = $this->consultorioRepository->create($input);

        Flash::success('Consultorio saved successfully.');

        return redirect(route('consultorios.index'));
    }

    /**
     * Display the specified Consultorio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $consultorio = $this->consultorioRepository->findWithoutFail($id);

        if (empty($consultorio)) {
            Flash::error('Consultorio not found');

            return redirect(route('consultorios.index'));
        }

        return view('consultorios.show')->with('consultorio', $consultorio);
    }

    /**
     * Show the form for editing the specified Consultorio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $consultorio = $this->consultorioRepository->findWithoutFail($id);

        if (empty($consultorio)) {
            Flash::error('Consultorio not found');

            return redirect(route('consultorios.index'));
        }

        return view('consultorios.edit')->with('consultorio', $consultorio);
    }

    /**
     * Update the specified Consultorio in storage.
     *
     * @param  int              $id
     * @param UpdateConsultorioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConsultorioRequest $request)
    {

        $request->validate([
            "descripcion"=>"required|max:250",
        ]);
        
        $consultorio = $this->consultorioRepository->findWithoutFail($id);

        if (empty($consultorio)) {
            Flash::error('Consultorio not found');

            return redirect(route('consultorios.index'));
        }

        $consultorio = $this->consultorioRepository->update($request->all(), $id);

        Flash::success('Consultorio updated successfully.');

        return redirect(route('consultorios.index'));
    }

    /**
     * Remove the specified Consultorio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $consultorio = $this->consultorioRepository->findWithoutFail($id);

        if (empty($consultorio)) {
            Flash::error('Consultorio not found');

            return redirect(route('consultorios.index'));
        }

        $this->consultorioRepository->delete($id);

        Flash::success('Consultorio deleted successfully.');

        return redirect(route('consultorios.index'));
    }
}
