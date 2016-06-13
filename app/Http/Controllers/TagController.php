<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class TagController.
 */
class TagController extends Controller
{
    /**
     * @var \App\Tag
     */
    private $tagManager;

    /**
     * TagController constructor.
     *
     * @param \App\Tag $tagManager
     */
    public function __construct(Tag $tagManager)
    {
        $this->tagManager = $tagManager;
    }

    /**
     * Return all existed tags.
     *
     * @return mixed
     */
    public function index()
    {
        $tags = $this->tagManager
            ->all();

        return response()->json($tags);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return int
     */
    public function create(Request $request)
    {
        $tag = $this->tagManager
            ->create($request->all());

        return response()->json($tag, Response::HTTP_CREATED);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        $tag = $this->tagManager
            ->findOrFail($id);

        return response()->json($tag);
    }

    /**
     * @param $id
     *
     * @return int
     */
    public function destroy($id)
    {
        $this->tagManager
            ->findOrFail($id)
            ->delete();

        return response()->json('');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param                          $id
     *
     * @return int
     */
    public function update(Request $request, $id)
    {
        $this->tagManager
            ->findOrFail($id)
            ->update($request->all());
        $tag = $this->tagManager
            ->findOrFail($id);

        return response()->json($tag);
    }
}
