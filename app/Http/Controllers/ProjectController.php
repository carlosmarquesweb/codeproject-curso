<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\ProjectInterface;
use CodeProject\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * @var ProjectInterface
     */
    private $repository;
    /**
     * @var ProjectService
     */
    private $service;

    /**
     * @param ProjectInterface $repository
     * @param ProjectService $service
     */
    public function __construct(ProjectInterface $repository,ProjectService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        //return $this->repository->all();
        return $this->repository->with(['owner','client'])->all();
    }

    public function create()
    {
        // Form
    }

    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    public function show($id)
    {
        //return $this->repository->find($id);
        return $this->repository->with(['owner','client'])->find($id);
    }

    public function edit($id)
    {
        // Form
    }

    public function update(Request $request,$id)
    {
        return $this->service->update($request->all(),$id);
    }

    public function destroy($id)
    {
        return $this->repository->delete($id);
    }
}
