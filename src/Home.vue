<template>
  <div id="app">
    <navbar></navbar>
      <router-view></router-view>
    <footer-comp></footer-comp>
  </div>
</template>

<script>
import Navbar from './components/navbar.vue'
import FooterComp from './components/footer-comp.vue'
import App from './App.vue'

export default {
  name: 'Home',
  components: {
    Navbar,FooterComp,App
  }
}
</script>

<style lang="scss">
@import "./assets/sass/vars";
body::-webkit-scrollbar {
    width: 6px;
    background-color: rgab(0,0,0,0);
}
body::-webkit-scrollbar-thumb {
  background-color: $brand;
  border-radius:50px;
}
</style>
