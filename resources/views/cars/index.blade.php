{{-- 02/9/22 7 minutes into video --}}
@extends('layouts.app')

<!--2-14-22 Add a for each to return each record as a car into an array

-->
@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-4xl uppercase bold">
                Cars Resources/Views/Cars/index.blade.php File
            </h1>
        </div>

        <div class="pt-10">
            <a href="cars/create" class="text-center border-b-2 pb-2 border-dotted italic text-gray-500">Add A New Car &rarr;
            </a>
        </div>
    
    
        <div class="w-5/6 py-10">
        @foreach ($cars as $car)
            <div class="m-auto text-center">
        <!-- 2/11/22 Adding the create model for the edit function in the CarsController 
        2/14/22 Delete the Laravel code-4 places because we are going to return a string in json-->
                <div class="float-right">
                    <a href="cars/{{ $car->id }}/edit" class="text-center border-b-2 pb-2 border-dotted italic
                        text-green-500">Edit &rarr;</a>

            <!-- 2/11/22 Adding the form for the destroy code in CarsController -->
                        <form action="/cars/{{ $car->id }}" class="pt-3" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-center border-b-2 pb-2 border-dotted italic text-red-700">
                                Delete &rarr;
                            </button>
                </div>
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                Founded: {{ $car->founded }}
            </span>
            <h2 class="text-gray-700 text-5xl hover:text-slate-500">
                <!-- 2/15/22 Add Laravel code for model -->
                <a href="/cars/{{ $car->id }}">
                Name: {{ $car->name }}
                </a>
            </h2>
            <p class="text-center text-lg text-gray-700 py-6">
                Description: {{ $car->description }}                    
            </p>
        
            <hr class="mt-4 mb-8">
            </div>
        @endforeach
        </div>
    </div>
@endsection

