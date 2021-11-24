<?php

namespace Tests\Unit;
use App\Models\Employee;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmployeesTest extends TestCase
{
    use RefreshDatabase;

    public function test_employee_apis()
    {
        // Create a new employee
        $employee = [
            'emp_id' => 11111111,
            'name_prefix' => "Dr.",
            'first_name' => "STEPHEN",
            'middle_initial' => "S",
            'last_name' => "STRANGE",
            'gender' => "M",
            'e_mail' => "lois.walker@hotmail.com",
            'fathers_name' => "STEPHEN",
            'mothers_name' => "ESTEFANIA",
            'mothers_maiden_name' => "ESTEFANIA MAIDEN",
            'date_of_birth' => "1976/05/31",
            'date_of_joining' => "2021/01/11",
            'salary' => 100000,
            'ssn' => "1234567890",
            'phone_no' => "1234567890",
            'city' => "ZAPOPAN",
            'state' => "JALISCO",
            'zip' => "45200"    
        ];
        
        $response = $this->post('/api/employees/', $employee);
        $response->assertStatus(201);
        
        $this->assertDatabaseHas('employees', ['e_mail' => 'lois.walker@hotmail.com']);


        // Get Employee

        $response = $this->get('/api/employees/1');
        $response->assertStatus(200);
        
        // Edit employee

        $employee['emp_id'] = 5555555;
        $employee['e_mail'] = "drstrange@marvel.com";

        $response = $this->put('/api/employees/1', $employee);
        $response->assertStatus(200);
        // Validate Old Values does not exists
        $this->assertDatabaseMissing('employees', ['emp_id' => 11111111]);
        $this->assertDatabaseMissing('employees', ['e_mail' => 'lois.walker@hotmail.com']);

        //Validate New Values
        $this->assertDatabaseHas('employees', ['emp_id' => 5555555]);
        $this->assertDatabaseHas('employees', ['e_mail' => 'drstrange@marvel.com']);

        //Delete Employee
        $response = $this->delete('/api/employees/1', $employee);
        $response->assertStatus(204);

        $this->assertDatabaseMissing('employees', ['emp_id' => 5555555]);

    }
}
