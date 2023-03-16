
    window.onscroll = function() 
    {
        const nav = document.querySelector("#nav");
        const fixedNav = nav.offsetTop;

        if(window.pageYOffset > fixedNav) {
            nav.classList.remove("absolute");
            nav.classList.add("fixed", "bg-white", "fixed-an");
        } else {
            nav.classList.add("absolute");
            nav.classList.remove("fixed", "bg-white", "fixed-an");
        }
    }

    function navClick(a, b, c) {
        a.classList.toggle(`${b}`)
        c.classList.toggle(`md:w-full`)
    }
    
    function displayClick(a) 
    {
        document.querySelectorAll('.page')
        .forEach((e) => {
            // e.classList.remove('flex', 'inline', 'grid', 'block', 'inline-block');
            e.classList.add('hidden');
        })
        document.querySelectorAll('li.text-sm button')
        .forEach((e) => {
            e.classList.remove('active');
        })

        const sec = document.querySelector(`#${a}`);
        const classSec = document.querySelector(`.${a}`);
        sec
            .classList.remove('hidden')
        sec
            .classList.add('flex')
        classSec
            .classList.add('active');
    }

    function setHidden(a)
    {
        a.forEach(e => {
            e.classList.toggle('hidden');
        })
    }
    
    function setClassAll(a, b) {
        a.forEach(e => {
            e.classList.toggle(b)
        })
    }

    // // Search System
    // // create array from node list
    // const search = Array.from(document.querySelectorAll('li'));
    // for (let i = 0; i < search.length; i++) {
    //     const e = search[i];
    //     e.textContent.toLowerCase()
    //     // const el = e.textContent.toLowerCase();
    //     // e.split(' ')
    //     // console.log(el)
    //     // console.log(el.includes('api'))
    //     // console.log(e.textContent.toLowerCase())
    // }

    // // take the include text
    // function Search(a) {
    //     a.toLowerCase();
    //     // console.log(typeof a)
    //     const texts = search.filter((text, i) => {
    //         // console.log(text)
    //         const textl = text.textContent.toLowerCase();
    //         const texth = textl.includes(a)
    //         // console.log('\n')
    //         console.log(texth)
    //         // console.log(text.textContent.includes(a))
    //     })
    //     console.log(texts); 
    // }


    