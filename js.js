function darkMode(){
    var pr = document.getElementById("products")
    pr.style.color = "white"
    pr.style.background = "black"

    var add = document.getElementById("box-address")
    add.style.background = "black"

    var con = document.getElementById("contact")
    con.style.background = "black"

    var abo = document.getElementById("about")
    // abo.style.border = "10px solid bisque"
    abo.style.background = "black"
    abo.style.color = "white"

    var nav = document.getElementById("container")
    nav.style.background = "black"
    nav.style.color = "white"

    var foot = document.getElementById("footer")
    var hol = foot.getElementsByTagName("p")
    hol[0].style.background = "black"
    hol[0].style.color = "white"

    var got = document.getElementsByTagName("a")
    for (let i = 0; i < got.length; i++) {
        got[i].style.color = "white"
        got[i].addEventListener("mouseover", function(){
            got[i].style.color = "red"
        });
        got[i].addEventListener("mouseleave", function(){
            got[i].style.color = "white"
        });
    }

    var aku = document.getElementsByClassName("box")
    for(let i = 0; i < aku.length; i++){
        aku[i].style.color ="white"
    }
}

function lightMode(){
    var pr = document.getElementById("products")
    pr.style.color = "black"
    pr.style.background = "#eddcd2"

    var add = document.getElementById("box-address")
    add.style.background = "#fdf5e6"

    var con = document.getElementById("contact")
    con.style.background = "dimgray"

    var abo = document.getElementById("about")
    abo.style.background = "#7895B2"

    var nav = document.getElementById("container")
    nav.style.background = "bisque"
    nav.style.color = "black"

    var foot = document.getElementById("footer")
    foot.style.background = "#FFE3E1"

    var got = document.getElementsByTagName("a")
    for (let i = 0; i < got.length; i++) {
        got[i].style.color = "black"
        got[i].addEventListener("mouseover", function(){
            got[i].style.color = "white"
        });
        got[i].addEventListener("mouseleave", function(){
            got[i].style.color = "black"
        });
    }

    var kotak = document.getElementsByClassName("box")
    for(let i = 0; i < kotak.length; i++){
        kotak[i].style.color ="black"
    }

    var foot = document.getElementById("footer")
    var teks = foot.getElementsByTagName("p")
    teks[0].style.background = "#ffe3e1"
    teks[0].style.color = "black"
}

function gelap() {

    if(document.getElementById("checkbox").checked) {
        darkMode()
    } else {
        lightMode()
    }
}

function show(){
    const x = document.getElementById("show4");
    if(x.style.display == "none"){
        x.style.display = "block"
    }else{
        x.style.display = "none"
    }
}

window.onload = function(){
    var tombol = document.getElementById("tomb");
    if (tombol){
        tombol.addEventListener("click", function awu() {
            alert("Happy Thrifting!");
        });
    }

    var tombol2 = document.getElementsById("butonlihat");
    if (tombol2){
        tombol2.addEventListener("click", function awu(){
            alert("Membership Added!");
        });
    }

    var buton = document.getElementsByClassName("btn-info4")
    for(let i = 0; i < buton.length; i++){
        buton[i].addEventListener("click", function(){
            const x = document.getElementsByClassName("show4");
            if(x[i].style.display == "none"){
                x[i].style.display = "block"
            }else{
                x[i].style.display = "none"
            }
        });
    }

    var boks= document.getElementsByClassName("box1")
    for(let i = 0; i < boks.length; i++){
        boks[i].addEventListener("mouseover", function(){
            var pict = boks[i].getElementsByTagName("img")
            pict[0].style.width = "180px"
            pict[0].style.height = "180px"

        });
        boks[i].addEventListener("mouseleave", function(){
            var pict = boks[i].getElementsByTagName("img")
            pict[0].style.width = "160px"
            pict[0].style.height = "160px"
        });
    }
}