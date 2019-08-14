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
            <div v-for="item in filteredItems"  v-bind:key="item.id" class="item logo">
                <a href="#"><h4>{{item.title}}</h4>
                <img :src="item.imageSrc" :alt=" item.title + item.type"></a>
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
                {id: 1 , title: "Semicolon Group" , type: 'logo' , imageSrc: '/icons/logo.png'},
                {id: 2 , title: "Semicolon" , type: 'logo' , imageSrc: '/icons/logo.png'},
                {id: 3 , title: "Naqrah" , type: 'id' , imageSrc: '/icons/logo.png'},
                {id: 4 , title: "ARTE" , type: 'id' , imageSrc: '/icons/logo.png'},
                {id: 5 , title: "Naqrah web" , type: 'website' , imageSrc: '/icons/logo.png'},
                {id: 6 , title: "Tanmea" , type: 'website' , imageSrc: '/icons/logo.png'}
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
    display: grid;
    grid-template-columns: repeat(3 , 1fr);
    grid-auto-rows: 250px;
    grid-auto-flow:  dense;
    grid-gap:15px;
    min-height: 150vh;
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
