<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//2-9-22 Adding the car model for database manipulation with Eloquent
use App\Models\Car;
//2-17-22 Adding the headquarters dependency
use App\Models\Headquarter;
//use Facade\FlareClient\View;

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
       $cars = Car::all();
       //Using where to get all cars matching the name=Audi
      // $cars = Car::where('name', '=', 'Audi')
       //         ->get();
        //2-10-22 Using the where clause to count
       // print_r(Car::where('name', 'Audi')->count());
       // print_r(Car::all()->count());
       //2-14-22 Convert the cars returned to an array
         //   $cars = Car::all()->toArray();
         //   $cars = Car::all()->toJson();
          //  $cars = json_decode($cars);
        //Using chunk method to break down large sets of data
        /* $cars = Car::chunk(2, function ($cars) { */
        /*     foreach($cars as $car) { */
        /*         print_r($car); */
        /*     } */
        /* }); */
            //2-14-22 Added this for testing
          //  var_dump($cars);
        //dd($cars);
        //02-08-22 Add a default view, added the cars.index so it works, to use the root index, just remove cars.!
        //2-14-22 Converting the return data to a JSON string
        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request
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
       // $car->save();
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
        //2-15-22 Eloquent Video 23-One To Many
        $car = Car::find($id);
        //Add for testing
       // dd($car->engines);
        //12-16-22 add the headquarters one-to-one relationship view
       // $hq = $car->headquarter;
       // var_dump($hq);
      //12-17-22 Create an instance of the Headquarter to find by id
       // $hq = Headquarter::find($id);
       //var_dump($hq);
        //12-15-22 Return a view
        return view('cars.show')->with('car', $car);
       
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
