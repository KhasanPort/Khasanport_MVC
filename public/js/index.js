    function setHidden(a) {
        a.style.display = "none";
    }
    function setHiddenAll(a) {
        a.forEach(e => {
            e.style.display == "hidden"
        });
    }
    function setToggle(a) {
        if(!a.style.display == "none") {
            a.style.display == "Static";
        } else {
            a.style.display == "none";
        }
    }
    function setDisplay(a, b, c) {
        if(a.style.display == b ) {
            a.style.display == c;
        } else if(a.style.display == c) {
            a.style.display == b;
        } else {
            alert('Ada Yang Salah');
        }
    }
