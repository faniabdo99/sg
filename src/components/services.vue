<template>
  <div class="services-section">
    <h2>What We Do</h2>
    <p>This Section is under development , we need to find better idea and better excution .</p>
      <div class="row">
        <div class="col-md-4 col-xs-6 col-sm-6">
          <div class="card-container">
            <div class="card-icon">
              <i class="fas fa-times"></i>
            </div>
            <div class="card-content">
              <h3>Branding</h3>
              <ul>
                <li>Visual Identity</li>
                  <li>Logo Design</li>
                  <li>Bussnies Card</li>
                  <li>Letter Head</li>
                  <li>Rollups</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-6 col-sm-6">
          <div class="card-container">
            <div class="card-icon">
              <i class="fas fa-times"></i>
            </div>
            <div class="card-content">
              <h3>Web Development</h3>
              <ul>
                <li>Landing Page</li>
                <li>Dynamic Sites</li>
                <li>CMS</li>
                <li>VPS</li>
                <li>Shared Hostings</li>
              </ul>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-xs-6 col-sm-6">
          <div class="card-container">
            <div class="card-icon">
              <i class="fas fa-times"></i>
            </div>
            <div class="card-content">
              <h3>Merchandies</h3>
              <ul>
                <li>Uniforms</li>
                <li>Mugs</li>
                <li>Flags</li>
                <li>Notebooks</li>
                <li>Envelopes</li>
              </ul>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-xs-6 col-sm-6">
          <div class="card-container">
            <div class="card-icon">
              <i class="fas fa-times"></i>
            </div>
            <div class="card-content">
              <h3>Digital Mrkeitng</h3>
              <ul>
                <li>Page Photo</li>
                <li>Cover</li>
                <li>Posters Designs</li>
                <li>Account Supervision</li>
                <li>Mrkeiting Campings</li>
              </ul>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-xs-6 col-sm-6">
          <div class="card-container">
            <div class="card-icon">
              <i class="fas fa-times"></i>
            </div>
            <div class="card-content">
              <h3>Photographic</h3>
              <ul>
                <li>Area Photographic</li>
                <li>Products</li>
                <li>Modern Stuff</li>
                <li>Single Content</li>
                <li>Single Content</li>
              </ul>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-xs-6 col-sm-6">
          <div class="card-container">
            <div class="card-icon">
              <i class="fas fa-times"></i>
            </div>
            <div class="card-content">
              <h3>Last Services</h3>
              <ul>
                <li>Visual Identity</li>
                <li>Logo</li>
                <li>Single Content</li>
                <li>Single Content</li>
                <li>Single Content</li>
              </ul>
            </div>
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

  .card-container{
    width: 60%;
    margin: 0px auto 15px auto;
    padding:10px 40px;
    background-color: $light-gray;
    border-radius: 5px;
    .card-icon{
        text-align: center;
        margin:20px 0;
      i{
        font-size: 2em;
        color: $brand;
      }
    }

    .card-content{
      h3{
        color:$brand;
        text-align: center;
        font-weight: bold;
        font-size: 1.5em;
        margin-bottom: 20px;
      }
      ul{
        li{
          margin-bottom: 15px;
          font-weight: bold;
          font-size: 0.9em;
          &::before{
            content: "";
            display: inline-block;
            height: 6px;
            width:17px;
            margin-right: 5px;
            border-radius: 5px;
            background-color: $brand;
          }
        }
      }
    }
  }
  
}
@media screen and (max-width: 768px) {
}
</style>
