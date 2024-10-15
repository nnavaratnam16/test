@extends('layouts.app')

@section('title', 'Search Page')

@section('content')
    <div class="bg-[url('../../public/images/searchbackground.png')] bg-cover bg-center h-screen flex items-center justify-center">
        <div class="flex flex-col items-center">
            <div class="text-white text-center font-bold text-[32px] mb-4">
                <p> Enter the lyrics of your desired song to begin! </p>
            </div>
            
            <form>
                <div>
                    <input class="bg-[#D9D9D9] text-black text-[24px] font-medium placeholder-black w-[965px] h-[68px] mt-10" type="text" placeholder="ENTER PROMPT">
                </div>
                
                <div class="mt-8 flex justify-center">
                    <a href="/playerpage">
                    <button type="button" class="rounded-md bg-black px-8 py-4 text-lg font-extrabold text-white shadow-sm hover:hover:bg-opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Search
                    </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

