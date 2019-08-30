<template>
<div id="top" class="container-fluid">
    <section class="all-projects">
        <h1>Portfolio - Made By Passion , Not Designers</h1>
    </section>
    <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12">
            <div class="filters">
                <h2>Filter by type</h2>
                <ul class="projects-filters">
                    <li><a @click="type=''"><i class="fas fa-asterisk"></i>  All</a></li>
                    <li><a @click="type='logo'"><i class="fab fa-pied-piper"></i>  Logos</a></li>
                    <li><a @click="type='website'"><i class="fas fa-globe"></i>  Websites</a></li>
                    <li><a @click="type='id'"><i class="fas fa-id-card"></i>  Identities</a></li>  
                </ul>
            </div>
        </div>
    <div class="col-md-9 col-xs-12 col-sm-12">
  
        <transition-group tag="div" class="projects-list" name="shuffle">
            <div class="item" v-for="item in filteredItems"  v-bind:key="item.id" >
                
                    <div class="img-container">
                        <img :src="item.imageSrc" :alt=" item.title + item.type" >
                    </div>
                    <div class="text-container">
                         <h2>{{item.title}}</h2>
                    </div>
                    <router-link :to="item.to">Full Project</router-link>
            </div>
        </transition-group>
     </div>
   </div>
</div>
</template>

<script>
export default {
    data: function(){
        return{
            type: '',
            items : [
                {id: 1 , title: "Naqrah Brand Identity & Website" , type: 'website' , imageSrc: '/icons/projects/naqrah/logo.png' , to: '/naqrah'},
                {id: 2 , title: "Bayan Medican Logo" , type: 'id' , imageSrc: '/icons/projects/bayan/logo.png' , to: '/bayan'},
                {id: 3 , title: "Durrat Alkhaligh Identity" , type: 'id' , imageSrc: '/icons/projects/durra/logo.png' , to: '/durrat-alkhaligh'},
                {id: 4 , title: "Tatwer Alalamya Identity" , type: 'id' , imageSrc: '/icons/projects/tatwer/logo.jpg' , to: '/tatwer'},
                {id: 5 , title: "Versace Brand Identity" , type: 'id' , imageSrc: '/icons/projects/verasce/Black Logo.png' , to: '/naqrah'},
                {id: 6 , title: "Tanmea Website" , type: 'website' , imageSrc: '/icons/projects/naqrah/logo.png' , to: '/naqrah'},
                {id: 7 , title: "Jackorta Apps Website" , type: 'website' , imageSrc: '/icons/projects/naqrah/logo.png' , to: '/naqrah'},
                {id: 8 , title: "Tanmea Website" , type: 'id' , imageSrc: '/icons/projects/naqrah/logo.png' , to: '/naqrah'},
                {id: 9 , title: "Tanmea Website" , type: 'id' , imageSrc: '/icons/projects/naqrah/logo.png' , to: '/naqrah'},
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
.row{
    margin-top: 30px;
}
.all-projects{
    background-color: $brand;
    height: 50vh;
    padding-top: 25vh;
    box-sizing: border-box;
    h1{
        color:#fff;
        text-align: center;
        font-size: 2.5em;
    }
}
.filters{
    padding:25px;
    box-sizing: border-box;
    background-color:$light-gray;
    h2{
        color:$brand;
        margin-bottom: 25px;
   
    }
}
ul.projects-filters{   
    li{
        margin-bottom: 15px;
        a{

            i{
                color :$brand;
                margin-right:8px;
                &::after{
                    content: "";
                    display: block;
                    width:100%;
                    margin-top: 5px;
                    height: 2px;
                    background-color:$brand;
                    transform: translateX(-20px);
                    transition: all ease 0.3s;
                    opacity: 0;
                }
            }
            text-decoration: none;
            color:$black;
            font-size: 0.9em;
            font-weight: bold;
            transition: all ease  0.3s;

            &:hover{
                cursor: pointer;
                color:$brand;
                transition: all ease  0.3s;
                i{
                    &::after{
                        opacity: 1;
                        transition: all ease 0.3s;
                        transform: translateX(0);
                    }
                }
            }
        }
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
