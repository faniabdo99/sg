<template>
    <section id="about" class="about-us-section">
        <div class="row">
                <div class="col-md-8 col-xs-12 col-sm-12">
                    <div class="about-us-text">
                        <h2 class="wow slideInLeft section-title">About Us</h2>
                        <p class="wow slideInLeft"><b>Semicolon Group</b> is an internet startup company focused on providing top quality services for clients worldwide. Despite being new as a company, our team members are actually veterans of the industry, with years of experience in their respective fields. </p>
                        <ul>
                            <li class="wow zoomIn social-link facebook"><a href="#"><i class="fab fa-facebook"></i> facebook</a></li>
                            <li class="wow zoomIn social-link instagram"><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                            <li class="wow zoomIn social-link twitter"><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        </ul>
                    </div>
                </div>
                <div class="pull-left col-md-4 col-xs-12 col-sm-12">
                    <div class="wow slideInRight company-name">
                        <div>
                            <img src="/icons/abd.jpg" alt="Abd Alrahman Fani">
                        </div>
                        <h2>Abd Arahman Fani <br><small>Founder & CEO</small></h2>
                    </div>
                        <br>
                        <blockquote class="wow slideInRight">
                            <i class="fas fa-quote-left"></i> 
                                Great Products Requires Great Minds. We Like to Provide The Top Level of Products 
                                Using Our Great Team Experince and Customer's Best Ideas !
                            <i class="fas fa-quote-right"></i> 
                        </blockquote>
                </div>
    </div>
</section>
</template>
<script>
export default {
    
}
</script>
<style scoped lang="scss">
@import "../assets/sass/vars.scss";
//About Us Section Styles Here
.about-us-section{
    display: block;
    background-color: $light-gray;
    padding: $section-padding;
}
.about-us-text{
    width: 95%;
}
ul{
    margin-top: 10px;
    li{
        display: inline-block;
        &.social-link {
            a{
                transition: all ease 0.3s;
                font-weight: bold;
                border-radius: 5px;
                display:block;
                padding:10px 15px;
                text-decoration: none;
                border:2px solid $light-gray;
                  &:hover{
                    transition: all ease 0.3s;
                    background-color: transparent;
                }
            }
        }
        //Facebook
        &.facebook{
            a{
                background-color: #3b5998;
                color: #fff;
                &:hover{
                    border-color: #3b5998;
                    color:#3b5998;
                }
            }
        }
         //Instagram
        &.instagram{
            a{
                background-color: #e4717a;
                color: #fff;
                &:hover{
                    border-color: #e4717a;
                    color:#e4717a;
                }
            }
        }
         //Facebook
        &.twitter{
            a{
                background-color: #1da1f2;
                color: #fff;
                &:hover{
                    border-color: #1da1f2;
                    color:#1da1f2;
                }
            }
        }
    }
}
h2.section-title{
    text-align: left;
    font-size: 2em;
    margin-bottom: 25px;
}
p{
    text-align: left;
    color:$dark-gray;
    line-height: 1.5em;
}



//The Right Side
.company-name{
    display: flex;
    flex-basis: 0;
    align-items: center;
    align-content: center;
    flex-direction: row;
       h2{
           font-size: 1em;
           small{
               color:$dark-gray;
           }
       }
        img{
            border-radius: 50%;
            height: 40px;
            width: 40px;
            display: block;
            margin-right: 20px;
        }
    }
      blockquote{
          i{
              color:$brand;
              margin: 0 10px;
          }
            color: $dark-gray;
            font-size: 1em;
            line-height: 1.5;
            text-transform: capitalize;
        }

@media screen and (max-width: 768px) {
    .about-us-section{
        display: block;
        background-color: $light-gray;
        padding: 50px 5% 20px 5%;
    }
    h2.section-title{
        font-size: 1.5em;
        margin-bottom: 25px;
    }
    p{
        font-size: 0.9em;
    }
    ul{
    margin-top: 10px;
    li{
        display: inline-block;
        &.social-link {
            a{
                padding:10px 10px;
                border:1px solid $light-gray;
                font-size: 0.7em;
            }
        }
        
        }
    }


    //The Right Side
    .company-name{
        margin-top: 20px;
        direction: ltr;
        h2{
            flex: 6;
            margin-left: 0;
            font-size: 1em;
            text-align: left;
            margin-right: auto;
            small{
                color:$dark-gray;
            }
        }
           div{
            flex:1;
            margin-right: 15px;
                img{
                    border-radius: 50%;
                    height: 40px;
                    width: 40px;
                    display: block;
                }
            }
        }
        blockquote{
            i{
                margin: 0 7px;
            }
                font-size: 0.8em;
            }

}
</style>
