<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use App\Repositories\EmpleadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EmpleadoController extends AppBaseController
{
    /** @var  EmpleadoRepository */
    private $empleadoRepository;

    public function __construct(EmpleadoRepository $empleadoRepo)
    {
        $this->empleadoRepository = $empleadoRepo;
    }

    /**
     * Display a listing of the Empleado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->empleadoRepository->pushCriteria(new RequestCriteria($request));
        $empleados = $this->empleadoRepository->all();

        return view('empleados.index')
            ->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new Empleado.
     *
     * @return Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created Empleado in storage.
     *
     * @param CreateEmpleadoRequest $request
     *
     * @return Response
     */
    public function store(CreateEmpleadoRequest $request)
    {

        $request->validate([
            "nombre"=>"required|max:50",
            "apellido_paterno"=>"required|max:50",
            "apellido_materno"=>"required|max:50",
            "curp"=>"required|max:50",
            "cedula"=>"required|max:50",
            "profesion"=>"required|max:50",
            "especialidad"=>"required|max:50",
            "fotografia"=>"required|max:50",
            "telefono_fijo"=>"required|max:50",
            "telefono_movil"=>"required|max:50",
            "domicilio"=>"required|max:50",
            "codigo_postal"=>"required|max:50",
            "rfc"=>"required|max:50",
            "numero_seguro_social"=>"required|max:50",
            "password"=>"max:50",
            "email"=>"required|email|unique:empleados",
        ]);

        $input = $request->all();

        $empleado = $this->empleadoRepository->create($input);

        Flash::success('Empleado saved successfully.');

        return redirect(route('empleados.index'));
    }

    /**
     * Display the specified Empleado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empleado = $this->empleadoRepository->findWithoutFail($id);

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        return view('empleados.show')->with('empleado', $empleado);
    }

    /**
     * Show the form for editing the specified Empleado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $empleado = $this->empleadoRepository->findWithoutFail($id);

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        return view('empleados.edit')->with('empleado', $empleado);
    }

    /**
     * Update the specified Empleado in storage.
     *
     * @param  int              $id
     * @param UpdateEmpleadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmpleadoRequest $request)
    {
        $request->validate([
            "nombre"=>"required|max:50",
            "apellido_paterno"=>"required|max:50",
            "apellido_materno"=>"required|max:50",
            "curp"=>"required|max:50",
            "cedula"=>"required|max:50",
            "profesion"=>"required|max:50",
            "especialidad"=>"required|max:50",
            "fotografia"=>"required|max:50",
            "telefono_fijo"=>"required|max:50",
            "telefono_movil"=>"required|max:50",
            "domicilio"=>"required|max:50",
            "codigo_postal"=>"required|max:50",
            "rfc"=>"required|max:50",
            "numero_seguro_social"=>"required|max:50",
            "password"=>"max:50",
            "email"=>"required|email|unique:empleados",
        ]);

        $empleado = $this->empleadoRepository->findWithoutFail($id);

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        $empleado = $this->empleadoRepository->update($request->all(), $id);

        Flash::success('Empleado updated successfully.');

        return redirect(route('empleados.index'));
    }

    /**
     * Remove the specified Empleado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empleado = $this->empleadoRepository->findWithoutFail($id);

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        $this->empleadoRepository->delete($id);

        Flash::success('Empleado deleted successfully.');

        return redirect(route('empleados.index'));
    }
}
