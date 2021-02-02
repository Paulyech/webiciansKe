@extends('layouts.app')

@section('content')
    <div class=" w-full">
        <div class="" style="background-image: url('../images/homm.jpg');min-height:55vh;background-size:cover;">
            <div class="flex flex-wrap items-center justify-center lg:pt-24">
                <div class="mt-16 text-gray-200 pl-3">
                    <h1 class=" text-5xl font-bold tracking-wide capitalize">Having IT problems? <br> good news !we have the  <span class="text-yellow-500 ">solution</span> </h1>
                    <p class="text-lg font-semibold pt-4">We offer quality services at a faster rate and relatively lower cost</p>
               </div>
            </div>
            
        </div> 
        {{-- end home section  --}}


        {{-- service start --}}

        <div>
            <a name="services"></a> 

            {{-- section header  --}}
            <div class="section-title ">
                <div class="header">
                    <h1 class="uppercase font-bold text-2xl">our best services</h1>
                </div>
            </div>
            {{-- end section header  --}}

            {{-- start grid  --}}
            <div class="grid lg:grid-cols-3 gap-2 items-center justify-items-center mt-4">
                {{-- card 1 --}}
                <div class="card ">
                    <h1 class="text-xl font-bold text-gray-700 uppercase flex justify-center">api integration</h1>
                    <img src="../images/api.jpg" alt="image" class="object-cover w-full h-60">
                    <span> businesses are fast evolving to become online <br> we add payments options on your online business ie mpesa and paypal </span>
                </div>

                {{-- card 2 --}}
                <div class="card">
                    <h1  class="text-xl font-bold text-gray-700 uppercase flex justify-center">it related services</h1>
                    <img src="../images/IT.jpg" alt="image" class="object-cover w-full h-60">
                    <span>we provide the best adequate and efficient IT services <br>in the country at an affordable price </span>
                </div>

                {{-- card 3 --}}
                <div class="card">
                    <h1  class="text-xl font-bold text-gray-700 uppercase flex justify-center">mobile app development</h1>
                    <img src="../images/mobile.jpg" alt="image" class="object-cover w-full  h-60">
                    <span> The world is moving fast to where everybody owns a <br>     smartphone <br>we design mobile apps that make it easier for users to interract </span>
                </div>

            </div>
            {{-- end grid  --}}

        </div>
        {{-- end of services section --}}



        {{-- start about section  --}}
    <div class="mt-8  items-center bg-gray-800 " style="min-height: 75vh;">
        <a name="about"></a> 

        {{-- section header  --}}
        <div class="section-title ">
            <div class="header">
                <h1 class="uppercase font-bold text-2xl">about us</h1>
            </div>
        </div>
        {{-- end section header  --}}

        {{-- about flex box --}}
        <div class="flex justify-center items-center mt-8">
            <div  class="lg:flex flex-wrap justify-center ml-3 mt-4 w-4/5">
                  
                    <div class="lg:w-96 h-96">
                        <img src="../images/tech1.jpeg" alt="" class="object-cover h-96 ">
                    </div>
                    <div class=" lg:w-96 h-96 pl-2 justify-items-center items-center pt-8 bg-gray-300 overflow-hidden">
                        <span class="">Webicians is a fully dedicated IT company determined to offer best solutions to a range of IT problems .Our base operations are at  Rongai,Nairobi but are flexible hence can move from one place to another to deliver our services.We have a great team of professionals who are best in each of their fields </span>
                        <button class="bg-gray-800 text-white text-sm rounded border-2 border-gray-400 hover:bg-red-500 "> <a href="/readmore">read more</a> </button>
                    </div>      
           </div>
        </div> 
        {{-- end flexbox --}}
    </div>    
        {{-- end about section --}}


        {{-- start services in depth  --}}

        <div class="mt-8">
            <a name="services"></a> 

            {{-- start section header  --}}
            <div class="section-title ">
                <div class="header w-96">
                    <h1 class="uppercase font-bold text-2xl">in depth of services we offer</h1>
                </div>
            </div>
            {{-- end section header  --}}

            {{-- grid start --}}
            <div class="grid lg:grid-cols-3 gap-2 items-center justify-items-center mt-4">
                {{-- card 1 --}}
                <div class="card w-80 h-48 ">
                    <h1 class="text-xl font-bold text-gray-200 uppercase flex justify-center">M-pesa Web API's intergration</h1>
                    <div class="flex items-center mt-5">
                        <img src="../images/api.jpg" alt="image" class="rounded-full h-20 w-20 mx-4 mt-2 object-cover">
                        <span> we integarte online payment options such as mpesa on your website </span>
                    </div>
                </div>

                {{-- card 2 --}}
                <div class="card h-48">
                    <h1  class="text-xl font-bold text-gray-700 uppercase flex justify-center">database design</h1>
                    <div class="flex mt-5 items-center">
                        <img src="../images/db.jpg" alt="image" class="rounded-full h-20 w-20 mx-4 mt-2 object-cover">
                        <span>we offer the best databese sign services.Try us and we'll exceed your expectations.. </span>
                    </div>
                    
                </div>

                {{-- card 3 --}}
                <div class="card h-48">
                    <h1  class="text-xl font-bold text-gray-700 uppercase flex justify-center">Web design and programming</h1>
                    <div class="flex mt-5 items-center">
                        <img src="../images/tech1.jpeg" alt="image" class="rounded-full h-20 w-20 mx-4 mt-2 object-cover">
                        <span>get us to create for you an nterractive business website or portfolio </span>
                    </div>
                </div>

                {{-- card 4  --}}
                <div class="card h-48">
                    <h1 class="text-xl font-bold text-gray-700 uppercase flex justify-center">graphics design</h1>
                    <div class="flex mt-5 items-center">
                        <img src="../images/graphic.jpg" alt="image" class="rounded-full h-20 w-20 mx-4 mt-2 object-cover">
                        <span>we are experts in graphics design in the country </span>
                    </div>
                </div>

                {{-- card 5 --}}
                <div class="card h-48">
                    <h1  class="text-xl font-bold text-gray-700 uppercase flex justify-center">E-mail Marketing Development</h1>
                    <div class="flex mt-5 items-center">
                        <img src="../images/tech1.jpeg" alt="image" class="rounded-full h-20 w-20 mx-4 mt-2 object-cover">
                        <span>customize your business email hence great positive interractions with your clients </span>
                    </div>
                </div>

                {{-- card 6 --}}
                <div class="card  h-48">
                    <h1  class="text-xl font-bold text-gray-700 uppercase flex justify-center">Tech Consultation Services</h1>
                    <div class="flex mt-5 items-center">
                        <img src="../images/IT.jpg" alt="image" class="rounded-full h-20 w-20 mx-4 mt-2 object-cover">
                        <span>Get the best consultation on matters to do with tech from experts in the field </span>
                    </div>
                </div>
            </div>
            {{-- grid end  --}}
            
        </div>
        {{-- end of services in depth section --}}

        {{-- portfolio start --}}
        <div class="mt-8 bg-gray-800" style="min-height: 75vh;">
            <a name="portfolio"></a> 

            {{-- start section header  --}}
            <div class="section-title">
                <div class="header w-96">
                    <h1 class="uppercase font-bold text-2xl">our portfolio </h1>
                </div>
            </div>
            {{-- end section header  --}}

            {{-- start grid  --}}
             <div class="grid lg:grid-cols-4 gap-2 justify-items-center mt-12">
                 {{-- card 1 --}}
                 <div class="card ">
                    <span class="project-title">betfm</span>
                    <img src="../images/api.jpg" alt="image" class="w-full h-40">
                    <div>
                        
                        <span class="block tracking-wider">Betfm is a gamblers path to to his/her daily activities where he/she is able to find all that gambling contains in one place.</span>
                        
                    </div>
                    <div class="badge">
                        <span>web based application</span>
                    </div>
                    <div class="mt-3">
                        <a href="" class="btn-sm bg-gray-500 text-white transform hover:scale-125 hover:opacity-50">visit site</a>
                    </div>
                </div>

                 {{-- card 2 --}}
                 <div class="card ">
                    <span class="project-title">soccer world</span>
                    <img src="../images/api.jpg" alt="image" class="w-full h-40">
                    <div>
                        
                        <span class="block tracking-wider">A site designed to bring together soccer lovers and those wishing to know about the game.For the love of the game</span>
                        
                    </div>
                    <div class="badge">
                        <span>web based application</span>
                    </div>
                    <div class="mt-3">
                        <a href="" class="btn-sm bg-gray-500 text-white transform hover:scale-125 hover:opacity-50">visit site</a>
                    </div>
                </div>

                 {{-- card 3 --}}
                 <div class="card ">
                    <span class="project-title">betfm</span>
                    <img src="../images/api.jpg" alt="image" class="w-full h-40">
                    <div>
                        
                        <span class="block tracking-wider">Betfm is a gamblers path to to his/her daily activities where he/she is able to find all that gambling contains in one place.</span>
                        
                    </div>
                    <div class="badge">
                        <span>web based application</span>
                    </div>
                    <div class="mt-3">
                        <a href="" class="btn-sm bg-gray-500 text-white transform hover:scale-125 hover:opacity-50">visit site</a>
                    </div>
                </div>
                 {{-- card 4 --}}
                 <div class="card ">
                    <span class="project-title">betfm</span>
                    <img src="../images/api.jpg" alt="image" class="w-full h-40">
                    <div>
                        
                        <span class="block tracking-wider">Betfm is a gamblers path to to his/her daily activities where he/she is able to find all that gambling contains in one place.</span>
                        
                    </div>
                    <div class="badge">
                        <span>web based application</span>
                    </div>
                    <div class="mt-3">
                        <a href="" class="btn-sm bg-gray-500 text-white transform hover:scale-125 hover:opacity-50">visit site</a>
                    </div>
                </div>
                 

               
                
            </div>   
            {{-- end grid --}}

        </div>

        {{-- end portfolio  --}}



        {{-- contact form  --}}
        <div class="mt-8">
            <a name="portfolio"></a> 

            @include('emailSend')
        </div>
        {{-- end contact form  --}}
    
    </div>
@endsection