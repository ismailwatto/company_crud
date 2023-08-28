<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $companies = Company::all();

    return view('companies.index', compact('companies'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $company = company::where('email', $request->email)->first();
    
        if ($company) {
            // User already exists, handle the error
            return redirect()->back()->withInput()->withErrors(['email' => 'User already registered']);
        }
        
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->password = $request->password;
        $company->save();        
        return redirect('company/data');
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
        $companies = Company::find($id);
        return view('companies.edit', compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,)
    {

        $companies = Company::find($request->id);
        $companies->name = $request->name;
        $companies->email = $request->email;
        $companies->address = $request->address;
        $companies->password = $request->password;


        $companies->update();

    return redirect('company/data');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Company::where('id', $id)->delete();
        return redirect('company/data');
        //
    }
}
