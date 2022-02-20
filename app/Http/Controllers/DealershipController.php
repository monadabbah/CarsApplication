<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dealership;

class DealershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Dealership::all();
        $data = Dealership::join('dealership_cars', 'dealership_cars.d_id', '=', 'dealerships.id')
              		->join('types', 'types.id', '=', 'dealership_cars.t_id')
              		->get(['dealerships.name as d_name', 'dealerships.country', 'dealerships.city',
                      'types.name as t_name', 'dealership_cars.num_cars']);
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'country' => 'required'
        ]);
        return Dealership::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Dealership::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dealership = Dealership::find($id);
        $dealership->update($request->all());
        return $dealership;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Dealership::destroy($id);
    }

    /**
     * Search for a name.
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Dealership::where('name', 'like', '%'.$name.'%')->get();
    }

    public function dealerships_count() {
        return Dealership::all()->count();
    }
}
