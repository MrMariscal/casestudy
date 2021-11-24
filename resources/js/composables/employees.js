import { ref } from 'vue';
import axios from "axios";
import {useRouter} from 'vue-router';

export default function useEmployees(){

    const employees = ref([]);
    const employee = ref([]);
    const router = useRouter();
    const errors = ref('');

    const getEmployees = async() => {
        let response = await axios.get('/api/employees');
        employees.value = response.data.data;
    };

    const getEmployee = async(id) => {
        let response = await axios.get('/api/employees/' + id);
        employee.value = response.data.data;

    }

    const storeEmployee = async(data) => {
        errors.value = '';
        try{
            await axios.post('/api/employees/', data);
            await router.push({name: 'employees.index'});
        }
        catch(error){
            if (error.response.status === 422){
                for (const key in error.response.data.errors){
                    errors.value += error.response.data.errors[key][0] + '|';
                }
            }
        }
    };

    const updateEmployee = async(id) => {
        errors.value = '';
        try{
            await axios.put('/api/employees/' + id, employee.value);
            await router.push({name: 'employees.index'});
        }
        catch(error){
            if (error.response.status === 422){
                for (const key in error.response.data.errors){
                    errors.value += error.response.data.errors[key][0] + '|';
                }
            }
        }
    };

    const destroyEmployee = async(id) => {
        await axios.delete('/api/employees/' + id);
    };

    return {
        employee,
        employees,
        errors,
        getEmployee,
        getEmployees,
        storeEmployee,
        updateEmployee,
        destroyEmployee
    };
}