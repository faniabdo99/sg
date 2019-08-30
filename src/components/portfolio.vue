<template>
  <section id="portfolio" class="portfolio-section">
      <h2 class="section-title">Portfolio</h2>
      <p class="section-description">A gallery containing a set of our featured projects </p>
      <div class="projects-grid">
            <div class="project-view main-project wow fadeInDown">
                <router-link to="naqrah">
               <div class="project-logo">
                   <img src="/icons/projects/naqrah/logo.png" alt="Naqrah Logo">
                </div>
                <img class="project-image" src="/icons/projects/naqrah/background.png" alt="Naqrah Idenitiy Background">
                </router-link>
            </div>
            <div class="project-view main-row-project wow fadeInRight">
                <router-link to="tatwer">
                <div class="project-logo">
                   <img src="/icons/projects/tatwer/logo.jpg" alt="Tatwer Project">
                </div>
                <img class="project-image" src="/icons/projects/tatwer/poster.jpg" alt="Tatwer Project Identity">
                </router-link>
            </div>
            <div class="project-view wow fadeInUp">
                <router-link to="duraat-alkhaligh">
                <div class="project-logo">
                   <img src="/icons/projects/durra/logo.png" alt="Duarr Logo">
                </div>
                <img class="project-image" src="/icons/projects/durra/logo.png" alt="Duraat Alkaligh Identity">
                </router-link>
            </div>
            <div class="project-view wow fadeInUp">
                <router-link to="/verasce">
                <div class="project-logo">
                   <img src="icons/projects/verasce/logo-pink.png" alt="Logo">
                </div>
                <img class="project-image" src="icons/projects/verasce/cover.jpg" alt="Semicolon Group Identity">
                </router-link>
            </div>
      </div> <!-- End Grid View -->
      <router-link class="show-more-projects-link wow zoomIn" to="projects#top">See All Projects</router-link>
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
.portfolio-section{
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
  .projects-grid{
        display: grid;
        grid-gap: 20px;
        grid-template-columns: repeat(3 , 1fr);
        grid-template-rows: repeat(2 , 1fr);
    }
    .project-view{
        grid-column:span 1;
        grid-row:span 1;
        position: relative;
        
        img.project-image{
            transition: all ease 0.3s;
            filter: brightness(80%);
            width:100%;
            height:280px;
            border-radius: 4px;
        }
        .project-logo{
            position:absolute;
            z-index: 999;
            display: flex;
            align-items: center;
            flex-basis: 0;
            padding:25px;
            box-sizing: border-box;
            img{
                width: 80px;
                height: 70px;
                margin-right: 20px;
            }
        }
        &:hover{
            img.project-image{
                filter: brightness(10%);
                transition: all ease 0.3s;
            }
        }
    }
    .main-project{
        grid-column: 1 / span 2;
        grid-row: span 1;
    }
    .main-row-project{
        grid-row: span 2;
        grid-column: span 1;
        img.project-image{
            height: 100% !important;
        }
    }
    a.show-more-projects-link{
        background-color: $brand;
        padding: 15px;
        border-radius: 4px;
        border:2px solid $brand;
        color: #fff;
        font-weight: bold;
        display: block;
        margin: 25px auto 0 auto;
        width:16%;
        text-align:center;
        text-decoration: none;
        //font-size: 0.8em;
        transition: all ease 0.3s;
        &:hover{
            background-color: rgba(0,0,0,0);
            color:$brand;
            transition: all ease 0.3s;
        }
    }
}
@media screen and (max-width: 768px) {

.portfolio-section{
    padding: $section-padding-sm;
  h2.section-title {
    font-size: 1.5em;
  }
  .projects-grid{
        grid-gap: 10px;
    }
    .project-view{
        grid-column:span 1;
        grid-row:span 1;
        img.project-image{
            height:100px;
        }
        .project-logo{
            position:absolute;
            z-index: 999;
            display: flex;
            align-items: center;
            flex-basis: 0;
            padding:5px;
            box-sizing: border-box;
            p{
                font-size: 1em;
            }
            img{
                width: 30px;
                height: 30px;
                margin-right: 10px;
            }
        }
    }
    .main-project{
        grid-column: 1 / span 2;
        grid-row: span 1;
    }
    .main-row-project{
        grid-row: span 2;
        grid-column: span 1;
        img.project-image{
            height: 100% !important;
        }
    }
    a.show-more-projects-link{
        width:45%;
    }
}
}
</style>
