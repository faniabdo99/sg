<template>
    <div class="team-section">
        <h2>Team</h2>
        <p>Great Team , Great Products</p>
       <div class="row">
           <div class="col-md-4">
               <div class="team-member">
                <img src="/icons/abd.jpg" alt="Abd Alrahman Fani" >
                <h3>Abd Alrahman Fani <br><small>Founder & CEO</small></h3>
                <blockquote>
                    Always Deliver More Than Expected <span>_Lary Page</span>
                </blockquote>
               </div>
           </div>

            <div class="col-md-4">
               <div class="team-member">
                <img src="/icons/abd.jpg" alt="Abd Alrahman Fani" >
                <h3>Hasan Nahleh <br><small>CO-Founder & CFO</small></h3>
                <blockquote>
                    They Did it , So We can  <br>_Unknown
                </blockquote>
               </div>
           </div>

            <div class="col-md-4">
               <div class="team-member">
                <img src="/icons/abd.jpg" alt="Abd Alrahman Fani" >
                <h3>Graphic Designer <br><small>Creativity Source</small></h3>
                <blockquote>
                    Always Deliver More Than Expected <br>_Lary Page
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
.team-member{
    background-color: #fff;
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    border-radius: 5px;
    img{
        width:90px;
        height: 90px;
        border-radius: 50%;
        border:3px solid $brand;
        display: block;
        margin: 0 auto 30px auto;
    }
    h3{
        color:$brand;
        text-align: center;
        margin-bottom: 25px;
        small{
            color: $dark-gray;
            font-size:0.7em;
        }
    }
    blockquote{
        padding: 10px;
        color:$dark-gray;
        font-size: 0.9em;
        text-align:center;
        font-weight: bold;
        span{
            display:block;
            text-align: right;
            margin-top: 10px;
        }
    }
}
@media screen and (max-width: 768px) {
    
}
</style>
