<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRentaRequest;
use App\Http\Requests\UpdateRentaRequest;
use App\Repositories\RentaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RentaController extends AppBaseController
{
    /** @var  RentaRepository */
    private $rentaRepository;

    public function __construct(RentaRepository $rentaRepo)
    {
        $this->rentaRepository = $rentaRepo;
    }

    /**
     * Display a listing of the Renta.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rentaRepository->pushCriteria(new RequestCriteria($request));
        $rentas = $this->rentaRepository->all();

        return view('rentas.index')
            ->with('rentas', $rentas);
    }

    /**
     * Show the form for creating a new Renta.
     *
     * @return Response
     */
    public function create()
    {
        return view('rentas.create');
    }

    /**
     * Store a newly created Renta in storage.
     *
     * @param CreateRentaRequest $request
     *
     * @return Response
     */
    public function store(CreateRentaRequest $request)
    {
        $input = $request->all();

        $renta = $this->rentaRepository->create($input);

        Flash::success('Renta saved successfully.');

        return redirect(route('rentas.index'));
    }

    /**
     * Display the specified Renta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $renta = $this->rentaRepository->findWithoutFail($id);

        if (empty($renta)) {
            Flash::error('Renta not found');

            return redirect(route('rentas.index'));
        }

        return view('rentas.show')->with('renta', $renta);
    }

    /**
     * Show the form for editing the specified Renta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $renta = $this->rentaRepository->findWithoutFail($id);

        if (empty($renta)) {
            Flash::error('Renta not found');

            return redirect(route('rentas.index'));
        }

        return view('rentas.edit')->with('renta', $renta);
    }

    /**
     * Update the specified Renta in storage.
     *
     * @param  int              $id
     * @param UpdateRentaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRentaRequest $request)
    {
        $renta = $this->rentaRepository->findWithoutFail($id);

        if (empty($renta)) {
            Flash::error('Renta not found');

            return redirect(route('rentas.index'));
        }

        $renta = $this->rentaRepository->update($request->all(), $id);

        Flash::success('Renta updated successfully.');

        return redirect(route('rentas.index'));
    }

    /**
     * Remove the specified Renta from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $renta = $this->rentaRepository->findWithoutFail($id);

        if (empty($renta)) {
            Flash::error('Renta not found');

            return redirect(route('rentas.index'));
        }

        $this->rentaRepository->delete($id);

        Flash::success('Renta deleted successfully.');

        return redirect(route('rentas.index'));
    }
}
