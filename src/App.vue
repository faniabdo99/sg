<template>
  <div id="app">
    <div class="container-fluid">
        <navbar></navbar>
        <hero></hero>
        <about></about>
        <services></services>
        <team></team>
        <testos></testos>
    </div>
   
  </div>
</template>

<script>
import Navbar from './components/navbar.vue'
import Hero from './components/hero.vue'
import About from './components/about-us.vue'
import Services from './components/services.vue'
import Team from './components/team.vue'
import Testos from './components/testos.vue'
export default {
  name: 'app',
  components: {
    Navbar,Hero,About,Services,Team,Testos
  }
}
</script>

<style lang="scss">

</style>
