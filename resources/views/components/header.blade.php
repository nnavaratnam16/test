<nav class="font-default bg-header-bg p-4 flex justify-between items-center h-[140px]">
    <div class="flex justify-center custom-screen:justify-start w-full custom-screen:w-auto">
        <a href='/'>
            <img class="w-[100px] h-[100px] rounded-full" src="{{ asset('images/logo.png') }}" alt="logo">
        </a>
    </div>

    <ul class="hidden custom-screen:flex">
        <li class="inline-block mx-[25px]">
            <a href="/">
                <button class="w-[128px] h-[47px] bg-white text-[20px] font-semibold hover:bg-opacity-50 transition-colors duration-300 ease-in-out">Home</button>
            </a>
        </li>
        <li class="inline-block mx-[25px]">
            <a href="#">
                <button class="w-[128px] h-[47px] bg-white text-[20px] font-semibold hover:bg-opacity-50 transition-colors duration-300 ease-in-out">About</button>
            </a>
        </li>
        <li class="inline-block mx-[25px]">
            <a href="#">
                <button class="w-[128px] h-[47px] bg-white text-[20px] font-semibold hover:bg-opacity-50 transition-colors duration-300 ease-in-out">Contact</button>
            </a>
        </li>
        <li class="inline-block mx-[25px]">
            <a href="/librarypage">
                <button class="w-[128px] h-[47px] bg-white text-[20px] font-semibold hover:bg-opacity-50 transition-colors duration-300 ease-in-out">Library</button>
            </a>
        </li>
    </ul>

    <div class="flex custom-screen:hidden items-center">
        <button class="text-white" onclick="toggleSidebar()">
            <!-- Sidebar toggle icon -->
            <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed">
                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
            </svg>
        </button>
    </div>

    <div class="text-white hidden custom-screen:flex justify-end">
        @if (auth()->check())
            <a href="profile"><p>{{ auth()->user()->name }}</p></a>
        @else
            <a href="login" class="mr-10">Login</a>
        @endif

        <form class="text-white"action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
        </form>
    </div>

    
</nav>

<!-- Sidebar -->
<div id="sidebar" class="fixed top-0 right-0 h-full w-64 bg-gray-800 text-white transform translate-x-full transition-transform duration-300 ease-in-out custom-screen:hidden">
    <div class="p-4">
        <button class="text-white" onclick="toggleSidebar()">
            <!-- Sidebar toggle icon -->
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

        </button>

        <button>
            @if (auth()->check())
                <a href="profile"><p>{{ auth()->user()->name }}</p></a>
            @else
                <a href="login" class="text-white">Login</a>
            @endif
        </button>
        <ul class="mt-8">
            <li class="my-2"><a href="#" class="block p-2 hover:bg-gray-700">Home</a></li>
            <li class="my-2"><a href="" class="block p-2 hover:bg-gray-700">About</a></li>
            <li class="my-2"><a href="" class="block p-2 hover:bg-gray-700">Contact</a></li>
            <li class="my-2"><a href="/librarypage" class="block p-2 hover:bg-gray-700">Library</a></li>
        </ul>
    </div>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('translate-x-full');
    }
</script>
