<?php

namespace CodeProject\Services;

use CodeProject\Repositories\UserInterface;
use CodeProject\Validators\UserValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class UserService
{
    /**
     * @var UserInterface
     */
    protected $repository;
    /**
     * @var UserValidator
     */
    protected $validator;

    public function __construct(UserInterface $repository,UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data)
    {
        try{
            $this->validator->with($data)->passesOrFail();
            return response()->json($this->repository->create($data));
        }catch(ValidatorException $e){
            return response()->json([
                'error' => true,
                'message' => $e->getMessageBag()
            ],412);
        }
    }

    public function update(array $data,$id)
    {
        try {
            //$this->validator->with($data)->passesOrFail();
            $this->validator->with($data)->setId($id)->passesOrFail();
            return response()->json($this->repository->update($data,$id));
        } catch(ValidatorException $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessageBag()
            ],412);
        } catch(ModelNotFoundException $e) {
            return $this->returnNotFoundError($id);
        }
    }

    public function destroy(array $data,$id)
    {
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->destroy($data,$id);
        }catch(ValidatorException $e){
            return[
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }
}