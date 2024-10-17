<?php

use App\Http\Controllers\AddtaskController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Assignedtask;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\ManagetaskController;
use App\Http\Controllers\MyscheduleController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//frontend

//User authentication
Route::get('/employee_register', [Authcontroller::class, 'register'])->name('frontend.register');
Route::get('/employee_login', [Authcontroller::class, 'login'])->name('frontend.login');

Route::post('/process_register', [Authcontroller::class, 'registerpost'])->name('frontend.registerpost');
Route::post('/process_login', [Authcontroller::class, 'loginpost'])->name('frontend.loginpost');

Route::get('/employee_logout',[Authcontroller::class,'logout'])->name('frontend.logout');
Route::put('/registered_employee_delete{user}', [AuthController::class, 'delete'])->name('admin.employee.regempo');



//frontend, employee dashboard
Route::get('/employee_dashboard', [FrontEndController::class, 'index'])->name('frontend.master');

// employee attendence
Route::get('/employee_attendance', [AttendanceController::class, 'index'])->name('frontend.employee.attendance');
Route::post('/employee_attendance_store', [AttendanceController::class, 'store'])->name('frontend.employee.store');


//employee assigned task
Route::get('/assigned_task', [Assignedtask::class, 'index'])->name('frontend.assignedtask.all');

//employee manage work
Route::get('/manage_projects_all', [ManagetaskController::class, 'index'])->name('frontend.managework.all');
Route::get('/all_projects_create', [ManagetaskController::class, 'create'])->name('frontend.managework.create');
Route::post('/all_projects_store', [ManagetaskController::class, 'store'])->name('frontend.managework.store');
Route::get('/all_projects_edit{allwork}', [ManagetaskController::class, 'edit'])->name('frontend.managework.edit');
Route::post('/all_projects_update{allwork}', [ManagetaskController::class, 'update'])->name('frontend.managework.update');
Route::put('/all_projects_destroy{allwork}', [ManagetaskController::class, 'destroy'])->name('frontend.managework.destroy');

//employee team
Route::get('/manage_team', [TeamController::class, 'index'])->name('frontend.teams.teamcreate');
Route::post('/manage_team_store', [TeamController::class, 'store'])->name('frontend.teams.store');
Route::get('/manage_team_edit{team}', [TeamController::class, 'edit'])->name('frontend.teams.edit');
Route::post('/manage_team_update{team}', [TeamController::class, 'update'])->name('frontend.teams.update');
Route::put('/manage_team_destroy{team}', [TeamController::class, 'destroy'])->name('frontend.teams.destroy');


// employee my schedule

Route::get('/schedule_work', [MyscheduleController::class, 'index'])->name('frontend.myschedule.all');
Route::get('/schedule_work_create', [MyscheduleController::class, 'create'])->name('frontend.myschedule.create');
Route::post('/schedule_work_store', [MyscheduleController::class, 'store'])->name('frontend.myschedule.store');
Route::get('/schedule_work_edit{myschedule}', [MyscheduleController::class, 'edit'])->name('frontend.myschedule.edit');
Route::post('/schedule_work_update{myschedule}', [MyscheduleController::class, 'update'])->name('frontend.myschedule.update');
Route::put('/schedule_work_destroy{myschedule}', [MyscheduleController::class, 'destroy'])->name('frontend.myschedule.destroy');
Route::get('/schedule_work_status/{myschedule}',[MyscheduleController::class,'status'])->name('frontend.myschedule.status');



// employee leave application
Route::get('/employee_leave', [LeaveController::class, 'make'])->name('frontend.leave');
Route::post('/employee_leave_store', [LeaveController::class, 'store'])->name('frontend.leave.store');
Route::put('/employee_leave_destroy{leave}', [LeaveController::class, 'destroy'])->name('frontend.leave.destroy');
Route::get('/leave_approval_declication', [LeaveController::class, 'leaveapproval'])->name('frontend.leaveapproval');

//company rules
Route::get('/company_rules', [PolicyController::class, 'index'])->name('company.policies');


//Backend

//assigned task
Route::get('/assign_task', [AddtaskController::class, 'index'])->name('admin.addtask.addtask');
Route::post('/assign_task_store', [AddtaskController::class, 'store'])->name('admin.addtask.store');
Route::get('/assign_task_edit{addtask}', [AddtaskController::class, 'edit'])->name('admin.addtask.edit');
Route::post('/assign_task_update{addtask}', [AddtaskController::class, 'update'])->name('admin.addtask.update');
Route::put('/assign_task_destroy{addtask}', [AddtaskController::class, 'destroy'])->name('admin.addtask.destroy');

