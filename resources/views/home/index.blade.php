<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HashMicro</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #666;
        }

        * {
            scrollbar-width: thin;
            scrollbar-color: #888 #f1f1f1;
        }

        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
            width: 100%;
            height: 200vh;
            overflow-x: hidden;
        }

        .banner-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 300px;
            background: url('./image/banner.jpg') no-repeat center center;
            background-size: cover;
            z-index: 1;
        }

        .background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.3;
            background: url('./image/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            z-index: -1;
        }

        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 300px;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        .logo-container {
            position: relative;
            z-index: 3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
        }

        .logo-container img {
            width: 350px;
            height: auto;
        }

        .social-container {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .social-circle {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            border: 4px solid white;
            width: 64px;
            height: 64px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 20px;
            transition: all 0.3s ease;
        }

        .social-circle:hover {
            background-color: white;
            color: black;
        }

        .social-circle:hover .fa-heart {
            color: red;
        }

        .social-line {
            height: 4px;
            width: 40px;
            background-color: white;
        }

        @media (max-width: 768px) {
            .social-circle {
                width: 48px;
                height: 48px;
                font-size: 16px;
            }

            .social-line {
                width: 20px;
                height: 2px;
            }
        }

        @media (max-width: 768px) {
            .logo-container img {
                width: 200px;
            }


            .banner-image,
            .background-overlay {
                height: 200px;
            }

            .background-image {
                min-height: 100vh;
            }

            .logo-container {
                height: 200px;
            }
        }

        @media (max-width: 480px) {
            .logo-container img {
                width: 200px;
            }

            .banner-image,
            .background-overlay {
                height: 200px;
            }

            .background-image {
                min-height: 100vh;
            }

            .logo-container {
                height: 200px;
            }
        }
    </style>
</head>

<body class="">
    <div class="background-image"></div>
    <div class="banner-image"></div>
    <div class="background-overlay"></div>
    <div class="logo-container flex flex-col">
        <img src="./icon/logo-white.webp" alt="Logo">
        <div class="social-container mt-10">
            <div class="social-circle">
                <div class=" w-12 h-12 rounded-full border border-white flex justify-center items-center">
                    <i class="fab fa-facebook-f"></i>
                </div>
            </div>
            <div class="social-line"></div>
            <div class="social-circle">
                <div class=" w-12 h-12 rounded-full border border-white flex justify-center items-center">
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
            <div class="social-line"></div>
            <div class="social-circle">
                <div class=" w-12 h-12 rounded-full border border-white flex justify-center items-center">
                    <i class="fab fa-pinterest"></i>
                </div>
            </div>
            <div class="social-line"></div>
            <div class="social-circle">
                <div class=" w-12 h-12 rounded-full border border-white flex justify-center items-center">
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
            <div class="social-line"></div>
            <div class="social-circle">
                <div class=" w-12 h-12 rounded-full border border-white flex justify-center items-center">
                    <i class="fas fa-heart"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row bg-white justify-center gap-7 items-center py-5 shadow-2xl">

        <div class="lg:flex hidden lg:flex-row flex-col justify-center gap-7 items-center lg:mb-0 mb-4">
            <div>
                <h1 class="text-xl font-bold text-gray-700">HOME</h1>
            </div>
            <div class="bg-slate-300 rounded-full w-2 h-2"></div>
            <div>
                <h1 class="text-xl font-bold text-gray-700">FEATURES</h1>
            </div>
            <div class="bg-slate-300 rounded-full w-2 h-2"></div>
            <div>
                <h1 class="text-xl font-bold text-gray-700">LAYOUTS</h1>
            </div>
            <div class="bg-slate-300 rounded-full w-2 h-2"></div>
            <div>
                <h1 class="text-xl font-bold text-gray-700">PAGES</h1>
            </div>
            <div class="bg-slate-300 rounded-full w-2 h-2"></div>
            <div>
                <h1 class="text-xl font-bold text-gray-700">LIGHT VERSION</h1>
            </div>
        </div>

        <div class="lg:flex hidden flex-row items-center gap-2 w-full sm:w-auto">
            <form class="flex flex-row gap-2">
                <input type="text" placeholder="Search and hit enter..."
                    class="py-2 px-4 italic text-gray-500 outline-none w-full sm:w-64" />
                <button type="submit" class="py-2 px-4 text-black rounded-lg flex items-center justify-center">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>


        <div class="lg:hidden flex items-center justify-between w-full mt-2 px-10">
            <button id="menu-toggle" class="text-gray-700 text-3xl">
                <i class="fas fa-bars"></i>
            </button>
            <form class="flex flex-row gap-2">
                <input type="text" placeholder="Search and hit enter..."
                    class="py-2 px-4 italic text-gray-500 outline-none w-full sm:w-64" />
                <button type="submit" class="py-2 px-4 text-black rounded-lg flex items-center justify-center">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>


        <div id="mobile-menu"
            class="lg:hidden absolute top-0 left-0 w-full h-full bg-gray-800 bg-opacity-80 z-50 hidden">
            <div class="flex justify-between items-center p-5 text-white">
                <button id="close-menu" class="text-white text-3xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="flex flex-col items-center">
                <a href="#" class="py-2 text-white">HOME</a>
                <a href="#" class="py-2 text-white">FEATURES</a>
                <a href="#" class="py-2 text-white">LAYOUTS</a>
                <a href="#" class="py-2 text-white">PAGES</a>
                <a href="#" class="py-2 text-white">LIGHT VERSION</a>
            </div>
        </div>


    </div>
    <div class="grid lg:grid-flow-row lg:grid-cols-3 gap-8 lg:p-10 py-10 justify-items-center">
        <div class="col-span-1">
            <div class="lg:w-[500px] lg:h-[400px] w-[460px] h-[300px] lg:p-0 mx-10 shadow-lg hover:scale-105 transition-transform relative overflow-hidden"
                style="background-image: url('/image/card-image.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div
                    class=" border-4 border-black lg:w-[420px] lg:h-[200px] w-[360px] h-[180px] absolute left-1/2 -translate-x-1/2 bottom-5">
                    <div
                        class=" bg-black border-black lg:w-[400px] lg:h-[180px] w-[340px] h-[160px] absolute left-1/2 -translate-x-1/2 bottom-[6px]">
                        <div class=" flex flex-col justify-center h-full items-center gap-2">
                            <div class=" flex flex-row items-center gap-2">
                                <div class=" flex flex-row gap-2">
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                </div>
                                <h1 class=" text-white italic font-medium">Repice</h1>
                                <div class=" flex flex-row gap-2">
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-white font-semibold text-2xl">AUTUMN CHESNUT RICE</h1>
                            </div>
                            <div>
                                <p class=" italic text-gray-400">August 7, 2015</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="lg:w-[500px] lg:h-[400px] w-[460px] h-[300px]  shadow-lg hover:scale-105 transition-transform relative overflow-hidden"
                style="background-image: url('/image/card-image.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div
                    class=" border-4 border-black lg:w-[420px] lg:h-[200px] w-[360px] h-[180px] absolute left-1/2 -translate-x-1/2 bottom-5">
                    <div
                        class=" bg-black border-black lg:w-[400px] lg:h-[180px] w-[340px] h-[160px] absolute left-1/2 -translate-x-1/2 bottom-[6px]">
                        <div class=" flex flex-col justify-center h-full items-center gap-2">
                            <div class=" flex flex-row items-center gap-2">
                                <div class=" flex flex-row gap-2">
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                </div>
                                <h1 class=" text-white italic font-medium">Repice</h1>
                                <div class=" flex flex-row gap-2">
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-white font-semibold text-2xl">AUTUMN CHESNUT RICE</h1>
                            </div>
                            <div>
                                <p class=" italic text-gray-400">August 7, 2015</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="lg:w-[500px] lg:h-[400px] w-[460px] h-[300px] shadow-lg hover:scale-105 transition-transform relative overflow-hidden"
                style="background-image: url('/image/card-image.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div
                    class=" border-4 border-black lg:w-[420px] lg:h-[200px] w-[360px] h-[180px] absolute left-1/2 -translate-x-1/2 bottom-5">
                    <div
                        class=" bg-black border-black lg:w-[400px] lg:h-[180px] w-[340px] h-[160px] absolute left-1/2 -translate-x-1/2 bottom-[6px]">
                        <div class=" flex flex-col justify-center h-full items-center gap-2">
                            <div class=" flex flex-row items-center gap-2">
                                <div class=" flex flex-row gap-2">
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                </div>
                                <h1 class=" text-white italic font-medium">Repice</h1>
                                <div class=" flex flex-row gap-2">
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-white font-semibold text-2xl">AUTUMN CHESNUT RICE</h1>
                            </div>
                            <div>
                                <p class=" italic text-gray-400">August 7, 2015</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="lg:w-[500px] lg:h-[400px] w-[460px] h-[300px] shadow-lg hover:scale-105 transition-transform relative overflow-hidden"
                style="background-image: url('/image/card-image.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div
                    class=" border-4 border-black lg:w-[420px] lg:h-[200px] w-[360px] h-[180px] absolute left-1/2 -translate-x-1/2 bottom-5">
                    <div
                        class=" bg-black border-black lg:w-[400px] lg:h-[180px] w-[340px] h-[160px] absolute left-1/2 -translate-x-1/2 bottom-[6px]">
                        <div class=" flex flex-col justify-center h-full items-center gap-2">
                            <div class=" flex flex-row items-center gap-2">
                                <div class=" flex flex-row gap-2">
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                </div>
                                <h1 class=" text-white italic font-medium">Repice</h1>
                                <div class=" flex flex-row gap-2">
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-white font-semibold text-2xl">AUTUMN CHESNUT RICE</h1>
                            </div>
                            <div>
                                <p class=" italic text-gray-400">August 7, 2015</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="lg:w-[500px] lg:h-[400px] w-[460px] h-[300px] shadow-lg hover:scale-105 transition-transform relative overflow-hidden"
                style="background-image: url('/image/card-image.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div
                    class=" border-4 border-black lg:w-[420px] lg:h-[200px] w-[360px] h-[180px] absolute left-1/2 -translate-x-1/2 bottom-5">
                    <div
                        class=" bg-black border-black lg:w-[400px] lg:h-[180px] w-[340px] h-[160px] absolute left-1/2 -translate-x-1/2 bottom-[6px]">
                        <div class=" flex flex-col justify-center h-full items-center gap-2">
                            <div class=" flex flex-row items-center gap-2">
                                <div class=" flex flex-row gap-2">
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                </div>
                                <h1 class=" text-white italic font-medium">Repice</h1>
                                <div class=" flex flex-row gap-2">
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-white font-semibold text-2xl">AUTUMN CHESNUT RICE</h1>
                            </div>
                            <div>
                                <p class=" italic text-gray-400">August 7, 2015</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="lg:w-[500px] lg:h-[400px] w-[460px] h-[300px] shadow-lg hover:scale-105 transition-transform relative overflow-hidden"
                style="background-image: url('/image/card-image.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div
                    class=" border-4 border-black lg:w-[420px] lg:h-[200px] w-[360px] h-[180px] absolute left-1/2 -translate-x-1/2 bottom-5">
                    <div
                        class=" bg-black border-black lg:w-[400px] lg:h-[180px] w-[340px] h-[160px] absolute left-1/2 -translate-x-1/2 bottom-[6px]">
                        <div class=" flex flex-col justify-center h-full items-center gap-2">
                            <div class=" flex flex-row items-center gap-2">
                                <div class=" flex flex-row gap-2">
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                </div>
                                <h1 class=" text-white italic font-medium">Repice</h1>
                                <div class=" flex flex-row gap-2">
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                    <div class=" rounded-full w-2 h-2 bg-orange-500"></div>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-white font-semibold text-2xl">AUTUMN CHESNUT RICE</h1>
                            </div>
                            <div>
                                <p class=" italic text-gray-400">August 7, 2015</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });
</script>


</html>
