<?php namespace Modules\Hrm\Http\Controllers;

use App\Department;
use App\Designation;
use App\Employee;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Pingpong\Modules\Routing\Controller;

class HrmController extends Controller {
        
    public function loadEmployeesList()
    {
        $data['employees'] = DB::table('employees')
                ->join('users', 'users.email', '=', 'employees.email')
                ->join('departments', 'users.dept_id', '=', 'departments.id')
                ->join('designations', 'users.designation_id', '=', 'designations.id')
                ->select('employees.*', 'departments.department_name', 'designations.designation_name',
                        'users.first_name', 'users.last_name')
                ->get();
        
        
        return view('hrm::employees-list', $data);
    }
    
    public function addEmployee()
    {
        $data['departments'] = Department::all();
        $data['designations'] = Designation::all();
        $data['supervisors'] = Employee::where('email', '!=', Auth::user()->email)->get();
        
        return view('hrm::add-employee', $data);
    }
    
    public function submitEmployeeDetails(Request $request)
    {   print_r($request->all());     
        $employee = new Employee();
        $time = time();
        $employee->title = $request->title;
        $employee->dob = date_format(date_create($request->dob), 'Y-m-d');
        $employee->gender = $request->gender;
        $employee->address_line_1 = $request->address_line_1;
        $employee->address_line_2 = $request->address_line_2;
        $employee->town = $request->town;
        $employee->city = $request->city;
        $employee->postcode = $request->postcode;
        $employee->tel = $request->tel;
        $employee->mob = $request->mob;
        $employee->emp_no = $request->emp_no;
        $employee->dept_head = $request->dept_head;
        $employee->join_date = date_format(date_create($request->join_date), 'Y-m-d');
        $employee->salary = $request->salary;
        $employee->supervisor = $request->supervisor;
        $employee->acc_holder = $request->acc_holder;
        $employee->acc_no = $request->acc_no;
        $employee->branch = $request->branch;
        $employee->acc_city = $request->acc_city;
        $employee->ifsc_code = $request->ifsc_code;
        $employee->email = $time;
        
        if($request->photo != ""){
            $file_extension = $request->file('photo')->guessExtension();
            $img_name = time().".".$file_extension;
            $request->file('photo')->move('public/img/uploads/profile', $img_name);
        }else{
            $img_name = "no_image.jpg";
        }
        $employee->photo = $img_name;
                    
        
        $employee->save();
        
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->dept_id = $request->department_id;
        $user->designation_id = $request->designation_id;
        $user->emp_role = $request->emp_role;
        $user->email = $time;
        $user->password = Hash::make($request->password);   
        $user->save();
        
    }

    public function loadAddDepartmentForm()
    {
        return view('hrm::add-department');
    }

    public function addDepartment(Request $request)
    {
        Department::create($request->all());
    }

    public function loadDepartmentList()
    {
        $data['departments'] = Department::all();

        return view('hrm::departments-list', $data);
    }

    public function loadAddDesignationtForm()
    {
        return view('hrm::add-designation');
    }

    public function addDesignation(Request $request)
    {
        Designation::create($request->all());
    }

    public function loadDesignationList()
    {
        $data['designations'] = Designation::all();

        return view('hrm::designations-list', $data);
    }

    public function updateDesignationInfo(Request $request, $designation_id)
    {
        Designation::where('id', $designation_id)->update([
                'designation_name' => $request->value,
        ]);
    }


    public function deleteDesignationDetails($designation_id)
    {
        Designation::where('id', $designation_id)->delete();

        $data['designations'] = Designation::all();

        return view('hrm::ajax-view.ajax-designation', $data);
    }

    public function deleteDepartmentDetails($dept_id)
    {
        Department::where('id', $dept_id)->delete();

        $data['departments'] = Department::all();

        return view('hrm::ajax-view.ajax-department', $data);
    }
        

	
}