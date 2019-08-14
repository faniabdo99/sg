<template>
  <div id="app">
    <navbar></navbar>
    <transition name="fade">
      <router-view></router-view>
    </transition>
    <footer-comp></footer-comp>
  </div>
</template>

<script>
import Navbar from './components/navbar.vue'
import FooterComp from './components/footer-comp.vue'

export default {
  name: 'Home',
  components: {
    Navbar,FooterComp
  }
}
</script>

<style lang="scss">
@import "./assets/sass/vars";
.fade-leave-active , .fade-enter-active{
    transition: all ease 0.5s;
}
.fade-enter-active {
    transition-delay: 0.5s;
}
.fade-enter , .fade-leave-to{
    opacity: 0;
    transform: scale(0);
}
// From              To
.fade-enter-to, .fade-leave /* .fade-leave-active below version 2.1.8 */ {
  opacity: 1;
  transform: scale(1);

}

body::-webkit-scrollbar {
    width: 6px;
    background-color: rgab(0,0,0,0);
}
body::-webkit-scrollbar-thumb {
  background-color: $brand;
  border-radius:50px;
}
</style>
