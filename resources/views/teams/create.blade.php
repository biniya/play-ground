@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-16">
        <div class="text-center">
            <h1 class="text-5xl bold">
                Team Information
            </h1>
        </div>
    </div>

    <div id="app" class="flex justify-center pt-20">
     
        <form action="add" method="POST">
        @csrf
        <div class="block">
             <input 
                    type="file"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="image"
                    placeholder="Upload image...">

            <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="name" placeholder="Name">

            <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="role" placeholder="Role">

            <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="phone_number" placeholder="Phone number">

            <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="address" placeholder="Address">

            <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                Submit
            </button>
        </div>
    </form>
    </div>
@endsection