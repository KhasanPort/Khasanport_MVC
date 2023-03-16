<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="<?= BASEURL;?>/css/tailwind-all.css">
        <link rel="stylesheet" href="<?= BASEURL;?>/css/output.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body class="overflow-x-hidden ">
        <div class="w-full px-4">

            <!-- Nav Section -->
            <nav id="navbar" class="bg-transparent px-5 absolute top-0 left-0 w-full flex justify-center items-center z-20 dark:shadow-white dark:shadow-sm transition duration-300" data-aos="fade-down" data-aos-duration="700">
                <div class="container">
                    <div class="flex items-center justify-between relative">
                        <div class="px-4">
                            <a href="#" target="_blank" class="font-bold text-lg text-primary block py-6 md:text-2xl">
                                Khasanport
                            </a>
                        </div>
                        <div class="flex items-center justify-center px-4 md:hidden">
                            <button onclick="Clicked()">
                                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="40" class="mt-3"><path d="M6.2 35.85v-2.9h25.7v2.9Zm33.6-2.6-9.3-9.3 9.25-9.25 2.05 2.05-7.2 7.2 7.25 7.25ZM6.2 25.3v-2.85h19.75v2.85Zm0-10.3v-2.85h25.7V15Z" transform="scale(0.8)" /></svg>                     
                            </button>
                        </div>
                        <div id="bars" class="fixed right-0 bottom-0 left-0 top-10 hidden flex justify-center md:block md:static w-full self-end" onclick="Clicked()">
                            <div class="relative md:static w-full">
                                <div class="absolute right-10 flex flex-wrap gap-x-1 gap-y-3 border shadow-lg p-5 w-36 max-w-[250px] md:static md:max-w-none md:w-full md:flex-nowrap md:border-none md:shadow-none md:bg-transparent md:justify-end md:text-right md:content-center">
                                    <a href="#home" class="font-medium text-lg hover:text-primary px-01 w-full">Home</a>
                                    <a href="#about" class="font-medium text-lg hover:text-primary px-01 w-full">About</a>
                                    <a href="#portofolio" class="font-medium text-lg hover:text-primary px-01 w-full">Portofolio</a>
                                    <a href="#client" class="font-medium text-lg hover:text-primary px-01 w-full">Client</a>
                                    <a href="#blog" class="font-medium text-lg hover:text-primary px-01 w-full">Blog</a>
                                    <a href="#contact" class="font-medium text-lg hover:text-primary px-01 w-full">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="option-dark bg-dark border-white w-14 h-5 rounded-full flex items-center px-1 dark:bg-white transition duration-300" onclick="ClickF()">
                            <button class="bg-white w-1/3 h-1/3 rounded-full dark:translate-x-5 transition duration-300 ease-linear dark:bg-dark">
                            </button>
                        </div>
                        <button onclick="setHiddenAll([document.querySelector('.settings')])" class="setting w-14 h-10 mx-4 flex flex-wrap justify-around gap-1 opacity-50" disabled>
                            <div class="bg-black w-1/3 h-1/2 border border-black"></div>
                            <div class="bg-black w-1/3 h-1/2 border border-black"></div>
                            <div class="bg-black w-1/3 h-1/2 border border-black"></div>
                            <div class="bg-black w-1/3 h-1/2 border border-black"></div>
                        </button>
                    </div>
                </div>
            </nav>
            <div class="hidden settings fixed top-10 md:bottom-10 md:right-10 md:left-10 backdrop-blur-sm p-10 border border-white z-50 flex  gap-5">
                 <div class="part w-full md:w-1/2 h-full border-none md:border-r-2 border-black">
                    <ol class="flex flex-wrap w-full list-none justify-between py-4">
                        <li class="w-1/2 font-bold text-lg md:text-xl">
                            Theme
                        </li>
                        <li class="w-1/2 text-end">
                            <div class="flex flex-wrap justify-between pr-10 gap-5">
                                <label for="">Color</label>
                                <input type="radio" name="tema" id="color" onclick="setTheme('color')" onchange="setBg(document.querySelector('#color'))">
                            </div>
                            <div class="flex flex-wrap justify-between pr-10 gap-5">
                                <label for="">Linear Gradient</label>
                                <input type="radio" name="tema" id="linear-gradient" onclick="setTheme('linear-gradient')">
                            </div>
                            <div class="flex flex-wrap justify-between pr-10 gap-5">
                                <label for="">Gradient</label>
                                <input type="radio" name="tema" id="gradient" onclick="setTheme('gradient')">
                            </div>
                        </li>
                    </ol>
                    <ol class="theme flex flex-wrap w-full list-none justify-between color">
                        <li class="w-1/2 font-bold text-lg md:text-xl">
                            Color
                        </li>
                        <li class="w-1/2 text-end">
                            <input type="color" name="" id="">
                        </li>
                    </ol>
                    <ol class="theme flex flex-wrap w-full list-none justify-between linear-gradient">
                        <li class="w-1/2 font-bold text-lg md:text-xl">
                            Linear Gradient
                        </li>
                        <li class="w-1/2 text-end">
                            <input type="color" name="" id="">
                            <input type="color" name="" id="">
                        </li>
                    </ol>
                    <ol class="theme flex flex-wrap w-full list-none justify-between gradient">
                        <li class="w-1/2 font-bold text-lg md:text-xl">
                            Gradient
                        </li>
                        <li class="w-1/2 text-end">
                            <input type="color" name="" id="">
                            <input type="color" name="" id="">
                        </li>
                    </ol>
                 </div>
                 <div class="part w-1/2 h-full border-r-2">

                 </div>
            </div>
            <!-- End Nav Section -->
            
            <!-- Hero Section -->
            <header id="home" class="pt-24 dark:bg-dark transition duration-300 flex justify-center">
                <div class="container m-auto" data-aos="fade-up" data-aos-duration="700">
                    <div class="flex flex-wrap">
                        <div class="w-full self-center px-4 md:w-1/2">
                            <h1 class="text-base text-primary font-semibold text-primary md:text-xl md:text-2xl">
                                Halo Semua ✋, Saya <span class="block text-bold text-2xl md:text-5xl dark:text-white">Adi Akhmad Khasan</span>
                            </h1>
                            <h2 class="font-medium text-slate-500 text-lg mb-5">
                                Seniman & <span class="dark:text-slate-200">Programer</span>
                            </h2>
                            <p class="font-medium text-slate-400 mb-10 leading-relaxed">
                                Kehidupan itu rumit jika kamu pikirkan, <span class="font-bold">bukan!</span>
                            </p>
    
                            <a href="#contact" class="text-base font-semibold bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out dark:text-dark">
                                Hubungi Saya
                            </a>
                        </div>
                        <div class="w-full self-end px-4 md:w-1/2">
                            <div class="mt-10 relative md:mt-9 md:right-0 md:scale-125s p-10">
                                <img src="<?= BASEURL; ?>/img/adi.png" alt="" class="relative z-10 w-full" width="400" height="400"/>
                                <span class="absolute -top-14 md:bottom-20 left1/2 -translate-x-1 w-full md:scale-150">
                                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="400" height="400" class="w-full">
                                        <path fill="#14b8a6" d="M47.2,-24.8C57.8,-8.8,60.9,14,51.7,31.1C42.6,48.1,21.3,59.3,4.5,56.6C-12.3,54,-24.5,37.6,-36.9,18.8C-49.2,-0.1,-61.7,-21.5,-55.5,-34.9C-49.4,-48.3,-24.7,-53.8,-3.2,-52C18.3,-50.1,36.5,-40.9,47.2,-24.8Z" transform="translate(100 100) scale(1.2)"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Hero Section -->
    
            <!-- About Section -->
            <section id="about" class="pt-24 pb-32 dark:bg-dark dark:text-white transition flex justify-center duration-300">
                <div class="container">
                    <div class="flex flex-wrap">
                        <div class="w-full px-4 mb-10 md:w-1/2" data-aos="fade-right" data-aos-duration="700">
                            <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Saya</h4>
                            <h2 class="font-bold text-3xl mb-5 max-w-md dark:text-white">Yuk, Berlangganan di jasa ini Khasanport!</h2>
                            <p class="font-medium text-base text-secondary">Menggunakan jasa kami tidak ada ruginya kawan kawan</p>
                        </div>
                        <div class="w-full px-4 mb-10 mt-10 md:w-1/2" data-aos="fade-left" data-aos-duration="700">
                            <h3 class="font-semibold text-3xl mb-4 pb-10 dark:text-white">Mari berteman</h3>
                            <p class="font-medium text-secondary mb-6 text-base">Bekerja samalah dengan kami dengan menghubungi kami melalui link media sosial yang ada di bawah ini</p>
                            <div class="flex items-center justify-end sm:justify-center flex-wrap md:flex-nowrap" >
                                <!-- {/* Youtube */} -->
                                <a href="#" target="_blank" class="md:p-2 md:box-content w-9 h-9 m-3 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100 dark:hover:border-white dark:hover:dark:hover:bg-white">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="p-2 scale-125 box-content fill-current" width="30"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                </a>
                                
                                <a href="#" target="_blank" class="md:p-2 md:box-content w-9 h-9 m-3 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100 dark:hover:border-white dark:hover:dark:hover:bg-white">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="p-2 scale-125 box-content fill-current" width="30"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                                </a>
                                
                                <a href="#" target="_blank" class="md:p-2 md:box-content w-9 h-9 m-3 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100 dark:hover:border-white dark:hover:dark:hover:bg-white">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="p-2 scale-125   box-content fill-current" width="30"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                </a>
                                
                                <a href="#" target="_blank" class="md:p-2 md:box-content w-9 h-9 m-3 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100 dark:hover:border-white dark:hover:dark:hover:bg-white">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="p-2 scale-125   box-content fill-current" width="30"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>                            
                                </a>
                                
                                <a href="#" target="_blank" class="md:p-2 md:box-content w-9 h-9 m-3 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100 dark:hover:border-white dark:hover:dark:hover:bg-white">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="p-2 scale-125   box-content fill-current" width="30"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                                </a>
    
                                <a href="#" target="_blank" class="md:p-2 md:box-content w-9 h-9 m-3 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100 dark:hover:border-white dark:hover:dark:hover:bg-white">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="p-2 scale-125   box-content fill-current" width="30"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>                           
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Section -->

            <!-- Skill Section -->
            <section id="skills" class="py-32 dark:bg-dark transition duration-300 flex justify-center">
                <div class="container">
                    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                        <div class="mx-auto text-center mb-16" data-aos="fade-up" data-aos-duration="700">
                            <h4 class="text-lg text-primary font-semibold">Portfolio</h4>
                            <h2 class="text-3xl font-bold dark:text-white">Skills</h2>
                            <p class="text-base font-medium text-secondary">Berikut adalah skill yang pernah saya pelajari dari <span class="text-primary text-lg"> Internet </span></p>
                        </div>
                    </div>
                    <div class="w-full px-4 flex flex-wrap">
                        <div class="mb-12 p-4 md:w-1/2 xl:w-1/3" data-aos="zoom-in" data-aos-duration="700" data-aos-achor-placement="center-center">
                            <div class="w-full text-center">
                                <svg role="img" width="50%" class="hover:fill-orange transition duration-300 m-auto fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>HTML5</title><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/></svg>                            
                            </div>
                            <h3 class="font-semibold text-xl mt-5 mb-3 hover:text-primary truncate dark:text-white dark:hover:text-primary"><a href="#">HTML 5</a></h3>
                            <details>
                                <p class="font-medium text-base text-secondary mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni voluptatibus dolore magnam, quisquam nesciunt quos dignissimos ipsa incidunt facilis omnis harum laborum ullam numquam iusto! Veritatis facere sequi ut adipisci!</p>
                            </details>
                        </div>
                        <div class="mb-12 p-4 md:w-1/2 xl:w-1/3" data-aos="zoom-in" data-aos-duration="700" data-aos-achor-placement="center-center">
                            <div class="w-full text-center">
                                <svg role="img" width="50%" class="hover:fill-teal transition duration-300 m-auto fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Tailwind CSS</title><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/></svg>                            </div>
                            <h3 class="font-semibold text-xl mt-5 mb-3 hover:text-primary truncate dark:text-white dark:hover:text-primary"><a href="#">CSS Tailwind</a></h3>
                            <details>
                                <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure omnis natus quia asperiores quo architecto ratione repellendus et sequi tempore at, nobis voluptatibus amet suscipit voluptas facilis veritatis impedit numquam?</p>
                            </details>
                        </div>
                        <div class="mb-12 p-4 md:w-1/2 xl:w-1/3" data-aos="zoom-in" data-aos-duration="700" data-aos-achor-placement="center-center">
                            <div class="w-full text-center">
                                <svg role="img" width="50%" class="hover:fill-blue transition duration-300 m-auto fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>React</title><path d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z"/></svg>
                            </div>
                            <h3 class="font-semibold text-xl mt-5 mb-3 hover:text-primary truncate dark:text-white dark:hover:text-primary"><a href="#">Javascript React</a></h3>
                            <details>
                                <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure omnis natus quia asperiores quo architecto ratione repellendus et sequi tempore at, nobis voluptatibus amet suscipit voluptas facilis veritatis impedit numquam?</p>
                            </details>
                        </div>
                        <div class="mb-12 p-4 md:w-1/2 xl:w-1/3" data-aos="zoom-in" data-aos-duration="700" data-aos-achor-placement="center-center">
                            <div class="w-full text-center">
                                <svg role="img" width="50%" class="m-auto hover:fill-orange transition duration-300 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Laravel</title><path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"/></svg>                            
                            </div>
                            <h3 class="font-semibold text-xl mt-5 mb-3 hover:text-primary truncate dark:text-white dark:hover:text-primary"><a href="#">PHP  Laravel</a></h3>
                            <details>
                                <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure omnis natus quia asperiores quo architecto ratione repellendus et sequi tempore at, nobis voluptatibus amet suscipit voluptas facilis veritatis impedit numquam?</p>
                            </details>
                        </div>
                        <div class="mb-12 p-4 md:w-1/2 xl:w-1/3" data-aos="zoom-in" data-aos-duration="700" data-aos-achor-placement="center-center">
                            <div class="w-full text-center">
                                <svg role="img" width="50%" class="hover:fill-blue transition duration-300 m-auto fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>MySQL</title><path d="M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.695h-.927a50.854 50.854 0 00-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 00-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008l1.347-4.064h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.615h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.588c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156-.344.3-.803.45-1.384.45-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 00.3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 00-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 00-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 00-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 00-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 01-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 01-.35-.4 8.76 8.76 0 01-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 01-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 012.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z"/></svg>                            </div>
                            <h3 class="font-semibold text-xl mt-5 mb-3 hover:text-primary truncate dark:text-white dark:hover:text-primary"><a href="#">MySQL</a></h3>
                            <details>
                                <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure omnis natus quia asperiores quo architecto ratione repellendus et sequi tempore at, nobis voluptatibus amet suscipit voluptas facilis veritatis impedit numquam?</p>
                            </details>
                        </div>
                        <div class="mb-12 p-4 md:w-1/2 xl:w-1/3" data-aos="zoom-in" data-aos-duration="700" data-aos-achor-placement="center-center">                            
                            <div class="w-full text-center">
                                <img src="<?= BASEURL; ?>/img/ibis paint x.jfif" alt="Tecnology" width="50%" class="grayscale hover:grayscale-0 transition duration-500 shadow-lg rounded-3xl overflow-hidden m-auto" />
                            </div>
                            <h3 class="font-semibold text-xl mt-5 mb-3 hover:text-primary truncate dark:text-white dark:hover:text-primary"><a href="#">Ibis Paint X</a></h3>
                            <details>
                                <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure omnis natus quia asperiores quo architecto ratione repellendus et sequi tempore at, nobis voluptatibus amet suscipit voluptas facilis veritatis impedit numquam?</p>
                            </details>
                        </div>
                    </div>
                    <div class="m-10 box-content flex justify-center flex-wrap bg-gray-400 py-6 rounded-full shadow-gray-400 shadow-2xl">
                        <h1 class="w-full text-center text-4xl font-bold pb-3 font-love text-red-700 drop-shadow-xl">Game!!</h1>
                        <a href="<?= BASEURL; ?>/game" class="text-xl font-bold bg-teal-400 px-10 py-5 rounded-full text-white">Go To Demo</a>
                    </div>
                </div>
            </section>
            <!-- End Skill Section -->

            <!-- Main Section -->
            <section id="portofolio" class="pt-36 pb-16 bg-slate-200 dark:bg-dark transition flex justify-center duration-300">
                <div class="container">
                    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                        <div class="mx-auto text-center mb-16" data-aos="fade-up" data-aos-duration="700">
                            <h4 class="text-lg text-primary font-semibold">Portfolio</h4>
                            <h2 class="text-3xl font-bold dark:text-white text-dark">Project Terbaru Saya</h2>
                            <p class="text-base font-medium text-secondary">Berikut adalah project project terbaru saya dari model <span class="text-primary text-lg"> React JS </span> sebagai front-end dan menggunakan <span class="text-primary text-lg"> Laravel </span> sebagai back-end</p>
                        </div>
                    </div>
                    <div class="w-full px-4 flex flex-wrap">
                        <div class="mb-12 p-4 md:w-1/2">
                            <div class="">
                                <a href="#">
                                    <img src="<?= BASEURL; ?>/img/projectdark.png" alt="" width="w-full" class="shadow-lg rounded-3xl overflow-hidden" />    
                                </a>
                            </div>
                            <h3 class="font-semibold text-xl mt-5 mb-3 transition duration-200 hover:text-primary dark:text-white dark:hover:text-primary"><a href="/" class="text-dark">Dark Portfolio</a></h3>
                            <p class="font-medium text-base text-secondary hover:text-primary">Ini adalah portfolio saya yang lain. Portfolio ini bertemakan luar angkasa yang gelap. dan selain itu, ini dibuat dengan design dari React JS. Tambahan, portfolio in menggunakan basa inggris.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Main Section -->
    
            <!-- Client Section -->
            <section id="client" class="bg-slate-700 transition duration-300 py-36 flex justify-center" data-aos="zoom-out" data-aos-duration="700" data-aos-anchor-placement="top-center">
                <div class="container">
                    <div class="w-full px-4 pt-10 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                        <div class="mx-auto text-center mb-16">
                            <h4 class="text-lg text-primary font-semibold">Clients</h4>
                            <h2 class="text-2xl font-bold text-white ">Yang Pernah Bekerjasama</h2>
                            <p class="text-base font-medium text-secondary">Sementara ini saya <span class="text-primary text-lg">belum bekerja sama dengan siapapun </span>, dibawah ini hanya sedikit dari pameran skill saya </p>
                        </div>
                    </div>
                    
                    <div class="w-full px-4">
                        <div class="setmark"></div>
                    </div>
                </div>
            </section>
            <!-- End Client Section -->
    
            <!-- Blog Section -->
            <section id="blog" class="py-32 dark:bg-dark transition duration-300 flex justify-center">
                <div class="container">
                    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                        <div class="mx-auto text-center mb-16" data-aos="fade-up" data-aos-duration="700">
                            <h4 class="text-lg text-primary font-semibold">Portfolio</h4>
                            <h2 class="text-3xl font-bold dark:text-white">Blog Terkini</h2>
                            <p class="text-base font-medium text-secondary">Berikut adalah blog yang pernah saya buat dari <span class="text-primary text-lg"> Wordpress </span> dan <span class="text-primary text-lg"> Google Blog </span></p>
                        </div>
                    </div>
                    <div class="w-full px-4 flex flex-wrap">
                        <div class="mb-12 p-4 md:w-1/2 xl:w-1/3" data-aos="fade-left" data-aos="zoom-in" data-aos-duration="700" data-aos-achor-placement="center-center">
                            <div class="">
                                <img src="https://source.unsplash.com/360x200?programing" alt="Programing" width="w-full" class="shadow-lg rounded-3xl overflow-hidden" />
                            </div>
                            <h3 class="font-semibold text-xl mt-5 mb-3 hover:text-primary truncate dark:text-white dark:hover:text-primary"><a href="#">Programing</a></h3>
                            <p class="font-medium text-base text-secondary mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni voluptatibus dolore magnam, quisquam nesciunt quos dignissimos ipsa incidunt facilis omnis harum laborum ullam numquam iusto! Veritatis facere sequi ut adipisci!</p>
                            <a href="#" class="font-medium text-sm bg-primary py-2 px-4 rounded-lg transition hover:shadow-lg dark:text-dark">Baca Selengkapnya....</a>
                        </div>
                        <div class="mb-12 p-4 md:w-1/2 xl:w-1/3" data-aos="fade-left" data-aos="zoom-in" data-aos-duration="700" data-aos-achor-placement="center-center">
                            <div class="">
                                <img src="https://source.unsplash.com/360x200?coffee" alt="Coffee" width="w-full" class="shadow-lg rounded-3xl overflow-hidden" />
                            </div>
                            <h3 class="font-semibold text-xl mt-5 mb-3 hover:text-primary truncate dark:text-white dark:hover:text-primary"><a href="#">Menikmati Secangkir Coffee</a></h3>
                            <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure omnis natus quia asperiores quo architecto ratione repellendus et sequi tempore at, nobis voluptatibus amet suscipit voluptas facilis veritatis impedit numquam?</p>
                            <a href="#" class="font-medium text-sm bg-primary py-2 px-4 rounded-lg transition hover:shadow-lg dark:text-dark">Baca Selengkapnya....</a>
                        </div>
                        <div class="mb-12 p-4 md:w-1/2 xl:w-1/3" data-aos="fade-left" data-aos="zoom-in" data-aos-duration="700" data-aos-achor-placement="center-center">
                            <div class="">
                                <img src="https://source.unsplash.com/360x200?tecnology" alt="Tecnology" width="w-full" class="shadow-lg rounded-3xl overflow-hidden" />
                            </div>
                            <h3 class="font-semibold text-xl mt-5 mb-3 hover:text-primary truncate dark:text-white dark:hover:text-primary"><a href="#">Teknologi</a></h3>
                            <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure omnis natus quia asperiores quo architecto ratione repellendus et sequi tempore at, nobis voluptatibus amet suscipit voluptas facilis veritatis impedit numquam?</p>
                            <a href="#" class="font-medium text-sm bg-primary py-2 px-4 rounded-lg transition hover:shadow-lg dark:text-dark">Baca Selengkapnya....</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Blog Section -->
    
            <!-- Contact -->
            <section id="contact" class="pt-36 pb-32 bg-slate-700 dark:bg-slate-800 transition flex justify-center duration-300">
                <div class="container">
                    <div class="w-full px-4" data-aos="fade-up" data-aos-duration="700">
                        <div class="mx-auto text-center mb-16">
                            <h4 class="text-lg text-primary font-semibold">Portfolio</h4>
                            <h2 class="text-3xl font-bold dark:text-white text-white"> Hubungi Kami </h2>
                            <p class="text-base font-medium text-secondary dark:text-slate-400">Hubingi kami dengan mengirim pesan dibawah ini. pesan akan terkirim di data kami. kami menggunakan layanan <span class="text-primary text-lg"> GoogleSheet </span></p>
                        </div>
                    </div>
    
                    <form action="" name="submit-to-google-sheet" onsubmit="Submit()">
                        <div class="w-full md:w-2/3 md:mx-auto">
                            <div class="w-full px-4 pb-8">
                                <label htmlFor="name" class="text-base font-bold text-primary">Nama</label>
                                <input type="text" id="name" name="name" class="w-full flex justify-centerl bg-slate-200 p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required/>
                            </div>
                            <div class="w-full px-4 pb-8">
                                <label htmlFor="email" class="text-base font-bold text-primary">Email</label>
                                <input type="email" id="email" name="email" class="w-full flex justify-centerl bg-slate-200 p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required/>
                            </div>
                            <div class="w-full px-4 pb-8">
                                <label htmlFor="pesan" class="text-base font-bold text-primary">Pesan</label>
                                <textarea name="pesan" id="pesan" cols="30" rows="10 flex justify-center" class="w-full bg-slate-200 p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required></textarea>
                            </div>
                            <div class="w-full">
                                <button class="text-base font-semibold bg-primary py-3 px-8 rounded-full w-full hover:shadow-lg hover:opacity-80 transition duration-200">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!-- End Contact -->
    
            <!-- Footer -->
            <footer id="footer" class="bg-dark text-white pt-24 pb-12 flex justify-center">
                <div class="container">
                    <div class="flex flex-wrap">
                        <div class="w-full px-4 mb-12 md:w-1/3">
                            <h2 class="font-bold text-4xl mb-4 text-primary">Khasanport</h2>
                            <h3 class="font-medium text-2xl mb-1">Hubungi Kami</h3>
                            <p>adi.brokoli.com@gmail.com</p>
                            <p>Jl. makam II Balapulang wetan</p>
                            <p>Tegal, Jawa Tengah</p>
                        </div>
                        <div class="w-full px-4 mb-12 md:w-1/3">
                            <h3 class="font-semibold text-xl text-white mb-5">
                                Kategory Tulisan
                            </h3>
                            <ul class="text-slate-300">
                                <li>
                                    <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Programing</a>
                                </li>
                                <li>
                                    <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Coffee</a>
                                </li>
                                <li>
                                    <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Teknology</a>
                                </li>
                            </ul>
                        </div>
    
                        <div class="w-full px-4 mb-12 md:w-1/3">
                            <h3 class="font-semibold text-xl text-white mb-5">
                                Kategory Tautan
                            </h3>
                            <ul class="text-slate-300">
                                <li>
                                    <a href="#home" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
                                </li>
                                <li>
                                    <a href="#about" class="inline-block text-base hover:text-primary mb-3">Tentang Saya</a>
                                </li>
                                <li>
                                    <a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Portfolio</a>
                                </li>
                                <li>
                                    <a href="#client" class="inline-block text-base hover:text-primary mb-3">Client</a>
                                </li>
                                <li>
                                    <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Blog</a>
                                </li>
                                <li>
                                    <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="flex items-center justify-center">
                        <!-- {/* Youtube */} -->
                        
                        <a href="#" target="_blank" class="md:p-2 md:box-content w-9 h-9 m-3 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="p-2 scale-125 box-content fill-current" width="30"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        
                        <a href="#" target="_blank" class="md:p-2 md:box-content w-9 h-9 m-3 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="p-2 scale-125 box-content fill-current" width="30"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                        
                        <a href="#" target="_blank" class="md:p-2 md:box-content w-9 h-9 m-3 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="p-2 scale-125   box-content fill-current" width="30"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>
                        
                        <a href="#" target="_blank" class="md:p-2 md:box-content w-9 h-9 m-3 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="p-2 scale-125   box-content fill-current" width="30"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>                            
                        </a>
                        
                        <a href="#" target="_blank" class="md:p-2 md:box-content w-9 h-9 m-3 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="p-2 scale-125   box-content fill-current" width="30"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>                           
                        </a>
    
                        <a href="#" target="_blank" class="md:p-2 md:box-content w-9 h-9 m-3 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="p-2 scale-125   box-content fill-current" width="30"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>                           
                        </a>
                    </div>
    
                    <div class="text-center mt-10">
                        <span class="font-medium text-sm text-secondary">Copyright by </span>
                        <span class="font-semibold text-primary">Adi Akhmad Khasan </span>
                        <span class="font-medium text-sm text-secondary">menggunakan </span>
                        <span class="font-semibold text-blue-500 sm:w-full">Tailwind CSS</span>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
            
        </div>
    
    
        <!-- Script -->
        <script>
            // Contact
            const scriptURL = "https://script.google.com/macros/s/AKfycbxT90vMRiV0FyCqVK4rMGLrMyYFttw5b8NPFBhbLI6ZySsR5j6jooctd-4PkT9esvPmrA/exec"
            const form = document.forms["submit-to-google-sheet"]
        
            const Submit = () => {
            e.preventDefault()
            fetch(scriptURL, { method: "POST", body: new FormData(form)})
                .then(response => {
                    console.log("Success!", response)
                })
                .catch(error => {
                    console.error("Error!", error.message)}
                    )
            }
            
            const url = <?= BASEURL; ?>
            console.log(url);
            console.log('ru')
            // Client
            const mark = document.querySelector(".setmark");
            const setMark = () => {
                if(!window.innerWidth >= 1000) {
                    mark.innerHTML = `
                        <div class="flex flex-wrap items-center justify-center">
                            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duration-500 hover:grayscale-0 hover:opacity-100 md:mx-6 xl:mx-8">
                                <img src="http://localhost:8080/phpmvc - Copy/public/img/gojek.png" alt="" />
                            </a>
                            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duration-500 hover:grayscale-0 hover:opacity-100 md:mx-6 xl:mx-8">
                                <img src="http://localhost:8080/phpmvc - Copy/public/img/google.png" alt="" />
                            </a>
                            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duration-500 hover:grayscale-0 hover:opacity-100 md:mx-6 xl:mx-8">
                                <img src="http://localhost:8080/phpmvc - Copy/public/img/taveloka.webp" alt="" />
                            </a>
                            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-80 transition duration-500 hover:grayscale-0 hover:opacity-100 md:mx-6 xl:mx-8">
                                <img src="http://localhost:8080/phpmvc - Copy/public/img/tokopedia.png" alt="" />
                            </a>
                        </div>
                    `
                } else {
                    mark.innerHTML = `
                        <marquee behavior="" direction="">
                            <div class="flex flex-wrap items-center justify-center">
                                <a href="#" class="max-w-[200px] mx-4 py-4 grayscale opacity-80 transition duration-500 hover:grayscale-0 hover:opacity-100 md:mx-6 xl:mx-8">
                                    <img src="http://localhost:8080/phpmvc - Copy/public/img/gojek.png" alt="" />
                                </a>
                                <a href="#" class="max-w-[200px] mx-4 py-4 grayscale opacity-80 transition duration-500 hover:grayscale-0 hover:opacity-100 md:mx-6 xl:mx-8">
                                    <img src="http://localhost:8080/phpmvc - Copy/public/img/google.png" alt="" />
                                </a>
                                <a href="#" class="max-w-[200px] mx-4 py-4 grayscale opacity-80 transition duration-500 hover:grayscale-0 hover:opacity-100 md:mx-6 xl:mx-8">
                                    <img src="http://localhost:8080/phpmvc - Copy/public/img/taveloka.webp" alt="" />
                                </a>
                                <a href="#" class="max-w-[200px] mx-4 py-4 grayscale opacity-80 transition duration-500 hover:grayscale-0 hover:opacity-100 md:mx-6 xl:mx-8">
                                    <img src="http://localhost:8080/phpmvc - Copy/public/img/tokopedia.png" alt="" />
                                </a>
                            </div>
                        </marquee>
                    `
                }
            }
            setMark(mark);

        </script>
        
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script src="<?= BASEURL; ?>/js/output2.js"></script>
        <script src="<?= BASEURL;?>/js/output.js"></script>

        <script>
            AOS.init();
        </script>
        <!-- End Script -->
    </body>
</html>
