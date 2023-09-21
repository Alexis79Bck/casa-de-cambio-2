<?php

namespace App\Http\Controllers\Pages\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get(['id', 'name', 'email', 'image_url']);

        $heads = ['ID', 'Name', 'Email', 'Image', ''];
        
        $btnEdit = ['class'=>'btn btn-sm btn-warning', 'title'=>'Edit', 'icon' => 'fas fa-edit'];
        $btnDelete = ['class'=>'btn btn-sm btn-danger', 'title'=>'Delete','icon' => 'fas fa-trash'];
        $btnShow = ['class'=>'btn btn-sm btn-info', 'title'=>'Show','icon' => 'fas fa-eye'];
             
        $usersData = array_map(fn($user) => $user = [...$user,  'actions' => [$btnEdit, $btnDelete, $btnShow ]], $users->toArray());
     
        $config = [
            'data' => $usersData,
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ]; 
        
        return view('pages.users.index', compact('users','heads','config'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
