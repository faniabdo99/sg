<template>
  <div class="services-section">
    <h2>What We Do</h2>
    <p>This Section is under development , we need to find better idea and better excution .</p>
    <div class="row">


      <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="card-view">
          <div class="service-icon">
           <img src="/icons/dev.svg" alt="Web Development">
          </div>
          <div class="service-description">
            <h3>Identity Design</h3>
          </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, animi.</p>
        </div>


 <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="card-view">
          <div class="service-icon">
           <img src="/icons/dev.svg" alt="Web Development">
          </div>
          <div class="service-description">
            <h3>Web Development</h3>
          </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, animi.</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Services"
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/sass/vars.scss";
//The Services Section
.services-section {
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
  

  .card-view {
    padding: 15px 30px;
    border-radius: 10px;
    width:60%;
    margin:0 auto;
    display: flex;
    align-items: center;
    flex-basis: 0;
    .service-icon{
      flex:1;
      img{
        width:70px;
        height: 70px;
        display: block;
        margin: 0 auto 25px auto;
      }
    }
    .service-description{
      flex:10;
    h3 {
      color: $brand;
      text-align: center;
      font-size: 1.3em;
      margin-bottom: 20px;
      text-transform: uppercase;
    }
  }
  }
}
@media screen and (max-width: 768px) {
}
</style>
