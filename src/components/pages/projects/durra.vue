<template>
<div class="container-fluid">
    <div class="single-project">
       <section class="brand-cover">
            <div class="brand-cover-content">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="brand-main-info wow fadeInDown">
                                <div class="logo-container">
                                    <img src="img/projects/durra/logo.png" alt="Durrat Alkhaligh Logo">
                                </div>
                                <h1>Durrat Alkhaligh</h1>
                        </div>
                        <p class="brand-information wow fadeInLeft">Durrat Alkhaligh is a water company that provides multiple sizes and types of fresh water
                            <br>
                            One of the coolest clients we ever had ! 
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
                <p class="wow fadeInLeft"><b>Durrat Alkhaligh</b> is a water related company , that makes blue color a priority not just a choice.</p>
                <img class="full-width-image" src="img/projects/durra/pre5.png" alt="Durrat Alkhaligh Identity Mockup" title="Durrat Alkhalig Identity Mockup" >
            </div>
        </div>
        <div class="row">
            <div class="brand-concept">
                <h2 class="wow fadeInLeft">Logo</h2>
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="logo-idea wow zoomIn">
                            <img src="img/projects/durra/logo.png" alt="Durra Alkhaligh Alalamya Logo">
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="brand-concept">
                <h2 class="wow fadeInLeft">Envelope</h2>
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="wow zoomIn">
                            <img class="full-width-image" src="img/projects/durra/envelope.png" alt="Durra Alkhaligh Envelope">
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="brand-concept">
                <h2 class="wow fadeInLeft">Extra Elements</h2>
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="wow zoomIn">
                            <img class="full-width-image" src="img/projects/durra/packaging-box.png" alt="Packging Box">
                        </div>
                    </div>

                </div>
        </div>
        <div class="row">
            <div class="brand-concept">
                <h2 class="wow fadeInLeft">Social Media Elements</h2>
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="wow zoomIn">
                            <img class="full-width-image" src="img/projects/durra/bunch-of-bottles.jpg" alt="Durra Alkhaligh Cover Image">
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
$project-brand: #2bbbdf;
.full-width-image{
    width: 100%;
    height: auto;
    margin-top: 15px;
    margin-bottom: 15px;
}
.brand-cover{
    height: 100vh;
    background: url('/img/projects/durra/bunch-of-bottles.jpg') no-repeat center center;
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
        color:$project-brand;
        margin-bottom: 25px;
    }
    p{
        color:$dark-gray;
        font-size: 1.1em;
    }
}
.logo-brand-bg , .logo-idea , .logo-black-bg{
    padding:10px;
    box-sizing:border-box;
    width:90%;
    margin: auto;
    img{
        width: 100%;
        height: auto;
        display:block;
        margin:auto;
    }
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
