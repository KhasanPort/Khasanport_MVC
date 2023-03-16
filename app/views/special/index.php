<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khasanport</title>
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/tailwind-all.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/aos.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/font.css">
    <script src="<?= BASEURL; ?>/js/aos.js"></script>
    <style>
        html {
            scroll-snap-type: y mandatory;
            font-family: love2;
        }
        section {
            block-size: 100vh;
            scroll-snap-align: center;
            scroll-snap-stop: always;
        }
        section::-webkit-scrollbar{
            display: none;
        }
        .hero img {
            /* width: 100%; */
            object-fit: cover;
            /* background: url(http://localhost:8080/phpmvc - Copy/public/img/kamu.jpg);
            background-size: cover;
            background-position: center; */
        }
        .you {
            display: grid;
            grid-template-columns: 30% 30% 30%;
            grid-template-rows: 33% 66%;
            grid-template-areas: 'img header header'
                                 'img des des';
        }
        .you .img {
            grid-area: img;
            /* background: url(hadeh.jpg);
            background-size: cover; */
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .you .header {
            grid-area: header;
            border-bottom: 1px dashed black;
        }
        .you .des {
            grid-area: des;
            /* background-color: yellow; */
            text-align: center;
        }
        .-you {
            display: grid;
            grid-template-columns: 30% 30% 30%;
            grid-template-rows: 33% 66%;
            grid-template-areas: 'header header img'
                                 'des des img';
        }
        .-you .img {
            grid-area: img;
            /* background: url(hadeh.jpg);
            background-size: cover; */
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .-you .header {
            grid-area: header;
            border-bottom: 1px dashed black;
        }
        .-you .des {
            grid-area: des;
            /* background-color: yellow; */
            text-align: center;
        }
        /* .imut .img {
            background: url(imut.webp);
            background-size: cover;
            background-position: center;
        } */
        .succes {            
            background: url(imut.webp);
            background-size: cover;
            background-position: center;
        }
        .special {
            color: rgba(32, 165, 165, 0.774);
        }
    </style>
</head>
<body class="overflow-x-hidden">
    <div class="imut fixed top-0 bottom-0 left-0 right-0 bg-white z-30 flex flex-wrap transition duration-500 items-center mx-auto">
        <img src="<?= BASEURL; ?>/img/hehe.gif" class="w-full h-full absolute" title="boleh gak sih manggil sayang😄" alt="boleh gak sih manggil sayang😄">
        <!-- <div class="img w-full h-1/2 p-10 box-border"></div> -->
        <div class="w-full h-1/3"></div>
        <span class="w-full text-center font-bold text-3xl -mt-40 relative z-10">WELCOME FOR <br> <span class="special"> YOU </span></span>
    </div>
    <div class="container">
        <section class="hero w-full h-screen relative" id="home">
            <!-- <div class="bg-black absolute right-0 left-0 bottom-0 top-0 opacity-40"></div> -->
            <img src="<?= BASEURL; ?>/img/cute.jpg" class="w-full h-full absolute" title="boleh gak sih manggil sayang😄" alt="boleh gak sih manggil sayang😄">
            <h1 class="absolute bottom-10 left-10 flex flex-wrap">
                <span class="w-full text-xl text-white">You are, </span>
                <span class="text-3xl text-teal-400 shadow-md font-bold">Impressive!</span>
                <span class="w-full text-xs text-secondary italic"> Dian <span class="special"> Amaliah </span> Putri</span>
                <br><hr><br><hr>
            </h1>
        </section>
        <section class="w-full h-screen bg-gray-200 flex flex-wrap gap-10 py-16 text-xs">
            <div class="you w-2/3 mx-auto h-1/3 p-1 rounded shadow-md" data-aos="fade-right" data-aos-duration="1300" data-aos-anchor-placement="center-bottom">
                <img src="<?= BASEURL; ?>/img/cute.jpg" title="boleh gak sih manggil sayang😄" alt="boleh gak sih manggil sayang😄" class="img px-2">
                <h3 class="header text-center">Dian Amaliah <span class="special"> Putri </span></h3>
                <p class="des p-1">Dia yang manis, Dia <span class="special"> yang </span> cuteee😆</p>
            </div>
            <div class="-you w-2/3 mx-auto h-1/3 p-1 rounded shadow-md" data-aos="fade-left" data-aos-duration="1300" data-aos-anchor-placement="center-bottom">
                <img src="<?= BASEURL; ?>/img/cool.jpg" title="boleh gak sih manggil sayang😄" alt="boleh gak sih manggil sayang😄" class="img cover">
                <h3 class="header text-center">Dian <span class="special"> Amaliah </span> Putri</h3>
                <p class="des p-1">Dia yang <span class="special"> cantik </span>, dan cool😎</p>
            </div>
            <div class="you w-2/3 mx-auto h-1/3 p-1 rounded shadow-md" data-aos="fade-right" data-aos-duration="1300" data-aos-anchor-placement="top-bottom">
                <img src="<?= BASEURL; ?>/img/aneh.jpg" title="boleh gak sih manggil sayang😄" alt="boleh gak sih manggil sayang😄" class="img px-2">
                <h3 class="header text-center">Dian <span class="special"> Amaliah </span> Putri</h3>
                <p class="des p-1">dan, Dia yang ngeselin😒</p>
            </div>
        </section>
        <section class="w-full h-screen bg-gray-200 flex flex-wrap gap-10 py-16 text-xs">
            <div class="you w-2/3 mx-auto h-1/3 p-1 rounded shadow-md" data-aos="fade-right" data-aos-duration="1300" data-aos-anchor-placement="center-bottom">
                <img src="<?= BASEURL; ?>/img/who.jpg" title="boleh gak sih manggil sayang😄" alt="boleh gak sih manggil sayang😄" class="img px-2">
                <h3 class="header text-center">Dian Amaliah <span class="special"> Putri </span></h3>
                <p class="des p-1">Dia yang bisa diandalkan 🙂</p>
            </div>
            <div class="-you w-2/3 mx-auto h-1/3 p-1 rounded shadow-md" data-aos="fade-left" data-aos-duration="1300" data-aos-anchor-placement="center-bottom">
                <img src="<?= BASEURL; ?>/img/what.jpg" title="boleh gak sih manggil sayang😄" alt="boleh gak sih manggil sayang😄" class="img px-2">
                <h3 class="header text-center"><span class="special"> Dian </span> Amaliah Putri</h3>
                <p class="des p-1">Tapi sikapnya aneh, <span class="special"> kayak </span> nyembunyiin hal</p>
            </div>
            <div class="you w-2/3 mx-auto h-1/3 p-1 rounded shadow-md" data-aos="fade-right" data-aos-duration="1300" data-aos-anchor-placement="top-bottom">
                <img src="<?= BASEURL; ?>/img/hmm.jpg" title="boleh gak sih manggil sayang😄" alt="boleh gak sih manggil sayang😄" class="img px-2">
                <h3 class="header text-center"><span class="special"> Dian </span> Amaliah Putri</h3>
                <p class="des p-1">Tapi juga <span class="special"> seperti </span> mempunyai banyak pikiran</p>
            </div>
        </section>
        <section class="page w-full flex justify-center items-center flex-wrap">
            <div class="img-page relative w-2/3 h-1/2 bg-blue-300 rounded-lg" data-aos="flip-left" data-aos-duration="1300 overflow-hidden">
                <img src="<?= BASEURL;?>/img/hehe.gif" class="w-full h-full rounded-lg" title="boleh gak sih manggil sayang😄" alt="boleh gak sih manggil sayang😄" srcset="">
                <div class="absolute top-0 right-0 bg-white text-red-500 border-red-500 border font-bold text-xl rotate-6 p-1 rounded box-border" data-aos="flip-right" data-aos-duration="1500">Now!</div>
            </div>
            <h1 class="text-page flex w-5/6 justify-center items-center font-bold rounded-lg shadow-md px-3 py-1">
                Kamu Lia? hehe... hai sayang😄
                <br>
                boleh gak sih manggil sayang😅
            </h1>
            <div class="flex w-full gap-10 justify-center items-center mb-28 relative">
                <button class="back absolute top-0 font-bold text-xl -mt-10"><=</button>
                <button class="iya w-1/2 text-center rounded-full py-1 bg-green-400 font-bold">Iya</button>
                <button class="nggak w-1/2 text-center rounded-full py-1 bg-red-700 font-bold">Nggak</button>
            </div>
        </section>
        <div class="next-page hidden fixed top-0 bottom-0 left-0 right-0 bg-white z-30 flex flex-wrap transition duration-500 items-center mx-auto overflow-auto">
            <p>Makasih udah maapin walau kayaknya terpaksa yah.....</p>
            <p>Buat sekarang, aku pengin tahu apa yang sebenernya kamu pengin! kamu maunya gimana, mau gak bicarain itu? kamu ada waktu kapan. pulang sekolah aja😒</p>
            <p>kamu, saya tanyain mau ngomong apa, katanya gak ada, tapi malah nangis. saya kan dah bilang, saya penginnya jalan yang nggak bikin kamu sakit hati. tapi kalo kamu gitu saya jadi nggak yakin ouhhhh</p>
            <p>Maaf juga, yang kemarin malem. Maaf juga nggak bisa ngomong langsung, soalnya kamu tahu sendirilah se ngeselin apa si adi ini.</p>
            <label for="pesan">Sekarang ketik sesuatu <a href="https://wa.me/0895379238578" style="color:blue;">disini</a></label>
        </div>
    </div>
    <script>
        AOS.init();

        let panggil = 'Sayang'
        
        const imut = document.querySelector('.imut')
        const setIntv = setInterval(() => {
            imut.style.opacity = 1-0.2;
        }, 500);
        setTimeout(() => {
            imut.classList.add('hidden')
            clearInterval(setIntv)
        }, 5000);

        const iya = document.querySelectorAll('.iya')
        const nggak = document.querySelectorAll('.nggak')
        const page = document.querySelector('.page');
        const textPage = document.querySelector('.text-page');
        const imgPage = document.querySelector('.img-page');
        const nextPage = document.querySelector('.next-page')
        
        let point = 1;
        const pagePoint = {
            'tanya' : [
                'kamu marah sama aku?',
                panggil + '.... kamu kesel?',
                'Saya habis nyakitin hati kamu?',
                'maaf ya li, sampe buat kamu nangis gitu....😣 pas jum\'at',
                'kalo kamu masih mau ngomong sesuatu, bisa kok li. Mau gak?'
            ],
            'img' : [
                '<?= BASEURL;?>/img/hehe.gif',
                '<?= BASEURL;?>/img/tokopedia.png',
                '<?= BASEURL;?>/img/kamu.jpg',
                '<?= BASEURL;?>/img/kamu.jpg',
                '<?= BASEURL;?>/img/kamu.jpg',
            ]
        };
        const setPage = {
            'img' : (e) => {
                imgPage.setAttribute('src', pagePoint.img[point])
                // imgPage.style.background = `url${pagePoint.img[point]}`
            },
            'tanya' : (e) => {
                textPage.textContent = pagePoint.tanya[point];
            },
        };
        function setNextPage(e) {
            page.classList.add('hidden')
            nextPage.classList.remove('hidden')
        }
        // const pageIya = document.querySelector('.page-iya')
        // const pageNggak = document.querySelector('.page-nggak')
        iya.forEach(e => {
            e.addEventListener('click', () => {
                if (point != 5) {
                    document.body.style.cursor = 'wait'
                    setTimeout(() => {
                        document.body.style.cursor = 'default';
                        setPage.img()
                        setPage.tanya()
                        point++
                    }, 500);
                } else {
                    document.body.style.cursor = 'wait'
                    setTimeout(() => {
                        document.body.style.cursor = 'default';
                        setNextPage()
                    }, 500);
                }
            })
        });
        iya.forEach(e => {
            e.addEventListener('doubleclick', () => {
                alert('Jangan klik berkali-kali '+panggil)
            })
        });
        nggak.forEach(e => {
            e.addEventListener('click', () => {
                if(point == 1) {
                    alert('Nggak peduli.... 🤣 sayang')
                    document.body.style.cursor = 'wait'
                    setTimeout(() => {
                        document.body.style.cursor = 'default';
                        setPage.img()
                        setPage.tanya()
                        point++
                    }, 500);
                } else {
                    alert('Liaaaaaaa, Harus jawab IYA!!😁')
                }
            })
        });
        let clickPoint = 0;
        nggak.forEach(e => {
            e.addEventListener('dblclick', () => {
                if(clickPoint == 0) {
                    alert('Jangan diklik berkali-kali '+panggil+'😊')
                } else {
                    alert('Sabar yahhh.... ' +panggil)
                }
            })
        });
        
        document.querySelector('.back').addEventListener('click', () => {
            if(point >= 1) {
                point = point - 1
                console.log(point)
                document.body.style.cursor = 'wait'
                setTimeout(() => {
                    document.body.style.cursor = 'default';
                    setPage.img()
                    setPage.tanya()
                }, 500);
            } else {
                console.log(point)
            }
        })
        
    </script>
</body>
</html>