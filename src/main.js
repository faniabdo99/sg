/* eslint-disable */

//Import Core Packages 
import Vue from 'vue'
import VueRouter from 'vue-router'
import vueSmoothScroll from 'vue2-smooth-scroll'
const WOW = require('wowjs');

//Import Needed Components
import Home from './Home'
import SingleProject from './components/pages/single-project'
import AllProjects from './components/pages/all-projects'
import App from './App'

/* Init The Core Packages */
Vue.use(vueSmoothScroll)
Vue.config.productionTip = false
Vue.use(VueRouter)
  window.wow = new WOW.WOW({
    live: false
  });
  window.wow.init();

//Router Usage
const router = new VueRouter({
  routes : [
    {path:'/' , component:App},
    {path:'/project' , component:SingleProject},
    {path:'/projects' , component:AllProjects}
  ],
  mode: 'history'
})






//Last Step , Create The Application
new Vue({
  router : router,
  render: h => h(Home)
}).$mount('#app')