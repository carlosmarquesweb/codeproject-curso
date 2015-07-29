<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\UserInterface;
use CodeProject\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var UserInterface
     */
    private $repository;
    /**
     * @var UserService
     */
    private $service;

    /**
     * @param UserInterface $repository
     * @param UserService $service
     */
    public function __construct(UserInterface $repository,UserService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
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
