/*
	Theme Name: Keni Thomas
	Theme URI: http://www.julishoredesign.com
	Description: WordPress Theme
	Version: 1
	Author: Aaron Joseph (@sistercylon)
	Author URI: http://www.adj-media.com
	Tags: HTML5, CSS3
    
    Based on html5Blank Theme by Todd Motto
*/

/*------------------------------------*\
    MAIN
\*------------------------------------*/


@font-face {
    font-family: 'franklin_gothic_fsbook';
    src: url('fonts/FranklinGothic-Book-webfont.eot');
    src: url('fonts/FranklinGothic-Book-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/FranklinGothic-Book-webfont.woff2') format('woff2'),
         url('fonts/FranklinGothic-Book-webfont.woff') format('woff'),
         url('fonts/FranklinGothic-Book-webfont.ttf') format('truetype'),
         url('fonts/FranklinGothic-Book-webfont.svg#franklin_gothic_fsbook') format('svg');
}

@font-face {
    font-family: 'sanchezregular';
    src: url('fonts/sanchez-webfont.eot');
    src: url('fonts/sanchez-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/sanchez-webfont.woff2') format('woff2'),
         url('fonts/sanchez-webfont.woff') format('woff'),
         url('fonts/sanchez-webfont.ttf') format('truetype'),
         url('fonts/sanchez-webfont.svg#sanchezregular') format('svg');
    font-weight: normal;
    font-style: normal;

}


@font-face {
    font-family: 'sanchezitalic';
    src: url('fonts/sanchez-italic-webfont.eot');
    src: url('fonts/sanchez-italic-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/sanchez-italic-webfont.woff2') format('woff2'),
         url('fonts/sanchez-italic-webfont.woff') format('woff'),
         url('fonts/sanchez-italic-webfont.ttf') format('truetype'),
         url('fonts/sanchez-italic-webfont.svg#sanchezitalic') format('svg');
    font-weight: normal;
    font-style: normal;

}




@font-face {
    font-family: 'playfair_displayregular';
    src: url('fonts/playfairdisplay-regular-webfont.eot');
    src: url('fonts/playfairdisplay-regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/playfairdisplay-regular-webfont.woff2') format('woff2'),
         url('fonts/playfairdisplay-regular-webfont.woff') format('woff'),
         url('fonts/playfairdisplay-regular-webfont.ttf') format('truetype'),
         url('fonts/playfairdisplay-regular-webfont.svg#playfair_displayregular') format('svg');
    font-weight: normal;
    font-style: normal;

}




@font-face {
    font-family: 'playfair_displayitalic';
    src: url('fonts/playfairdisplay-italic-webfont.eot');
    src: url('fonts/playfairdisplay-italic-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/playfairdisplay-italic-webfont.woff2') format('woff2'),
         url('fonts/playfairdisplay-italic-webfont.woff') format('woff'),
         url('fonts/playfairdisplay-italic-webfont.ttf') format('truetype'),
         url('fonts/playfairdisplay-italic-webfont.svg#playfair_displayitalic') format('svg');
    font-weight: normal;
    font-style: normal;

}




@font-face {
    font-family: 'fjallaoneregular';
    src: url('fonts/fjallaone-regular-webfont.eot');
    src: url('fonts/fjallaone-regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/fjallaone-regular-webfont.woff2') format('woff2'),
         url('fonts/fjallaone-regular-webfont.woff') format('woff'),
         url('fonts/fjallaone-regular-webfont.ttf') format('truetype'),
         url('fonts/fjallaone-regular-webfont.svg#fjallaoneregular') format('svg');
    font-weight: normal;
    font-style: normal;

}


@font-face {
    font-family: 'league_spartanregular';
    src: url('fonts/leaguespartan-bold-webfont.eot');
    src: url('fonts/leaguespartan-bold-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/leaguespartan-bold-webfont.woff2') format('woff2'),
         url('fonts/leaguespartan-bold-webfont.woff') format('woff'),
         url('fonts/leaguespartan-bold-webfont.ttf') format('truetype'),
         url('fonts/leaguespartan-bold-webfont.svg#league_spartanregular') format('svg');
    font-weight: normal;
    font-style: normal;

}

body{
    padding-top: 50px;
    font-size: 10px;
    z-index: 1;
    color: #6d6e71;
    background-color: #fff;
    position: relative;
    font-family: 'franklin_gothic_fsbook';
}

video{
    position: relative;
    min-width: 100%;
}

.embed-responsive, .embed-responsive-16by9{
  position: relative;

}

.embed-responsive, .embed-responsive-4by3{
  position: relative;


}

.embed-responsive-item{
    position: relative;
  
}

form p{
     margin-bottom: 30px; 
    
}

label{
    font-family: 'franklin_gothic_fsbook', sans-serif;
    font-weight: 100;
    color: #2b6280;
    letter-spacing: 1px;
    margin-bottom: 0;
    text-align: left;
}

input{
    background-color: #15374f;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #fff;
    border-left: 0;
    font-size: 17px;
    line-height: 27px;
    width: 100%;
    border-radius: 0;
    -webkit-appearance: none;
}

input[type=submit] {
    font-family: 'franklin_gothic_fsbook', sans-serif;
    font-size: 17px;
    line-height: 20px;
    width: auto;
    float: right;
    letter-spacing: 1px;
    padding: 0 0 5px 0;
    margin-top: 1em;
    color: #fff;
}


::-webkit-input-placeholder {
   font-family: 'franklin_gothic_fsbook', sans-serif;
    color: #2b6280;
    letter-spacing: 1px;
    text-align: left;
}

:-moz-placeholder { /* Firefox 18- */
    font-family: 'franklin_gothic_fsbook', sans-serif;
    color: #2b6280; 
    letter-spacing: 1px;
    text-align: left;
}

::-moz-placeholder {  /* Firefox 19+ */
   font-family: 'franklin_gothic_fsbook', sans-serif;
    color: #2b6280; 
    letter-spacing: 1px;
    text-align: left;
}

:-ms-input-placeholder {  
   font-family: 'franklin_gothic_fsbook', sans-serif;
    color: #2b6280;  
    letter-spacing: 1px;
    text-align: left;
}

textarea{
    background-color: #15374f;
     border: 1px solid #fff;
    width: 100%;
    border-radius: 0;
    -webkit-appearance: none;
}

select{
    background-color: #fff;
    border: 1px solid #cfd0d0;
    width: 100%;
    border-radius: 3px;
    padding: 5px;
    background: url(img/new_arrow.svg) no-repeat right #fff;
    -webkit-appearance: none;
     -moz-appearance: none;
     -o-appearance: none;
}

#shop select{
    width: 310px;
    margin-top: 10px;
    
}

#shop button{
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 8px 20px;
    float: right;
    border: none;
    background-color: #15374f;
    -webkit-appearance: none;
     -moz-appearance: none;
     -o-appearance: none;
    font-size: 16px;
    line-height: 20px;
    margin-top: 18px;
}

#shop button:hover{
    color: #fff;
    background-color: #165173;
}


/* ALWAYS SHOW ADD TO CART BUTTON */

.single_variation_wrap{display:block !important;}

#shop input[type=number]{
      padding: 5px 10px;
    border: 1px solid #cfd0d0;
    background-color: #ebebeb;
    text-align: center;
    margin: 15px 0;
    width: 70px;
    -webkit-appearance: none;
     -moz-appearance: none;
     -o-appearance: none;   
    float: left;
}

#shopping_cart_page_wrapper input[type=number]{
      padding: 5px 10px;
    border: 1px solid #cfd0d0;
    background-color: #ffffff;
    text-align: center;
    width: 70px;
    -webkit-appearance: none;
     -moz-appearance: none;
     -o-appearance: none;   
    float: left;
}

.txt-area-p{
     margin: 0;  
}

#shop label{
    text-transform: uppercase;
    font-size: 16px;
    color: #6d6e71;
    padding-top: 32px;
    margin-right: 15px;
}

.modal-body #book-form p label#modal-label-book, .modal-body #carrot-form p label#modal-label-book {
     font-size: 17px;
    letter-spacing: 1px;
}

hr{
    border-top: 1px solid #6d6e71; 
}



h1, .fluid-row h2, .boxed-row h2 {
    font-family: 'fjallaoneregular', sans-serif;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 2px;
    font-size: 54px;
    line-height: 65px;
    padding: 15% 0 0 0; 
    color: #fff;
    
}

#news h1{
     padding-top: 6%;   
}

#album_wrapper h1{
    font-family: 'playfair_displayregular';
    font-size: 40px;
    line-height: 39px;
    padding: 0;
    margin: 30px auto 45px auto;
    color: #6d6e71;
}

#single_post_wrapper h1{
    width: 890px;
    color: #656e71;  
    font-family: 'playfair_displayregular';
    font-size: 40px;
    line-height: 39px;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 0;
    margin: 0 auto;
    clear: both;
}

#shop_page_wrapper h1{
    color: #6d6e71;  
    font-family: 'playfair_displayregular';
    font-size: 30px;
    line-height: 34px;
    text-align: left;
    margin: 0 0 30px 0;
    padding: 0 0 10px 0;
    float: left;
    text-transform: initial;
    letter-spacing: 1px;
    border-bottom: 1px solid #cfd0d0;
    min-width: 380px;
}

