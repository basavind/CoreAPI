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
        return Material::all();
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return int
     */
    public function create(Request $request)
    {
        try {
            Material::create($request->all());
        } catch (\Exception $e) {
            return response($e->getMessage(), Response::HTTP_BAD_REQUEST);
        }

        return Response::HTTP_CREATED;
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        $material = null;
        try {
            $material = Material::findOrFail($id);
        } catch (\Exception $e) {
            return response($e->getMessage(), Response::HTTP_NOT_FOUND);
        }

        return $material;
    }

    /**
     * @param $id
     *
     * @return int
     */
    public function destroy($id)
    {
        try {
            $material = Material::findOrFail($id);
        } catch (\Exception $e) {
            return response($e->getMessage(), Response::HTTP_NOT_FOUND);
        }

        $material->delete();

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
        try {
            $material = Material::findOrFail($id);
            $material->fill($request->all());
            $material->save();
        } catch (\Exception $e) {
            return response($e->getMessage(), Response::HTTP_I_AM_A_TEAPOT);
        }

        return Response::HTTP_OK;
    }
}
