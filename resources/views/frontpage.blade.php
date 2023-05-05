@extends('layouts.layoutfront')

@section('content')
<div class="flex h-10 w-100 justify-center">
<p>Mastermind</p>
</div>
    <div class="flex flex-row gap-40 h-20 w-100 justify-center">
        <div class="flex h-12 w-80 gap-7">



            @if (Route::has('login'))
                @auth
            <button onclick="window.location = '/mastermind';" class="bg-orange-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-blue-500 rounded">
                Mastermind
            </button>
                    <button  class="bg-gray-500 hover:bg-grey-400 text-white font-bold py-2 px-4 border-b-4 border-grey-500 hover:border-grey-500 rounded">
                        Oefenspel
                    </button>
                @else
                    <button onclick="window.location = '/mastermind';" class="bg-orange-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-blue-500 rounded">
                        Oefenspel
                    </button>
                    <button class="bg-gray-500 hover:bg-grey-400 text-white font-bold py-2 px-4 border-b-4 border-grey-500 hover:border-grey-500 rounded">
                        Mastermind
                    </button>
                @endauth
            @endif






            <button onclick="window.location = '/manual'" class="bg-orange-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-blue-500 rounded">
                Handleiding
            </button>
        </div>
        <div class="flex h-12 justify-end w-20  md:w-20">
            <button onclick="window.location = '/scoreboard'" class="bg-orange-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-blue-500 rounded ">
            Scorebord
            </button>
        </div>

        @if(Route::has('login'))
            @auth
                <div class="flex  h-12 justify-end">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                            Logout
                        </button>
                        @csrf
                    </form>
                </div>
                @else
                <div class="flex h-12 justify-end w-40 gap-7  md:w-20">
                    <button onclick="window.location = '{{ route('login') }}'" class="bg-orange-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-blue-500 rounded ">
                        Login
                    </button>
                    <button onclick="window.location = '{{ route('register') }}'" class="bg-orange-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-blue-500 rounded">
                        Register
                    </button>
                </div>
                @endauth
            @endif
    </div>
    <div class="flex flex-col items-center justify-center h-80 w-100 border ">
    <h1>Welkom bij Mastermind!</h1>
        <div class="w-full h-full bg-contain bg-no-repeat">

        </div>
    </div>
@endsection