#learn_bkg h2{
    max-width: 65%;
    margin: 0 auto;
    text-shadow: 0px 5px 10px rgba(0, 0, 0, .5);
}


#about h3{
    font-family: 'playfair_displayregular', serif;
    font-size: 40px;
    line-height: 49px;
    margin-left:36px;
}

h4{
    font-family: 'playfair_displayregular', serif;
    font-size: 39px;
    line-height: 49px;
    margin-top: 0;
    margin-bottom: 52px;
    text-align: center;
}

#learn #learn_left h4, #learn h5{
     font-family: 'playfair_displayregular', serif;   
}

h6{
     font-family: 'playfair_displayregular';
    font-size: 40px;
    line-height: 25px;
}

.image-replace{
     margin-left: -9999px;   
}

/* NAVIGATION */

.nav{
     font-family: 'franklin_gothic_fsbook', sans-serif;
    
}

.navbar-toggle{
     text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 14px;
}

.navbar-toggle{
  
}

.navbar-toggle-minus-hide{
    display: none;
}

.navbar-toggle-minus{
    display: initial;
}

.navbar-brand{
    background-image: url('img/kt_logo.svg');
    width: 170px;
    height: 135px;
    position: absolute;
    top: 0;
    left: 14px;
}

.navbar-nav > li.active > a:link, .navbar-nav > li.active > a:visited{
     color: #15374f;
}


#top-video-loop{
    font-family: 'sanchezitalic', serif;
    font-size: 1.5em;
    font-weight: 100;
    letter-spacing: 1px;
    max-height: 662px; 
    background: url('img/temp-kenny-top.png') center top no-repeat;
  -webkit-background-size: cover; 
  -moz-background-size: cover; 
  -o-background-size: cover; 
  background-size: cover;
    text-align: center;
    color: #fff;
    border: 24px #fff solid;
    overflow: hidden;
}


span.top_btn {
    width: 160px;
    margin: 0 15px 0 15px;
    color: #15374f; 
    background-color: #fff;
    padding: 10px 30px;
    text-transform: uppercase;
    font-family: 'franklin_gothic_fsbook';
    font-weight: normal;
    letter-spacing: 2px;
}

#vid-content{
    position: relative;
    margin: -48px auto 0 auto;
    height: 662px;
    background-color: rgba(0,0,0,.25);
    border: 16px solid #fff;
}

#vid-content button{
     font-family: 'franklin_gothic_fsbook', sans-serif;
}

.quote-attribution{
    font-family: 'sanchezregular', serif;
    font-style: normal;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 100;
    margin-bottom: 30px;
}

#learn_bkg{
    min-height: 600px; 
    background: url('img/speech_live.jpg') center top no-repeat;
  -webkit-background-size: cover; 
  -moz-background-size: cover; 
  -o-background-size: cover; 
  background-size: cover;
    border: 24px #fff solid;

}

#learn .container{
     width: 100%;
    padding: 0 100px;
}

#learn_left{
     width: 580px;  
    float: left;
}

#learn_right{
     width: 376px;
    float: right;
}


.bug-red{
    width: 94px;
    height: 94px; 
    margin: 48px 48px 0 0;
    float: right;
    background: url('img/bug_red.svg');  
}

.bug-white{
     width: 94px;
    height: 94px; 
    margin: 48px 48px 0 0;
    float: right;
    background: url('img/bug_white.svg');   
}

#learn h4{
    text-align: left;
    font-family: serif;
}

#motivate {
     margin-top: 60px;   
  
}


.white_overlay{
    width: 30%;
    float: right;
    background-color: #fff;
    postion: relative;
    z-index: 5;
    min-height: 662px;
}

.white_overlay .bug-red{
    margin: 0 48px 0 0;
}

.white_overlay h3{
    margin: 120px 0 40px 0; 
    text-transform: capitalize;
}

#about_bkg{
    min-height: 662px;
    background: url('img/speaker-page-pic.jpg') center top no-repeat;
  -webkit-background-size: cover; 
  -moz-background-size: cover; 
  -o-background-size: cover; 
  background-size: cover;
    border: 24px #fff solid;

}

#about_video_thumb{
    width: 440px;
    height: 250px;
    background: url('img/87_2_screenshot.jpg');
    margin-left: -46px;
    padding-top: 23%;
}

.white_overlay h3{
    color: #6d6e71;
    text-align: left;
}

#learn .boxed-row{
     padding: 0 106px;   
}

#music{
     margin-bottom: 60px;   
}

#music_video_container{
    padding: 100px 12px 0 12px;    
}

#music_video_container h4{
     margin-bottom: 35px;   
}

.boxed-row img{
     width: 100%;
    height: auto;
    margin-bottom: 20px;
}


p span.separator::after { 
    font-family: 'franklin_gothic_fsbook', sans-serif;
    content: "–––––––––––";
    letter-spacing: -2px;
    line-height: 2em;
}


.boxed-row h5{
    font-family: 'sanchezregular', serif;
    font-size: 21px;
    line-height: 27px;
    text-transform: uppercase;   
    margin-bottom: 0;
    letter-spacing: 1px;
}

.boxed-row p.about-caption{
     width: 350px;  
    font-size: 17px;
    line-height: 21px;
    margin-top: 8px;
}


/* VIOLATOR */

.violator{
    width: 100%; 
    background-color: #cf122a;
    color: #fff;
    padding: 20px 20px 25px 20px;
}

.violator p{
     width: 100%;   
}

.violator p span.violator-header{
    font-weight: 100;
    font-family: sans-serif;
    text-transform: uppercase;
    font-size: 22px;
    line-height: 28px;
    letter-spacing: 1px;
}

.violator img{
    float: left;
    width: 100px;
    height: 100px;
    margin-right: 20px;
}

.violator a:link, .violator a:visited{
    color: #fff;
    border-bottom: 2px Solid #fff;
    padding-bottom: 5px;
    text-decoration: none;
    font-weight: 100;
    letter-spacing: 2px;
    
}

.violator a:hover{
    color: #6d6e71;
    border-bottom: 2px Solid #6d6e71;
    padding-bottom: 5px;
    text-decoration: none;
}

.violator a:active, .violator a:focus{
    color: #fff;
    border-bottom: 2px Solid #fff;
    padding-bottom: 5px;
    text-decoration: none;
    font-weight: 100;
    letter-spacing: 2px;
    
}

#about .violator{
     margin-top: 100px;   
}

#about .violator img{
     width: 100px;
    height: 100px;
    margin: -10px 30px 0 -10px;
}



/* QUOTE CAROUSEL */

#carousel-quotes{
    background-color: #15374f;   
    color: #fff;
    max-height: 335px;
    text-align: center;
}

.carousel-title{
    font-family: 'franklin_gothic_fsbook', sans-serif;
    font-size: 20px;
    text-transform: uppercase;
    width: 100%;
    padding-top: 3em;
    letter-spacing: 4px;
    font-weight: 400;
    line-height: 20px;
}


span.carousel-separator::after{
    font-family: 'franklin_gothic_fsbook', sans-serif;
    content:"---------------------------------------------";
}

.carousel-caption{
    color:#fff;
    font-family: 'sanchezitalic', serif;
    font-size: 25px;
    line-height: 37px;
    font-weight: 100;
    letter-spacing: 2px;
}

.carousel-attribution{
    font-family: 'sanchezregular', serif;
    text-transform: uppercase;  
    font-size: 17px;
}

.arrow-left{
    width: 25px;
    height: 50px;
    background-image: url('img/chevron_left.svg'); 
    margin: -10px 0 0 76px; 
}

.arrow-right{
    width: 25px;
    height: 50px; 
    background: url('img/chevron_right.svg'); 
    margin: -10px 0 76px 0; 
}

.item, .item .active {
    width: 100%;
    min-height: 215px;
}



#client-logos p{
    font-size: 17px;
    line-height: 30px;
    text-align: center;   
}


#client-logos img{
    width: 115px;
    display: inline;
    float: left;
    position: relative;
}

#logo-images{
     margin-left: 60px;   
}

#about .boxed-row{
     padding: 0;  
}


#speaker_bkg{
    min-height: 420px;
    background: url('img/6261040068_a861ff16d6_o.jpg') center top no-repeat;
  -webkit-background-size: cover; 
  -moz-background-size: cover; 
  -o-background-size: cover; 
  background-size: cover;
    border: 24px #fff solid;
}

h4.about_hdr{
    font-size: 40px;
    line-height: 53px;
    color: #6d6e71;
    padding: 30px 100px;
    text-transform: initial;
    border-top: 1px solid #656e71;
    border-right: none;
    border-bottom: 1px solid #656e71;
    border-left: none;
    margin-bottom: 30px;
}

#about p{
    font-size: 17px;
    line-height: 31px;
}


#speaker .boxed-row{
    padding: 0;
}

.film-container{
    max-width: 1020px;  
    margin: 0 auto;
}

#speaker h4{
     padding: 0 400px;    
}

#speaker .container{
     width: 100%;   
}

#speaker .film_thumb{
    width: 325px;
    height: 200px;
    float: left;
    padding-top: 7%;
}


#speaker .film_thumb:first-child{
    background: url('img/kt_business.jpg') no-repeat;
}

#speaker .film_thumb:nth-child(2){
    background: url('img/kt_edu.jpg') no-repeat;
    margin: 0 20px;
}

#speaker .film_thumb:nth-child(3){
    background: url('img/kt_faith.jpg') no-repeat;
}

