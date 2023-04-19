<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="" class="logo">
                    <img src="/images/t2.png" alt="">
                    <span>beauty</span>
                </a>
            </li>

            <li><a href="">
                <i class="fas fa-home"></i>
                <span class="nav-item">home </span>
            </a></li>
            <li><a href="/blog">
                
            <i class="fas fa-chart-bar"></i>
                <span class="nav-item">publication</span>
            </a></li>
            <li><a href="/equipe">
                
            <i class="fas fa-user"></i>
                <span class="nav-item">equipe</span>
            </a></li>
            <li><a href="">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">message</span></a></li>
            <li><a href="">
                <i class="fas fa-question-circle"></i>
                <span class="nav-item">aide </span></a></li>


            <li> <a href="{{ route('logout') }}" 
                                   class="logout"
                                   onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt" ></i>{{ __('Logout') }}</a>
                <span class="nav-item">
                @if (isset(Auth::user()->id) && Auth::user()->id )
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
        @endif  
                </span></a></li>
        </ul>
    </nav>
</body>
</html>
<style>
*{
    margin: 0;
    padding: 0;
    outline: none;
    border: none;
    text-decoration: none;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
nav{
position: absolute;
top: 0;
bottom: 0;
height: 100%;
left: 0;
background:gainsboro;
width: 90px;
overflow: hidden;
transition: width 0.2s linear;
box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.logo{
    text-align: center;
    display: flex;
    transition: all 0.5s ease;
    margin: 15px 0 0 20px;
}
.logo img{
    width: 45px;
    height: 45px;
    border-radius: 50%;
}
.logo span{
    font-weight: bold;
    padding-left: 15px;
    font-size: 18px;
    text-transform: uppercase;
}
a{
    position: relative;
    color: black;
    font-size: 14px;
    display: table;
    width: 300px;
    padding: 10px;

}
.fas{
    position: relative;
    width: 70px;
    height: 40px;
    top: 14px;
    font-size: 20px;
    text-align: center;

}
.nav-item{
    position: relative;
    top: 12px;
    margin-left: 10px;
}
a:hover{
    background: #eee;
}
nav:hover{
    width: 280px;
    transition: all 0.5s ease;
}
.logout{
position: absolute;
bottom: 0;
margin: 10px 0 0 20px;

}
</style>