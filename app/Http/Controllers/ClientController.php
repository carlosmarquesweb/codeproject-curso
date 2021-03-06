<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\ClientInterface;
use CodeProject\Services\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @var ClientInterface
     */
    private $repository;
    /**
     * @var ClientService
     */
    private $service;

    /**
     * @param ClientInterface $repository
     * @param ClientService $service
     */
    public function __construct(ClientInterface $repository,ClientService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        //return $this->repository->all();
        return $this->repository->with(['projects'])->all();
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
        return $this->repository->with(['projects'])->find($id);
    }

    public function edit($id)
    {
        // Form
    }

    public function update(Request $request, $id)
    {
        return $this->service->update($request->all(),$id);
    }

    public function destroy($id)
    {
        return $this->repository->delete($id);
    }
}
