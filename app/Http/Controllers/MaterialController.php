<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class MaterialController.
 */
class MaterialController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        $materials = Material::all();

        return response($materials, Response::HTTP_OK);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return int
     */
    public function create(Request $request)
    {
        $material = Material::create($request->all());

        return response($material, Response::HTTP_CREATED);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        $material = Material::findOrFail($id);

        return response($material, Response::HTTP_OK);
    }

    /**
     * @param $id
     *
     * @return int
     */
    public function destroy($id)
    {
        Material::findOrFail($id)
            ->delete();

        return Response::HTTP_OK;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param                          $id
     *
     * @return int
     */
    public function update(Request $request, $id)
    {
        $material = Material::findOrFail($id)
            ->update($request->all());

        return response($material, Response::HTTP_OK);
    }
}
