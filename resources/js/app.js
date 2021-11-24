require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
import {createApp} from "vue";
import router from './router'
import EmployeesIndex from './components/employees/EmployeesIndex'

createApp({
    components:{
        EmployeesIndex
    }
}).use(router).mount('#app');
