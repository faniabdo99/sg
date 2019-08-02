<template>
  <div class="services-section">
    <h2>What We Do</h2>
    <p>This Section is under development , we need to find better idea and better excution .</p>
    <div class="row">
      <div class="col-md-4 col-xs-6 col-sm-6">
        <div class="card-view">
          <div class="card-icon">
            <i class="fas fa-times"></i>
          </div>
          <h3>Identity Design</h3>
          <ul>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Logo
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Bussnies Card
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Website Design
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>CMS
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Digital Marketing
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Google Services
              </span>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-xs-6 col-sm-6">
        <div class="card-view">
          <div class="card-icon">
            <i class="fas fa-times"></i>
          </div>
          <h3>Merchindais</h3>
          <ul>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Mugs
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>T-Shirts
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Flags
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>CMS
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Digital Marketing
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Google Services
              </span>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-xs-6 col-sm-6">
        <div class="card-view">
          <div class="card-icon">
            <i class="fas fa-times"></i>
          </div>
          <h3>Digital Marketing</h3>
          <ul>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Social Media
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Adwords
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>SEO
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Modern Design
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>All in one
              </span>
            </li>
            <li>
              <span>
                <i class="fas fa-file-code"></i>Google Services
              </span>
            </li>
          </ul>
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
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
    border-radius: 10px;
    width:60%;
    margin:0 auto;
    .card-icon {
        background-color: $brand;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        margin: 10px auto 25px auto;
        color: #fff;
        position: relative;
        i {
        font-size: 1.5em;
        position: absolute;
        top: 35%;
        left: 40%;
        }
    }
    h3 {
      color: $brand;
      text-align: center;
      font-size: 1.3em;
      margin-bottom: 20px;
      text-transform: uppercase;
    }
    ul {
      text-align: center;
      li {
        margin-bottom: 15px;
        display: inline-block;
        background-color: $light-gray;
        padding: 8px;
        border-radius: 5px;
        font-weight: bold;
        font-size: 0.9em;
        i {
          color: $brand;
          margin-right: 5px;
        }
      }
    }
  }
}
@media screen and (max-width: 768px) {
}
</style>
