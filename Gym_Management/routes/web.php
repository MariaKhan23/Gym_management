<?php

use App\Http\Controllers\Administrator\ClassController;
use App\Http\Controllers\Administrator\EquipmentController;
use App\Http\Controllers\Administrator\MembersController;
use App\Http\Controllers\Administrator\MembershipController;
use App\Http\Controllers\Administrator\StaffController;
use App\Http\Controllers\Administrator\SuperAdminController;
use App\Http\Controllers\Administrator\VendorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



// here is super admin routes which is just super admin can access 

Route::prefix('Admin')->namespace('Administrator')->group(function () {
    // Your routes here
Route::get('/',[SuperAdminController::class,'admin_login_page'])->name('/');
Route::post('/login',[SuperAdminController::class,'login'])->name('admin.superadmin.login');

// here you can put your admin routes and after all the work ou can easily apply middleware and alwasy make sure easch controller namespace have Administrator class  

Route::get('/dashboard',[SuperAdminController::class,'dashboard'])->name('dashboard');
Route::get('/logout',[SuperAdminController::class,'logout'])->name('admin.admin.logout');



// vendors 
Route::get('/list-vendors',[VendorController::class,'vendors'])->name('admin.list.vendors');
Route::get('/vendor-add',[VendorController::class,'add_vendor'])->name('admin.vendor.add');
Route::post('/vendor-save',[VendorController::class,'save_vendor'])->name('admin.vendor.save'); 

// vendors   



// equipments 
Route::get('/list-equipments',[EquipmentController::class,'equipments'])->name('admin.equipment.list');
Route::get('/add-equipments',[EquipmentController::class,'add_equipment'])->name('admin.equipment.add');
Route::post('/save-equipment',[EquipmentController::class,'save_equipment'])->name('admin.equipment.save');
Route::get('/edit-equipments/{id}',[EquipmentController::class,'edit_equipment'])->name('admin.equipment.edit');
Route::get('/delete-equipment/{id}',[EquipmentController::class,'delete_equipment'])->name('admin.equipment.delete'); 
Route::post('/update-equipment/{id}',[EquipmentController::class,'update_equipment'])->name('admin.equipment.update');



// equipment Categorie routes 


Route::get('/list-equipments-categories',[EquipmentController::class,'equipments_categorie_list'])->name('admin.equipment.categorie');
Route::get('/add-equipment-categories',[EquipmentController::class,'equipment_categorie_add'])->name('admin.equipment.categorie.add');
Route::post('/admin-equipment-categorie-save',[EquipmentController::class,'equipment_categorie_save'])->name('admin.equipment.categorie.save');
Route::get('/admin-equipment-categorie-edit/{id}',[EquipmentController::class,'equipment_categorie_edit'])->name('admin.equipment.categorie.edit');
Route::get('/admin-equipment-categorie-delete/{id}',[EquipmentController::class,'equipment_categorie_delete'])->name('admin.equipment.categorie.delete');
Route::post('/admine-quipment-categorie-update/{id}',[EquipmentController::class,'equipment_categorie_update'])->name('admin.equipment.categorie.update');
// equipments 



Route::get('/list-memberships',[MembershipController::class,'memberships'])->name('admin.list.membership');
Route::get('/add-memberships',[MembershipController::class,'add_membership'])->name('admin.membership.add');
Route::post('/save-membership',[MembershipController::class,'save_membership'])->name('admin.membership.save');
Route::get('/edit-membership/{id}',[MembershipController::class,'edit_membership'])->name('admin.membership.edit');
Route::post('/update-membership/{id}',[MembershipController::class,'update_membership'])->name('admin.membership.update');
Route::get('/delete-membership/{id}',[MembershipController::class,'delete_membership'])->name('admin.membership.delete');
// Membership routes  



// staff routes 
Route::get('/list-saff',[StaffController::class,'staff'])->name('admin.list.staff');
Route::get('/add-staff',[StaffController::class,'add_staff'])->name('admin.staff.add');
Route::post('/save-staff',[StaffController::class,'save_staff'])->name('admin.staff.save'); 
Route::get('/edit-staff/{id}',[StaffController::class,'edit_staff'])->name('admin.staff.edit');
Route::post('/update-staff/{id}',[StaffController::class,'update_staff'])->name('admin.staff.update');
Route::get('/delete-staff/{id}',[StaffController::class,'delete_staff'])->name('admin.staff.delete');
// staff routes  


// class routes 
Route::get('/list-classes',[ClassController::class,'classes'])->name('admin.list.classes');
Route::get('/add-class',[ClassController::class,'add_class'])->name('admin.class.add');
Route::post('/save-class',[ClassController::class,'save_class'])->name('admin.class.save');
Route::get('/edit-class/{id}',[ClassController::class,'edit_class'])->name('admin.classes.edit');
Route::get('/delete-class/{id}',[ClassController::class,'delete_class'])->name('admin.classes.delete');
Route::post('/update-class/{id}',[ClassController::class,'update_class'])->name('admin.class.update');

Route::get('/class-schedule',[ClassController::class,'class_schedule'])->name('admin.class.calendar');



Route::get('/classes',[ClassController::class,'class_get'])->name('get-classes');
// Route::get('/class-wise-data', [ClassController::class, 'class_wise_data'])->name('class-wise-data');
Route::post('/save-schedule',[ClassController::class,'save_schedule'])->name('save-schedule');


Route::get('/get-events-for-calendar', [ClassController::class,'getEventsForCalendar'])->name('get-events-for-calendar');
Route::get('/edit_schedules/{eventId}',[ClassController::class,'edit_schedules'])->name('edit_schedules');



Route::get('/test/{eventId}', [ClassController::class, 'test'])->name('test');
// class routes 

Route::get('/all-classes', [ClassController::class, 'getAllClasses'])->name('all-classes'); 
Route::get('/get-class-details',[ClassController::class,'getClassDetails'])->name('get-class-details'); 

Route::post('/update-schedule',[ClassController::class,'update_schedule'])->name('update-schedule');






// members Routesn from admin 
// admin.list.members
Route::get('/list-member',[MembersController::class,'members'])->name('admin.list.members');
Route::get('/add-member',[MembersController::class,'add_member'])->name('admin.Member.add');

// members routes from admin 
});  

// here is super admin routes which is just super admin can access 
 
