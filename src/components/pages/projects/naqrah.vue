<template>
<div class="container-fluid">
    <div class="single-project">
       <section class="brand-cover">
            <div class="brand-cover-content">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="brand-main-info wow fadeInDown">
                                <div class="logo-container">
                                    <img src="/icons/projects/naqrah/logo.png" alt="Naqrah Logo">
                                </div>
                                <h1>Naqrah</h1>
                        </div>
                        <p class="brand-information wow fadeInLeft">Social Network For Arab Developers Around The World , Allows Users to Post Questions and Articles Anlong Side With 
                            Educational Videos and React to Them , The Platform Also Supports Groups And Own a Blog Manged By The Owners.
                            <br>
                            One of the best and most inluance projects that we made , Includes a website , Social media elements and Printable items. 
                            <br><br>
                            <b>Items Included in The Presentation:</b>
                            <ul class="items-included  wow fadeInLeft">
                                <li title="Cretaed with Laravel 5.8"><i class="fab fa-laravel"></i></li>
                                <li title="Cretaed with HTML5"><i class="fab fa-html5"></i></li>
                                <li title="Cretaed with CSS3"><i class="fab fa-css3"></i></li>
                                <li title="SEO Optimized"><i class="fab fa-google"></i></li>
                                <li title="Logo"><i class="fab fa-pied-piper"></i></li>
                                <li title="Bussniess Card"><i class="fas fa-id-card"></i></li>
                                <li title="Social Media Posts"><i class="fab fa-facebook"></i></li>
                            </ul>
                        </p>
                        <a class="view-project  wow fadeInLeft" href="#project-overview" v-smooth-scroll="{ duration: 700, offset: -80 }">View Full Project</a>
                    </div>
                </div>
            </div>
       </section>
       <section id="project-overview" class="project-overview">
        <div class="row">
            <div class="brand-concept">
                <h2 class="wow fadeInLeft">Brand Idea & Concept</h2>
                <p class="wow fadeInLeft"><b>Naqrah</b> is an internet startup company , The colors represent happenies and the curved corners fells technical ! </p>
            </div>
        </div>
        <div class="row">
            <div class="brand-concept">
                <h2 class="wow fadeInLeft">Logo</h2>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="logo-idea wow zoomIn">
                            <img src="/icons/projects/naqrah/logo.png" alt="Naqrah Logo">
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <div class="logo-brand-bg wow zoomIn">
                            <img src="/icons/projects/naqrah/logo.png" alt="Naqrah Logo">
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <div class="logo-black-bg wow zoomIn">
                            <img src="/icons/projects/naqrah/logo.png" alt="Naqrah Logo">
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="brand-concept">
                <h2 class="wow fadeInLeft">Bussnies Card</h2>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="bussnies-card-front wow zoomIn">
                            <img src="/icons/projects/naqrah/card-front.png" alt="Naqrah Bussnies Card">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="bussnies-card-back wow zoomIn">
                            <img src="/icons/projects/naqrah/card-back.png" alt="Naqrah Bussnies Card">
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="brand-concept">
                <h2 class="wow fadeInLeft">Social Media Elements</h2>
                <p class="wow fadeInLeft">Multip social media posts created , along side with the page it self and some marketing campings took place along the journy ,
                You can check naqrah's social media accounts @naqrahOfficial</p>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="social-media-page wow zoomIn">
                            <img src="/icons/projects/naqrah/facebook-page.png" alt="Naqrah Facebook Page">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="social-media-posts wow zoomIn">
                            <img src="/icons/projects/naqrah/single-post.png" alt="Naqrah Single Post">
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="brand-concept">
                <h2 class="wow fadeInLeft">Website</h2>
                <p class="wow fadeInLeft">Naqrah's Website is online , Check it from here <a href="https://naqrah.net" target="_blank">Naqrah's Wesbite</a></p>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="website-desktop wow zoomIn">
                            <img src="/icons/projects/naqrah/desktop.png" alt="Naqrah Website (Desktop)">
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <div class="website-phone wow zoomIn">
                            <img src="/icons/projects/naqrah/phone.png" alt="Naqrah Website (Phone)">
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <div class="website-tablet wow zoomIn">
                            <img src="/icons/projects/naqrah/ipad.png" alt="Naqrah Website (Tablet)">
                        </div>
                    </div>
                </div>
        </div>
       </section>
       
    </div>
 
