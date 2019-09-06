<template>
    <section id="top" class="hero-section">
        <div class="hero-section-content">
            <div class="col-md-6 col-xs-12 col-sm-12">
                <h1 class="wow fadeInLeft">Digitize Your Brand ! </h1>
                <p class="wow fadeInLeft"><b>Semicolon Group</b> will turn your vision into a reality , allowing it to be shared to the world.</p>
                <ul class="hero-links-list">
                    <li class="wow fadeInDown hero-button"><a href="#portfolio" v-smooth-scroll="{ duration: 1000, offset: -80 }" >Our Portfolio</a></li>
                    <li class="wow fadeInDown" ><a href="#about" v-smooth-scroll="{ duration: 1000, offset: -80 }" ><i class="fas fa-question"></i> About Us </a></li>
                </ul>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12 pull-left">
              <img class="wow fadeInRight hero-image" src="img/hero-sub-image.png" alt="Hero Image">
            </div>
            <span class="hero-mouse"><i class="fas fa-circle"></i></span>
        </div>
    </section>
</template>
<script>
export default {
    
}
</script>
<style scoped lang="scss">
@import "../assets/sass/vars.scss";
//Hero Section Styles Here
.hero-image{
    width: 450px;
    height: 450px;
   display: block;
   margin: -70px auto 0 auto;
}
.hero-section{
    box-sizing: border-box !important;
    height: 100vh;
    width:100%;
    background: url('/img/hero-image.png') no-repeat center center;
    background-size:cover;
.hero-section-content{
      box-sizing: border-box !important; 
      position: relative;
      padding: 35vh 0 0 5%;
      height: 100vh;
      background-color:rgba(0,0,0,0.5);
    }
    h1{
        font-size: 4em;
        color: #fff;
        margin-bottom: 25px;
    }
    p{
        color:#fff;
        font-size:1.2em;
        line-height: 1.5em;
        margin-bottom: 25px;
        text-transform: capitalize;
    }
    .hero-links-list{
        margin-top: 60px;
        li{
            width: auto;
            display: inline-block;
            margin-right: 25px;
            a{
                text-decoration: none;
                font-weight: bold;
            }
            &.hero-button{
                width:25%;
                transition: all ease 0.3s;
               
                a{
                    background-color: $brand;
                    border:2px solid $brand;
                    padding:12px 20px;
                    display: block;
                    color:#fff;
                    border-radius: 4px;
                    margin-right: auto;
                    font-weight:bold;
                    text-decoration: none;
                    text-align: center;
                    transition: all ease 0.3s;
                    &:hover{
                        background-color: rgba(0,0,0,0);
                        transition: all ease 0.3s;
                        border-color: #fff;
                    }
                }
          
            }
           
            a{
                color:#fff;
            }
        }
    }
    .hero-mouse{
        position: absolute;
        box-sizing: border-box;
        border:2px solid #fff;
        border-radius: 50px;
        width:40px;
        height:70px;
        padding:5px;
        text-align: center;
        bottom:5%;
        left: 48%;
        i{
        font-size:.6em;
        color:#fff;
        animation: AnimateTheMouse 1.5s infinite ;
        }
    }

}

//Animations And Keyframes (Pretty Much the same thing)
@keyframes AnimateTheMouse {
   form{
       transform: translateY(0);
       opacity: 1;
   }
   to{
       transform: translateY(40px);
       opacity: 0;
   }
}
@media screen and (max-width: 768px) {
.hero-image{
    display: none;
}
.hero-section{
    height: 100vh;
    width: 100%;
    position: relative;
    .hero-section-content{
        height: 100vh;
        width:100%;
        padding: 30vh 5% 20px 5%;
    }
    h1{
        font-size: 2em;
        text-align: center;
    }
    p{
        font-size:0.9em;
        line-height: 1.5em;
        margin-bottom: 25px;
        text-align: center;
    }
    a{
        padding:10px 15px;
        width:30%;
        margin-right: auto;
        margin-left: auto;
    }

    .hero-links-list{
        margin-top: 20px;
        li{
            display: block;
            width: 100% !important;
            margin:0 auto 25px auto;
            a{
                color:#fff;
                margin: 0 auto;
                text-align:center;
                width: 80%;
                display: block;
            }        
        }
    }
    .hero-mouse{
        width:25px;
        height:50px;
        padding:6px;
        bottom:2%;
        left: 48%;
        i{
        font-size:0.5em;
        }
    }

}
}
</style>
