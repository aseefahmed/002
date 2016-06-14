<?php

Route::group(['middleware' => 'web', 'prefix' => 'hrm', 'namespace' => 'Modules\Hrm\Http\Controllers'], function()
{
    Route::get('/employees', ['uses' => 'HrmController@loadEmployeesList', 'as' => 'Employees List']);
    Route::post('/submit-employee', ['uses' =>'HrmController@submitEmployeeDetails', 'as' => 'Add Employee']);
    Route::get('/add-employee', ['uses' => 'HrmController@addEmployee', 'as' => 'Add Employee']);
    Route::get('/add-department', ['uses' =>'HrmController@loadAddDepartmentForm', 'as' => 'Create Department']);
    Route::post('/submit-department', ['uses' =>'HrmController@addDepartment', 'as' => 'Add Department']);
    Route::get('/departments', ['uses' =>'HrmController@loadDepartmentList', 'as' => 'Department List']);
    Route::get('/add-designation', ['uses' =>'HrmController@loadAddDesignationtForm', 'as' => 'Create Designation']);
    Route::post('/submit-designation', ['uses' =>'HrmController@addDesignation', 'as' => 'Add Designation']);
    Route::get('/designations', ['uses' =>'HrmController@loadDesignationList', 'as' => 'Designation List']);
    Route::get('/delete-designation/{designation_id}', ['uses' => 'HrmController@deleteDesignationDetails', 'as' => 'Delete Designation']);
    Route::get('/delete-department/{department_id}', ['uses' => 'HrmController@deleteDepartmentDetails', 'as' => 'Delete Department']);
    Route::post('/update-designation/{designation_id}', ['uses' =>'HrmController@updateDesignationInfo', 'as' => 'Update Designation Information']);
});