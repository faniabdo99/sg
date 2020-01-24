<template>
  <section id="pricing" class="pricing-section">
      <h2 class="section-title">Pricing</h2>
      <p class="section-description">Affordable & For Everyone</p>
      <p class="section-clear">The below pricing is dedicated to the design and web development process , if you need more than that we 
          suggest you to <a href="#contact" v-smooth-scroll="{offset: -70}">contact us</a> to discuss the details about your project.
      </p>
      <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="prcing-panel pricing-panel-low wow fadeInLeft">
                  <div class="pricing-plane-description">
                      <div class="padding-box">
                          <h3 class="plan-title"><i class="fas fa-globe"></i> Startup</h3>
                      </div>
                      <div class="plan-price">
                          <p>200$</p> <span>One Time Payment</span>
                      </div>
                      <div class="padding-box">
                        <ul>
                            <li><i class="fas fa-check"></i> Logo Design</li>
                            <li><i class="fas fa-check"></i> Website (Static)</li>
                            <li><i class="fas fa-check"></i> Social Page Cover</li>
                            <li><i class="fas fa-check"></i> 4 Social Media Post</li>
                        </ul>
                        <hr>
                        <br><br>
                        <a class="request-service" href="javascript:;" @click="ShowRequestModal('Startup')">Request</a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="prcing-panel pricing-panel-med wow fadeInDown">
                  <div class="pricing-plane-description">
                      <div class="padding-box">
                          <h3 class="plan-title"><i class="fas fa-star"></i> Medium</h3>
                      </div>
                      <div class="plan-price">
                          <p>500$</p> <span>One Time Payment</span>
                      </div>
                      <div class="padding-box">
                        <ul>
                            <li><i class="fas fa-check"></i> Logo</li>
                            <li><i class="fas fa-check"></i> Business Card , Letter Head , Envelope</li>
                            <li><i class="fas fa-check"></i> Rollup , T-Shirt , Stamp</li>
                            <li><i class="fas fa-check"></i> Social Media Cover</li>
                            <li><i class="fas fa-check"></i> 8 Social Media Posts</li>
                            <li><i class="fas fa-check"></i> Dynamic Website</li>
                            <li><i class="fas fa-check"></i> 2 Business Emails</li>
                        </ul>
                        <hr>
                        <br><br>
                        <a class="request-service" href="javascript:;" @click="ShowRequestModal('Mediume')">Request</a>
                      </div>
                  </div>
              </div>
          </div>


          <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="prcing-panel pricing-panel-high wow fadeInRight">
                  <div class="pricing-plane-description">
                      <div class="padding-box">
                          <h3 class="plan-title"><i class="fas fa-rocket"></i> Advanced</h3>
                      </div>
                      <div class="plan-price">
                          <p>1000$</p> <span>One Time Payment</span>
                      </div>
                      <div class="padding-box">
                        <ul>
                            <li><i class="fas fa-check"></i> Logo</li>
                            <li><i class="fas fa-check"></i> Business Card , Letter Head , Envelope</li>
                            <li><i class="fas fa-check"></i> Rollup , T-Shirt , Stamp</li>
                            <li><i class="fas fa-check"></i> Social Media Cover</li>
                            <li><i class="fas fa-check"></i> 12 Social Media Posts</li>
                            <li><i class="fas fa-check"></i> Custom Website</li>
                            <li><i class="fas fa-check"></i> Google Business Services</li>
                            <li><i class="fas fa-check"></i> 4 Business Emails</li>
                        </ul>
                        <hr>
                        <br><br>
                        <a class="request-service" href="javascript:;" @click="ShowRequestModal('Big Boy')">Request</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <transition name="fade-popup-in">
          <div v-if="ShowModal" @click="ShowModal = !ShowModal" class="modal-container">
            <div  class="request-service-popup">
                <h3>Request Service : {{PlanTitle}} Plan</h3>
                <p>After we recive your request , one of our representers will contact you in 12 to 24 Hours to deiscuss the project details.</p>
                <form action="#">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name">
                    <label for="contact">Contact Method</label>
                    <input type="text" name="contact" id="contact" placeholder="Email or Phone Number">
                    <label for="name">Message (not required)</label>
                    <textarea rows="8" name="name" id="name" placeholder="Project Description in few lines , will ask for more details anyway"></textarea>
                    <input type="submit" name="send" value="Send Request" >
                </form>
            </div>
        </div>
      </transition>
  </section>
</template>

