'Branding'<template>
<div>
  <div id="top" class="container-fluid">
    <div class="row">
      <navbar :navActive="true"></navbar>
      <div class="col-md-12 col-xs-12 col-sm-12">
        <section class="all-projects-header">
          <h1>Semicolon Group Projects</h1>
          <p>Some of our Most inspiring projects along the road , Check 'em out!</p>
        </section>
      </div>
      <div v-for="item in items" v-bind:key="item.id" class="col-md-4 col-xs-6 col-sm-6">
        <div class="single-project">
          <div class="image-container">
            <img :src="item.imageSrc" alt="">
          </div>
          <div class="content-container">
            <h2>{{item.title}}</h2>
            <ul>
              <li><i class="fas fa-puzzle-piece"></i> {{item.type}}</li>
              <li><i class="fas fa-clock"></i> 22 Feb , 2020</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </p>
            <a href="#">View Full Project</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
import Navbar from '../navbar.vue';

export default {
  name: "AllProjects",
  components: {
    Navbar
  },
  data: function() {
    return {
      type: '',
      items: [{
          id: 1,
          title: "Naqrah Brand Identity & Website",
          type: 'Web Design',
          imageSrc: 'img/projects/naqrah/logo.png',
          to: '/naqrah'
        },
        {
          id: 2,
          title: "Bayan Medican Logo",
          type: 'Branding',
          imageSrc: 'img/projects/bayan/logo.png',
          to: '/bayan'
        },
        {
          id: 3,
          title: "Durrat Alkhaligh Identity",
          type: 'Branding',
          imageSrc: 'img/projects/durra/logo.png',
          to: '/durrat-alkhaligh'
        },
        {
          id: 4,
          title: "Tatwer Alalamya Identity",
          type: 'Branding',
          imageSrc: 'img/projects/tatwer/logo.jpg',
          to: '/tatwer'
        },
        {
          id: 5,
          title: "Versace Brand Identity",
          type: 'Branding',
          imageSrc: 'img/projects/verasce/Black Logo.png',
          to: '/naqrah'
        },
        {
          id: 6,
          title: "Tanmea Website",
          type: 'Web Design',
          imageSrc: 'img/projects/naqrah/logo.png',
          to: '/naqrah'
        },
        {
          id: 7,
          title: "Jackorta Apps Website",
          type: 'Web Design',
          imageSrc: 'img/projects/naqrah/logo.png',
          to: '/naqrah'
        },
        {
          id: 8,
          title: "Tanmea Website",
          type: 'Branding',
          imageSrc: 'img/projects/naqrah/logo.png',
          to: '/naqrah'
        },
        {
          id: 9,
          title: "Tanmea Website",
          type: 'Branding',
          imageSrc: 'img/projects/naqrah/logo.png',
          to: '/naqrah'
        },
      ]
    }
  },
  computed: {
    filteredItems: function() {
      return this.items.filter((item) => {
        return item.type.match(this.type);
      });
    }
  }
}
</script>

<style lang="scss" scoped>
@import "../../assets/sass/vars";

.shuffle-enter-active,
.shuffle-leave-active {
    transition: all ease 0.8s;
}
.shuffle-enter,
.shuffle-leave-to {
    opacity: 0;
    transform: translateY(500px);
}
// From              To
/* .fade-leave-active below version 2.1.8 */
.shuffle-enter-to,
.shuffle-leave {
    opacity: 1;
    transform: translateY(0);

}
.all-projects-header {
    margin-top: 150px;
    margin-bottom: 50px;
    text-align: center;
    .logo {
        margin-bottom: 15px;
        h1 {
            font-size: 1.5em;
            img {
                width: 40px;
                height: 40px;
                margin-right: 10px;
                border-radius: 50%;
                margin-bottom: -10px;
            }
        }
    }
    p {
        color: $dark-gray;
    }
}
.single-project{
  width: 80%;
  margin: auto;
  border-radius: 4px;
  background-color: $light-gray;
  margin-bottom: 60px;
  .image-container{
    img{
      width: 100%;
      height: 300px;
    }
  }
  .content-container{
    padding:15px;
    h2{
      color:$brand;
      margin-bottom: 10px;
    }
    ul{
      margin-bottom: 10px;
      li{
        display: inline-block;
        margin-right: 15px;
        color:$dark-gray;
        font-size:0.9em;
        i{
          color: $brand;
          margin-right: 5px;
        }
      }
    }
    p{
      color:$dark-gray;
      margin-bottom: 20px;
    }
    a{
      display: block;
      background: $brand;
      color: #fff;
      width: 30%;
      text-align: center;
      padding: 10px;
      border-radius: 4px;
      text-decoration: none;
    }
}
}

@media screen and (max-width:768px) {
    .all-projects {
        padding-top: 20vh;
        h1 {
            font-size: 1.5em;
        }
    }

    .projects-list {
        padding: 50px;
        grid-template-columns: 1fr;
        grid-auto-rows: 200px;
        grid-gap: 5px;
        min-height: auto;
    }

}
</style>
