{{-- 02/10/22 26 minutes into video --}}
@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Update Car
            </h1>
        </div>        
    </div>

    <!-- The form section 2-11-22 Add the Laravel to fill in
    the text input fields from the databse based on the id -->
    <div class="flex justify-center pt-20">
        <form action="/cars/{{ $car->id }}" method="POST">
            <!-- Add the security feature to generate a token -->
            @csrf
            @method('PUT')
            <div class="block">
                <input type="text" 
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-slate-500"
                name="name" value="{{ $car->name }}">
                <!-- 2-11-22 We added the Laravel syntax for the car name in the input field we are editing -->
                <input type="text" 
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-slate-500"
                name="founded" value="{{ $car->founded }}">

                <input type="text" 
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-slate-500"
                name="description" value="{{ $car->description }}">

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">Submit
                </button>   
            </div>
        </form>
    </div>

@endsection
