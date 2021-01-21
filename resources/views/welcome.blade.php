<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ESO Research Timer</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/fontawesome.min.css') }}">


        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top w-full justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center pt-5 md:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 my-auto">   
                <div class='text-center text-5xl leading-10 md:leading-none md:text-6xl'>
                    <i class="far fa-clock text-blue-800"></i>           
                    <span class="font-extrabold text-blue-800 flex justify-center">ESO Research Timer</span>                                 
                </div>  
                <span class="flex justify-center mt-3">Know when your research is complete</span>       

                <div class="mt-5 px-5 md:px-0 grid-cols-1 sm:grid-cols-3 md:grid-cols-3 md:space-x-5 space-y-3">
                    <a type="submit" href="" class="inline-flex w-full md:w-auto justify-center items-center px-6 py-5 bg-transparent border-gray-900 border-2 hover:text-white rounded-md font-semibold text-gray-900 uppercase tracking-widest hover:bg-gray-700 active:bg-gray-800 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 text-lg cursor-pointer shadow-lg">
                        <i class="fas fa-clock mr-2"></i>Researches
                    </a>

                    <a type="submit" href="" class="inline-flex w-full md:w-auto items-center px-6 py-5 bg-transparent border-gray-900 border-2 hover:text-white rounded-md font-semibold text-gray-900 uppercase tracking-widest hover:bg-gray-700 active:bg-gray-800 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 text-lg cursor-pointer shadow-lg justify-center">
                        <i class="fas fa-lock mr-2"></i>LOGIN
                    </a>

                    <a type="submit" href="" class="inline-flex w-full md:w-auto justify-center items-center px-6 py-5 bg-transparent border-gray-900 border-2 hover:text-white rounded-md font-semibold text-gray-900 uppercase tracking-widest hover:bg-gray-700 active:bg-gray-800 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 text-lg cursor-pointer shadow-lg">
                        <i class="fas fa-user mr-2"></i>REGISTER
                    </a>
                   
                </div>

               
            </div>
        </div>
    </body>
</html>