</div>
</template>

<script>
export default {
    data: function(){
        return{
        }
    },
  methods:{

  }
}
</script>

<style lang="scss" scoped>
@import "../../../assets/sass/vars";

.brand-cover{
    height: 100vh;
    background: url('/icons/hero.jpg') no-repeat center center;
    background-size: cover;
    .brand-cover-content{
        height: 100vh;
        padding : 25vh 15vw 0 15vw;
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0.8);
    }
    .items-included{
        padding:0 25px;
        box-sizing: border-box;
        max-width: 40%;
        display: flex;
        justify-content: space-between;
    }
    .brand-main-info{
        display: flex;
        flex-basis: 0;
        align-items: center;
        justify-content: space-around;
        .logo-container{
            flex:1;
            img{
                width: 120px;
                height: 100px;
                margin-right:25px;
            }
        }
        h1{
            flex:8;
            font-size: 2.5em;
            color:#fff;
        }
    }
    p.brand-information{
        margin-top: 25px;
        color:#fff;
        font-size: 1.2em;
        line-height: 1.8;
    }
    a.view-project{
        margin:25px auto 0 0;
        padding:10px 25px;
        color: #fff;
        font-weight: bold;
        font-size: 1.1em;
        display:block;
        border:2px solid #fff;
        border-radius:4px;
        width:25%;
        text-decoration: none;
        text-align:center;
    }
}
.brand-concept{
    box-sizing: border-box;
    padding:25px 5%;
    h2{
        font-size: 2.5em;
        font-weight: bold;
        color:$brand;
        margin-bottom: 25px;
    }
    p{
        color:$dark-gray;
        font-size: 1.1em;
    }
}
.logo-brand-bg , .logo-idea , .logo-black-bg{
    padding:45px;
    box-sizing:border-box;
    width:75%;
    img{
        width: 100px;
        height: 80px;
        display:block;
        margin:auto;
    }
}
.logo-brand-bg{
    background:#625ff2;
}
.logo-idea{
    background:#f7f7f7;
}
.logo-black-bg{
    background: $black;
}

/* Bussnies Card Designs */
.bussnies-card-front, .bussnies-card-back{
    box-sizing:border-box;
    padding:60px;
    width: 90%;
    margin:auto;
    img{
        width: 400px;
        height: 200px;
        display: block;
        margin: auto;
        filter: drop-shadow(0px 0px 5px $black);
    }
}

.social-media-page , .social-media-posts{
    box-sizing:border-box;
    padding:60px;
    width: 90%;
    margin:auto;
    img{
        width: 400px;
        height: 200px;
        display: block;
        margin: auto;
        filter: drop-shadow(0px 0px 5px $black);
    }
}
.social-media-posts{
    img{
        width: 200px !important;
        height: 200px !important;
    }
}

.website-desktop , .website-tablet , .website-phone{
    box-sizing:border-box;
    padding:60px;
    width: 90%;
    margin:auto;
    img{
        width:100%;
        height: 350px;
        display: block;
        margin: auto;
    }
}




@media screen and (max-width: 768px) {
.gallery-bg{
    .gallery-content{
        width:90%;
        height: 90%;
        h2{
        font-size: 1.3em;
        margin-bottom: 5px;
         }
        img{
            height: 60%;
        }
    }
 
}
.brand-cover{
    height: 100vh;
    .brand-cover-content{
        padding : 25vh 10vw 0 10vw;
    }
    .brand-main-info{
        .logo-container{
            img{
                width: 60px;
                height: 60px;
            }
        }
        h1{
            font-size: 1.5em;
        }
    }
    p.brand-information{
        font-size: 1em;
        line-height: 1.5;
    }
    a.view-project{
        width:80%;
    }
}
.brand-concept{
    padding:$section-padding-sm;
    h2{
        font-size: 2em;
        margin-bottom: 15px;
    }
    p{
        font-size: 1em;
    }
}
}
</style>
