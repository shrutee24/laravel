<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CrudModel;
use Illuminate\Http\Request;

class crud extends Controller
{
    public function index()
    {
        $records = CrudModel::paginate(7);
        //dd($records);
        return view('index', compact('records'));
    }

    public function new()
    {
        return view('form');
    }
    public function create(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'salary' => 'required|numeric',
            // Add more validation rules for other fields as needed
        ]);
    
        $data = new CrudModel();
        $data->name = $req->name;
        $data->salary = $req->salary;
        $data->emp_id = $req->emp_id;
    
        $image = $req->img;
    
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $req->img->move('image2', $imagename);
            $data->img = $imagename;
        }
    
        $data->save();
    
        return redirect()->back()->with('success', 'Record created successfully.');

    }
    
    public function edit($id)
    {
        $data = CrudModel::find($id);
        return view("edit",compact("data"));
    }
    public function update(Request $req, $id)
    {
        // Find the record to update
        $data = CrudModel::find($id);
        
        // Update other fields
        $data->name = $req->name;
        $data->salary = $req->salary;
        $data->emp_id = $req->emp_id;
        $image = $req->img;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $req->img->move('image2', $imagename);
            $data->img = $imagename;
        }
        $data->save();
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Record updated successfully.');
    }
public function delete($id){
    $data=CrudModel::find($id);
    $data->delete();
    return redirect()->back()->with('success', 'Record deleted successfully.');
}    

//     public function update(Request $request, $id)
// {
//     $data= CrudModel::findOrFail($id);
//     $data->update($request->all());
//     return redirect()->back()->with('success', 'Record updated successfully.');
// }
}
