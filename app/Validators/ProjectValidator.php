<?php

namespace CodeProject\Validators;

use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{

    protected $rules = [
        'owner_id' => 'required',
        'client_id' => 'required',
        'name' => 'required|max:255',
        'description' => 'required',
        'progress' => 'required|max:255',
        'status' => 'required',
        'due_date' => 'required'
    ];

}