//admin authentication
Route::get('/admin',[AdminController::class,'login'])->name('admin.lr.login');
Route::post('/admin_login',[AdminController::class,'show_dashboard'])->name('admin.lr.loginact');
Route::get('/admin_logout',[SuperadminController::class,'logout'])->name('admin.lr.logout');

//admin dashboard
Route::get('/admin_dashboard',[SuperadminController::class,'index'])->name('admin.master');
Route::get('/admin/dashboard', [AuthController::class, 'getRegisteredUserCount'])->name('admin.dashboard');
Route::get('/admin/clients/count', [ClientController::class, 'getTotalClientCount'])->name('admin.client.count');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');



//task,admin
Route::get('/task_create',[TaskController::class,'create'])->name('admin.task.create');
Route::post('/task_store',[TaskController::class,'store'])->name('admin.task.store');
Route::get('/task_index',[TaskController::class,'index'])->name('admin.task.all');
Route::get('/task_status{task}',[TaskController::class,'status'])->name('admin.task.status');
Route::get('/task_edit{task}',[TaskController::class,'edit'])->name('admin.task.edit');
Route::post('/task_update{task}',[TaskController::class,'update'])->name('admin.task.update');
Route::put('/task_delete{task}',[TaskController::class,'destroy'])->name('admin.task.delete');

//client,admin
Route::get('/client_index',[ClientController::class,'index'])->name('admin.client.all');
Route::get('/client_create',[ClientController::class,'create'])->name('admin.client.create');
Route::post('/client_store',[ClientController::class,'store'])->name('admin.client.store');
Route::get('/client_status{client}',[ClientController::class,'status'])->name('admin.client.status');
Route::put('/client_destroy{client}',[ClientController::class,'destroy'])->name('admin.client.destroy');
Route::get('/client_edit{client}',[ClientController::class,'edit'])->name('admin.client.edit');
Route::post('/client_update{client}',[ClientController::class,'update'])->name('admin.client.update');

//employee,admin
Route::get('/employee_index',[EmployeeController::class,'index'])->name('admin.employee.all');
Route::get('/employee_create',[EmployeeController::class,'create'])->name('admin.employee.create');
Route::post('/employee_store',[EmployeeController::class,'store'])->name('admin.employee.store');
Route::get('/employee_status{employee}',[EmployeeController::class,'status'])->name('admin.employee.status');
Route::put('/employee_destroy{employee}',[EmployeeController::class,'destroy'])->name('admin.employee.destroy');
Route::get('/employee_edit{employee}',[EmployeeController::class,'edit'])->name('admin.employee.edit');
Route::post('/employee_update{employee}',[EmployeeController::class,'update'])->name('admin.employee.update');
Route::get('/employee_attendence',[EmployeeController::class,'attendence'])->name('admin.employee.attendence');
Route::get('/employee_registered',[EmployeeController::class,'regemp'])->name('admin.employee.regemp');

//intern,admin
Route::get('/intern_index',[InternController::class,'index'])->name('admin.intern.all');
Route::get('/intern_create',[InternController::class,'create'])->name('admin.intern.create');
Route::post('/intern_store',[InternController::class,'store'])->name('admin.intern.store');
Route::get('/intern_status{intern}',[InternController::class,'status'])->name('admin.intern.status');
Route::put('/intern_destroy{intern}',[InternController::class,'destroy'])->name('admin.intern.destroy');
Route::get('/intern_edit{intern}',[InternController::class,'edit'])->name('admin.intern.edit');
Route::post('/intern_update{intern}',[InternController::class,'update'])->name('admin.intern.update');

//leave application,admin
Route::get('/leave_applications',[LeaveController::class,'index'])->name('admin.leave.leave');//to see the list only
Route::get('/leave_applications_approval_declination',[LeaveController::class,'apdec'])->name('admin.leave.approvedleave'); //for approval and declination
Route::put('/leave/approve/{leave}', [LeaveController::class, 'approve'])->name('admin.leave.approve');
Route::put('/leave/decline/{leave}', [LeaveController::class, 'decline'])->name('admin.leave.decline');

//department wise, admin
Route::get('/department_business',[DepartmentController::class,'business'])->name('admin.business.all');
Route::get('/department_design',[DepartmentController::class,'design'])->name('admin.design.all');
Route::get('/department_web_development',[DepartmentController::class,'web'])->name('admin.web.all');
Route::get('/department_app_development',[DepartmentController::class,'app'])->name('admin.app.all');
Route::get('/department_digital_marketing',[DepartmentController::class,'digital'])->name('admin.digital.all');


