@extends('layouts.app')

@section('content')
    <div >
        {{-- extra about --}}
        <div class="flex justify-center items-center text-white " style="background-image: url('../images/homm.jpg');min-height:50vh;background-size:cover;" >
            <div class=" w-2/5  lg:flex-row flex-wrap justify-items-center">
            {{-- why us div  --}}
            <div class="  ">
                <div class="section-title ">
                    <div class="header">
                        <h1 class="uppercase font-bold text-2xl">why us?</h1>
                    </div>
                </div>
               
                <p class=" text-lg">We do a close watch on emerging trends in The Software Development
                    Industry therefore we use the best industry standard technology stacks as a tool to craft powerful,
                    elegant and scalable web applications.</p>
            </div>
            
            {{-- end why div  --}}

            {{-- mission --}}
            <div class="  mt-8">
                <div class="section-title ">
                    <div class="header">
                        <h1 class="uppercase font-bold text-2xl">mission</h1>
                    </div>
                </div>
                <p class="text-lg">Our mission is to help small to medium scale enterprises to take advantage of the modern web as a platform to market themselves.</p>
            </div>
            {{-- end mission --}}

            {{-- vision --}}
            <div class=" mt-8">
                <div class="section-title ">
                    <div class="header">
                        <h1 class="uppercase font-bold text-2xl">vision</h1>
                    </div>
                </div>
                <p class="text-lg">To become a leading, trusted tech services provider in Africa and The World.</p>
            </div>
            {{-- end vision --}}
          </div>
        </div>
        {{-- end extra about --}}

        {{-- our team --}}
        <div class="bg-indigo-400">
            <div class="section-title ">
                <div class="header bg-red-400">
                    <h1 class="uppercase font-bold text-2xl">the webicians</h1>
                </div>
            </div>
            <div class="lg:flex space-x-6 justify-center mt-16" style="min-height: 55vh;">
                
                {{-- team member 1 --}}
                <div class="flex flex-col space-y-1 items-center ">
                    
                        <div class=" bg-gradient-to-tr from-red-600 to-blue-600 p-1 rounded-full " >
                            <div class=" relative bg-red-600 rounded-full">
                            <div  class="bg-white rounded-full p-1 block transform transition hover:rotate-6">
                                <img src="../images/chacha.jpg" alt="" class="h-48 w-48 rounded-full">
                            </div>
                            <span id="team" class="teamspan">ian chacha</span>
                            </div>
                        </div>
                    
                </div>

                {{-- team member 2 --}}
                <div class="flex flex-col space-y-1 items-center">
                    
                    <div class=" bg-gradient-to-tr from-red-600 to-blue-600 p-1 rounded-full " >
                        <div class=" relative bg-red-600 rounded-full">
                        <div href="" class="bg-white rounded-full p-1 block transform transition hover:rotate-6">
                            <img src="../images/lyech.jpg" alt="" class="h-48 w-48 rounded-full">
                        </div>
                        <span id="team2" class="teamspan">paul liech</span>
                        </div>
                    </div>
                    
                </div>

                {{-- team member 3 --}}
                <div class="flex flex-col space-y-1 items-center">
                    
                    <div class=" bg-gradient-to-tr from-red-600 to-blue-600 p-1 rounded-full " >
                        <div class=" relative bg-red-600 rounded-full">
                        <div  class="bg-white rounded-full p-1 block transform transition hover:rotate-6">
                            <img src="../images/deno.jpg" alt="" class="h-48 w-48 rounded-full">
                        </div>
                        <span id="team3" class="teamspan">ian chacha</span>
                        </div>
                    </div>
                    
                </div>

                {{-- team member 4 --}}
                <div class="flex flex-col space-y-1 items-center">
                    
                    <div class=" bg-gradient-to-tr from-red-600 to-blue-600 p-1 rounded-full " >
                        <div class=" relative bg-red-600 rounded-full">
                        <div  class="bg-white rounded-full p-1 block transform transition hover:rotate-6">
                            <img src="../images/chacha.jpg" alt="" class="h-48 w-48 rounded-full">
                        </div>
                        <span id="team4" class="teamspan">denno</span>
                        </div>
                    </div>
                    
                </div>
            </div>    
    </div>
        {{-- end our team  --}}

        {{-- newsletter  --}}
     <div class="flex flex-wrap justify-center mt-8 items-center  h-full" style="min-height: 30vh;">
            <div class="w-3/4 items-center py-6 bg-gradient-to-r from-yellow-300 via-red-400 to-yellow-500 " >
                <h1 class="uppercase font-bold flex justify-center text-3xl">stay upto date with the webicians</h1>
                <p class="flex justify-center font-semibold text-lg text-white">Get exclusive access to the latest news and promotions.</p>
                <div class=" ">
                    <form action="post">
                        <div class="flex justify-center">
                            <input type="text" class=" w-96 h-8 focus:outline-none focus:bg-gray-300 text-gray-900 rounded-md " placeholder="Your Email address" name="email">
                        </div>
                    </form>
                </div>
          </div>
     </div> 
        {{-- end newsletter --}}

    </div>  
@endsection