@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-4xl uppercase bold">
            Cars Resources/Views/Cars/show.blade.php File<br>
            {{ $car->name }}
        </h1>
    <!-- 2-18-22 Comment out for now-Added the car headquarters 
        <p class="text-lg text-gray-800 py-6"> -->
            {{ $car->headquarter->headquarters }}, {{ $car->headquarter->country }}
        </p>
    
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
        <!-- UPDATED 2-18-22 Commented out
            2-15-22 Adding the car_model info from the database 
            <ul>
                <p class="text-lg text-gray-500 py-3">
                    Models:
                </p>
                 @forelse ($car->carModel as $model)
                     <li class="inline italic text-gray-600 px-1 py-6">
                            {{ $model['model_name'] }} <br>
                            {{ $model['model_descr'] }}
                     </li>
                 @empty
                     <p>
                         No Models Found
                     </p>
                 @endforelse  
            </ul>
            2-18-22 Adding the table code for dsplaying the cars/models -->
        
                    <table class="table-auto">
                        <tr class="bg-blue-200">
                            <th class="w-1/2 border-4 border-gray-700">
                                Model
                            </th>
                            <th class="w-1/2 border-4 
                            border-gray-700">
                                Engines
                            </th>
                        </tr>
                    <!-- 2-18-22 8:50 in - create our loop for carModels -->
                        @forelse ($car->carModels as $model)
                            <tr>
                                <td class="border-4 border-gray-800">
                                    {{ $model->model_name }}
                                </td>
                                <td class="border-4 border-gray-800">
                                    @foreach ($car->engines as $engine)
                                        @if ($model->id == $engine->model_id)
                                    <!-- If it's true, print out engine -->
                                            {{ $engine->engine_name }}

                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            @empty
                         @endforelse

                    </table>
            <hr class="mt-4 mb-8">
        </div>
    </div>
</div>
@endsection
