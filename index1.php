

<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>


<!DOCTYPE html>
<html lang="en">
<head>
 
    <style>
        *{
            font-family: 'Courier New', monospace;
        
            
        }
      
        .leftdiv{
            height:100vh;
            width:300px;
           background-image:url(IMG/download.png);
                       position:fixed;
            box-shadow: 2px 2px 5px grey;
            background-size: 170vh;
            background-repeat: no-repeat;
 
            
        
        }
        .leftdiv img{
           height:106px;
           margin-left: 77px;
           position: relative;

        }
        button{
           padding:20px;
           color:black;
            width:250px;
            
            background: rgba(0,0,0,0.01);
            margin-bottom: 10px;
            border-color:rgba(0, 0,0, 0.09);
            border-radius: 30px;
            margin-left: 20px;
            font-weight: bolder;
            font-size: 15px;
            backdrop-filter: blur(5px);
            
        }
        
        button:hover{
            background: rgba(0,0,0,0.1);
            
       
          
            

        }
        .leftdivbutns{
            margin-top: 80px;
        }
        a{
            text-decoration: none;
            color:blanchedalmond;
        }
     body{
        background-color: whitesmoke;
     
     }
     body{
        margin-top:10px;
        font-size: 20px;
     }

.maincnt{
    
   
    height:400vh;
    width: 100%;
    color: #7f00ff;
    margin-left: 1vw;

background:rgb(255,250,250);
box-shadow: 0px 0px 3px 4px rgb(208, 205, 205);

 
 

   
}



.m{
    display: flex;
  
}
.cntr{
    
    height:100vh;
    width: 100%;
    color: #7f00ff;
background-color:whitesmoke;

 
 

    


   
}
.cntr1{
    
   
    height:500px;
    
    margin-top: 625px;
    
    
   


   
}
.cntr1 img{
    width: 80%;
    height:100%;
}
.zz h1{
    border-right: 2px solid #7f00ff;
   
}





.decor{
    
    height:500px;
    width:100%;
    float: right;
   

}
*{
        font-family: 'poppins',sans-serif;
    }
    .container{
        width:100%;
      
        height:100vh;
        background-image: url(IMG/back.jpg);
        background-position: center;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        color:black;
        
    }
    .card{
        height:534px;
        width:90%;
        max-width: 312px;
        text-align: center;
        padding:50px 35px;
        border: 1px solid rgba(255,255,255,0.3);
        background: rgba(255,255,255,0.2);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0,0,0,0.1);
        backdrop-filter: blur(5px);
    }
    .card img{
        width:250px;
        height:250px;
        
        border-radius: 50%;

    }
    .card h2{
        font-size: 40px;
        font-weight: 600;
        margin-top: 20px;
    }
    .card p{
        font-size: 18px;
        margin: 10px auto;
        max-width: 330px;
    }
    .card .links img{
       width:40px;
       height:40px;
        
        margin: 20px 10px;
        transition: background 0.5s;
    }
   
.card .links img:hover{
    background: rgba(96, 96, 239,0.5);
}

