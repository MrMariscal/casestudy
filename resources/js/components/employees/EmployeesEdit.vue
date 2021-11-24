<template>
    <form class="space-y-6" @submit.prevent="saveEmployee">
        <div class="space-y-4 rounded-md shadow-sm">
            <div>
                <label for="emp_id" class="block text-sm font-medium text-gray-700">Employee ID</label>
                <div class="mt-1">
                    <input type="number" name="emp_id" id="emp_id"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.emp_id">
                </div>
            </div>
            
            <div>
                <label for="name_prefix" class="block text-sm font-medium text-gray-700">Name Prefix</label>
                <div class="mt-1">
                    <input type="text" name="name_prefix" id="name_prefix"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.name_prefix">
                </div>
            </div>
            
            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <div class="mt-1">
                    <input type="text" name="first_name" id="first_name"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.first_name">
                </div>
            </div>
            
            <div>
                <label for="middle_initial" class="block text-sm font-medium text-gray-700">Middle Initial</label>
                <div class="mt-1">
                    <input type="text" maxlength="1" name="middle_initial" id="middle_initial"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.middle_initial">
                </div>
            </div>
            
            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <div class="mt-1">
                    <input type="text" name="last_name" id="last_name"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.last_name">
                </div>
            </div>
            
            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <div class="mt-1">
                    <input type="text" name="gender" id="gender"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.gender">
                </div>
            </div>
            
            <div>
                <label for="e_mail" class="block text-sm font-medium text-gray-700">E Mail</label>
                <div class="mt-1">
                    <input type="email" name="e_mail" id="e_mail"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.e_mail">
                </div>
            </div>
            
            <div>
                <label for="fathers_name" class="block text-sm font-medium text-gray-700">Father's Name</label>
                <div class="mt-1">
                    <input type="text" name="fathers_name" id="fathers_name"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.fathers_name">
                </div>
            </div>
            
            <div>
                <label for="mothers_name" class="block text-sm font-medium text-gray-700">Mother's Name</label>
                <div class="mt-1">
                    <input type="text" name="mothers_name" id="mothers_name"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.mothers_name">
                </div>
            </div>
            
            <div>
                <label for="mothers_maiden_name" class="block text-sm font-medium text-gray-700">Mother's Maiden Name</label>
                <div class="mt-1">
                    <input type="text" name="mothers_maiden_name" id="mothers_maiden_name"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.mothers_maiden_name">
                </div>
            </div>
            
            <div>
                <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <div class="mt-1">
                    <input type="date" name="date_of_birth" id="date_of_birth"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.date_of_birth">
                </div>
            </div>
            
            <div>
                <label for="date_of_joining" class="block text-sm font-medium text-gray-700">Date of Joining</label>
                <div class="mt-1">
                    <input type="date" name="date_of_joining" id="date_of_joining"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.date_of_joining">
                </div>
            </div>
            
            <div>
                <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                <div class="mt-1">
                    <input type="number" name="salary" id="salary"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.salary">
                </div>
            </div>
            
            <div>
                <label for="ssn" class="block text-sm font-medium text-gray-700">SSN</label>
                <div class="mt-1">
                    <input type="text" name="ssn" id="ssn"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.ssn">
                </div>
            </div>
            
            <div>
                <label for="phone_no" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <div class="mt-1">
                    <input type="tel" name="phone_no" id="phone_no"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.phone_no">
                </div>
            </div>
            
            <div>
                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                <div class="mt-1">
                    <input type="text" name="city" id="city"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.city">
                </div>
            </div>
            
            <div>
                <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                <div class="mt-1">
                    <input type="text" name="state" id="state"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.state">
                </div>
            </div>
            
            <div>
                <label for="zip" class="block text-sm font-medium text-gray-700">Zip</label>
                <div class="mt-1">
                    <input type="text" name="zip" id="zip"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="employee.zip">
                </div>
            </div>
            <button type="submit"
                    class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white bg-gray-800 rounded-md border border-transparent ring-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring disabled:opacity-25">
                Save
            </button>            
        </div>
    </form>
    <div v-if="errors" class="bg-red-500 text-white rounded font-bold mb-4 shadow-lg py-2 px-4 pr-0">
        <p v-for="message in (errors.split('|'))" v-bind:key="message">
            {{message}}
        </p>
    </div>
</template>
<script>
    //import {reactive} from "vue";
    import useEmployees from "../../composables/employees";
    import {onMounted} from "vue";
    export default{
        props: {
            id: {
                required: true,
                type: String
            }
        },
        
        setup(props){
            const {employee, getEmployee, updateEmployee, errors } = useEmployees();

            onMounted(getEmployee(props.id));

            const saveEmployee = async() => {
                await updateEmployee(props.id);
            };

            return {
                employee,
                errors,
                saveEmployee
            };
        }
    }
</script>