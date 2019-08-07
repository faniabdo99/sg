<template>
  <div id="app">
    <div class="container-fluid">
        <navbar></navbar>
        <hero></hero>
        <about></about>
        <services></services>
        <portfolio></portfolio>
        <team></team>
        <testos></testos>
        <doit></doit>
        <pricing></pricing>
        <contact></contact>
    </div>
   
  </div>
</template>

<script>
import Navbar from './components/navbar.vue'
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
    Navbar,Hero,About,Services,Portfolio,Team,Testos,Doit,Pricing,Contact
  }
}
</script>

<style lang="scss">

</style>
