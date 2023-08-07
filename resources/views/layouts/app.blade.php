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
           
           const teamember = document.querySelector("#member")
           const teamrole = document.querySelector("#team")

            teamember.addEventListener('mouseover',()=>{
                teamrole.innerHTML = 'ian chacha';
            })

            teamember.addEventListener('mouseout',()=>{
                teamrole.innerHTML = 'developer';
            })
        //    team member 2
           const teamember2 = document.querySelector("#member2")
           const teamrole2 = document.querySelector("#team2")
            
            teamember2.addEventListener('mouseover',()=>{
                teamrole2.innerHTML = 'paul liech';
            }) 
            teamember2.addEventListener('mouseout',()=>{
                teamrole2.innerHTML = 'developer';
            })
        //    team member 3
           const teamember3 = document.querySelector("#member3") 
           const teamrole3 = document.querySelector("#team3")
            
            teamember3.addEventListener('mouseover',()=>{
                teamrole3.innerHTML = 'denis musumbi';
            })
            teamember3.addEventListener('mouseout',()=>{
                teamrole3.innerHTML = 'developer';
            })
        //    team member 4
           const teamember4 = document.querySelector("#member4")
           const teamrole4 = document.querySelector("#team4")
            
            teamember4.addEventListener('mouseover',()=>{
                teamrole4.innerHTML = 'dennoh';
            })
            teamember4.addEventListener('mouseout',()=>{
                teamrole4.innerHTML = 'graphic designer';
            })
       </script>
     </body>
</html>