#speaker h5{
    font-family: 'playfair_displayregular';
    font-size: 19px;
    line-height: 26px;
    color: #6d6e71;
    text-align: center;
    letter-spacing: 4px;
    margin-top: 85px;
}


aside.book{
    max-height: 335px;
    background-color: #15374f;   
    color: #fff;
    text-align: left;
    margin: 120px 0;
}

#book_container{
    width: 874px;
    margin: 0 auto;
}

#book_container p{
     float: left;
    max-width: 500px;
}

img.book{
    width: 260px;
    height: 390px;
    margin-top: -25px;
    margin-right: 52px;
    float: left;
}

h6.book_title{
    font-family: serif;
    font-size: 40px;
    line-height: 44px;
    padding-top: 43px;
}

#book_container p{
    font-size: 17px;
    line-height: 21px;
    margin: 1em 0 1.5em 0;
}

#book_container a:link, #book_container a:visited {
    color: #fff;
    border-bottom: 2px Solid #fff;
    padding-bottom: 5px;
    text-decoration: none;
    font-weight: 100;
    letter-spacing: 2px;
}

#book_container a:hover{
    color: #6d6e71;
    border-color: #6d6e71;

}

#book_container a:active, #book_container a:focus {
    color: #fff;
    border-bottom: 2px Solid #fff;
    padding-bottom: 5px;
    text-decoration: none;
    font-weight: 100;
    letter-spacing: 2px;
}

#book_container .link{
     margin-left: 75px;   
}


#music_bkg{
    min-height: 662px;
    background: url('img/country_star.jpg') center top no-repeat;
  -webkit-background-size: cover; 
  -moz-background-size: cover; 
  -o-background-size: cover; 
  background-size: cover;
    border: 24px #fff solid;
}


.music-container{
    max-width: 985px;  
    margin: 0 auto;
}


.music_thumb{
    width: 288px;
    height: 288px;
    float: left;
}


.music_thumb:nth-child(2){
    margin: 0 60px;
}


.music-container h5{
    font-family: 'playfair_displayregular';
    font-size: 19px;
    line-height: 26px;
    color: #6d6e71;
    text-align: center;
    letter-spacing: 3px;
}


ul.album{
    text-align: left;
    margin-left: 5px;
    margin-top: 10px;
}
ul.album li.album_link{
    display: inline;   
    text-indent: none;
    text-align: left;
    margin-right: 37px;
    font-size: 12px;
    lin-height: 14px;
    width: 50px;
}


li.album_link a:link, li.album_link a:visited{
    color: #6d6e71;
    border-bottom: 1px solid #6d6e71;
    padding-bottom: 2px;
    text-decoration: none;
    font-weight: 200;
    letter-spacing: 2px;
}

li.album_link a:hover{
    color: #cf122a;
    border-bottom: 1px solid #cfd0d0;
}

li.album_link a:active, li.album_link a:focus{
    color: #6d6e71;
    border-bottom: 1px solid #6d6e71;
    padding-bottom: 2px;
    text-decoration: none;
    font-weight: 200;
    letter-spacing: 2px;
}

#music_video_container{
    border-left: 24px #fff solid;
    border-right: 24px #fff solid;
    min-height: 332px;
    margin-top: 80px;
}

#music_video_container h4{
    font-family: serif;
    font-size: 40px;
    line-height: 53px;
    
}

#music_video_container p{
     text-shadow: 0px 5px 10px rgba(0, 0, 0, .25);
}

#music_video_container .col-md-3 {
    height: 332px;
    padding-top: 10%;
    text-align: center;
    color: #fff;
    font-family: serif;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 20px;
    line-height: 28px;
}

#music_video_container .col-md-3:nth-child(2){
    background: url('img/mgid-uma-video-mtv.jpg') center right no-repeat;
    -webkit-background-size: cover; 
    -moz-background-size: cover; 
    -o-background-size: cover; 
    background-size: cover;
}


#music_video_container .col-md-3:nth-child(3){
    background: url('img/0.jpg') center center no-repeat;
    -webkit-background-size: cover; 
    -moz-background-size: cover; 
    -o-background-size: cover; 
    background-size: cover;

}

#music_video_container .col-md-3:nth-child(4){
    background: url('img/shrevport.jpg') center center no-repeat;
    -webkit-background-size: cover; 
    -moz-background-size: cover; 
    -o-background-size: cover; 
    background-size: cover;

}

#music_video_container .col-md-3:nth-child(5){
    background: url('img/mexico.jpg') center center no-repeat;
    -webkit-background-size: cover; 
    -moz-background-size: cover; 
    -o-background-size: cover; 
    background-size: cover;
}

#album_wrapper{
     width: 100%;   
}

#album_hdr{
    height: 340px;
    width: 100%;
    border: 24px solid #fff;
}


.giveitaway{
  height: 340px;
    background: url('/keni/wp-content/themes/kt/img/wUSOinKandahar_hdr.jpg')  no-repeat;
  -webkit-background-size: cover; 
  -moz-background-size: cover; 
  -o-background-size: cover; 
  background-size: cover;  
}

#album_wrapper .container{
    max-width: 960px;
    margin: 0 auto;
    padding: 0;
}

#album_wrapper .boxed-row{
     padding: 0;   
}

#album_wrapper .main-album-thumb{
     width: 288px;   
    margin: 0 auto;
}

#album-left{
    width: 360px; 
    float: left;
}

#album-right{
    width: 560px;   
    float: right;
}

#album_wrapper h3  {
    font-family: 'playfair_displayregular';
    color: #6d6e7a;
    font-size: 15px;
    line-height: 19px;
    text-transform: uppercase;
    letter-spacing: 2px;
    float: left;
    margin: 0 20px 30px 30px; 
}

#album_wrapper h4{
    color: #6d6e7a; 
    font-size: 17px;
    line-height: 26px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: 0 auto 20px auto;
}

.buy_link_container{
    width: 300px; 
    margin: -10px auto 0 auto;   
}

.other-albums-thumb{
    width: 157px;
    height: 157px;   
    margin-bottom: 20px;
    float: left;
}

.other-albums-thumb-right{
    width: 157px;
    height: 157px;   
    margin-bottom: 20px; 
    float: right;
}

#lyrics{
    margin-top: 80px; 
    font-size: 17px;
    line-height: 39px;
}

#lyrics td.num{
    25px;
    color: #cf122a;
}

#lyrics td.track{
    100%;
}

#lyrics td.time{
    70px;
}

#lyrics td.link{
    40px;
}

#lyrics a:link, #lyrics a:visited{
    color: #6d6e71;
    border-bottom: 1px solid #6d6e71;
    padding-bottom: 2px;
    text-decoration: none;
    font-weight: 200;    
}

#lyrics a:hover{
    color: #cfd0d0;
    border-bottom: 1px solid #cfd0d0;  
}

#lyrics a:active, #lyrics a:focus{
    color: #6d6e71;
    border-bottom: 1px solid #6d6e71;
    padding-bottom: 2px;
    text-decoration: none;
    font-weight: 200;    
}

#album_wrapper .lyricmodal .close{
    margin-top: -65px;
}

#album_wrapper .lyricmodal{
    width: 680px;
    height: 728px;
    color: #fff;   
    font-size: 17px;
    line-height: 22px;
    margin: 0 auto;
    letter-spacing: 1px;
    font-weight: 100;
}

#album_wrapper .lyricmodal h4, #CarrotModal h4, #BookKeni h4{
    font-size: 40px;
    line-height: 37px;
    color: #fff;
    letter-spacing: 4px;
}

#album_wrapper .lyricmodal p span.separator{  
    margin-top: -15px;
    margin-bottom: 30px;
    display: block;
}

.modal-content .down_arrow{
    font-size: 17px;
    letter-spacing: 2px;
}

.modal-content .down_arrow img{
    width: 9px;
    margin-left: 18px;
}

#news{
    min-height: 300px;
    background: url('img/news_hdr.jpg')  no-repeat;
  -webkit-background-size: cover; 
  -moz-background-size: cover; 
  -o-background-size: cover; 
  background-size: cover;
    border: 24px #fff solid;
    margin-top: 100px;
}

#news_calendar{
         min-width: 1250px;   
    }


#news-nav{
    min-height: 400px;
    background: url('img/news_hdr.jpg') 0 50px no-repeat;
  -webkit-background-size: cover; 
  -moz-background-size: cover; 
  -o-background-size: cover; 
  background-size: cover;
    border: 24px #fff solid; 
}

#news-nav .navbar-brand{
    margin-top: -24px;
    left: -10px;
    position: absolute;
}

#news-nav h1{
     margin-top: -75px;
}


#blog_preview_container{
        max-width: 950px;
        float: left; 
        margin-left: -50px;   
        clear: none;
    }

#news_page_wrapper #blog_preview_container{
        margin-top: 350px;
        width: 940px;
}

#news_page_wrapper{
    width: 100%;
    padding: 0;
}


#news h2{
     padding-top: 65px; 
    text-shadow: 0px 5px 10px rgba(0, 0, 0, .5);
}

.blog_preview{
    width: 295px;
    height: 280px;
    float: left;
    position: relative;
    margin-right: 17px;
    text-align: center;
    overflow: hidden;
}

.blog_thumb_container{
    width: 295px;
    height: 200px;
    overflow: hidden;
    margin: 0;
}

