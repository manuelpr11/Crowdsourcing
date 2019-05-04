<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Welcome</title>
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
</head>
<body>
    <header>   
            <nav>  
                    <div class="logo">
                        <a href="" id="casa">
                            <img src="{{asset('img/home.jpeg')}}" alt="">Home
                        </a>
                    </div>
                    <div class="title">Welcome Admin</div>

                     <div class="logo">
                        <a href="" id="ayuda">
                            <img src="{{asset('img/user.jpeg')}}" alt="">Account
                        </a>
                     </div>
                    
            </nav> 
    </header>
    <main>  
        <h1>What do you want to do?</h1>
        <br>
        <div class="links">   
            <a href="" class="btnG btn">Create a new question</a>
            <a href="" class="btn">Image - Image Challenge</a>
            <a href="" class="btn">Text - Text Challenge</a>
            <a href="" class="btn">Image - Text Challenge</a>
            <a href="" class="btnG btn">See statistics</a>
            <a href="" class="btnG btn">logout</a>
        </div>
    </main>
</body>
</html>