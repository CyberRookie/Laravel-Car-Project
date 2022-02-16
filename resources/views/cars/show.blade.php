@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-4xl uppercase bold">
            Cars Resources/Views/Cars/show.blade.php File<br>
            {{ $car->name }}
        </h1>
    </div>
    <div class="text-center py-10">
        <div class="m-auto">
            <span class="uppercase text-blue-500 font-bold text-xs italic">
            Founded: {{ $car->founded }}
            </span>

             <p class="text-center text-lg text-gray-700 py-6">
            Description: {{ $car->description }} <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque amet ducimus natus vel voluptatem, accusamus officiis non quis? Perferendis incidunt odit aut ut voluptatum delectus iste numquam eveniet repellat iure?              
            </p>
        <!-- 2-15-22 Adding the car_model info from the database -->
            <ul>
                <p class="text-lg text-gray-500 py-3">
                    Models:
                </p>
                 @forelse ($car->carModel as $model)
                     <li class="inline italic text-gray-600 px-1 py-6">
                            {{ $model['model_name'] }} 
                     </li>
                 @empty
                     <p>
                         No Models Found
                     </p>
                 @endforelse  
            </ul>
            <hr class="mt-4 mb-8">
        </div>
    </div>
</div>
@endsection