.blog_preview img{
    width: auto;
    height: 100%;
    margin-bottom: 0;
    z-index: 2;
}

.blog_preview h5{
    width: 295px;
    font-family: 'playfair_displayregular', serif;
    font-size: 19px;

}

.blog_preview .play_btn{
    margin-top: -130px;
    margin-bottom: 85px;
    position: relative;
}

#blog_preview_container h5 a:link, #blog_preview_container h5 a:visited{
    color: #6d6e71;
    border: none;
    text-decoration: none;
    font-weight: 200;
    letter-spacing: 2px;    
}

#blog_preview_container h5 a:hover{
    color: #cfd0d0;
    text-decoration: none;
    border: none;
}

#blog_preview_container h5 a:active, #blog_preview_container h5 a:focus{
    color: #6d6e71;
    border-b: none;
    text-decoration: none;
    font-weight: 200;
    letter-spacing: 2px;
}


#blog_preview_container .more-link{
    text-align: right;
    bottom: 0;
    margin-right: 24px;
    clear: both;
}

#blog_preview_container .more-link a:link, #blog_preview_container .more-link a:visited{
    color: #6d6e71;
    border-bottom: 1px solid #6d6e71;
    padding-bottom: 2px;
    text-decoration: none;
    font-weight: 200;
    letter-spacing: 2px;    
}

#blog_preview_container .more-link a:hover{
    color: #cfd0d0;
    border-bottom: 1px solid #cfd0d0;
}

#blog_preview_container .more-link a:active, #blog_preview_container .more-link a:focus{
    color: #6d6e71;
    border-bottom: 1px solid #6d6e71;
    padding-bottom: 2px;
    text-decoration: none;
    font-weight: 200;
    letter-spacing: 2px;
}

#nav-below{
    clear: left;
}

/* ellipsis */

.clamped {
    line-height: 24px;
    overflow: hidden;
    position: relative;
}

.clamped-2 {
    /* Clamp to 2 lines, ie line-height x 2: */
    max-height: 48px;
}


.ellipsis {
    background: #fff;
    bottom: 0;
    position: absolute;
    right: 0;
    padding-bottom: 12px;
}

.fill {
    background: #fff; 
    height:100%;
    position: absolute;
    width: 100%;
}

/* end ellipsis */

#calendar_container{
    width: 24%;
    font-family: serif;
    font-weight: 200;
    padding: 17px;
    height: 600px;
    float: left;
    background-color: #eaeaea;  
}

#news_page_wrapper #newsbox{
     clear: none;   
}

#news_page_wrapper #calendar_container{
    clear: none;
    float: right;
    min-height: 600px;
    height: auto;
    margin-top: 350px;
}

#calendar_container h4{
    font-family: serif;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.calendar_list{
     margin-top: -40px;   
}

#calendar_container ul{
    list-style: none;
    padding: 0;
}

.calendar_date{
    text-transform: uppercase;
    font-size: 18px;
    line-height: 20px;
    letter-spacing: 1px;
    float: left;
    width: 30%;
}

.calendar_location{
    width: 68%;   
    float: right;
}

.calendar_location p{
    font-size: 15px;
    line-height: 20px;
    letter-spacing: 1px;
    margin: 0;
}

.calendar_location p:nth-child(2){
    font-family: sans-serif;
    margin-bottom: 20px;
}

.calendar_item{
     width: 100%;
    clear: both;
}

.calendar_item p{
     clear: both;   
}

#calendar_container hr{
    clear: both;  
    position: relative;
}


#calendar_container .more-link{
    text-align: center;
    clear: both;
    display: block;
    margin-bottom: 17px;
}


#calendar_container .more-link a:link, #calendar_container .more-link a:visited{
    color: #6d6e71;
    border-bottom: 1px solid #6d6e71;
    padding-bottom: 2px;
    text-decoration: none;
    font-weight: 200;
    letter-spacing: 2px;    
}

#calendar_container .more-link a:hover{
    color: #cfd0d0;
    border-bottom: 1px solid #cfd0d0;
}

#calendar_container .more-link a:active, #calendar_container .more-link a:focus{
    color: #6d6e71;
    border-bottom: 1px solid #6d6e71;
    padding-bottom: 2px;
    text-decoration: none;
    font-weight: 200;
    letter-spacing: 2px;
}

#news_hdr_container{
    width: 890px;
    height: 500px;
    clear: both;
    overflow: hidden;
    margin: 40px auto;

}


#single_post_wrapper #news_hdr_container img{
     max-width: 890px;
    min-width: 890px;
}

#single_post_wrapper iframe{
     width: 100%;
    min-height: 500px;
}


#single_post_wrapper .bug-red{
     margin: 0 -150px -50px 0;   
}

#single_post_wrapper .boxed-row{
    max-width: 890px;
    margin: 0 auto;
    padding: 0 0 0 0;
}


#single_post_wrapper #post-body{
    width: 800px;
    font-family: 'franklin_gothic_fsbook', sans-serif; 
    font-size: 17px;
    line-height: 22px;
    padding: 0 20px;
    letter-spacing: 1px;
    margin: 0 auto;
}

#post-body img {
   width: 600px;
    margin: 40px auto 0 auto;
    position: relative;
    display: block;
}

#post-body p a:link, #post-body p a:visited{
     color: #15374f;
    text-decoration: none;
}

#post-body p a:hover{
     color: #165173;
    text-decoration: none;
}

#post-body p a:active, #post-body p a:focus{
     color: #15374f;
    text-decoration: none;
}

p.wp-caption-text{   
    font-family: 'playfair_displayregular';
    font-size: 15px;
    line-height: 32px;
    text-align: center;
    margin: 0 0 40px 0;
}

.aligncenter, .alignleft, .alignnone, .alignright{
    margin: 0 auto;
}

.single-tags{
    max-width: 70%;
    margin-top: 30px;
    margin-bottom: 30px;
    float: left;
}

#single-social{
    width: 130px;
    float: right;
    margin-top: 30px;
}

#single-social p span{
    font-family: 'playfair_displayregular'; 
    float: right; 
    text-align: right;
    margin-right: -10px;
    
}

#single-social ul{
    float: right; 

    margin-left: 20px;
    
}

#single-social ul li{
     width: 27px;   
}


.single-tags p span{
    font-family: 'playfair_displayregular';
}

.prev-next-links{
    max-width: 800px;
    font-size: 16px;
    line-height: 21px;
    margin: 45px 0 0 0;
    clear: both;
}

.prev-post{
    width: 45%; 
    text-align: left; 
    position: relative;
    display: inline;
}

.next-post{
    width: 45%; 
    text-align: right; 
    float:right;
    position: relative;
     display: inline;
}



.prev-next-links a:link, .prev-next-links a:visited {
    color: #6d6e71;
    border-bottom: 1px solid #6d6e71;
    padding-bottom: 2px;
    text-decoration: none;
    font-weight: 200;
    letter-spacing: 1px;
}

.prev-next-links a:hover{
    color: #cfd0d0;
    border-bottom: 1px solid #cfd0d0;
}

.prev-next-links a:active, .prev-next-links a:focus{
    color: #6d6e71;
    border-bottom: 1px solid #6d6e71;
    padding-bottom: 2px;
    text-decoration: none;
    font-weight: 200;
    letter-spacing: 1px;
}


.editlink a:link, .editlink a:visited, .editlink a:active, .editlink a:focus{
    font-size: 10px;
    margin-top: 20px;
}

/* SHOP */

#shop-nav{
  -webkit-background-size: cover; 
  -moz-background-size: cover; 
  -o-background-size: cover; 
  background-size: cover;
    position: fixed;
}

#shop_hdr_img {
    min-height: 400px;
    background: url('img/shop_keni.jpg') 0 50px no-repeat; 
    -webkit-background-size: cover; 
  -moz-background-size: cover; 
  -o-background-size: cover; 
  background-size: cover; 
    position: relative;
    border: 24px #fff solid;
    margin-top: -85px;
}

#shop-nav .navbar-brand{
    position: absolute;
}

#shop_hdr_img h2{
    font-family: 'fjallaoneregular', sans-serif;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 2px;
    font-size: 54px;
    line-height: 65px;
    padding: 170px 0 0 0; 
    color: #fff;
    position: absolute;
    width: 350px;
    margin: 0 auto;
    position: relative;
}

#shop_page_wrapper ul li h3:hover{
     color: #cfd0d0;   
}

#shop_hdr_img .bug-white{
    margin-top: 95px;
    margin-right: 30px;
}

#product-preview-container{
    margin: 0 auto 0 auto;
    padding: 130px 0 0 0;
    min-width: 916px;
}

#shop #product-preview-container{
     padding: 0;   
}

#product-preview-container .page-title{
        display: none;
}
    
.sku{display:none}
.posted_in{display:none}
.tagged_as{display:none}

ul.products{
     list-style-type: none;
    margin-left: -30px;
}

ul.products h3{
    max-width: 195px;
    font-family: 'playfair_displayregular', serif;
    text-transform: uppercase;
    font-size: 16px;
    line-height: 22px;
    color: #6d6e71;
    letter-spacing: 2px;
    margin: 0 auto;
}

ul.products li{
    float: left;
    width: 226px;
    height: 450px;
    margin: 0 30px 0 0;
    text-align: center;
    font-weight: 100;
    letter-spacing: 1px;
    font-size: 17px;
    line-height: 28px;
}


