<template>
  <section class="portfolio-section">
      <h2 class="section-title">Portfolio</h2>
      <p class="section-description">Something We Proud Of...</p>
      <div class="projects-grid">
            <div class="project-view main-project">
                <img src="/icons/sg.jpeg" alt="Semicolon Group Identity">
            </div>
            <div class="project-view main-row-project">
                <img src="/icons/sg.jpeg" alt="Semicolon Group Identity">
                <div class="project-description">
                    <h2>SEMICOLON GROUP</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#">View Project</a>
                </div>
            </div>
            <div class="project-view">
                <img src="/icons/sg.jpeg" alt="Semicolon Group Identity">
                <div class="project-description">
                    <h2>SEMICOLON GROUP</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#">View Project</a>
                </div>
            </div>
            <div class="project-view">
                <img src="/icons/sg.jpeg" alt="Semicolon Group Identity">
                <div class="project-description">
                    <h2>SEMICOLON GROUP</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#">View Project</a>
                </div>
            </div>
      </div> <!-- End Grid View -->
      <a class="show-more-projects-link" href="#">Show More Projects</a>
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
        img{
            filter: brightness(80%);
            width:100%;
            height:280px;
        }
        .project-description{
            box-sizing: border-box;
            background-color:$brand;
            color: #fff;
            padding:25px 20px;
            display:none;
            h2{
                font-size: 1em;
                margin-bottom: 10px;
            }
            p{
                font-size:0.9em;
                margin-bottom: 20px;
            }
            a{
                background-color: #fff;
                color: $brand;
                text-decoration: none;
                font-size: 0.8em;
                border-radius: 2px;
                padding: 10px;
                display: block;
                text-align: center;
                font-weight: bold;
            }
        }
    }
    .main-project{
        grid-column: 1 / span 2;
        grid-row: span 1;
    }
    .main-row-project{
        border:2px solid red;
        grid-row: span 2;
        grid-column: span 1;
        img{
            height: 100% !important;
        }
    }
    a.show-more-projects-link{
        background-color: $brand;
        padding: 15px;
        border-radius: 4px;
        color: #fff;
        font-weight: bold;
        display: block;
        margin: 25px auto 0 auto;
        width:16%;
        text-align:center;
        text-decoration: none;
        font-size: 0.8em;
    }
}
@media screen and (max-width: 768px) {
}
</style>
