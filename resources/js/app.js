require('./bootstrap');

require('alpinejs');

import Vue from 'vue'

//Main pages
import ComputerItem from './views/ComputerItem.vue'
import MakeComputer from './views/MakeComputer.vue'


const app = new Vue({
    el: '#app',
    components: { 
        ComputerItem, 
        MakeComputer 
    }
});