ul.products span.price{
    padding: 0;   
}

ul.products li img.attachment-shop_catalog{
    width: 226px;
    height: 226px;
}

#product-preview-container .woocommerce-pagination{
       clear: both; 
}

#product-preview-container .woocommerce-pagination ul li{
     display: inline;   
}

.woocommerce-breadcrumb{
    font-size: 17px;
    line-height: 22px;
    border-bottom: 1px solid #cfd0d0;
    padding-bottom: 15px;
    margin: 0 auto 60px auto;
    width: 100%;
    max-width: 916px;
}

#single-prouduct_wrapper #product-preview-container{
    margin-top: 30px;
}



#shop img.attachment-shop_single{
    width: 275px;  
    float: left;
}

#shop .sidebar{
    width: 200px; 
    float: left;
	margin-top: -300px;
	margin-left: 230px;
}

#shop .sidebar h3{
    font-family: 'playfair_displayregular', serif;
    font-size: 30px;
    line-height: 48px;
    letter-spacing: 2px;
    border-bottom: 2px solid #6d6e71;
    margin-top: 0;
}

#single-product_wrapper .product{
     float: left; 
    min-width: 700px;
    max-width: 712px;
}

#shop .summary{
    float: left;
    width: 380px;
    border-bottom: 1px solid #cfd0d0;
    padding-bottom: 10px;
    margin-left: 40px; 
    clear: none;
    min-height: 0;
}

table.shop_table{
     max-width: 916px; 
    margin: 0 auto;
}

#single-product_wrapper img{
     float: left;   
}

#product-preview-container{
    max-width: 1040px;
    margin: 0 auto;
}
 

.related, .products, #single-product_wrapper .product{
    margin: 0;
    float: left;
}

.related, .products, .related .products{
     margin: 0; 
    float: left;
}

#single-product_wrapper #product-preview-container .row .boxed-row{
     padding: 0;   
}

table.variations tr{
     height: 75px;
}

table.variations{
    border-bottom: 1px solid #cfd0d0;
    margin-bottom: 10px;
}

a.reset_variations{
     display: none;   
}

.product_title{
 clear: both;   
}

#shop .entry-summary p{
     color: #6d6e71;
    font-size: 17px;
    line-height: 22px;
}

#shop .entry-summary .amount{
    font-size: 27px;
    line-height: 58px;
}

#single-product_wrapper .images{
     max-width: 275px;   
}

img.attachment-shop_thumbnail {
    width: 50px;
    margin-right: 5px;
}

img.attachment-shop_thumbnail:first-child{
     margin-left: 30px;   
}

.thumbnails{
    position: absolute;
    margin-top: 315px;
    margin-bottom: 100px;
}

.related ul.products h3 {
    max-width: 170px;
    margin: 0 0 0 25px;
}

.related ul.products span.price{
   text-align: center;
    margin: 0 0 0 15px;
}

.related h4{
    text-align: left; 
    margin-bottom: 30px;
    font-size: 30px;
    line-height: 34px;
}

.related{
    height: 350px;
    clear: left;
    padding: 150px 0 0 0;
    position: relative;
}

.related ul.products{
    list-style-type: none;
    text-indent: none;
    float: left;
    margin: 0 0 0 0;
    padding: 0;
}

#single-product_wrapper #product-preview-container .related ul.products li{
    min-width: 0px;
    width: 200px;
    float: left;
    margin: 0 20px 0 0;   
}

.woocommerce ul.cart_list li img, .woocommerce ul.product_list_widget li img{
     border: 1px solid #cfd0d0;   
}

#shopping_cart_page_wrapper td.product-remove{
    width: 30px;
    padding: 20px 0 0 20px;    
    vertical-align: top;
    font-size: 10px;
}


#shopping_cart_page_wrapper h3{
    font-family: 'playfair_displayregular', serif; 
    max-width: 916px;
    font-size: 30px;
    line-height: 68px;
    border-bottom: 2px solid #15374f;
    margin: 0 auto 60px auto;
    letter-spacing: 2px;
}

#shopping_cart_page_wrapper form{
     max-width: 916px;
    margin: 0 auto;
}

#shopping_cart_page_wrapper .woocommerce-breadcrumb{
    font-size: 17px;
    line-height: 22px;
    border-bottom: 1px solid #cfd0d0;
    padding-bottom: 15px;
    margin: 0 auto 60px auto;
    width: 100%;
    max-width: 916px;
}

#shopping_cart_page_wrapper img.attachment-shop_thumbnail{
    border: 1px solid #cfd0d0;
    margin: 0 50px 10px 40px;
}

#shopping_cart_page_wrapper tr.cart_item{
    background-color: #f1f1f1;
    font-size: 17px;
    line-height: 22px;
    color: #6d6e71;
    vertical-align: top;
}

#shopping_cart_page_wrapper tr.cart_item a:link, #shopping_cart_page_wrapper tr.cart_item a:visited{
    color: #6d6e71;
}

#shopping_cart_page_wrapper tr.cart_item a:hover{
     color: #cfd0d0;   
}
#shopping_cart_page_wrapper tr.cart_item a:active, #shopping_cart_page_wrapper tr.cart_item a:focus{
    color: #6d6e71;
}

.woocommerce table.shop_table{
    border-top: none;
    border-right: none;
    border-left: none;
    border-bottom: none;
    vertical-align: top;
}

.woocommerce table.shop_table th.product-subtotal{
     text-align: center;   
}

.woocommerce table.shop_table td{
    padding: 20px 0 0 0;   
    vertical-align: top;
}

#shopping_cart_page_wrapper dl.variation{
     display: none;   
}

#shopping_cart_page_wrapper thead{
    font-family: 'playfair_displayregular', serif; 
    text-transform: uppercase;
    font-size: 17px;
    line-height: 28px;
    letter-spacing: 2px;
}

.woocommerce table.shop_table th{
     padding-left: 0;   
}

.woocommerce table.shop_table td.product-price{
     width: 165px;   
}

.woocommerce table.shop_table input[type=text]{
    background-color: #fff;
    border: 1px solid #cfd0d0;
    color: #6d6e71;
    font-size: 9px;
    padding-left: 5px;
    text-transform: uppercase;
}

.woocommerce a.remove{
     border-color: #fff!important;
    color: #fff!important;
    padding: 0 0 0 1px;
    background-color: #15374f; 
}

.woocommerce a.remove:hover{
     background-color: #165173;   
}

.woocommerce table.shop_table td.actions{
    background-color: #f1f1f1;
    font-size: 16px;
    line-height: 20px;
    letter-spacing: 1px;
    border-top: 0px;
}

td.actions input[type=submit]{
     margin: 0 20px 20px 0;
    padding: 7px 30px;
    font-size: 16px;
    line-height: 20px;
}

.woocommerce table.shop_table td.product-subtotal{
    width: 200px; 
    text-align: center; 
}

.woocommerce ul.cart_list li a, .woocommerce ul.product_list_widget li a{
    font-size: 16px;
    line-height: 22px;
    letter-spacing: 1px;
    color: #6d6e71;
    font-weight: 100;
}


.woocommerce.widget_shopping_cart .cart_list li a.remove:link, .woocommerce.widget_shopping_cart .cart_list li a.remove:visited{
    color: #fff;   
    background: #15374f;
    border-radius: 12px;
    line-height: 18px;
    font-size: 16px;

}

.woocommerce.widget_shopping_cart .cart_list li a.remove:hover{
    background-color: #165173;
}

.woocommerce.widget_shopping_cart .cart_list li a.remove:active, .woocommerce.widget_shopping_cart .cart_list li a.remove:focus{
    color: #fff;   
    background: #15374f;
    border-radius: 10px;
}

.woocommerce.widget_shopping_cart dl.variation{
    display: none;
}

.woocommerce.widget_shopping_cart span.quantity{
    font-size: 16px;
    line-height: 22px;
}

.widget_shopping_cart_content p.total{
     text-align: center;
    font-size: 16px;
    line-height: 22px;
    margin: 20px 0;
}
.woocommerce.widget_shopping_cart .total{
    padding-top: 20px;
    border-top-color: #cfd0d0;
    border-top-style: solid;
    border-top-width: 1px;
}

.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button {
    color: #fff;
    font-size: 12px;
    line-height: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
    background-color: #15374f;
    border-radius: 0;
    padding: 8px 15px;
    font-weight: 100;
    -webkit-appearance: none;
    -moz-appearance: none;
    -o-appearance: none;
}

.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover{
     background-color: #165173;
    color: #fff;
}

.woocommerce a.button:nth-child(2){
     float: right;   
}

#continue_shopping{
    width: 200px;
    margin-top: 20px;
    font-size: 16px;
    line-height: 20px;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    background-color: #15374f;
    padding: 8px 0;
    letter-spacing: 1px;
    float: left;
}

#continue_shopping:hover{
     background-color: #165173;   
}

#shopping_cart_page_wrapper .cart_totals{
     width: 500px; 
    float: left;
    margin-left: 215px;
    
}

#shopping_cart_page_wrapper h2{
    color: #6d6e71;   
    font-family: 'playfair_displayregular', serif; 
    text-transform: initial;
    text-align: left;
    font-size: 30px;
    line-height: 38px;
    padding: 0;
}

