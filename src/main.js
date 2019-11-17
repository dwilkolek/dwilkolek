import Vue from 'vue'
import App from './App.vue'
import './../node_modules/bulma/css/bulma.css';
import './registerServiceWorker'

import { library } from '@fortawesome/fontawesome-svg-core'
import { faCode, faDatabase, faCubes, faCheckDouble, faTools, faGrinBeam, faTrophy, faHatCowboy } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
library.add(faCode, faDatabase, faCubes, faCheckDouble, faTools, faGrinBeam, faTrophy, faHatCowboy);

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
  mounted: () => document.dispatchEvent(new Event("x-app-rendered")),
}).$mount('#app')
