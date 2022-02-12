{{-- 02/10/22 26 minutes into video --}}
@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create Car
            </h1>
        </div>        
    </div>

    <!-- The form section 2-10-22 -->
    <div class="flex justify-center pt-20">
        <form action="/cars" method="POST">
            <!-- Add the security feature to generate a token -->
            @csrf
            <div class="block">
                <input type="text" 
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-slate-500"
                name="name"
                placeholder="Brand Name...">

                <input type="text" 
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-slate-500"
                name="founded"
                placeholder="Founded...">

                <input type="text" 
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-slate-500"
                name="description"
                placeholder="Description...">

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">Submit
                </button>   
            </div>
        </form>
    </div>

@endsection