.btn{
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    font-weight: 500;
    background: #fff;
    color:#ff01cf;
    padding:10px 30px;
    border-radius: 30px;
    margin: 30px 0 10px;

}
.abtandskills{
    height: 77vh;
    width:100%;
    background:linear-gradient(#2b1055,#7579de);
    
  
    color:white;
   
font-weight: 500;
font-size: 42px;
margin-top: 40px;
    
}

.abtandskills h1{
  
    text-align: center;
  
}
.txtanim{
width: 100%;
margin:10px;


}

.txtanim h1{
    font-size: 4vw;
    color:white;
    
    position: relative;
    -webkit-text-stroke: 0.3vw white;
    

}
.txtanim h1::before{
   content:attr(data-text) ;
   position: absolute;
   top:0;
   left:0;
   width:0;
   height:100%;
   color:#7f00ff;
   -webkit-text-stroke: 0vw white;
   border-right: 2px solid #7f00ff;
   overflow: hidden;
animation: animate 6s linear infinite;


}
@keyframes animate{
    0%,10%,100%{

    }
    40%,70%,90%{
       width:100% ;
    }

}
section img{
    width:100%;
    position:absolute;
    width:100%;
    height:400%;
    object-fit: cover;
    top:0;
    left:0;
    

}
section{
    position:relative;
    
   display:flex;
   justify-content: center;
   align-items: center;
    padding: 100px;
}
section h2{
  position: absolute;
  white-space: nowrap;
  font-size: 7.5vw;
  z-index: 9;
  
}
section p{
  position: absolute;
  

font-size: 20px;
  
  z-index: 9;
  
}
.paramount{
    height:373px;
    width:358px;
    background-color: rgba(255,255,255,.3);

    z-index: 100;
    position:absolute;
    margin-top: 659px;
 
 
        width:100%;
        max-width: 312px;
        text-align: center;
        padding:0px 15px;
     
        background: rgba(255,255,255,0.0);
        box-shadow: 2px 2px 5px rgba(255,255,255,0.5);
        border-radius:30px;
        overflow:hidden 
       
       
}
.paramount:before{
    content:'';
    position:absolute;
    height:500px;
    width:18px;
    background:rgba(136, 136, 136, 0.4);
    box-shadow: 0 0 20px rgba(136, 136, 136, 0.4);
    filter:blur(1px);
    opacity:0.9;
    top:-10px;
    transition: 0.7s;
    transform: rotate(-40deg) translateX(-220px);
  
}
div:hover:before{
    transform: rotate(-40deg) translate(300px,20px);
}
.abtandskills2{
    margin-top:300px;
    background-size: contain;
   height:100%;
    color:white;
    background-color: #2b1055;
    
    justify-content: center;

        align-items: center;
        
        background-repeat: no-repeat;
        position: relative;

}
.abtandskills2 {
    font-weight: 500;
font-size: 42px;

width:100%;


position:absolute;
color:black;

height:90vh;

}
.skillsdiv{
    height:100vh;
    background-color: #7b40ea;
    background-image: url(IMG/Home@2x.png);
    background-size: cover;
    background-repeat: no-repeat;
    
    color:#fff;
    margin-top: 300px;
    font-size:3.7vw;
   
    
   
}
.skillsdiv h1{
    padding-top: 10px;
}


#entr{
    background-color: rgba(255, 255, 255,0.5);
    color:#ff01cf;
}
.ccc{
    height:300px;
    width:300px;
    background-color: white;
    display: flex;
   justify-content: space-between;
    
}
#ill{
height: 50%;
float:right;
z-index: 900;
position:relative;
margin-top: 160px;


}
.plcrd{
    
    display: flex;
    
 
   
   
    
             flex-wrap: wrap;
}
.pl1{
    background-color: #fff;
    height:140px;
    width:140px;
    
    margin:10px;
    border: 1px solid rgba(255,255,255,0.3);
        background: rgba(255,255,255,0.2);
        border-radius: 16px;
        
        backdrop-filter: blur(5px);
}
.pl1 img{
    height:70%;
   padding-left: 25%;
   padding-top: 17%;
}
.pl1:hover{
    background-color: rgba(157, 154, 154, 0.273);
}
#js{
    height:60%;
   padding-left: 0%;
   padding-top: 27%;
}
#py{
    padding-left: 20%;
   padding-top: 17%;
}
.footer{
    height:30vh;
    background-color: black;
    margin-top: 220px;
    justify-content: center;
    align-items: center;
    position: relative;
    color:rgb(228, 228, 228);
    font-size: 15px;
    padding-top: 10px;
}
.footer svg{
    border-radius: 10%;
   
    margin-top:10vh;
    margin-left: 10vh;
    margin-right: 10vh;
    margin-bottom: 5vh;
}
.footer svg:hover{
    background-color:rgba(48, 220, 33, 0.926);
}
#ins:hover{
    background-color:rgba(233, 51, 178, 0.926);
}
.footer input{
    padding:5px;
    margin-bottom: 20vh;
}
#submit{
    background-color:red;
    padding:10px;
    border-radius: 10px;
}
#submit:hover{
    background-color: #7579dea8;
    
   
}
#g1:hover{
    background-color: #9f9f9f;
    
}
body {
 font-family: cursive;
}
a {
 text-decoration: none;
}
li {
 list-style: none;
 }
 .navbar {
 display: flex;
 align-items: center;
 justify-content: space-between;
 padding: 20px;
 background-color: rgba(169, 26, 191,0.5);
 color: #fff;
 margin-left: 1vw;

}
.nav-links a {
 color: #fff;
}
/* LOGO */

/* NAVBAR MENU */
.menu {
 display: flex;
 gap: 1em;
 font-size: 3vh;
}
.menu li:hover {
 background-color: #4c9e9e;
 border-radius: 5px;
 transition: 0.3s ease;
}
.menu li {
 padding: 5px 14px;
}

