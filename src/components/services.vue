<template>
  <div class="services-section">
      <h2>What We Do</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus mollitia nulla itaque ipsum, voluptate enim laboriosam ab qui possimus! Facilis.</p>
      <div class="row">
          <div class="col-md-3 col-xs-6 col-sm-6">
              <div class="card-view">
                  <img src="/icons/website.png" alt="Website Service Logo" />
                  <h3>Identity Design</h3>
                  <ul>
                      <li><span><i class="fas fa-file-code"></i>Logo</span></li>
                      <li><span><i class="fas fa-file-code"></i>Bussnies Card</span></li>
                      <li><span><i class="fas fa-file-code"></i>Website Design</span></li>
                      <li><span><i class="fas fa-file-code"></i>CMS</span></li>
                      <li><span><i class="fas fa-file-code"></i>Digital Marketing</span></li>
                      <li><span><i class="fas fa-file-code"></i>Google Services</span></li>
                  </ul>
              </div>
          </div>
          
      </div>
  </div>
</template>

<script>
    export default {
     name: 'Services'
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/sass/vars.scss";
//The Services Section
.services-section{
    padding: $section-padding;
    h2{
        font-size: 2em;
        margin-bottom:25px;
        text-align:center;
    }
    p{
        text-align:center;
        color:$dark-gray;
    }

    .card-view{
        margin-top:30px;
        //background-color: $light-gray;
        padding:15px 30px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.4);
        border-radius: 10px;
        img{
            display: block;
            margin:10px auto 25px auto;
            width:70px;
            height: 70px;
            border:4px solid $brand;
            border-radius: 50%;
            padding:15px;
        }
        h3{
            color:$brand;
            text-align:center;
            font-size:1.3em;
            margin-bottom:20px;
            text-transform: uppercase;
        }
        ul{
            li{
                margin-bottom: 15px;
                font-weight: bold;
                font-size: 0.9em;
                i{
                    color: $brand;
                    margin-right:5px;
                }
            }
        }
    }
}
@media screen and (max-width: 768px) {
}
</style>
