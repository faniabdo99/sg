<template>
  <section class="pricing-section">
      <h2 class="section-title">Pricing</h2>
      <p class="section-description">Affordable & For Everyone</p>
      <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="prcing-panel wow fadeInLeft">
                  <div class="pricing-plane-description">
                      <div class="padding-box">
                          <h3 class="plan-title"><i class="fas fa-globe"></i> Starter</h3>
                      </div>
                      <div class="plan-price">
                          <p>500$</p> <span>One Time Payment</span>
                      </div>
                      <div class="padding-box">
                        <ul>
                            <li><i class="fas fa-check"></i> Brand Identity</li>
                            <li><i class="fas fa-check"></i> Bussnies Card Design</li>
                            <li><i class="fas fa-check"></i> Website & Blog</li>
                            <li><i class="fas fa-check"></i> Marketing Plans</li>
                            <li><i class="fas fa-check"></i> Paid Marketing Campings</li>
                            <li><i class="fas fa-check"></i> SEO Foucsed</li>
                        </ul>
                        <hr>
                        <br><br>
                        <a class="request-service" href="#">Request</a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="prcing-panel wow fadeInDown">
                  <div class="pricing-plane-description">
                      <div class="padding-box">
                          <h3 class="plan-title"><i class="fas fa-globe"></i> Starter</h3>
                      </div>
                      <div class="plan-price">
                          <p>500$</p> <span>One Time Payment</span>
                      </div>
                      <div class="padding-box">
                        <ul>
                            <li><i class="fas fa-check"></i> Brand Identity</li>
                            <li><i class="fas fa-check"></i> Bussnies Card Design</li>
                            <li><i class="fas fa-check"></i> Website & Blog</li>
                            <li><i class="fas fa-check"></i> Marketing Plans</li>
                            <li><i class="fas fa-check"></i> Paid Marketing Campings</li>
                            <li><i class="fas fa-check"></i> SEO Foucsed</li>
                        </ul>
                        <hr>
                        <br><br>
                        <a class="request-service" href="#">Request</a>
                      </div>
                  </div>
              </div>
          </div>


          <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="prcing-panel wow fadeInRight">
                  <div class="pricing-plane-description">
                      <div class="padding-box">
                          <h3 class="plan-title"><i class="fas fa-globe"></i> Starter</h3>
                      </div>
                      <div class="plan-price">
                          <p>500$</p> <span>One Time Payment</span>
                      </div>
                      <div class="padding-box">
                        <ul>
                            <li><i class="fas fa-check"></i> Brand Identity</li>
                            <li><i class="fas fa-check"></i> Bussnies Card Design</li>
                            <li><i class="fas fa-check"></i> Website & Blog</li>
                            <li><i class="fas fa-check"></i> Marketing Plans</li>
                            <li><i class="fas fa-check"></i> Paid Marketing Campings</li>
                            <li><i class="fas fa-check"></i> SEO Foucsed</li>
                        </ul>
                        <hr>
                        <br><br>
                        <a class="request-service" href="#">Request</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
</template>

<script>
export default {
  name: 'Portfolio',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/sass/vars.scss";
//The Portfolio Container
.pricing-section{
    padding: $section-padding;
  h2.section-title {
    font-size: 2em;
    margin-bottom: 25px;
    text-align: center;
  }
  p.section-description {
    text-align: center;
    color: $dark-gray;
    margin-bottom: 30px;
  }

  .prcing-panel{
      width: 70%;
      margin: auto;
      background-color: $brand;
      border-radius: 3px;
      .padding-box{
          padding:30px;
      }
      h3.plan-title{
          color: #fff;
          font-size: 2em;
      }
    .plan-price{
        width: 70%;
        background-color: #fff;
        padding:15px;
        border-top-right-radius: 50px;
        border-bottom-right-radius: 50px;
        p{
            font-weight: bold;
            font-size: 1.5em;
            margin-bottom: 5px;
            color:$brand;
        }
        span{
            color: $dark-gray;
        }
    }
    ul{
        li{
            margin-bottom: 20px;
            color:#fff;
            text-align: left;
        }
    }
    .request-service{
        background-color: #fff;
        padding:15px;
        display: block;
        color: $black;
        font-weight: bold;
        text-align: center;
        border-radius: 3px;
        text-decoration: none;
    }
  }
}
@media screen and (max-width: 768px) {
.pricing-section{
    padding: $section-padding-sm;
  h2.section-title {
    font-size: 1.5em;
  }
  .prcing-panel{
      width: 85%;
      margin: 0 auto 15px auto;


  }
}
}
</style>
