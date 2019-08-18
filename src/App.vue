<template>
    <div class="container-fluid">
        <hero></hero>
        <about></about>
        <services></services>
        <portfolio></portfolio>
        <team></team>
        <testos></testos>
        <doit></doit>
        <pricing></pricing>
        <contact></contact>
        <a href="#top" class="back-to-top" v-smooth-scroll="{ duration:2000 }" title="Back to top"><i class="fas fa-chevron-up"></i></a>
    </div>
</template>

<script>
import Hero from './components/hero.vue'
import About from './components/about-us.vue'
import Services from './components/services.vue'
import Portfolio from './components/portfolio.vue'
import Team from './components/team.vue'
import Testos from './components/testos.vue'
import Doit from './components/do-it.vue'
import Pricing from './components/pricing.vue'
import Contact from './components/contact.vue'
export default {
  name: 'app',
  components: {
    Hero,About,Services,Portfolio,Team,Testos,Doit,Pricing,Contact
  },

  created(){
    window.addEventListener('scroll' , function(){
      let BackToTop = document.querySelector('.back-to-top');
      if(window.scrollY > 300){
        BackToTop.classList.add("shown");
      }else{
        BackToTop.classList.remove("shown");
      }
    });
  }
}
</script>

<style lang="scss">
@import "./assets/sass/vars";

.back-to-top{
  opacity: 0;
  transform: translateX(100px);
  transition: all ease 0.5s;
  background-color: $brand;
  width:60px;
  height: 60px;
  padding-top:10px;
  border-top: 5px solid $brand;
  color:#fff;
  font-weight: bold;
  box-sizing: border-box;
  position: fixed;
  bottom: 30px;
  right: 30px;
  font-size: 1.5em;
  border-radius:50%;
  box-shadow: 0px 0px 5px rgba(0,0,0,0.5);
  text-align:center;
  z-index: 99999;
  i{
    transition: all ease 0.5s;
  }
  &:hover{
    i{
      transition: all ease 0.5s;
      transform: translateY(-5px)
    }
  }
  &.shown{
    transform: translateX(0);
    opacity:1;
  }

}
</style>
