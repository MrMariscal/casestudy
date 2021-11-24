<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::truncate();

        $csvFile = fopen(base_path('employee_data.csv'), "r");
        $firstLine = true;

        while(($data = fgetcsv($csvFile, 2000, ",")) !== false){
            if (!$firstLine){
                $employee = [
                    'emp_id' => $data[0],
                    'name_prefix' => $data[1],
                    'first_name' => $data[2],
                    'middle_initial' => $data[3],
                    'last_name' => $data[4],
                    'gender' => $data[5],
                    'e_mail' => $data[6],
                    'fathers_name' => $data[7],
                    'mothers_name' => $data[8],
                    'mothers_maiden_name' => $data[9],
                    'date_of_birth' => Carbon::createFromFormat('d/m/Y', $data[10])->format('Y/m/d'),
                    'date_of_joining' => Carbon::createFromFormat('d/m/Y', $data[11])->format('Y/m/d'),
                    'salary' => $data[12],
                    'ssn' => $data[13],
                    'phone_no' => $data[14],
                    'city' => $data[15],
                    'state' => $data[16],
                    'zip' => $data[17]            
                ];
                Employee::create($employee);
            }
            else {
                $firstLine = false;
            }
        }
    }
}
