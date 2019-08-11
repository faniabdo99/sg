<template>
 <footer>
 
     <div class="row">
         
        <div class="col-md-4 col-xs-6 col-sm-6">
            <div class="footer-brand-highlight">
                <img src="/icons/logo-white.png" >
                <p>Semicolon Group &copy;</p>
            </div>
        </div>

     
        <div class="col-md-4 col-xs-6 col-sm-6">
            <div class="footer-contact-information">
                <ul>
                    <li>salse@Semicolon.com</li>
                    <li>+0020 1151 411 867</li>
                    <li>salse@Semicolon.com</li>
                    <li>salse@Semicolon.com</li>
                </ul>
            </div>
        </div>

           <div class="col-md-4 col-xs-12 col-sm-12">
            <div class="footer-counter">
                <ul>
                    <li>
                        <div class="icon-container">
                            <i class="fas fa-mug-hot"></i>
                        </div>
                        <span><b>25</b> Cup of Coffee</span>
                    </li>
                    <li>
                        <div class="icon-container">
                            <i class="fas fa-smile-wink"></i>
                        </div>
                        <span><b>3</b>  Happy Clients</span>
                    </li>
                    <li>
                        <div class="icon-container">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <span><b>5</b> Succeful Projects</span>
                    </li>
                </ul>
            </div>
        </div>
        
     </div>
         <div class="row">
             <div class="col-md-12 col-xs-12 col-sm-12">
                 <div class="footer-bottom-part">
                     <p>All Rights Reserved , Semicolon Group &copy;</p>
                    <ul>
                        <li>Follow US</li>
                        <li><i class="fab fa-facebook"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                    </ul>
                </div>
             </div>
     </div>
 </footer>
</template>

<script>
export default {
  name: 'FooterComp',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/sass/vars.scss";
//The Portfolio Container
footer{
    background-color:#1d1818;
    padding: $section-padding-sm;
    height: 220px;
    padding-top: 70px;
    .footer-brand-highlight{
        img{
            width: 100px;
            height: 100px;
            display: block;
            margin:0 auto 25px auto;
        }
        p{
            color:#fff;
            font-weight:bold;
            text-align:center;
            font-size:1.5em;
        }
    }

    .footer-counter{
        ul{
            li{
                display:flex;
                flex-basis: 0;
                align-items: center;
                font-size: 1.5em;
                margin-bottom: 25px;
                text-align: center;
                justify-content: space-around;
                span{
                    flex:2;
                    color:#fff;
                    text-align:left;
                    b{
                        margin-right: 15px;
                    }
                }
                .icon-container{
                    flex:1;
                    i{
                        color:#fff;
                        font-size: 1.2em;
                    }
                }
            }
        }
    }

    .footer-contact-information{
        ul{
            li{
                color:#fff;
                font-size: 1.1em;
                text-align: center;
                margin-bottom: 15px;
            }
        }
    }

    .footer-bottom-part{
        margin-top: 40px;
        p{
            text-align: center;
             color:#fff;
             margin-right: 25px;
             font-size: 1em;
             display: inline-block;
        }
        ul{
            display:inline;
            margin-left: auto;
            float:right;
            li{
                display: inline-block;
                color:#fff;
                margin-right: 15px;
            }
        }
    }
}
@media screen and (max-width: 768px) {
footer{
    height: auto;
    padding-top: 40px;
    .footer-brand-highlight{
        img{
            width: 60px;
            height: 60px;
        }
        p{
            font-size:1em;
        }
    }

    .footer-counter{
        margin-top: 40px;
        ul{
            li{
                font-size: 1em;
                margin-bottom: 10px;
            }
        }
    }

    .footer-contact-information{
        ul{
            li{
                font-size: 0.9em;
                margin-bottom: 10px;
            }
        }
    }

    .footer-bottom-part{
        margin-top: 40px;
        p{
            text-align: center;
             color:#fff;
             margin-right: 25px;
             font-size: 1em;
             display: inline-block;
        }
        ul{
            display:inline;
            margin-left: auto;
            float:right;
            li{
                display: inline-block;
                color:#fff;
                margin-right: 15px;
            }
        }
    }
}
}
</style>
