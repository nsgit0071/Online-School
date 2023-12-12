<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AsistenMessageController;
use App\Http\Controllers\AsistentAuthController;
use App\Http\Controllers\AsistentController;
use App\Http\Controllers\AsistentUserController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseHeadController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MessageHeadController;
use App\Http\Controllers\MycoursesController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\NewCourseController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TasdiqlashController;
use App\Http\Controllers\User;
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

Route::get('/' , [SiteController::class , 'index'])->name('main');
Route::resource('message' , MessageController::class);

Route::resource('tasdiqlash' , TasdiqlashController::class);

Route::get('/tasdiqlash' , [TasdiqlashController::class , 'index'] )->name('tasdiq')->middleware('auth');


Route::get('course/{id}/view' , [CourseController::class , 'view'] )->name('view')->middleware('auth');



/**
 * ######################## backend
 */
Route::prefix('admins')->group(function (){
    Route::get('/login' , [AdminController::class , 'index'])->name('login-form');
    Route::post('/login/owner' , [AdminController::class , 'login'])->name('admin.login');
    Route::get('/register' , [AdminController::class , 'register'])->name('admin.register');
    Route::post('/register/create' , [AdminController::class , 'registerCreate'])->name('admin.register.create');
    Route::get('/logout' , [AdminController::class , 'adminLogout'])->name('admin.logout');
    Route::get('/' , [BackendController::class , 'index'])->name('main_backend')->middleware('admin');

});
Route::middleware('admin')->group(function (){
    Route::get('/admins/nav', [NavController::class, 'index'])->name('backend_nav');
    Route::get('/admins/nav/create', [NavController::class, 'create'])->name('backend_nav_create');

});


Route::middleware('admin')->group(function (){
    Route::get('/admins/header', [HeaderController::class, 'index'])->name('backend_header');
    Route::get('/admins/header/create', [HeaderController::class, 'create'])->name('backend_header_create');

    Route::get('/admins/about', [AboutController::class, 'index'])->name('backend_about');
    Route::get('/admins/about/create', [AboutController::class, 'create'])->name('backend_about_create');

    Route::get('/admins/courseHead/index', [CourseHeadController::class, 'index'])->name('backend_courseHead_index');
    Route::get('/admins/courseHead/create', [CourseHeadController::class, 'create'])->name('backend_courseHead_create');

    Route::get('/admins/category/index', [CategoryController::class, 'index'])->name('backend_category_index');
    Route::get('/admins/category/create', [CategoryController::class, 'create'])->name('backend_category_create');

    Route::get('/admins/faq/index', [FaqController::class, 'index'])->name('backend_faq_index');
    Route::get('/admins/faq/create', [FaqController::class, 'create'])->name('backend_faq_create');

    Route::get('/admins/company/index', [CompanyController::class, 'index'])->name('backend_company_index');
    Route::get('/admins/company/create', [CompanyController::class, 'create'])->name('backend_company_create');

    Route::get('/admins/course', [CourseController::class, 'index'])->name('backend_course_index');
    Route::get('/admins/course/create', [CourseController::class, 'create'])->name('backend_course_create');

    Route::get('/admins/messageHead/index', [MessageHeadController::class, 'index'])->name('backend_messageHead_index');
    Route::get('/admins/messageHead/create', [MessageHeadController::class, 'create'])->name('backend_messageHead_create');

    Route::get('/admins/footer/index', [FooterController::class, 'index'])->name('backend_footer_index');
    Route::get('/admins/footer/create', [FooterController::class, 'create'])->name('backend_footer_create');

    Route::get('/admins/message', [MessageController::class, 'index'])->name('backend_message');

    Route::get('/admins/user', [User::class, 'index'])->name('backend_user');
    Route::get('/admins/user/create', [User::class, 'create'])->name('backend_user_create');

    Route::get('/admins/mycourse', [MycoursesController::class, 'index'])->name('mycourse');

    Route::get('/admins/newCourse', [NewCourseController::class, 'index'])->name('newCourse');
    Route::get('/admins/newCourse/create', [NewCourseController::class, 'create'])->name('newCourse_create');

    Route::get('/admins/logo', [LogoController::class, 'index'])->name('logo');
    Route::get('/admins/logo/create', [LogoController::class, 'create'])->name('logo_create');

    Route::resource('navbar' , NavController::class);
    Route::resource('header' , HeaderController::class);
    Route::resource('about' , AboutController::class);
    Route::resource('courseHead' , CourseHeadController::class);
    Route::resource('category' , CategoryController::class);
    Route::resource('course' , CourseController::class  );
    Route::resource('faq' , FaqController::class);
    Route::resource('company' , CompanyController::class);
    Route::resource('messageHead' , MessageHeadController::class);
    Route::resource('message' , MessageController::class);
    Route::resource('footer' , FooterController::class);
    Route::resource('user' , User::class);
    Route::resource('mycourse' , MycoursesController::class);
    Route::resource('newCourse' , NewCourseController::class);
    Route::resource('logo' , LogoController::class);
});

/**
 *###########################################
 * Auth
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/**
 *############################Asistent
 */

Route::prefix('asistent')->group(function (){
    Route::get('/login' , [AsistentAuthController::class , 'index'])->name('asistent-form');
    Route::post('/login/owner' , [AsistentAuthController::class , 'login'])->name('asistent.login');
    Route::get('/register' , [AsistentAuthController::class , 'register'])->name('asistent.register');
    Route::post('/register/create' , [AsistentAuthController::class , 'registerCreate'])->name('asistent.register.create');
    Route::get('/logout' , [AsistentAuthController::class , 'asistentLogout'])->name('asistent.logout');
    Route::get('/' , [AsistentController::class , 'index'])->name('asistent')->middleware('asistent');


});

Route::middleware('asistent')->group(function () {
    Route::get('/asistent/message', [AsistenMessageController::class, 'index'])->name('asistentMessage');

    Route::get('/asistent/user', [AsistentUserController::class, 'index'])->name('asistentUser');


    Route::resource('message_asistent', AsistenMessageController::class);
    Route::resource('user_asistent', AsistentUserController::class);
});


require __DIR__.'/auth.php';
