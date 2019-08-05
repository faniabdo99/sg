<template>
  <div class="testos-section">
    <h2>Clients Reviews</h2>
    <p>Nice Opinions , Not Lies at all.</p>
    <div class="row">
        <div class="col-md-4 col-xs-4 col-sm-4">
            <div class="client-information">
                <div class="client-name">
                    <div class="image-container">
                     <img src="/icons/abd.jpg" alt="User Image" >
                    </div>  
                    <h3>{{quote.UserName}} <br> <small>{{quote.JobTitle}}</small></h3>
                </div>
                <ul class="stars-review">
                    <li><b>{{quote.SpecialWord}}</b></li>
                    <li v-for="index in quote.StarsCount" :key="index"><i class="fas fa-star"></i></li>
                </ul>
                <p class="client-description">
                    {{quote.Description}}
                </p>
            </div>
        </div>
        <div class="col-md-7 col-xs-7 col-sm-7">
            <blockquote>
                <i class="fas fa-quote-left"></i>
                <span>{{quote.content}}</span>
                <i class="fas fa-quote-right"></i>
            </blockquote>
        </div>
        <div class="col-md-1 col-xs-1 col-sm-1">
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
      quote: {
          content: "  Some 20 Words Fomr THe First Quoter Quote Here .Some 20 Words Quote Here .Some 20 Words Quote Here .",
          imageUrl: "/icons/abd.jpg",
          UserName: "First Quoter",
          JobTitle: "Owner @ First Company",
          Description: "Some Long Description here about the First person.",
          SpecialWord: "Amaizing Stuff!",
          StarsCount: 5
      }
    }// End Data Return Function
  },
  methods: {
      chnageQuote: function(id){
          
          if(id == 1){
              document.querySelector("#first-item").classList.add("active");
              document.querySelector("#second-item").classList.remove("active");
              document.querySelector("#third-item").classList.remove("active");
              //The First Quote
             this.quote.content = "  Some 20 Words Fomr THe First Quoter Quote Here .Some 20 Words Quote Here .Some 20 Words Quote Here .";
             this.quote.imageUrl=  "/icons/abd.jpg";
             this.quote.UserName=  "First Quoter";
             this.quote.JobTitle=  "Owner @ First Company";
             this.quote.Description=  "Some Long Description here about the First person.";
             this.quote.SpecialWord = "Amaizing Stuff!";
             this.quote.StarsCount = 5;
          }else if(id == 2){
              document.querySelector("#first-item").classList.remove("active");
              document.querySelector("#second-item").classList.add("active");
              document.querySelector("#third-item").classList.remove("active");
             this.quote.content = "  Some 20 Words Fomr THe Second Quoter Quote Here .Some 20 Words Quote Here .Some 20 Words Quote Here .";
             this.quote.imageUrl=  "/icons/abd.jpg";
             this.quote.UserName=  "Second Quoter";
             this.quote.JobTitle=  "Owner @ Second Company";
             this.quote.Description=  "Some Long Description here about the Second person.";
             this.quote.SpecialWord = "More Than Expected...";
             this.quote.StarsCount = 4;

          }else if(id == 3){
              document.querySelector("#first-item").classList.remove("active");
              document.querySelector("#second-item").classList.remove("active");
              document.querySelector("#third-item").classList.add("active");
             this.quote.content = "  Some 20 Words Fomr THe Third Quoter Quote Here .Some 20 Words Quote Here .Some 20 Words Quote Here .";
             this.quote.imageUrl=  "/icons/abd.jpg";
             this.quote.UserName=  "Third Quoter";
             this.quote.JobTitle=  "Owner @ Third Company";
             this.quote.Description=  "Some Long Description here about the Third person.";
             this.quote.SpecialWord = "One More Text";
             this.quote.StarsCount = 5;
          }
      }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/sass/vars.scss";
//The Testos Section
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
      grid-columns-rows: repeat(5 , 20%);
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
}
</style>
