<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //Create to display Country Form
    public function create()
    {

        return view('appsettings.createcountry');
    }


    //Store to Country
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|max:255|min:3|unique:countries,name|regex:/^([^0-9]*)$/',

        ]);

        Country::create($request->post());

        session()->flash('success', 'Country has been created successfully.');

        return redirect('/showcountry');
    }

    public function show()
    {

        // return country::all();
        $data = Country::paginate(10);
        return view('appsettings.showcountry', ['Countries' => $data]);
    }
}