<script>
export default {
  name: 'Portfolio',
  data:function(){
      return {
          ShowModal : false,
          PlanTitle: ""
      }
  },
  methods:{
      ShowRequestModal: function(title){
          this.ShowModal = !this.ShowModal;
          this.PlanTitle = title;
      },
      
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/sass/vars.scss";
//The Portfolio Container
.fade-popup-in-leave-active , .fade-popup-in-enter-active{
    transition: all ease 0.5s;
}
.fade-popup-in-enter-active {
    transition-delay: 0.5s;
}
.fade-popup-in-enter , .fade-leave-to{
    opacity: 0;
    transform: translateY(20px);
}
// From              To
.fade-popup-in-enter-to, .fade-leave /* .fade-leave-active below version 2.1.8 */ {
  opacity: 1;
  transform: translateY(0);
}
.modal-container{
    position:fixed;
    height:100vh;
    width:100vw;
    background:rgba(0,0,0,0.6);
    z-index:9999999;
    top:0;
    left:0;
}
.request-service-popup{
    position: absolute;
    top: 5%;
    width:30%;
    right:35%;
    left:35%;
    padding:25px;
    border-radius:4px;
    background:#fff;
    box-sizing: border-box;
    h3{
        color:$brand;
        font-size:1.5em;
        margin-bottom: 20px;
        text-align: center;
    }
    p{
        color:$dark-gray;
        margin-bottom:10px;
    }
    form{
        input , label , textarea{
            display:block;
            width:100%;
            box-sizing: border-box;
        }
        label{
            font-weight: bold;
            margin-bottom: 5px;
        }
        input,textarea{
            margin-bottom: 15px;
            padding:10px;
            border-radius:4px;
            background:$light-gray;
            border:none;
            outline:none;
            &[type="submit"]{
                background: $brand;
                color:#fff;
                text-align: center;
                font-weight:bold;
            }
        }
    }
}
.pricing-section{
    padding: $section-padding;
  h2.section-title {
    font-size: 2em;
    margin-bottom: 25px;
    text-align: center;
  }
  p.section-description  {
    text-align: center;
    color: $dark-gray;
    margin-bottom: 30px;
  }
  p.section-clear{
    text-align: center;
    color: $dark-gray;
    margin-bottom: 30px;
    a{
        color:$brand;
        text-decoration:none;
        font-weight: bold;
    }
  }
.pricing-panel-low{
    background: rgb(28,107,185);
    background: -moz-linear-gradient(180deg, rgba(28,107,185,1) 0%, rgba(70,180,181,1) 100%);
    background: -webkit-linear-gradient(180deg, rgba(28,107,185,1) 0%, rgba(70,180,181,1) 100%);
    background: linear-gradient(180deg, rgba(28,107,185,1) 0%, rgba(70,180,181,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#1c6bb9",endColorstr="#46b4b5",GradientType=1);
    .plan-price{
        p{
            color:rgb(28,107,185);
        }
    }
}
.pricing-panel-med{
    background: rgb(77,72,181);
    background: -moz-linear-gradient(180deg, rgba(77,72,181,1) 0%, rgba(27,23,80,1) 100%);
    background: -webkit-linear-gradient(180deg, rgba(77,72,181,1) 0%, rgba(27,23,80,1) 100%);
    background: linear-gradient(180deg, rgba(77,72,181,1) 0%, rgba(27,23,80,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#4d48b5",endColorstr="#1b1750",GradientType=1);
    .plan-price{
        p{
            color:rgb(77,72,181);
        }
    }
}
.pricing-panel-high{
    background: rgb(14,24,116);
    background: -moz-linear-gradient(180deg, rgba(14,24,116,1) 0%, rgba(65,80,130,1) 100%);
    background: -webkit-linear-gradient(180deg, rgba(14,24,116,1) 0%, rgba(65,80,130,1) 100%);
    background: linear-gradient(180deg, rgba(14,24,116,1) 0%, rgba(65,80,130,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#0e1874",endColorstr="#415082",GradientType=1);
    .plan-price{
        p{
            color:rgb(14,24,116);
        }
    }
}
  .prcing-panel{
      width: 70%;
      margin: auto;
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
.modal-container{
    overflow-y:scroll;

}
.request-service-popup{
    width:70%;
    left:15%;
    right:15%;
    top:5%;
    padding:15px;
    margin-bottom: 5%;
    h3{
        font-size:1.2em;
        margin-bottom: 10px;
    }
}
}
</style>
