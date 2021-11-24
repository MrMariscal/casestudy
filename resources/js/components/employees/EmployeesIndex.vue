<template>
    <div>
        <div class="flex place-content-end mb-4">
            <div class="px-4 py-2 text-white bg-indigo-600 hover:bg-indigo-700 cursor-pointer">
                <router-link :to="{ name: 'employees.create' }" class="text-sm font-medium">Create a new employee</router-link>
            </div>
        </div>

        <table class="overscroll-contain">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50">
                        <span class="text-xs font-meidum tracking-wider leading-4 text-left text-gray-500">EMP. ID</span>
                    </th>
                    <th class="px-6 py-3 bg-gray-50">
                        <span class="text-xs font-meidum tracking-wider leading-4 text-left text-gray-500">PREFIX</span>
                    </th>
                    <th class="px-6 py-3 bg-gray-50">
                        <span class="text-xs font-meidum tracking-wider leading-4 text-left text-gray-500">FIRST NAME</span>
                    </th>
                    <th class="px-6 py-3 bg-gray-50">
                        <span class="text-xs font-meidum tracking-wider leading-4 text-left text-gray-500">MIDDLE INITIAL</span>
                    </th>
                    <th class="px-6 py-3 bg-gray-50">
                        <span class="text-xs font-meidum tracking-wider leading-4 text-left text-gray-500">LAST NAME</span>
                    </th>
                    <th class="px-6 py-3 bg-gray-50">
                        <span class="text-xs font-meidum tracking-wider leading-4 text-left text-gray-500">E-MAIL</span>
                    </th>
                    <th class="px-6 py-3 bg-gray-50">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                <template v-for="employee in employees" :key="employee.id">
                    <tr class="bg-white">
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ employee.emp_id }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ employee.name_prefix }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ employee.first_name }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ employee.middle_initial }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ employee.last_name }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ employee.e_mail }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            <router-link :to="{ name: 'employees.edit', params: {id: employee.id } }" 
                            class="inline-flex mr-2 items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Edit</router-link>
                            <button @click="deleteEmployee(employee.id)"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Delete</button>
                        </td>
                    </tr>                
                </template>
            </tbody>
        </table>
    </div>
</template>
<script>
    import useEmployeess from "../../composables/employees"
    import {onMounted} from "vue";
import Button from '../../../../vendor/laravel/breeze/stubs/inertia-vue/resources/js/Components/Button.vue';

    export default {
    setup(){

        const {employees, getEmployees, destroyEmployee} = useEmployeess();

        onMounted(getEmployees);

        const deleteEmployee = async(id) => {
            if (!window.confirm('Are you sure to delete it?')){
                return;
            }
            await destroyEmployee(id);
            await getEmployees();
        }

        return {
            employees,
            deleteEmployee
        }

    }
}
</script>