<?php

namespace App\Http\Controllers;

use App\Material;
use App\Slice;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class SliceController.
 */
class SliceController extends Controller
{
    /**
     * @param $materialId
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index($materialId)
    {
        $slices = Material::findOrFail($materialId)->slices;

        return response($slices, Response::HTTP_OK);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param                          $materialId
     *
     * @return int
     *
     * @internal param $material
     */
    public function create(Request $request, $materialId)
    {
        $material = Material::findOrFail($materialId);
        $slice = $material->slices()
            ->create($request->all());

        return response($slice, Response::HTTP_CREATED);
    }

    /**
     * @param $materialId
     * @param $sliceId
     *
     * @return mixed
     *
     * @internal param $id
     */
    public function show($materialId, $sliceId)
    {
        $slice = Slice::findOrFail($sliceId);

        return response($slice, Response::HTTP_OK);
    }

    /**
     * @param $materialId
     * @param $sliceId
     *
     * @return int
     *
     * @internal param $id
     */
    public function destroy($materialId, $sliceId)
    {
        Slice::findOrFail($sliceId)->delete();

        return response('', Response::HTTP_OK);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param                          $modelId
     * @param                          $sliceId
     *
     * @return int
     *
     * @internal param $id
     */
    public function update(Request $request, $modelId, $sliceId)
    {
        Slice::findOrFail($sliceId)
            ->update($request->all());

        $slice = Slice::findOrFail($sliceId);

        return response($slice, Response::HTTP_OK);
    }
}
