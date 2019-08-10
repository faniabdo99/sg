import Vue from 'vue'
import App from './App.vue'
const WOW = require('wowjs');
Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')

window.wow = new WOW.WOW({
  live: false
});
window.wow.init();

