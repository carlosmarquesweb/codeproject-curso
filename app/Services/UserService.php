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
            return $this->repository->create($data);
        }catch(ValidatorException $e){
            return[
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

    public function update(array $data,$id)
    {
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data,$id);
        }catch(ValidatorException $e){
            return[
                'error' => true,
                'message' => $e->getMessageBag()
            ];
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