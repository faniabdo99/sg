/* eslint-disable */
import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from './Home'
import SingleProject from './components/pages/single-project'
import App from './App'
import vueSmoothScroll from 'vue2-smooth-scroll'

//Smoth Sroll Plugin
Vue.use(vueSmoothScroll)

const WOW = require('wowjs');
Vue.config.productionTip = false

//Router Usage
Vue.use(VueRouter)
const routes = [
  {path:'/' , component:App},
  {path:'/project' , component:SingleProject}
]
const router = new VueRouter({
  routes : routes,
  mode: 'history'
})
//Instance Creation
new Vue({
  router : router,
  render: h => h(Home)
}).$mount('#app')






//WOw.js Integration
window.wow = new WOW.WOW({
  live: false
});
window.wow.init();

