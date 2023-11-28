<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Clientes_model;

class Clientes extends Controller
{
    public function index()
    {
        $clientesModel = new Clientes_model();
        $data['clientes'] = $clientesModel->findAll();

        return view('clientes/index', $data);
    }

    public function create()
    {
        return view('clientes/create');
    }

    public function store()
    {
        $clientesModel = new Clientes_model();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'telefono' => $this->request->getPost('telefono'),
            'fecha_de_nacimiento' => $this->request->getPost('fecha_de_nacimiento'),
        ];
        $clientesModel->insert($data);

        return redirect()->to(base_url('clientes'));
    }

    public function edit($id)
    {
        $clientesModel = new Clientes_model();
        $data['cliente'] = $clientesModel->find($id);

        return view('clientes/edit', $data);
    }

    public function update($id)
    {
        $clientesModel = new Clientes_model();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'telefono' => $this->request->getPost('telefono'),
            'fecha_de_nacimiento' => $this->request->getPost('fecha_de_nacimiento'),
        ];
        $clientesModel->update($id, $data);

        return redirect()->to(base_url('clientes'));
    }

    
    public function delete($id)
    {
        $clientesModel = new Clientes_model();
        $clientesModel->delete(['idclientes' => $id]);

        return redirect()->to(base_url('clientes'));
    }

}
