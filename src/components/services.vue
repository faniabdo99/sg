<template>
  <section id="services" class="services-section">
    <h2>Our Services</h2>
    <p>We provide services in branding and digital design , take a look</p>
      <div class="row">
        <div class="col-md-4 col-xs-6 col-sm-6">
          <div class="card-container wow fadeIn">
            <div class="card-icon">
              <i class="fas fa-copyright"></i>
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
          <div class="card-container wow fadeIn">
            <div class="card-icon">
              <i class="fas fa-file-code"></i>
            </div>
            <div class="card-content">
              <h3>Web Development</h3>
              <ul>
                <li>Landing Page</li>
                <li>Dynamic Sites</li>
                <li>Custom Projects</li>
                <li>CMS</li>
                <li>Blog</li>
              </ul>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-xs-6 col-sm-6">
          <div class="card-container wow fadeIn">
            <div class="card-icon">
              <i class="fas fa-tshirt"></i>
            </div>
            <div class="card-content">
              <h3>Merchandise</h3>
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
          <div class="card-container wow fadeIn">
            <div class="card-icon">
              <i class="fas fa-bullhorn"></i>
            </div>
            <div class="card-content">
              <h3>Digital Mrkeitng</h3>
              <ul>
                <li>Page Photo</li>
                <li>Page Cover</li>
                <li>Posters Designs</li>
                <li>Account Supervision</li>
                <li>Mrkeiting Campings</li>
              </ul>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-xs-6 col-sm-6">
          <div class="card-container wow fadeIn">
            <div class="card-icon">
              <i class="fas fa-camera-retro"></i>
            </div>
            <div class="card-content">
              <h3>Photographic</h3>
              <ul>
                <li>Area Photographic</li>
                <li>Products</li>
                <li>Person Photographic</li>
                <li>Workplace Photographic</li>
                <li>Custom Ideas</li>
              </ul>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-xs-6 col-sm-6">
          <div class="card-container wow fadeIn">
            <div class="card-icon">
              <i class="fas fa-print"></i>
            </div>
            <div class="card-content">
              <h3>Printing</h3>
              <ul>
                <li>Bussnies Cards</li>
                <li>Letter Head</li>
                <li>Brouchors</li>
                <li>Papper Printing</li>
                <li>Fabric Printing</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
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
            height: 4px;
            width:15px;
            margin-right: 5px;
            border-radius: 5px;
            background-color: $brand;
            margin-bottom:3px;
          }
        }
      }
    }
  }
  
}
@media screen and (max-width: 768px) {
  .services-section {
   padding: $section-padding-sm;
  h2 {
    font-size: 1.5em;
  }
  .card-container{
    width: 70%;
    padding:10px 20px;
    .card-icon{
        margin:10px 0;
      i{
        font-size: 1.2em;
      }
    }

    .card-content{
      h3{
        font-size: 1em;
      }
      ul{
        li{
          margin-bottom: 10px;
          font-size: 0.7em;
          &::before{
            height: 4px;
            width:10px;
            margin-right: 4px;
          }
        }
      }
    }
  }
  
}

}
</style>
