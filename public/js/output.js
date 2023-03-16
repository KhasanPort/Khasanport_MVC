            // Navbar
            window.onscroll = function() {
                const nav = document.querySelector("nav");
                const fixedNav = nav.offsetTop;
    
                if(window.pageYOffset > fixedNav) {
                    nav.classList.add("navbar-fixed");
                } else {
                    nav.classList.remove("navbar-fixed");
                }
            }
    
            const element = document.querySelector("#bars");
            const Clicked = () => {
                element.classList.toggle("hidden");
            }
    
            const f = document.querySelector(".image");
            const html = document.querySelector("html");
            const fillDark = [
                document.querySelectorAll('svg'),
            ]
            const bgDark = [
                document.querySelector('body'),
                document.querySelector('#home'),
                document.querySelector('#about'),
                document.querySelector('#portofolio'),
                document.querySelector('#client'),
                document.querySelector('#blog'),
                document.querySelector('#contact'),
            ]
            const textDark = [
                document.querySelectorAll('p'),
                document.querySelectorAll('a'),
                document.querySelectorAll('h1'),
                document.querySelectorAll('h2'),
                document.querySelectorAll('h3'),
                document.querySelectorAll('h4'),
                document.querySelectorAll('button'),
            ]
            const ClickF = () => {
                if(html.className != "dark") {
                    for (let i = 0; i < fillDark.length; i++) {
                        const e = fillDark[i];
                        e.forEach(element => {
                            element.classList.add('fill-white');
                        });
                    }
                    for (let i = 0; i < bgDark.length; i++) {
                        const e = bgDark[i];
                        e.classList.add('bg-dark');
                    }
                    for (let i = 0; i < textDark.length; i++) {
                        const e = textDark[i];
                        e.forEach(element => {
                            element.classList.add('text-white');
                        });
                    }
                    
                    html.classList.add("dark");
                    document.querySelector('.option-dark button').style.transform = 'translateX(20px)'
                    document.querySelector('.option-dark button').style.background = 'black'
                    document.querySelector('.option-dark').classList.add('bg-white')
                } else {
                    for (let i = 0; i < fillDark.length; i++) {
                        const e = fillDark[i];
                        e.forEach(element => {
                            element.classList.remove('fill-white');
                        });
                    }
                    for (let i = 0; i < bgDark.length; i++) {
                        const e = bgDark[i];
                        e.classList.remove('bg-dark');
                    }
                    for (let i = 0; i < textDark.length; i++) {
                        const e = textDark[i];
                        e.forEach(element => {
                            element.classList.remove('text-white');
                        });
                    }
                    html.classList.remove("dark");
                    document.querySelector('.option-dark button').style.transform = 'translateX(0px)'
                    document.querySelector('.option-dark button').style.background = 'white'
                    document.querySelector('.option-dark').classList.remove('bg-white')
                }
            }    

            function setHiddenAll(a)
            {
                a.forEach(e => {
                    e.classList.toggle('hidden');
                })
            }

            function setTheme(a)
            {
                const theme = document.querySelector('.' + a)
                const themeAll = document.querySelectorAll('ol.theme')
                themeAll.forEach(e => {
                    console.log(a)
                    console.log(e.className)
                    if( e.className == a ) {
                        e.classList.remove('hidden')
                        console.log(e)
                    } else {
                        e.classList.add('hidden')
                    }
                })
            } 
        
            function setBg(a)
            {
                console.log('asssss')
                // const body = document.body
                // body.style.background = a.value
            }