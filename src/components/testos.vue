<template>
  <div class="testos-section">
    <h2>Clients Reviews</h2>
    <p>Join Them , it's Your Chance!</p>
    <div class="row">
 
     <transition name="fade">
        <div v-if="itemToShow == 1"  class="item">
            <div class="col-md-4 col-xs-12 col-sm-12">
                <div class="client-information wow slideInLeft">
                    <div class="client-name">
                        <div class="image-container">
                        <img src="/img/hani.jpeg" alt="Hani Boqamsin" >
                        </div>  
                        <h3>Hani Bo Qmasine <br> <small>Owner @ Safakat Readiyah</small></h3>
                    </div>
                    <ul class="stars-review">
                        <li><b>Outstanding Work !</b></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                    </ul>
                    <p class="client-description">
                         #1 Agent Of Tanmea Company , Talker & Self Imporovment Teacher and Finance Expert
                    </p>
                </div>
            </div>
            <div class="col-md-7 col-xs-11 col-sm-11">
                <blockquote class="wow fadeIn">
                    <i class="fas fa-quote-left"></i>
                    <span>What makes <b>Semicolon Group</b> different in my opinion is that they offer you ideas more that what you even can think of! Happy to have the chance to work with them</span>
                    <i class="fas fa-quote-right"></i>
                </blockquote>
            </div>
        </div>
        </transition>

    <transition name="fade">
        <div v-if="itemToShow == 2"  class="item">
            <div class="col-md-4 col-xs-12 col-sm-12">
                <div class="client-information wow slideInLeft">
                    <div class="client-name">
                        <div class="image-container">
                        <img src="/img/abd.jpg" alt="User Image" >
                        </div>  
                        <h3>Abod Alzobair <br> <small>Owner @ Jackorta Apps</small></h3>
                    </div>
                    <ul class="stars-review">
                        <li><b>More Than Expected...</b></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                    <p class="client-description">
                        Owner and founder of Jackorta Apps , a Leading company in desktop and mobile applications
                    </p>
                </div>
            </div>
            <div class="col-md-7 col-xs-11 col-sm-11">
                <blockquote class=" wow fadeIn">
                    <i class="fas fa-quote-left"></i>
                    <span>We started our discussion with the idea of a simple landing page , at the end i found myslef with more feuaters at the same price and deadline! Awesome</span>
                    <i class="fas fa-quote-right"></i>
                </blockquote>
            </div>
        </div>
        </transition>
        <transition name="fade">
         <div v-if="itemToShow == 3" class="item">
            <div class="col-md-4 col-xs-12 col-sm-12">
                <div class="client-information wow slideInLeft">
                    <div class="client-name">
                        <div class="image-container">
                        <img src="/img/abd.jpg" alt="User Image" >
                        </div>  
                        <h3>Lamis Al-Otaiby <br> <small>Leader @ Smart Refrigerator</small></h3>
                    </div>
                    <ul class="stars-review">
                        <li><b>Professional Yet Kind</b></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                    <p class="client-description">
                        Lamis is the leader of smart refrigerator project , a startup company in Saudi Arabia
                    </p>
                </div>
            </div>
            <div class="col-md-7 col-xs-11 col-sm-11">
                <blockquote class=" wow fadeIn">
                    <i class="fas fa-quote-left"></i>
                    <span>I Was never a fan of technology , i bellive in papers and pen, but the systems that <b>SG</b> Developed for me what irresistible !</span>
                    <i class="fas fa-quote-right"></i>
                </blockquote>
            </div>
        </div>
        </transition>
   <div class="col-md-1 col-xs-1 col-sm-1 pull-right">
        <div class="quotes-indicators">
            <ul id="indicators-list">
                <li id="first-item" @click="chnageQuote(1)" class="active"><i class="fas fa-circle"></i></li>
                <li id="second-item" @click="chnageQuote(2)" ><i class="fas fa-circle"></i></li>
                <li id="third-item" @click="chnageQuote(3)" ><i class="fas fa-circle"></i></li>
            </ul>
        </div>
    </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Testos",
  data:function(){
      return {
          itemToShow : 1
    }// End Data Return Function
  },
  created(){
    this.interval = setInterval(() => this.UpdateQoutes(), 16000);
  },//Created End 
  methods: {
      UpdateQoutes: function(){
          this.itemToShow = this.itemToShow + 1;
          if(this.itemToShow > 3){
              this.itemToShow = 1;
          }
          this.chnageQuote(this.itemToShow);
      },
    
      chnageQuote: function(id){
            if(id == 1){
              document.querySelector("#first-item").classList.add("active");
              document.querySelector("#second-item").classList.remove("active");
              document.querySelector("#third-item").classList.remove("active");
              this.itemToShow = 1;
          }else if(id == 2){
              document.querySelector("#first-item").classList.remove("active");
              document.querySelector("#second-item").classList.add("active");
              document.querySelector("#third-item").classList.remove("active");
              this.itemToShow = 2;
          }else if(id == 3){
              document.querySelector("#first-item").classList.remove("active");
              document.querySelector("#second-item").classList.remove("active");
              document.querySelector("#third-item").classList.add("active");
              this.itemToShow = 3;
          }
      }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/sass/vars.scss";
.fade-leave-active , .fade-enter-active{
    transition: all ease 0.5s;
}
.fade-enter-active {
    transition-delay: 0.5s;
}
.fade-enter , .fade-leave-to{
    opacity: 0;
    transform: translateY(50px);
}
// From              To
.fade-enter-to, .fade-leave /* .fade-leave-active below version 2.1.8 */ {
  opacity: 1;
  transform: translateY(0);

}

//The Testos Section

.item{
    height:270px;
    position: absolute;
    width:85%;
}
.testos-section{
    background-color:#fff;
    padding:$section-padding;
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

  .client-information{
      height: 250px;
      background-color: $light-gray;
      padding:10px 25px;
      border-radius: 10px;
      width:80%;
      margin-right: auto;
      .client-name{
          display: flex;
          flex-basis: 0;
          align-items: center;
          justify-content: flex-start;
          margin-bottom: 20px;
            .image-container{
                img{
                    width:80px;
                    height: 80px;
                    border-radius: 50%;
                    border: 2px solid $brand;
                    margin-right: 25px;
                }
            }
            h3{
                color:$brand;
                small{
                    color:$dark-gray;
                }
            }
      }
      ul.stars-review{
          margin-bottom: 10px;
          li{
              display: inline-block;
              color:#f7da49;
              &:first-child{
                  color:$black;
                  font-style: italic;
                  margin-right: 10px;
              }
          }
      }
      p.client-description{
          text-align:left;
          line-height: 1.8;
      }
  }//End Client Information
  blockquote{
      max-height: 250px;
      i{
          color:$brand;
          margin-right: 5px;
          margin-left: 5px;
      }
      font-size: 2em;
      line-height: 1.8;
  }
  .quotes-indicators{
      box-sizing: border-box;
      height: 250px;
      display: grid;
      grid-template-rows: repeat(5 , 50px);
      grid-template-rows: repeat(5 , 20%);
      ul{
           grid-row-start: 4;
           grid-row-end: 5;
           grid-column-start: 3;
           grid-column-end: 5;
           
          li{
            color:darken($light-gray , 20%);
            margin-bottom: 10px;
                i{
                font-size: 0.5em;
                transition: all ease 0.3s;
                &:hover{
                    color:$brand;
                    cursor: pointer;
                }
            }
            &.active{
                i{
                    color:$brand;
                }
            }
          
          }
      }
  }
}
@media screen and (max-width: 768px) {
.item{
    position: relative;
}
.testos-section{
    padding:$section-padding-sm;
    h2 {
    font-size: 1.5em;
  }
 
  .client-information{
      box-sizing: border-box;
      height: 200px;
      padding:10px 25px;
      width:100%;
      margin-bottom: 25px;
      
      .client-name{
          display: flex;
          flex-basis: 0;
          align-items: center;
          justify-content: flex-start;
          margin-bottom: 20px;
            .image-container{
                img{
                    width:60px;
                    height: 60px;
                }
            }
            h3{
                font-size: 1em;
            }
      }
      p.client-description{
          line-height: 1.4;
      }
  }//End Client Information
  blockquote{
      padding:15px;
      i{
          color:$brand;
          margin-right: 5px;
          margin-left: 5px;
      }
      font-size: 1.2em;
      line-height: 1.8;
  }
  .quotes-indicators{
      height: 50px;
  }
}
}
</style>
