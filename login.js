function course(){
    var cr=fs.crs.value;
    if (cr=="Digital Signal Processing"){
        document.getElementById("img").setAttribute("src","electronics.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Circuit Theory Essentials"){
        document.getElementById("img").setAttribute("src","electronics2.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Communication Systems"){
        document.getElementById("img").setAttribute("src","ece3.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Electronics for Information Sciences"){
        document.getElementById("img").setAttribute("src","ece4.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Advanced Wireless Technology"){
        document.getElementById("img").setAttribute("src","ece5.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Dynamics and Control Systems"){
        document.getElementById("img").setAttribute("src","mech1.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Fluid Mechanics"){
        document.getElementById("img").setAttribute("src","mech2.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Materials and Structural Analysis"){
        document.getElementById("img").setAttribute("src","mech3.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Manufacturing Technology"){
        document.getElementById("img").setAttribute("src","mech4.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Engineering Mechanics"){
        document.getElementById("img").setAttribute("src","mech5.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Cryptography Essentials"){
        document.getElementById("img").setAttribute("src","cs1.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Design and Analysis of Algorithms"){
        document.getElementById("img").setAttribute("src","cs2.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Machine Learning with Python"){
        document.getElementById("img").setAttribute("src","cs3.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Graphics and Image Processing"){
        document.getElementById("img").setAttribute("src","cs4.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Computer Architecture"){
        document.getElementById("img").setAttribute("src","cs5.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Artificial Intelligence"){
        document.getElementById("img").setAttribute("src","it1.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Big Data Analytics"){
        document.getElementById("img").setAttribute("src","it2.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Internet of Things"){
        document.getElementById("img").setAttribute("src","it3.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Database Management Systems"){
        document.getElementById("img").setAttribute("src","it4.jpg");
        document.getElementById("s1").innerHTML=cr;
    }
    else if(cr=="Cloud Computing and Virtualisation"){
        document.getElementById("img").setAttribute("src","it5.jpg");
        document.getElementById("s1").innerHTML=cr;
    }

}

function valid(){
    var id=login.loginid.value;
    var pwd=fs.pword.value;
    var em=fs.email.value;
    
if (em.match(/^[a-zA-z0-9]*@[a-z]*\.[a-z]{2,3}$/)){
    document.getElementById("p1").innerHTML="<font style='color:green'><b>Valid</b></font>";
}else{document.getElementById("p1").innerHTML="<font style='color:red'><b>Enter a valid email</b></font>";
return false;}

if (pwd.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{6,16}$/)){
    document.getElementById("p2").innerHTML="<font style='color:green'><b>Valid</b></font>";
}else{document.getElementById("p2").innerHTML="<font style='color:red'><b>Enter a valid password</b></font>";
return false;}
}
function pwd(){
    var pwd=fs.pword.value;
    var cfpwd=fs.pword2.value;
    if (pwd==cfpwd){
    document.getElementById("p3").innerHTML="<font style='color:green'><b>Verified</b></font>";
}else{
    document.getElementById("p3").innerHTML="<font style='color:red'><b>Password mismatch</b></font>";
    return false;
}}