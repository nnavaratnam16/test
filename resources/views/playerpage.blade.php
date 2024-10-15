@extends('layouts.app')

@section('title', 'Player Page')

@section('content')
<div class="shadow-music-player bg-gray-800 grid grid-cols-2 overflow-hidden">
    <!-- Image Section -->
    <div>
        <img src="{{ asset('images/homebackground.png') }}" alt="Cover Image" class="w-full h-auto">
    </div>      

    <!-- Content Section -->
    <div class="text-center bg-black text-gray-200 p-6">
        <!-- Add your content here -->
        <h1 class="text-3xl font-bold mb-4 text-gray-100">I Ain’t Worried</h1>
        <h2 class="text-2xl font-bold mt-3">Song by OneRepublic</h2>

        <!-- lyrics -->
        <div class="py-5">
            <div class="relative h-44 overflow-hidden">
                <div class="absolute -top-5 -inset-x-5 bg-black h-12 blur-lg"></div>
                <div class="absolute -top-1/2 -translate-y-1/2 bg-white h-12 w-fill mix-blend-overlay blur-md"></div>
                <pre class="font-open-sans tracking-wide h-full overflow-auto py-16 text-white/60 scroll-hidden">
I don't know what you've been told
But time is running out, no need to take it slow
I'm stepping to you toe-to-toe
I should be scared, honey, maybe so
But I ain't worried 'bout it right now (right now)
Keeping dreams alive, 1999, heroes
I ain't worried 'bout it right now (right now)
Swimmin' in the floods, dancing on the clouds below
I ain't worried 'bout it
I ain't worried 'bout it
(Hey)
I don't know what you've been told
But time is running out, so spend it like it's gold
I'm living like I'm nine-zeros
Got no regrets even when I'm broke, yeah
I'm at my best when I got something I'm wanting to steal
Way too busy for them problems and problems to feel, yeah-yeah
No stressing, just obsessin' with sealin' the deal
I'll take it in and let it go
But I ain't worried 'bout it right now (right now)
Keeping dreams alive, 1999, heroes
I ain't worried 'bout it right now (right now)
Swimmin' in the floods, dancing on the clouds below
I ain't worried 'bout it
I ain't worried 'bout it
(Hey)
Ooh, I ain't worried
Ooh (ooh), oh, no
I ain't worried 'bout it right now (right now)
Keeping dreams alive, 1999, heroes
I ain't worried 'bout it right now (right now)
Swimmin' in the floods, dancing on the clouds below
I ain't worried 'bout it
(Ooh, hey, yeah)
I ain't worried 'bout it
(Ooh, hey)
I ain't worried 'bout it
                </pre>
                <div class="absolute -bottom-5 -inset-x-5 bg-black h-12 blur-lg"></div>  
            
            </div>
        
        </div>

        <!-- controls -->
        <div class="flex items-center justify-center space-x-5 text-primary px-5">
            <!-- previous button -->
            <button aria-label="Previous" class="control-button bg-[#1b1b1b] rounded-full p-3 hover:bg-gray-700 transition">
                <svg class="w-5 h-5 text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M18 18V6L9 12l9 6zM6 6h2v12H6z" fill="currentColor"></path>
                </svg>
            </button>

            <!-- play/pause button -->
            <button aria-label="Play" class="control-button bg-[#1b1b1b] rounded-full p-3 hover:bg-gray-700 transition">
                <svg class="w-5 h-5 text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7L8 5z" fill="currentColor"></path>
                </svg>
            </button>

            <!-- next button -->
            <button aria-label="Next" class="control-button bg-[#1b1b1b] rounded-full p-3 hover:bg-gray-700 transition">
                <svg class="w-5 h-5 text-gray-400" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M6 6v12l9-6-9-6zM16 6h2v12h-2z" fill="currentColor"></path>
                </svg>
            </button>
        </div>

        <!-- slider music duartion -->
        <div class="flex items-center gap-5 mt-8">
            <!-- Time label (start) -->
            <div class="text-sm opacity-80">00:30</div>
            
            <!-- Slider Container -->
            <div class="relative bg-gray-800 w-full h-2 rounded">
                <div id="progress-slider" class="absolute top-0 left-0 bg-blue-500 h-2 rounded-l-md"></div> 
                <input type="range" class="slider w-full h-2 bg-transparent appearance-none" min="0" max="100" value="30">
            </div>
            
            <!-- Time label (end) -->
            <div class="text-sm opacity-80">04:30</div>
        </div>

    </div>
</div>
<script>
    const musicSlider = document.querySelector('.slider');
    const progressSlider = document.querySelector('#progress-slider');

    // Initial progress width
    progressSlider.style.width = musicSlider.value + '%';

    // Update progress width on input event
    musicSlider.addEventListener('input', (e) => {
        progressSlider.style.width = e.target.value + '%';
    });
</script>

@endsection