#shopping_cart_page_wrapper .cart_totals th{
    font-family: 'playfair_displayregular', serif; 
    font-size: 21px;
    font-weight: 100;
    width: 140px;
    letter-spacing: 1px;
    vertical-align: top;
    padding: 0;
}

#shopping_cart_page_wrapper .cart_totals td{
    background-color: #f1f1f1;
    padding: 10px 0 20px 20px;
    font-size: 22px;
    line-height: 20px;
    width: 400px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 100;
}

#shopping_cart_page_wrapper a.shipping-calculator-button{
     font-size: 17px;
    line-height: 24px;
    text-transform: initial;
    color: #6d6e71;
    padding-bottom: 0;
}

#shopping_cart_page_wrapper .cart_totals td strong span.amount{
     font-weight: normal;
}

#shopfoot{
	clear: both;
	padding-top: 250px;
}
.woocommerce a.button.alt{
    width: 100%;
    margin-top: 30px;
    font-size: 16px;
    line-height: 20px;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    background-color: #15374f;
    padding: 8px 0;
    letter-spacing: 1px;
}

.woocommerce a.button.alt:hover{
    background-color: #165173;
}

.shipping-calculator-form{
     padding-right: 20px;   
}

.shipping-calculator-form input[type=text]{
    padding: 5px 10px;
    border: 1px solid #cfd0d0;
    background-color: #ffffff;
    width: 50px;
    -webkit-appearance: none;
     -moz-appearance: none;
     -o-appearance: none;   
}

.shipping-calculator-form button[type=submit]{
     margin: 5px 0 0 4px; 
}

.checkout-only h3, .checkout-only h3 label{
    font-family: 'playfair_displayregular', serif; 
    font-size: 21px;
    line-height: 28px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.checkout-only input[type="checkbox"]{
    margin-left: 400px;
    margin-top: -30px;
    float:left;
    -webkit-appearance: checkbox;
    -moz-appearance: checkbox;
    -o-appearance: checkbox;  
}

.checkout-only{
    max-width: 916px;
    margin: 0 auto;
}

.checkout-only input[type=text], .checkout-only textarea{
    padding: 5px 10px;
    border: 1px solid #cfd0d0;
    background-color: #f1f1f1;
    -webkit-appearance: none;
     -moz-appearance: none;
     -o-appearance: none; 
}

.checkout-only label{
     color: #6d6e71;
    font-size: 17px;
    line-height: 28px;
}

.select2-container .state_select, .select2-container .select2-choice>.select2-chosen{
    height: 30px;
    width: 100%;
    border-radius: 3px;
    padding: 5px;
}

.checkout-only ::-webkit-input-placeholder {
    font-size: 0;
}

.checkout-only:-moz-placeholder { /* Firefox 18- */
   display: none;
}

.checkout-only:-moz-placeholder {  /* Firefox 19+ */
   display: none;
}

.checkout-only:-ms-input-placeholder {  
      display: none;
}
.woocommerce form .form-row .required{
    color: #6d6e71;
    font-size: 75%;
    margin-top: -5px;
}
.woocommerce .checkout-only table.shop_table {
    border-radius: 0px;
    border-top: 1px solid #cfd0d0;
    border-bottom: 1px solid #cfd0d0;
    border-left: 1px solid #cfd0d0;
    font-size: 17px;
    line-height: 28px;
    vertical-align: middle;
    font-weight: 100;
}

.woocommerce .checkout-only table.shop_table td{
     font-weight: normal;   
    letter-spacing: 1px;
}

.woocommerce .checkout-only table.shop_table tr.shipping td{
     text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 100;
}

.woocommerce .checkout-only table.shop_table td strong span.amount{
     font-weight: 100;
    letter-spacing: 1px;
}


.woocommerce .checkout-only table.shop_table th.product-name, .woocommerce .checkout-only table.shop_table th.product-total{
    background-color: #f1f1f1;
    
}
.woocommerce .checkout-only table.shop_table th{
    font-family: 'playfair_displayregular', serif; 
    text-transform: uppercase;
    font-size: 17px;
    line-height: 28px;
    letter-spacing: 2px;
}

.woocommerce .checkout-only table.shop_table th, .woocommerce .checkout-only table.shop_table td{
    padding-top: 10px;
    padding-left: 25px;  
    border-right: 1px solid #cfd0d0;
}

.woocommerce .checkout-only table.shop_table td{
     padding-bottom: 10px;   
}

.woocommerce .checkout-only table.shop_table dl.variation{
     display: none;   
}

.woocommerce-checkout #payment {
    background-color: #fff; 
}

.payment_box p{
     display: none;   
}

.woocommerce-checkout #payment div.payment_box, .woocommerce-checkout #payment div.payment_box:after{
     display: none;   
    background-color: #fff;
}

.payment_method_paypal label{
    font-family: 'playfair_displayregular', serif; 
}

.payment_method_paypal .about_paypal{
    font-family: 'playfair_displayitalic', serif; 
    color: #afb1b2;
    margin-left: 15px;
    font-size: 21px;
}

.woocommerce-checkout #payment ul.payment_methods{
     border-bottom: none;   
}

.woocommerce #payment #place_order{
    margin-top: -100px;   
    font-size: 22px;
    padding: 15px 20px;
}

.woocommerce #payment #place_order:hover{
    background-color: #165173;
}
/* footer */


footer{
    font-family: sans-serif;
    font-size: 17px;
    line-height: 23px;
    background-color: #15374f;
    margin-top: 50px;
    min-height: 800px;
    color: #fff;
    border: 24px solid #fff;
    padding: 100px 174px;
    font-weight: 100;
    clear: both;
}

.subhead{
     font-family: serif;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 100;
    margin: 40px 0 5px 0;
}

.footer-separator::after{
    font-family: 'franklin_gothic_fsbook', sans-serif;
    content:"----------";
    letter-spacing: -2px;
}

.copyright{
    width: 100%;
    height: 100px;
    clear: both;
    padding-top: 40px;
    font-family: sans-serif;
    font-size: 13px;
    line-height: 22px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 200;
    bottom: 0;
    background-color: #fff;
    color: #6d6e71;
}

#footer-download{
    margin-top: 197px;
}

#footer-download p{
    font-size: 21px;
    line-height: 26px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

footer a:link, footer a:visited{
    color: #fff;
    font-family: serif;
    text-decoration: none;
    font-weight: 100;
    letter-spacing: 2px;
}

footer a:hover{
    color: #cf122a;
}

footer a:active, footera:focus{
   color: #fff;  
}

#footer-download a:link, #footer-download a:visited{
    color: #fff;
    border-bottom: 2px solid #fff;
    padding-bottom: 5px;
    text-decoration: none;
    font-family: sans-serif;
    font-size: 14px;
    line-height: 24px;
    font-weight: 100;
    letter-spacing: 2px;
    text-transform: capitalize;
}

#footer-download a:hover{
    color: #cf122a;
    border-bottom: 2px solid #cf122a;
    
}

#footer-download a:active, #footer-download a:focus{
   color: #fff;
    border-bottom: 2px solid #fff;   
}

footer textarea{
     margin-top: -27px;   
}

/* PLAY BUTTON */

.play_btn{
    border-radius: 50%;
    width: 55px;
    height: 55px;
    background-color: rgba(255,255,255,.6);
    z-index: 6;
    margin: 0 auto;
}

.play_btn:hover{
    background-color: rgba(255,255,255,1);
    z-index: 6;
}

.glyphicon-play{
    color: #666666;
    font-size: 33px;
    margin: 9px 0 0 14px;
    text-align: center;
    z-index: 6;
    
}

.glyphicon-play:hover{
    color: #cf122a;
    text-align: center;
    z-index: 6;
}

#music_video_container .glyphicon-play {
     margin-left: 10px;   
}

.blog_preview .glyphicon-play{
     margin-left: 5px;   
}

.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{
     background-color: #15374f;
    
}


/* social */ 

ul.footer-social{
    list-style-type: none;
    text-indent: none;
    padding: 0;
}

ul.footer-social li, ul.footer-social li a{
    width: 38px;
    height: 22px;
    text-indent: none;
    padding: 0;
    display: inline;
    float: left;
}


    /* facebook */

ul.footer-social li.f a:link, ul.footer-social li.f a:visited{
    background: url('img/social_sprites.svg') 3px 0 no-repeat;
}

ul.footer-social li.f a:hover{
    background: url('img/social_sprites.svg') 3px -22px no-repeat;    
}

ul.footer-social li.f a:active, ul.footer-social li.f a:focus{
    background: url('img/social_sprites.svg') 3px 0 no-repeat;
}

#single-social ul.footer-social li.f a:link, #single-social ul.footer-social li.f a:visited{
    background: url('img/social_sprites.svg') 3px -44px no-repeat;
}

#single-social ul.footer-social li.f a:hover{
    background: url('img/social_sprites.svg') 3px -66px no-repeat;    
}

#single-social ul.footer-social li.f a:active, #single-social ul.footer-social li.f a:focus{
    background: url('img/social_sprites.svg') 3px -44px no-repeat;
}

    /* twitter */

ul.footer-social li.t a:link, ul.footer-social li.t a:visited{
    background: url('img/social_sprites.svg') -33px 0 no-repeat;
}

ul.footer-social li.t a:hover{
    background: url('img/social_sprites.svg') -33px -22px no-repeat;    
}

ul.footer-social li.t a:active, ul.footer-social li.t a:focus{
    background: url('img/social_sprites.svg') -33px 0 no-repeat;
}

