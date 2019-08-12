<template>
<div class="container-fluid">
    <transition name="fade">
       <div v-show ="galleryVisibile" @click="galleryVisibile=false" class="gallery-bg">
           <div class="gallery-content">
            <h2 id="image-text">Semicolon Group | {{imageText}}</h2>
            <img id="image-src" :src="imageLink" alt="Semicolon Group Identity" >
           </div>
       </div>
    </transition>
    <div class="single-project">
       <section class="brand-cover">
            <div class="brand-cover-content">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="brand-main-info">
                                <div class="logo-container">
                                    <img src="/icons/logo.png" alt="Company Logo">
                                </div>
                                <h1>Semicolon Group</h1>
                        </div>
                        <p class="brand-information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptatibus doloribus quidem iure numquam explicabo aliquam. Porro facere repellendus voluptate?</p>
                        <a class="view-project" href="#project-overview" v-smooth-scroll="{ duration: 700, offset: -80 }">View Full Project</a>
                        <ul class="brand-images-list">
                            <li><img src="/icons/logo.png" alt="Bussnies Card"></li>
                            <li><img src="/icons/projects/id-card.png" alt="Bussnies Card"></li>
                            <li><img src="/icons/projects/id-card.png" alt="Bussnies Card"></li>
                            <li><img src="/icons/projects/id-card.png" alt="Bussnies Card"></li>
                        </ul>
                    </div>
                </div>
            </div>
       </section>
       <section id="project-overview" class="project-overview">
                   <div class="brand-concept">
                        <h2>Brand Idea & Concept</h2>
                        <p><b>Semicolon Group</b> is an internet startup company focused on providing top quality services for clients worldwide. Despite being new as a company, our team members are actually veterans of the industry, with years of experience in their respective fields. </p>
                   </div>
       </section>
       <section class="project-items">
           <div @click="ShowImages" class="item logo">
               <h4>Logo</h4>
               <img src="/icons/logo.png" alt="Logo">
           </div>
            <div @click="ShowImages" class="item logo-inverse">
               <h4>Logo Inverse</h4>
               <img src="/icons/logo-white.png" alt="Logo Inverse">
           </div>
            <div @click="ShowImages" class="item letter-head">
               <h4>Letter Head</h4>
               <img src="/icons/projects/id-card.png" alt="Letter Head">
           </div>
            <div @click="ShowImages" class="item bussnies-card">
               <h4>Bussnies Card</h4>
               <img src="/icons/projects/id-card.png" alt="Bussnies Card">
           </div>
            <div @click="ShowImages" class="item website">
               <h4>Website</h4>
               <img src="/icons/projects/id-card.png" alt="Website">
           </div>
            <div @click="ShowImages" class="item social-post">
               <h4>Social Post Template</h4>
               <img src="/icons/projects/id-card.png" alt="Social Post Template">
           </div>
       </section>
       
    </div>
 
</div>
</template>

<script>
export default {
    data: function(){
        return{
            galleryVisibile : false,
            imageText: '',
            imageLink: ''
        }
    },
  methods:{
      ShowImages: function(event){
          var that = this;
          var ClickedImageSrc = event.target.getAttribute("src");
          var ClickedImageTitle = event.target.getAttribute("alt");
          
          that.imageText = ClickedImageTitle;
          that.imageLink = ClickedImageSrc;
          that.galleryVisibile = true;
          
      },
  }
}
</script>

<style lang="scss" scoped>
@import "../../assets/sass/vars";
.fade-leave-active , .fade-enter-active{
    transition: all ease 0.5s;
}

.fade-enter , .fade-leave-to{
    opacity: 0;
}
// From              To
.fade-enter-to, .fade-leave /* .fade-leave-active below version 2.1.8 */ {
  opacity: 1;

}
.gallery-bg{
    box-sizing: border-box;
    padding-top:80px;
    position: fixed;
    height: 100vh;
    width: 100%;
    background-color: rgba(0,0,0,0.8);
    z-index: 999999;
    .gallery-content{
        width:60%;
        height: 90%;
        display: block;
        margin:auto;
        h2{
        color:#fff;
        font-size: 2em;
        margin-bottom: 15px;
         }
        img{
            width: 80%;
            height: 80%;
            display: block;
            margin:auto;
            border-radius: 4px;
        }
    }
 
}
.project-items{
    display: grid;
    grid-gap: 10px;
    padding: $section-padding;
    grid-template-columns: repeat(5 , 1fr);
    grid-template-rows: repeat(5 , 200px);
    box-sizing: border-box;
    .item{
        position: relative;
        h4{
            position: absolute;
            top: 15px;
            left: 15px;
            color:#fff;
            font-size: 1.2em;
            &::after{
                content: "";
                display: block;
                height: 2px;
                background-color: #fff;
                width:75%;
                border-radius:5px;
                margin-top:5px;
            }
        }
            img{
            width: 100%;
            height: 100%;
            border-radius:4px;
        }
    }

    .logo{
        box-sizing: border-box;
        grid-column: span 1;
        grid-row: span 1;
        background-color: $brand;
    }

    
    .logo-inverse{
        box-sizing: border-box;
        grid-column: span 1;
        grid-row:  2;
        background-color: black;
    
    }
    .letter-head{
        box-sizing: border-box;
        grid-column: 2 / 4;
        grid-row: span 2;
        background-color: #333;
       
    }
    .bussnies-card{
        box-sizing: border-box;
        grid-column: 4 / -1;
        grid-row: span 2;
        background-color: #555;
        
    }
    .website{
        box-sizing: border-box;
        grid-column: 1 / 4;
        grid-row: span 2;
        background-color: #504ec7;
        
    }
    .social-post{
        box-sizing: border-box;
        grid-column: 4 / -1;
        grid-row: span 2;
        background-color: #c74ead;
       
    }
}
.brand-cover{
    height: 100vh;
    background: url('/icons/hero.jpg') no-repeat center center;
    background-size: cover;
    .brand-cover-content{
        height: 100vh;
        padding : 25vh 15vw 0 15vw;
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0.8);
    }
    .brand-main-info{
        display: flex;
        flex-basis: 0;
        align-items: center;
        justify-content: space-around;
        .logo-container{
            flex:1;
            img{
                width: 100px;
                height: 100px;
                border-radius: 50%;
                margin-right:25px;
            }
        }
        h1{
            flex:8;
            font-size: 2.5em;
            color:#fff;
        }
    }
    p.brand-information{
        margin-top: 25px;
        color:#fff;
        font-size: 1.2em;
        line-height: 1.8;
    }
    a.view-project{
        margin:25px auto 0 0;
        padding:10px 25px;
        color: #fff;
        font-weight: bold;
        font-size: 1.1em;
        display:block;
        border:2px solid #fff;
        border-radius:4px;
        width:25%;
        text-decoration: none;
        text-align:center;
    }
    ul.brand-images-list{
        text-align:center;
        margin-top: 80px;
        li{
            display:inline-block;
            margin-right: 25px;
            img{
                width:60px;
                height:60px;
            }
        }
    }
}
.brand-concept{
    box-sizing: border-box;
    padding:$section-padding;
    h2{
        font-size: 2.5em;
        font-weight: bold;
        color:$brand;
        margin-bottom: 25px;
    }
    p{
        color:$dark-gray;
        font-size: 1.1em;
    }
}
</style>
