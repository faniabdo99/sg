<template>
    <div class="hero-section">
        <div class="hero-section-content">
            <div class="col-md-6 col-xs-12 col-sm-12">
                <h1>Get Your Brand Ready!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto vitae repellat, aliquid ipsum at eaque vel inventore totam voluptatem! Quidem in est aut quisquam incidunt sapiente culpa magnam! Officia, architecto.</p>
                <ul class="hero-links-list">
                    <li class="hero-button"><a href="#">Contact Us</a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i> Watch Video</a></li>
                </ul>
            </div>
            <span class="hero-mouse"><i class="fas fa-chevron-down"></i></span>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped lang="scss">
@import "../assets/sass/vars.scss";
//Hero Section Styles Here
.hero-section{
    box-sizing: border-box !important;
    background-size: cover;
    height: 100vh;
    background: url('/icons/hero.jpg') center right no-repeat;
    background-size: cover;
    .hero-section-content{
      box-sizing: border-box !important; 
      position: relative;
      padding: 35vh 0 0 5%;
      height: 100vh;
      background-color: rgba(0,0,0,0.8);
    }
    h1{
        font-size: 3.5em;
        color: #fff;
        margin-bottom: 25px;
    }
    p{
        color:#fff;
        font-size:1.1em;
        line-height: 1.5em;
        margin-bottom: 25px;
    }
    .hero-links-list{
        margin-top: 60px;
        li{
            width: auto;
            display: inline-block;
            margin-right: 25px;
            a{
                text-decoration: none;
            }
            &.hero-button{
                width:25%;
                a{
                    background-color: $brand;
                    padding:15px 20px;
                    display: block;
                    color:#fff;
                    border-radius: 50px;
                    margin-right: auto;
                    font-weight:bold;
                    text-decoration: none;
                    text-align: center;
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
        border-radius: 50%;
        width:60px;
        height:60px;
        padding:18px;
        text-align: center;
        bottom:8%;
        left: 48%;
        i{
        font-size:1.5em;
        color:#fff;
        }
    }

}
@media screen and (max-width: 768px) {
.hero-section{
    height: 100vh;
    width: 100%;
    .hero-section-content{
        height: 100vh;
        width:100%;
        padding: 120px 5% 20px 5%;
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
        width:40px;
        height:40px;
        padding:10px;
        bottom:5%;
        left: 45%;
        i{
        font-size:1em;
        }
    }

}
}
</style>
