<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HodController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CertificateController;

/*
|--------------------------------------------------------------------------
| Admin  Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

Route::get('/login', [AdminController::class, 'Index'])->name('login_from');

Route::get('/register', [AdminController::class, 'AdminRegister'])->name('admin.register');

Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');

Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');

Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');


Route::post('/create/admin', [AdminController::class, 'CreateAdmin'])->name('admin.create_admin');

Route::get('/user_cert/{certificate}', [AdminController::class, 'getCert'])->name('cert');

//  // for Departments
//  Route::get('/adddept', [AdminController::class, 'AdminAddDept'])->name('admin.admin_adddept')->middleware('admin');

//  Route::post('/storedept', [AdminController::class, 'AdminStoreDept'])->name('admin.storedept')->middleware('admin');

//  Route::get('/alldepts', [AdminController::class, 'AdminAllDepts'])->name('admin.admin_alldepts')->middleware('admin');


//  Route::get('/editdepartment/{id}', [AdminController::class, 'EditDept'])->name('admin.editdepartment')->middleware('admin');

//  Route::post('/updatedepartment', [AdminController::class, 'UpdateDept'])->name('admin.updatedepartment')->middleware('admin');


//  Route::get('/deletedepartment/{id}', [AdminController::class, 'DeleteDept'])->name('admin.deletedepartment')->middleware('admin');


//  Route::post('/activatedepartment', [AdminController::class, 'ActivateDept'])->name('admin.activatedepartment')->middleware('admin');


//  Route::get('/deactivatedepartment/{id}', [AdminController::class, 'DeactivateDept'])->name('admin.deactivatedepartment')->middleware('admin');



// // for Units
// Route::get('/addunit', [AdminController::class, 'AddUnit'])->name('admin.addunit')->middleware('admin');

// Route::post('/storeunit', [AdminController::class, 'StoreUnit'])->name('admin.storeunit')->middleware('admin');

// Route::get('/allunits', [AdminController::class, 'AllUnits'])->name('admin.allunits')->middleware('admin');


// Route::get('/editunit/{id}', [AdminController::class, 'EditUnit'])->name('admin.editunit')->middleware('admin');

// Route::post('/updateunit', [AdminController::class, 'UpdateUnit'])->name('admin.updateunit')->middleware('admin');


// Route::get('/deleteunit/{id}', [AdminController::class, 'DeleteUnit'])->name('admin.deleteunit')->middleware('admin');


// Route::post('/activateunit', [AdminController::class, 'ActivateUnit'])->name('admin.activateunit')->middleware('admin');


// Route::get('/deactivateunit/{id}', [AdminController::class, 'DeactivateUnit'])->name('admin.deactivateunit')->middleware('admin');





 // for Add Files
 Route::get('/addcertificate', [AdminController::class, 'AdminAddCertificate'])->name('admin.addcertificate')->middleware('admin');
Route::get('/allcertificates', [AdminController::class, 'AllCertificates'])->name('admin.allcertificates')->middleware('admin');
  Route::post('/storecertificate', [AdminController::class, 'StoreCertificate'])->name('admin.storecertificate')->middleware('admin');
  
Route::get('/user_cert/{id}', [AdminController::class, 'getCert'])->name('admin.user_cert')->middleware('admin');

//  Route::post('/admin/updatecategory', 'UpdateCategory')->name('admin.updatecategory');
//  Route::get('/admin/editcategory/{id}', 'EditCategory')->name('admin.editcategory');
//  Route::get('/admin/deletecategory/{id}', 'DeleteCategory')->name('admin.deletecategory');
//  // for GET Method
//   Route::get('/admin/deactivatecategory/{id}', 'DeactivateCategory')->name('admin.deactivatecategory');
//  // for POST Method   usually use when using form 
//  Route::post('/admin/activatecategory', 'ActivateCategory')->name('admin.activatecategory');



});

/*
|--------------------------------------------------------------------------
|End  Admin  Routes
|--------------------------------------------------------------------------
*/



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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
