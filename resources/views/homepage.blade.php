@extends('layouts.app')


@section('title', 'Home Page')

@section('content')
    <div class="font-semibold flex flex-col justify-center items-center h-screen bg-[url('../../public/images/homebackground.png')] bg-cover bg-center ">
        <div class="text-[36px] text-center text-white ">
        <p class="text-[18px]
            custom-screen:text-[36px]">
            Discover and Download AI-Generated Music Lyrics <br> with a Single Click – Unleash Creativity Instantly!
        </p>    
        </div>
        <a href="/searchpage">
        <button 
            class="w-[100px] h-[50px] bg-[#D9D9D9] font-extrabold hover:bg-opacity-50 transition-colors duration-300 ease-in-out mt-16 custom-screen:w-[279px] custom-screen:h-[84px]"> 
            <p class="
            text-[12px]
            custom-screen:text-[36px]
            "> Give Prompt </p>
        </button>
        </a>
    </div>
@endsection