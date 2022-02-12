<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//2-9-22 Adding the car model for database manipulation with Eloquent
use App\Models\Car;

class CarsController extends Controller
{
    /**
     * Created On 2-7-22
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //2-9-22 Adding eloquent functionality-Select all from cars
       // $cars = Car::all();
       //Using where to get all cars matching the name=Audi
      // $cars = Car::where('name', '=', 'Audi')
       //         ->get();
        //2-10-22 Using the where clause to count
       // print_r(Car::where('name', 'Audi')->count());
       // print_r(Car::all()->count());
       //2-10-22 Done with retrieving data
            $cars = Car::all();
        //Using chunk method to break down large sets of data
        /* $cars = Car::chunk(2, function ($cars) { */
        /*     foreach($cars as $car) { */
        /*         print_r($car); */
        /*     } */
        /* }); */

       // dd($cars);
        //02-08-22 Add a default view, added the cars.index so it works, to use the root index, just remove cars.!
        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 2-10-22 23:40 minutes into the video we
     * go over inserting methods
     */
    public function create()
    {
        
        //2-10-22 return a view
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 2-11-22 30:00 minutes into video-Adding various code to
     * store the cars data.
     */
    public function store(Request $request)
    {
        /* $car = new Car; */
        /* $car->name = $request->input('name'); */
        /* $car->founded = $request->input('founded'); */
        /* $car->description = $request->input('description'); */
        //Pass an associative array to a car instance
        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description')
        ]);
        //save the data and redirect to updated cars view
        $car->save();
        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //2-12-22 Video 23-Eloquent Serialization

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 2-11-22 35:30 minutes into video
     */
    public function edit($id)
    {
        //Add Car find by $id
        $car = Car::find($id)->first();

       // dd($car);
        //Create the view
        return view('cars.edit')->with('car', $car);
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
        //2-11-22 40:00 Minutes in
        $car = Car::where('id', $id)
            ->update([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description')
        ]);
        //Add the view redirect
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //2-11-22 Adding the delete code for the button in index.blade
        //dd($id);
      //Not needed passing the $car variable to the function
      //  $car = Car::find($id)->first();
        $car->delete();

        return redirect('/cars');
    }
}