#single-social ul.footer-social li.t a:link, #single-social ul.footer-social li.t a:visited{
    background: url('img/social_sprites.svg') -33px -44px no-repeat;
}

#single-social ul.footer-social li.t a:hover{
    background: url('img/social_sprites.svg') -33px -66px no-repeat;    
}

#single-social ul.footer-social li.t a:active, #single-social ul.footer-social li.t a:focus{
    background: url('img/social_sprites.svg') -33px -44px no-repeat;
}

    /* youtube */

ul.footer-social li.y a:link, ul.footer-social li.y a:visited{
    background: url('img/social_sprites.svg') -72px 0 no-repeat;
}

ul.footer-social li.y a:hover{
    background: url('img/social_sprites.svg') -72px -22px no-repeat;    
}

ul.footer-social li.y a:active, ul.footer-social li.y a:focus{
    background: url('img/social_sprites.svg') -72px 0 no-repeat;
}

    /* instagram */

ul.footer-social li.i a:link, ul.footer-social li.i a:visited{
    background: url('img/social_sprites.svg') -111px 0 no-repeat;
}

ul.footer-social li.i a:hover{
    background: url('img/social_sprites.svg') -111px -22px no-repeat;    
}

ul.footer-social li.i a:active, ul.footer-social li.i a:focus{
    background: url('img/social_sprites.svg') -111px 0 no-repeat;
}

    /* soundcloud */

ul.footer-social li.s a:link, ul.footer-social li.s a:visited{
    background: url('img/social_sprites.svg') -154px 0 no-repeat;
}

ul.footer-social li.s a:hover{
    background: url('img/social_sprites.svg') -154px -22px no-repeat;    
}

ul.footer-social li.s a:active, ul.footer-social li.s a:focus{
    background: url('img/social_sprites.svg') -154px 0 no-repeat;
}

/* down arrow */


.down_arrow{
     width: 45px;
    height: 55px;
    margin: 0 auto 0 auto;
    display: block;
    position: relative;
}

#learnmore .down_arrow{
    margin-top: 135px;
}



#about .down_arrow{
    margin-top: 20px;
    margin-bottom: 10px;
    margin-left: -90%;
}


/* modals */


.close {
  float: right;
  font-family: sans-serif;
    font-size: 50px;
  font-weight: 100;
  line-height: 1;
  color: #fff;
  text-shadow: 0 0 0 #fff;
  filter: none;
  opacity: 1;
    
}

}
.close:hover,
.close:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
  filter: none;
  opacity: .9;
}
button.close {
  -webkit-appearance: initial;
  padding: 0;
  cursor: pointer;
  background: none;
  border: 0;
    color: #fff;  
}


.modal-dialog{
        width: 680px;
}

#CarrotModal .modal-dialog{
     width: 410px;
}

#CarrotModal .modal-content{
     padding: 30px 30px 60px 30px;   
}

#CarrotModal .modal-header{
     padding-bottom: 60px;   
}

#CarrotModal .close{
     margin: -40px -20px 0 0 ;   
}

#CarrotModal input[type=submit]{
     margin-top: -20px;   
}

.modal-content{
  position: relative;
  border: 0;
  outline: 0;
  padding: 50px;
    
}

.req{
     color: #fff;   
}

.modal-content{
     background-color: #15374f;   
}

.close{
     margin: -65px -50px;   
}

.modal-header {
    min-height: 0;
    color: #fff;
    border-bottom: 0;
    text-align: left;
    font-size: 12px;
    line-height: 14px;
}

.modal-header p{
    font-family: 'playfair_displayregular', serif; 
    text-align: left;
}

.modal-header h4{
     text-align: left;
    text-transform: uppercase;
    letter-spacing: 6px;
}

.modal-header span.separator::after{
    content: "----------------";
    font-family: sans-serif;
    letter-spacing: -2px;   
}

.req{
    font-family: 'franklin_gothic_fsbook', sans-serif;
    font-size: 12px;
    width: 150px;
    float: right;
    margin-top: -15px;
    text-align: right;
    letter-spacing: 2px;
}

.modal input[type=submit]{    
    float: left;
    font-size: 12px;
     letter-spacing: 2px;
    
}

.modal-body{
     margin-top: -40px;   
}

.modal input{
     margin-bottom: 30px;   
}

.modal input[type=text]{
    width: 45%;
    float: left;
}

#CarrotModal #carrot-form input[type=text]{
    width: 100%;
    float: none;
    clear: both;
}

#lname-book, #dateloc-book{
     margin-left: 45px;   
}

#subject-book{
     width: 100%;
    margin-top: -30px;
}

#modal-label-book{
     width: 100%;
}

#message-book{
     margin-top: -27px;   
}

/* video modal */


#BookKeni .close{
    margin-top: -65px;    
}

#topVidModal .modal-dialog .modal-content{
     background-color: none;    
}

#topVidModal .modal-header .close{
    color: #fff;
    height: 100px;
    z-index: 1080;
    font-size: 50px;
    position: absolute;
    right: 0;
    margin-right: 100px;
}



#topVidModal #modal-video{
    width: 100%;
    min-height: 800px;

}

.lg-hide{
     display: none;   
}


.sm-hide{
     display: block;   
}
	#about .container{
	min-width: 1200px;
}

 
@media (min-width: 1380px){
	#about .container{
	min-width: 1200px;
}
}



@media (max-width: 1374px){
    
    #learn .boxed-row{
     padding: 0;   
}
    
    #speaker h4{
         padding: 0 30%;   
    }
      
    
    #speaker h5{
         margin-top: 90px;
    }
    
    
    #speaker .row.boxed-row{
     margin-top: -40px;   
    }
    
    #speaker .play_btn{
         margin-top: 5%;
        
    }
 
    #book_container{
         width: 100%;
        padding: 15px 0 0 15px;
        margin-top: -100px;
    }
    
    #book_container h6{
         font-size: 23px;
        line-height: 27px;
        margin-top: -27px;
        margin-bottom: 40px;
    }
    
   
    #book_container .link{
        width: 100%;
        margin-left: 20px;
    }
    
    #book_container p{
     float: none;
    max-width: 100%;
    }
    
    #book_container img{
         margin-top: -40px;   
    }
    
    .music_thumb, .music_thumb:nth-child(2){
         float: none;
        height: 400px;
        margin: 30px auto;
        clear: both;
        display: block;
    }
    
    #music_video_container{
         margin-top: -0px;  
    }
    
    #music_video_container p{
        margin-top: 30%;
    }
    
    #news_calendar{
        min-width: 340px;
        width: 950px;
        margin: 0 auto;
    }
    
     .blog_preview h5{
        width: 100%;
         font-size: 17px;
         line-height: 22px;
        margin: 10px auto;
    }

    
    #blog_preview_container{
        max-width: 630px;
        min-width: 340px;
    }
   
    #calendar_container{
        width: 295px;
        min-height: 650px;
        border: 10px solid #fff;  
        margin-top: -10px;
    }
    
    #blog_preview_container .more-link{
        text-align: center;
        margin: -15px 0 0 0;
        font-size: 12px;
        line-height: 21px;
    }
    
    footer{
        width: 100%;
        min-height: 1700px;
    }


    footer h6{
        font-size: 33px;
        line-height: 25px;
        clear: both;
    }


    footer .col-md-4{
     width: 100%;
    margin: 130px 0 0 0 ;
    }
    
    footer .col-md-4:first-child{
         margin-top: -50px;   
    }
    
    
    #subscribe{
     margin: 150px 0;   
    }
    
    #footer-download{
     display: none;   
    }
    
    #learn_left .violator{
         min-height: 138px;
        margin-bottom: 30px;
    }
    
}

@media (max-width: 1330px){
 
    #learn_left{
        margin: 0 auto;
        clear: both;
        float: none;
    }
    
    #learn_right{
        width: 582px;
        margin: 0 auto;
        clear: both;
        float: none;
    }
    
    #learn .container{
         padding: 0;   
    }
    
    #client-logos{
         margin-left: 50px;   
    }
    
}


@media (max-width: 1170){
    
    #news_calendar{
         max-width: 950px;   
    }
    
    
/*
    #blog_preview_container{
        width: 100%;
        margin: 0 auto;
        clear: both;
        float: none;
         padding: 0;
    }
*/
    
}

@media (max-width: 1024px){
      #speaker .film_thumb{ 
        height: 300px;
        margin: 60px auto;   
        float: none;
    }
    
    #speaker .film_thumb:nth-child(2){ 
        margin: 60px auto;   
        float: none;
    }
    
    #speaker .film_thumb:nth-child(3){ 
        margin: 60px auto;   
        float: none;
    }   
}



@media (max-width: 1000px){
    
    #speaker h4{
         font-size: 23px;   
        line-height: 30px;
        padding: 15px 30px;
        margin-bottom: 0;
    }
  
 #news_calendar{
         max-width: 700px;   
         margin-left: 0 auto;
    }
    
      #blog_preview_container{
        width: 100%;
        margin: 0 auto;
        clear: both;
        float: none;
         padding: 0;
    }
    
    #calendar_container{
        width: 100%;
        margin: 0 auto;
        float: none;
    }
     #music_video_container p{
    margin-top: 50px;
}
   
}

