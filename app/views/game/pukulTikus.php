<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pukul tikus</title>
    <link rel="stylesheet" href="../tailwind-all.css">
    <style>
        .mode {
            border: 1px dashed blue;
            border-radius: 5px;
        }
        .score {
            background: linear-gradient(90deg, #4fd15a, #4fd1c5);
            color: white;
            border: 1px dashed black;
            padding: 1px 3px;
        }
        .tanah {
            /* width: 200px;
            height: 200px; */
            position: relative;
            overflow: hidden;
        }
        .tanah::after {
            content: '';
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: url(../tanah.webp) bottom no-repeat;
            background-size: 80%;
        }
        .tikus {
            position: absolute;
            left: 20px;
            bottom: -100px;
            z-index: 10;
            width: 100%;
            height: 100%;
            background: url(../tikus.webp) no-repeat;
            background-size: 60%;
            transition: bottom .3s;
        }
        .tikus.show {
            bottom: -55px;
        }
        @media (min-width: 768px) {
            .tikus {
                position: absolute;
                left: 30px;
                bottom: -200px;
                z-index: 10;
                width: 100%;
                height: 100%;
                background: url(../tikus.webp) no-repeat;
                background-size: 60%;
                transition: bottom .3s;
            }
            .tikus.show {
                bottom: -90px;
            }
        }
        .time, main {
            cursor: crosshair;
        }
    </style>
</head>
<body class="overflow-hidden">
    <div class="content w-full flex justify-center overflow-hidden">
        <div class="mode fixed z-50 right-10 top-10">
            <button class="font-bold px-2 py-1 bg-slate-100 rounded-lg" onclick="mode()">Mode</button>
        </div>
        <div class="bg-start fixed right-0 top-0 bottom-0 left-0 bg-transparent backdrop-blur-sm z-10">
            <div class="start w-full flex justify-center flex-wrap gap-10 mt-10 pt-10 fixed top-0 bottom-0 right-0 left-0 md:w-3/4 md:m-auto md:mt-10 z-20">
                <h1 class="w-full text-center text-teal-400 font-bold font-love3 md:text-4xl">Khasanport game</h1>
                <h3 class="w-full text-center font-bold md:text-3xl">Pukul Tikus</h3>
                <button class="mt-20 px-2 py-1 h-10 md:px-4 md:py-2 bg-teal-400 rounded-md font-semibold font-sans text-white md:text-2xl md:h-16" onclick="setHiddenAll([document.querySelector('.start'), document.querySelector('.bg-start'), textTime]);
                start() ">Mulai</button>
            </div>
        </div>

        <div class="hidden time fixed top-0 bottom-0 right-0 left-0 bg-transparent backdrop-blur-sm z-10 flex justify-center items-center text-2xl md:text-4xl font-bold font-love"></div>
    
        <main class="w-full flex flex-wrap justify-center mt-10 relative">
            <div class="w-full flex justify-center text-xl font-bold">
                <div class="score">Score : <span class="text-score"> 0 </span></div>
            </div>
            <div class="w-full text-center mt-4">
                <button onclick="setHiddenAll([textTime]); start()" class="retry border border-black bg-slate-100 p-2 cursor-pointer"> Ulang </button>
            </div>
            <ol class="list-none w-3/4 flex justify-around flex-wrap">
                <li class="tanah w-20 h-24 md:w-48 md:h-48">
                    <div class="tikus"></div>
                </li>
                <li class="tanah w-20 h-24 md:w-48 md:h-48">
                    <div class="tikus"></div>
                </li>
                <li class="tanah w-20 h-24 md:w-48 md:h-48">
                    <div class="tikus"></div>
                </li>
                <li class="tanah w-20 h-24 md:w-48 md:h-48">
                    <div class="tikus"></div>
                </li>
                <li class="tanah w-20 h-24 md:w-48 md:h-48">
                    <div class="tikus"></div>
                </li>
                <li class="tanah w-20 h-24 md:w-48 md:h-48">
                    <div class="tikus"></div>
                </li>
            </ol>
        </main>
    </div>

    <script>
        const tikus = document.querySelectorAll('.tikus')
        const tanah = document.querySelectorAll('.tanah')
        const textScore = document.querySelector('.text-score')
        const textTime = document.querySelector('.time')

        let before;
        let score;
        let stop;
        let time;

        function start() {

            stop = false
            score = 0
            time = 3
            document.querySelector('.retry').setAttribute('disabled', true)
            
            const ready = setInterval(() => {
                            console.log(time)
                            textTime.textContent = time
                            time--
                        }, 900);
                        
            
            const getStart = setTimeout(() => {
                clearInterval(ready)
                setHiddenAll([textTime])

                setTimeout(() => {
                    show()
                }, 1000);

                setTimeout(() => {
                    stop = true
                    document.querySelector('.retry').removeAttribute('disabled')
                }, 10000);
            }, 3000);

        }

        function random(tanah) {
            const random = Math.floor(Math.random() * tanah.length)
            const tRandom = tikus[random]

            if( tRandom == before ) {
                random()
            }
            
            return tRandom;
        }

        function minMaxRandom(min, max) {
            const random = Math.round(Math.random() * ( max - min ) + min)
            return random;
        }
        
        function show() {
            const tRandom = random(tanah);
            const wRandom = minMaxRandom( 300, 900 );
            tRandom.classList.add('show')

            setTimeout(() => {
                tRandom.classList.remove('show')
                if(!stop) show()
            }, wRandom);
        }

        function hit() {
            score++
            this.style.transition = 'bottom .1s'
            this.parentNode.classList.remove('show')
            this.style.transition = 'bottom .3s'
            textScore.textContent = score;
        }

        tikus.forEach( e => {
            e.addEventListener('click', hit)
        })
        
    </script>
    <script src="<?= BASEURL;?>/js/index.js"></script>
</body>
</html>