li {
 margin-top: 10px;
}


        </style>
</head>
<body>

    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo"><img style="height:10vh" src="IMG\LOGO.png"></div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
        
          <!-- NAVIGATION MENUS -->
          <div class="menu">
            <li><a href="#gmr">Home</a></li>
            <li><a href="#abt">About</a></li>
            <li class="services">
              <a href="#sk">Skills</a>
     
             
            </li>
  
            <li><a href="#ffff">Contact</a></li>
            <li><a href="index.php">Customize</a></li>
          </div>
        </ul>
      </nav>
    <div class="maincnt">
    

        <div class="txtanim">
        <h2><span style="color:grey;">< HELLO <?php echo $user_data['user_name'] ; ?> ></span></h2><br><h1 data-text="Im a programer / Web-Developer !">Im a programer/Web-Developer !</h1>
                </div>
                
<div id="gmr" class="container" >
    <div class="card" data-tilt>
        <img src="IMG\SUBRAMANYACROPED.JPG">
        <h2>Subrahmanya</h2>
        <p>Im a student at NMAMIT NITTE and I love coding</p>
        <div class="links"> 
            <a  href="https://github.com/subba5076"><img src="IMG\github.png"></a>
            <a href="https://www.linkedin.com/in/subrahmanya-26054b204/"><img src="IMG\linkedin.png"></a>
            <a href="https://wa.me/919535057186?text=hello"><img src="IMG\mail.png"></a>
        
        <a href="https://wa.me/919535057186?text=hello" class="btn">message me</a>
    </div>
    </div>

</div>
<div class="abtandskills" id="abt" >
    <section>
        
        <img src="IMG\stars.png" id="str">
        <img src="IMG\mountains_behind.png" id="mountain">
        <img src="IMG\mountains_front.png" id="backmount">
        <h2 id="textmount">About</h2>
        <div class="paramount">
        <p id="paramount">Hi👋🏻 I am a full stack web developer/programmer, with skills HTML, CSS, JavaScript, php, sql. I love building websites I am keen to learn and explore new things . I am also a machine learning, AI, Sci-fi, Spirutual-Sci-Fi enthusiast.
            I like to sing and play instruments and read articles mostly related to tech, startups and business.</p>
        </div>
    </section>
    
    

</div>
<div class="skillsdiv" id="sk">
  <center>  <h1>Skills</h1></center>
  <img id="ill" src="IMG\sitting-8@2x.png">
<div class="plcrd">
    <div class="pl1"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/HTML5_logo_resized.svg/300px-HTML5_logo_resized.svg.png" ></div>
    <div class="pl1"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/1200px-CSS3_logo_and_wordmark.svg.png"></div>
    <div class="pl1"><img id="js" src="https://www.freepnglogos.com/uploads/javascript-png/javascript-logo-transparent-logo-javascript-images-3.png"></div>
    <div class="pl1"><img id ="py" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1200px-Python-logo-notext.svg.png"></div>
    <div class="pl1"><img id="py" src="https://diylogodesigns.com/wp-content/uploads/2017/07/java-logo-vector-768x768.png"></div>
    
</div>
<div class="plcrd" >
    <div class="pl1"><img src="https://www.pinclipart.com/picdir/big/539-5392404_transparent-c-language-logo-png-clipart.png"></div>
    <div class="pl1"><img id="py" src="https://pngimg.com/uploads/php/php_PNG43.png"></div>
    <div class="pl1"><img id="py" src="IMG/Android-icon-on-transparent--background-PNG.png"></div>
    <div class="pl1"><img id="py" src="IMG/GitHub-Mark-120px-plus.png"></div>
    <div class="pl1"><img src="IMG/pngegg.png"></div>
    
</div>
  <div class="footer" id="ffff">
 
   <center><a href="https://wa.me/919535057186?text=hello"><svg xmlns="http://www.w3.org/2000/svg"  height="4vh" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
      </svg></a><a href="https://www.instagram.com/subrahmanyanayak.5076/"><svg id="ins" xmlns="http://www.w3.org/2000/svg"  height="4vh" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
      </svg></a><a href="https://github.com/subba5076"><svg id="g1"xmlns="http://www.w3.org/2000/svg"  height="4vh" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
      </svg></a><br><button  onclick="location.href='logout.php'" id="submit">LogOut</button></center> 
   
  </div>
  
</div>



        



<script src="vanilla-tilt.php"></script>

</body>
</html>