@media (max-width: 768px) {
    
    
    .navbar-brand{
         left: -1px;   
    }
    
    #music_video_container{
    padding: 100px 0 0 0;    
}
    
     #music_video_container p{
    margin-top: 30%;
}
    .navbar-toggle{
         margin-right: 16px;   
    }

    .fluid-row h2, .boxed-row h2{
         font-size: 33px;
        line-height: 37px;
    }
    
    #about h3{
         font-size: 23px;
        line-height: 27px;
        text-align: center;
        margin-top: -30px;
        margin-left: 0;
        padding: 0 30px;
    }
    
    #learn h4 {
        font-size: 23px;
        line-height: 27px;
        text-align: center;  
    }
    
    #about h4{
         font-size: 23px;   
        line-height: 30px;
        padding: 15px 30px;
    }
    
    h5{
        font-size: 17px;
        line-height: 25px;
    }
    
   #speaker .film_thumb{
        height: 225px;

    }
    
    .lg-hide{
     display: block; 

}
    
    .sm-hide{
         display: none;   
    }
    
    #BookKeni{
         min-height: 300px;
        background-color: #15374f;
    }
    
    #BookKeni .modal-dialog{
        width: 100%;
        margin: 0;
    }
    
    .modal-dialog .close img{
        margin: 20px 70px 0 0;
    }
    
    .modal-dialog h4{
        font-size: 23px;
        line-height: 25px;
    }
    
    .modal-header{
        margin: 30px 0 0 0;
        text-align: left;
        padding: 0;
        color: #fff;
    }
    
    .modal-content p{
        width: 100%; 
        padding: 0; 
        margin: 0;
    }
    
    .modal-body{
        padding: 0;
        margin: 30px 0 0 0;
        text-align: left;
    }
    
    
    .modal input[type=text]{
    width: 100%;
    float: none;
}

    #lname-book, #dateloc-book{
         margin-left: 0;   
    }
    
    #book-form, #carrot-form{
        text-align: left;
    }
    
    .modal-header p{
        font-size: 14px;
        line-height: 25px;
    }
    
    .modal textarea{
        width: 100%;   
    }
    
    .modal #modal-label-book, txt-area-p,{ 
        color: #306d80;
    }
    
    input[type=submit]{
         color: #fff;   
    }
    
    .modal .req{
        margin-top: 15px;
        width: 200px;   
        color: #fff;
    }
    
    
    #subject-book{
         margin-bottom: 60px;   
    }
    
    
    .modal-body #book-form p label#modal-label-book, .modal-body #carrot-form p label#modal-label-book {
     font-size: 17px;
    letter-spacing: 1px;
        margin-top: -30px;
        padding-top: 60px;
}
    

    #top-video-loop{
         top: 70px;
        height: 516px;
        clear: both;
        background: url('img/temp-kenny-top.png') center top no-repeat;
      -webkit-background-size: cover; 
      -moz-background-size: cover; 
      -o-background-size: cover; 
      background-size: cover;
        text-align: center;
        border: 10px #fff solid;
    }
    
    video{
         display: none;   
    }
    
    #vid-content{
      height: auto;
    }
    
    .bug-white, .bug-red{
    
        margin: 40px 10px 40px 300px;
    }
    
    #vid-content p{
        font-size: 13px;
        margin: -10px 40px 15px 40px;
        line-height: 15px;
    }
    
    .embed-responsive-4by3{
         height: auto;
        padding: 0;

    }
    
    #vid-content button{
        width: 200px; 
        margin: 5px 50px;   
        padding: 12px 0;
        font-size: 16px;
    }
    
    
    .quote-attribution{
         margin-bottom: 30px;   
        padding-bottom: 10px;
    }

    a span.top_btn{ 
        padding-top: 10px;
        
    }
    
    span.top_btn a:link, span.top_btn a:visited{
        color: #15374f;
        text-decoration: none;
    }
    
    span.top_btn a:hover{
        color: #165173;
        text-decoration: none;
    }
    
    span.top_btn a:active, span.top_btn a:focus{
        color: #15374f;
        text-decoration: none;
    }
    
    p span.top_btn{
         width: 200px;
        height: 35px;
        display: block;
        margin: 15px auto;
    }
    

    #learn_bkg{
    min-height: 600px; 
    background: url('img/speech_live.jpg') center top no-repeat;
      -webkit-background-size: cover; 
      -moz-background-size: cover; 
      -o-background-size: cover; 
    background-size: cover;
    border: 10px #fff solid;

    }

    
    #learn_left{
         width: 100%;
        min-width: 350px;
    }
    
    #learn_right{
        width: 100%;
        min-width: 350px;
    }
    
    .violator{
         min-width: 350px;   
    }


     #learn_left p{
      font-size: 14px;
     line-height: 18px;
     }
    
    
   .violator p span.violator-header{
         font-size: 14px;
        line-height: 16px;
    }
    
    #learn .violator img{
     width: 100px;
    height: 100px;
    margin: -6px 30px 0 -6px;
    }
    
    .violator a{
         font-size: 12px;   
    }
    
    #carousel-quotes {
        height: 260px;   
        padding: 0;
        font-weight: 100;
        line-height: 15px;
    }
    
    .carousel-title{
         font-size: 14px; 
    }
    
    .carousel-separator{
         margin-bottom: 10px;   
    }
    
    .carousel-caption{
        font-size: 13px;
        line-height: 15px;
         padding: 0 0 15px 0;
    }
    
    .carousel-attribution{
         font-size: 10px;
        line-height: 37px;
    }
    
    span.glyphicon-chevron-right{
        margin-left: -15px;
    }
    
    span.glyphicon-chevron-right img{
         width: 18px;   
    }
    
     span.glyphicon-chevron-left{
        margin-right: -15px;
    }
    
     span.glyphicon-chevron-left img{
         width: 18px;   
    }
    
    
    #client-logos{
        width: 95%;
    }    
    
    #client-logos p{
        font-size: 14px;
        line-height: 18px;
        text-align: left;
    }
    
    #client-logos img{
        width: 125px;
        margin-left: 40px;
    }
    
 
    .white_overlay{
        float: none;
        clear: both;
        width: 100%;
        margin-top: 300px;
        
    }
    
    .boxed-row{
        padding: 30px 30px;  

    }
    
    
   #learn_left p span.separator{  
       font-family: sans-serif;
       letter-spacing: -20px;
    }
    
    #learn_left, #learn_right{
         border: 10px solid #fff;   
    }
    
    #learn .violator{
         clear: both; 
        margin-bottom: 30px;
    }
    
    #about_bkg{
      width: 100%;
      max-height: 200px;
      background: url('img/speaker-page-pic.jpg') center top no-repeat;
      -webkit-background-size: contain; 
      -moz-background-size: contain; 
      -o-background-size: contain; 
      background-size: contain;
      border: 10px solid #fff;

    }
    
    #about .bug-red{
        margin-top: -265px;
        margin-right: 10px;
        margin-bottom: 0;
        
    }

    #about .container-fluid, #about .fluid-row{
     width: 100%;
        padding: 0;
        margin: 0;
    }
    
    #about_video_thumb{
        width: 100%;
        margin: 0 auto;
    }
    
    #about .col-md-4{
        padding: 0 30px;
    }
    

    #about .violator img{
     display: none;   
    }
    
    #about .violator{
        padding-left: 50px;
        margin: 30px 0;
    }
    
    #about .violator p {
       font-size: 14px;
        line-height: 17px;
    }
    
    #about a span.violator-download{
         font-size: 12px;
        margin-top: -10px;
    }
    
    #speaker_bkg{
        min-height: 420px;
        background: url('img/6261040068_a861ff16d6_o.jpg') center top no-repeat;
         -webkit-background-size: cover; 
          -moz-background-size: cover; 
          -o-background-size: cover; 
          background-size: cover;
        border: 10px #fff solid;
}
    
    #speaker .play_btn{
         margin-top: 55px;   
    }
    
    
    #book_container{
         height: 200px;   
    }
    
    
    
    aside .book{
         height: 200px;

    }
    
     #book_container img{
        width: 80px;
        height: auto;
        margin: 0 20px 0 0;
    }


    #music_bkg{
        min-height: 662px;
        background: url('img/country_star.jpg') center top no-repeat;
      -webkit-background-size: cover; 
      -moz-background-size: cover; 
      -o-background-size: cover; 
      background-size: cover;
        border: 10px #fff solid;
    }

    #news{
        min-height: 300px;
        background: url('img/news_hdr.jpg')  no-repeat;
      -webkit-background-size: cover; 
      -moz-background-size: cover; 
      -o-background-size: cover; 
      background-size: cover;
        border: 10px #fff solid;
        margin-top: 100px;
    }
    
    .row.boxed-row{
        padding: 0;
        
        margin: 0 auto;
        
    }
    
    #news_calendar{
        width: 100%;
        padding: 0; 
        margin: 0 auto;
        float: none;
    }
    


    .blog_thumb_container{
        width: 100%;
        height: 212px;
        margin: 0 auto;
    }
    
 
    
    .blog_preview img{
        width: 100%;
    }
    
    #calendar_container{
        width: 100%;
        margin: 30px 0 0 -30px;
    }
    
    footer{
     padding: 100px 30px;   
    }
    
    
} /* end <768px styles */

@media (max-width: 630px){
        
    #newsbox{
         width: 270px;   
    }
    
#blog_preview_container{
        width: 270px;
        margin: 0 auto;
        clear: both;
        float: none;
    }
    
}