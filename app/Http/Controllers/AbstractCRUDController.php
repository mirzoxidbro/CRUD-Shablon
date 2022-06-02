<?php
namespace App\Http\Controllers;

class AbstractCRUDController extends Controller
{
    protected $service;
    protected $storeRequestClass;
    protected $updateRequestClass;


    public function index()
    {
        $items = $this->service->index();
        return response()->json(['items' => $items]);
    }

    public function show($id)
    {
        $item = $this->service->show($id);
        return response()->json(['item' => $item]);
    }

    public function store()
    {
        $request = app($this->storeRequestClass);
        $item = $this->service->store($request->validated());
        return response()->json(['item' => $item]);
    }

    public function update($id)
    {
        $request = app($this->storeRequestClass);
        $item = $this->service->update($request->validated(), $id);
        return response()->json(['item' => $item]);
    }

    public function destroy($id)
    {
        $item = $this->service->destroy($id);
        return response()->json([
            'result' => 'ok'
        ]);
    }

}