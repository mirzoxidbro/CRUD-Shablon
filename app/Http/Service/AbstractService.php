<?php
namespace App\Http\Service;

class AbstractService
{
    protected $model;

    public function index()
    {
        $item = $this->model::all();
        return $item;
    }

    public function show($id)
    {
        $item = $this->model::findOrFail($id);
        return $item;
    }

    public function store(array $data)
    {
        $item = $this->model::create($data);
        return $item;
    }

    public function update(array $data, $id)
    {
        $item = $this->show($id);
        $item->update($data);

        return $item;
    }

    public function destroy($id)
    {
        $item = $this->show($id);
        $item->delete($id);
    
    }

}