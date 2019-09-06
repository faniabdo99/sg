<template>
    <div class="team-section">
        <h2 class="wow fadeInDown">Meet Our Team</h2>
        <p class="wow fadeInDown">Get to know the talented individuals who power Semicolon Group</p>
       <div class="row">
       <div class="col-md-4">
            <div class="team-container wow fadeInLeft">
                <div class="team-member">
                    <div class="team-member-image"><img src="/img/abd.jpg" alt="Abd Alrahman Fani" ></div>
                    <h3>Abd Alrahman Fani <br><small>Founder & CEO</small></h3>
                </div>
                <blockquote>
                    Always deliver more than expected.<br>― Larry Page
                </blockquote>   
            </div>
        </div>

       <div class="col-md-4">
            <div class="team-container wow fadeInDown">
                <div class="team-member">
                    <div class="team-member-image"><img src="/img/abd.jpg" alt="Abd Alrahman Fani" ></div>
                    <h3>Tyasser Ibrahim <br><small>CO-Founder</small></h3>
                </div>
                <blockquote>
                    Life Begins at the edge of comfort zone. <br>― Neale Donald Walsch
                </blockquote>   
            </div>
        </div>

            <div class="col-md-4">
                <div class="team-container wow fadeInRight">
                    <div class="team-member">
                        <div class="team-member-image"><img src="/img/sameh.jpeg" alt="Abd Alrahman Fani" ></div>
                        <h3>Sameh Sagherjy <br><small>Graphic Designer</small></h3>
                    </div>
                    <blockquote>
                        Design without a principals is no longer design , it's Art!  <br>― Google Lead Designers
                    </blockquote>   
                </div>
           </div>


       </div>
    </div>
</template>
<script>
export default {
    name:"Abot"
}
</script>
<style scoped lang="scss">
@import "../assets/sass/vars.scss";
//Team Section Styles Here
.team-section{
    background-color: $light-gray;
    padding: $section-padding;
  h2 {
    font-size: 2em;
    margin-bottom: 25px;
    text-align: center;
  }
  p {
    text-align: center;
    color: $dark-gray;
    margin-bottom: 30px;
  }
}
.team-container{
    background-color: #fff;
    width: 80%;
    margin: 0 auto;
    padding: 25px;
    border-radius: 5px;

.team-member{
    display: flex;
    flex-basis: 0;
    align-items: center;
    .team-member-image{
        flex: 2;
        margin-right: 25px;
        img{
            width:90px;
            height: 90px;
            border-radius: 50%;
            border:3px solid $brand;
            display: block;
            margin: 0 auto 30px auto;
        }
    }
    h3{
        flex:6;
        color:$brand;
        text-align: left;
        margin-bottom: 25px;
        small{
            color: $dark-gray;
            font-size:0.7em;
        }
    }
}
  blockquote{
        color:$dark-gray;
        font-size: 0.9em;
        text-align:left;
        font-weight: bold;
        line-height: 1.8;
        span{
            display:block;
            text-align: right;
            margin-top: 10px;
        }
    }
}
  

@media screen and (max-width: 768px) {
.team-section{
    padding: $section-padding-sm;
  h2 {
    font-size: 1.5em;
  }
}
.team-container{
    background-color: #fff;
    width: 80%;
    margin: 0 auto 15px auto;
    padding: 15px;
.team-member{
    .team-member-image{
        flex: 2;
        margin-right: 25px;
        img{
            width:60px;
            height: 60px;
        }
    }
 
}
}
}
</style>
