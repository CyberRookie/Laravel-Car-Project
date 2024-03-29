@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-4xl uppercase bold">
            Cars Resources/Views/Cars/show.blade.php File<br>
            {{ $car->name }}
        </h1>
    <!-- 2-18-22 Saved the original file as 2-18 show and deleted -->
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
        <!-- UPDATED 2-18-22 Deleted out, saved file as 2-18show--->
           
            <!--2-18-22 Adding the table code for dsplaying the cars/models -->
        
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
                        @foreach ($car->carModel as $model)
                            <tr>
                                <td class=" border-4 border-gray-800 text-center">
                                    {{ $model->model_name }}
                                </td>

                                <td class="border-4 border-gray-800 text-center">
                                    @foreach ($car->engines as $engine)
                                        @if ($model->id == $engine->model_id)
                                             {{ $engine->engine_name}}<br>
                                            
                                            @endif
                                    @endforeach
                                </td>
                               {{--  <p> --}}
                               {{--      Nothing To Show! --}}
                               {{--  </p> --}}
                              
                            </tr>
                     
                            @endforeach
                    </table>
            <hr class="mt-4 mb-8">
        </div>
    </div>
</div>
@endsection
