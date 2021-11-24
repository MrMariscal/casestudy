import { createRouter, createWebHashHistory, createWebHistory } from "vue-router";

import EmployeesIndex from "../components/employees/EmployeesIndex";
import EmployeesCreate from "../components/employees/EmployeesCreate";
import EmployeesEdit from "../components/employees/EmployeesEdit";


const routes = [
    {
        path: '/dashboard',
        name: 'employees.index',
        component: EmployeesIndex
    },
    {
        path: '/employees/create',
        name: 'employees.create',
        component: EmployeesCreate
    },
    {
        path: '/employees/:id/edit',
        name: 'employees.edit',
        component: EmployeesEdit,
        props: true
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})