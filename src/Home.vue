<template>
  <div id="app">
    <transition name="fade">
      <router-view></router-view>
    </transition>
    <footer-comp></footer-comp>
  </div>
</template>

<script>
import FooterComp from './components/footer-comp.vue'

export default {
  name: 'Home',
  components: {
    FooterComp
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
    transform: translateY(20px);
}
// From              To
.fade-enter-to, .fade-leave /* .fade-leave-active below version 2.1.8 */ {
  opacity: 1;
  transform: translateY(0);
}

body::-webkit-scrollbar {
    width: 6px;
    background-color: rgab(0,0,0,0);
}
body::-webkit-scrollbar-thumb {
  background-color: $brand;
  border-radius:50px;
}
body::-webkit-scrollbar:horizontal{
  height: 0px;
}
</style>
