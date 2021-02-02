<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{config('app.name')}} </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">

        <style>
            #menu-toggle:checked + #menu{
                display: block;
            }
        </style>
    </head>
    <body class="antialiased  bg-gray-600 ">
        <div>
         @include('inc.navbar')
             <main>    
                 @yield('content')
                 @include('inc.footer')
             </main>  
             
       </div>
       <script>
        //    team member 1
           const teamrole = document.querySelector("#team")
            
            teamrole.addEventListener('mouseover',()=>{
                teamrole.innerHTML = 'web developer';
            })
            teamrole.addEventListener('mouseout',()=>{
                teamrole.innerHTML = 'ian chacha';
            })
        //    team member 2
           const teamrole2 = document.querySelector("#team2")
            
            teamrole2.addEventListener('mouseover',()=>{
                teamrole2.innerHTML = 'web developer';
            }) 
            teamrole2.addEventListener('mouseout',()=>{
                teamrole2.innerHTML = 'paul liech';
            })
        //    team member 3
           const teamrole3 = document.querySelector("#team3")
            
            teamrole3.addEventListener('mouseover',()=>{
                teamrole3.innerHTML = 'web developer';
            })
            teamrole3.addEventListener('mouseout',()=>{
                teamrole3.innerHTML = 'denis musumbi';
            })
        //    team member 4
           const teamrole4 = document.querySelector("#team4")
            
            teamrole4.addEventListener('mouseover',()=>{
                teamrole4.innerHTML = 'graphic designer';
            })
            teamrole4.addEventListener('mouseout',()=>{
                teamrole4.innerHTML = 'denno';
            })
       </script>
     </body>
</html>
