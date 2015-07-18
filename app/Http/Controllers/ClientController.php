<?php

namespace CodeProject\Http\Controllers;

use Illuminate\Http\Request;
use CodeProject\Http\Requests;
use CodeProject\Client;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    public function create()
    {
        // Form
    }

    public function store(Request $request)
    {
        return Client::create($request->all());
    }

    public function show($id)
    {
        return Client::find($id);
    }

    public function edit($id)
    {
        // Form
    }

    public function update(Request $request, $id)
    {
        $client = Client::where('id',$id)->update($request->all());
        if($client){
            return json_encode($request->all());
        }
        return 'Erro ao atualizar o cliente.';
    }

    public function destroy($id)
    {
        Client::find($id)->delete();
    }
}
