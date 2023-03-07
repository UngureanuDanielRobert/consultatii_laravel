<!DOCTYPE html>
@php


use Illuminate\Support\Facades\Route;
use App\Models\User;
//use BladeDB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
//use <link rel="alternate" href="atom.xml" type="application/atom+xml" title="Atom">
//use <Client class="php"></Client>
//use $router->model('user', 'App\Models\User');
function test()
{
    echo '<h1>' . 'Introduceti datele dvs.' . '</h1>';
}
function login() {
    Route::get('/programare', function ($id) {
        return view('/programare');
    });
}
@endphp

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Consultatii</title>

        <!-- JS -->
        <script src="resources/js/calendar" ></script>
        <script src="resources/js/jquery-3.6.3">
        </script>

        <script>
            
            $(document).ready(function(){
                $("register").hide();
                $("button1").click(function(){
                    login();
                    //$(".register").show();
                    //$(".login").hide();
                })
                $("button2").click(function(){
                    
                    $(".register").hide();
                    $(".login").show();
                })
                $("button3").click(function(){
                    login();
                })
            })
        </script>
        
        <!-- Vue js -->
        <script>
            import "vue";
        </script>
        
    </head>
    <body class="antialiased">
        <div id = "calendar" class = "calendar">
            
        </div>
        <div id = "register" class = "register">
            <form name = "user" action="text" method="post">Nume utilizator</form>
            <input type="box" value="">
            <form name = "parr" action="text" method="post">Parola utilizator </form>
            <input type="box" value="">
            <form name = "mail" action="text" method="post">E-mail </form>
            <input type="box" value="">
                

            
        </div>
        <div id = "login" class = "login">
            <form name = "user" action="text" method="post">Nume utilizator/e-mail</form>
            <input type="box" value="">
            <form name = "parr" action="text" method="post">Parola utilizator </form>
            <input type="box" value="">
        </div>

        <button id = "button1" class = "button1" > Register </button>
        <button id = "button2" class = "button2" > Log in </button>
        <button id = "button3" class = "button3" onclick="login"> Anonim </button>
        
    </body>
</html>
