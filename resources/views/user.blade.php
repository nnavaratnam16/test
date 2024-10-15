<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">
    <title>First Page</title>
</head>
<body>
    <nav>
        
        <a href='/firstpage'> <img class="logo" src="{{ asset('images/logo.png') }}">   </a>    
        
        <ul class="sidebar">   
            <li onclick="closeSideBar()"> <a href="#">
                <svg id="cross-sidebar" xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </a> </li>
            <li> <a href="/user">Search</a> </li> 
            <li> <a href="/searchpage">Home</a>  </li>
            <li> <a href="/login">Library</a>  </li>
            <li> <a href="#">About </a></li>
            <li> <a href="#">Contact</a>  </li>    
            
        </ul>

        
        
        <ul>   
            <li> <a href="/searchpage"><button>Search</button></a>  </li>
            <li> <a href="/login"><button>Library</button></a>  </li>
            <li> <a href="#"><button>About</button></a>  </li>
            <li> <a href="#"><button>Contact</button></a>  </li>    
            
        </ul>


        <div id="user">
            <a href="/user">User</a> 
        </div>
        
        <div onclick="showSideBar()", class="sidebar-button">
            <a href="#"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
            </a> 
        </div>

        <script>
            function showSideBar() {
                const sidebar = document.querySelector('.sidebar');
                sidebar.classList.toggle('open');
            }

            function closeSideBar() {
                const sidebar = document.querySelector('.sidebar')
                sidebar.classList.toggle('open');
            }
        </script>
       

        
</nav>

 
    
</body>
</html>
