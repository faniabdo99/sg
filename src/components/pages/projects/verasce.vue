<template>
<div class="container-fluid">
    <div class="single-project">
       <section class="brand-cover">
            <div class="brand-cover-content">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="brand-main-info wow fadeInDown">
                                <div class="logo-container">
                                    <img src="/icons/projects/verasce/logo-pink.png" alt="Versace Logo">
                                </div>
                                <h1>Versace</h1>
                        </div>
                        <p class="brand-information wow fadeInLeft">Makeup production store located in Iraq , sells all kinds of beuaty!
                            <br>
                            We felt a lot of love and freshness doing this one!
                            <br><br>
                            <b>Items Included in The Presentation:</b>
                            <ul class="items-included  wow fadeInLeft">
                                <li title="Logo"><i class="fab fa-pied-piper"></i></li>
                                <li title="Bussniess Card"><i class="fas fa-id-card"></i></li>
                                <li title="Social Media Posts"><i class="fab fa-facebook"></i></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
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
                <img class="full-width-image" src="icons/projects/verasce/idea.jpg" >
            </div>
        </div>
        <div class="row">
            <div class="brand-concept">
                <h2 class="wow fadeInLeft">Logo</h2>
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="wow zoomIn">
                            <img class="full-width-image" src="/icons/projects/verasce/logo-multip.jpg" alt="Versace Logo">
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="brand-concept">
                <h2 class="wow fadeInLeft">More Elements</h2>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="wow zoomIn">
                            <img class="full-width-image" src="/icons/projects/verasce/bag.jpg" alt="Versace Cotton Bag">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="wow zoomIn">
                            <img class="full-width-image" src="/icons/projects/verasce/wall-poster.jpg" alt="Versace Wall Poster">
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
$project-brand: #d33cc6;
.full-width-image{
    width: 100%;
    height: auto;
    margin-top: 15px;
    margin-bottom: 15px;
}
.brand-cover{
    height: 100vh;
    background: url('/icons/projects/verasce/cover.jpg') no-repeat center center;
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
                width: 100px;
                height: 120px;
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
        color:$project-brand;
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
