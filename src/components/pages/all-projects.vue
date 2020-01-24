<template>
<div id="top" class="container-fluid">
    <div class="row">
        <navbar :addColoredClass="active" ></navbar>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12">
            <section class="all-projects-header">
                <div class="logo">
                    <h1><img src="img/logo.png" alt="Semicolon Group" > Semicolon Group</h1>
                </div>
                <p>Some of our Most inspiring projects along the road , Check 'em out!</p>
            </section>
        </div>
    <div class="col-md-4 col-xs-12 col-sm-12">
        <img src="https://placehold.it/100x100" alt="" title="">
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
    data: function(){
        return{
            type: '',
            items : [
                {id: 1 , title: "Naqrah Brand Identity & Website" , type: 'website' , imageSrc: 'img/projects/naqrah/logo.png' , to: '/naqrah'},
                {id: 2 , title: "Bayan Medican Logo" , type: 'id' , imageSrc: 'img/projects/bayan/logo.png' , to: '/bayan'},
                {id: 3 , title: "Durrat Alkhaligh Identity" , type: 'id' , imageSrc: 'img/projects/durra/logo.png' , to: '/durrat-alkhaligh'},
                {id: 4 , title: "Tatwer Alalamya Identity" , type: 'id' , imageSrc: 'img/projects/tatwer/logo.jpg' , to: '/tatwer'},
                {id: 5 , title: "Versace Brand Identity" , type: 'id' , imageSrc: 'img/projects/verasce/Black Logo.png' , to: '/naqrah'},
                {id: 6 , title: "Tanmea Website" , type: 'website' , imageSrc: 'img/projects/naqrah/logo.png' , to: '/naqrah'},
                {id: 7 , title: "Jackorta Apps Website" , type: 'website' , imageSrc: 'img/projects/naqrah/logo.png' , to: '/naqrah'},
                {id: 8 , title: "Tanmea Website" , type: 'id' , imageSrc: 'img/projects/naqrah/logo.png' , to: '/naqrah'},
                {id: 9 , title: "Tanmea Website" , type: 'id' , imageSrc: 'img/projects/naqrah/logo.png' , to: '/naqrah'},
            ]
        }
    },
  computed:{
     filteredItems: function(){
         return this.items.filter((item) => {
             return item.type.match(this.type);
         });
     }
  }
}
</script>

<style lang="scss" scoped>
@import "../../assets/sass/vars";

.shuffle-leave-active , .shuffle-enter-active{
    transition: all ease 0.8s;
}
.shuffle-enter , .shuffle-leave-to{
    opacity: 0;
    transform: translateY(500px);
}
// From              To
.shuffle-enter-to, .shuffle-leave /* .fade-leave-active below version 2.1.8 */ {
  opacity: 1;
  transform: translateY(0);

}
.all-projects-header{
    margin-top: 100px;
    text-align: center;
    .logo{
        margin-bottom: 15px;
        h1{
            font-size:1.5em;
            img{
                width:40px;
                height:40px;
                margin-right:10px;
                border-radius: 50%;
                margin-bottom: -10px;
            }
        }
    }
    p{
        color:$dark-gray;
    }
}
.projects-list{
    padding: 0 50px 50px 50px;
 
}
   .item{
        background:$light-gray;
        border-radius:5px;
        margin-bottom: 20px;
        display: flex;
        flex-basis: 0;
        align-items: center;
        
        .img-container{
            flex:1;
            background:$brand;
            padding:15px;
            img{
                width: 80px;
                height: 80px;
                display: block;
                margin:auto;
            }
        }
        .text-container{
            padding:15px;
            flex:5;
            h2{
                color:$brand;
            }
        }
        a{
            flex:1;
            background:$brand;
            padding:10px 15px;
            text-align: center;
            display:block;
            margin-right:15px;
            color:#fff;
            font-weight: bold;
            border-radius:5px;
            text-decoration:none;
        }
  

    }

@media screen and (max-width:768px){
.all-projects{
    padding-top: 20vh;
    h1{
        font-size: 1.5em;
    }
}

.projects-list{
    padding: 50px;
    grid-template-columns:  1fr;
    grid-auto-rows: 200px;
    grid-gap:5px;
    min-height: auto;
}

}
</style>
