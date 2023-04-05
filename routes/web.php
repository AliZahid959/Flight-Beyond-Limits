<?php

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Course;
use App\Models\Product;
use App\Models\Service;
use App\Models\Industry;
use App\Models\Software;
use App\Models\HomeSlider;
use App\Models\SiteContent;
use App\Models\AcademySlider;
use App\Models\CourseEnrollment;
use App\Models\IndustryCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\AcademySliderController;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\CoursesCategoryController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\CourseEnrollmentController;
use App\Http\Controllers\Customer\CustomerHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::prefix('customer')->group(function(){
//     Route::get('login', [AuthController::class, 'login_index'])->name('customer.login.index');
//     Route::post('login', [AuthController::class, 'login_post'])->name('customer.login.post');
//     Route::get('register', [AuthController::class, 'register_index'])->name('customer.register.index');
//     Route::post('register', [AuthController::class, 'register_post'])->name('customer.register.post');
//     Route::post('logout', [AuthController::class, 'logout'])->name('customer.logout');


//     Route::middleware(['auth:customer'])->group(function () {
//         Route::get('home', [CustomerHomeController::class, 'home'])->name('customer.home');
//     });
// });





// Route::get('fresh_start', function(){
//     Artisan::call('migrate:fresh --seed');
//     return 'Fresh Start Has Now Complete';
// });

Route::get('migrate',function(){
    Artisan::call('migrate');
    dd('migrate');
    return 'Migration Has Now Complete';

 });

Route::get('optimize', function(){
    Artisan::call('optimize:clear');
    return 'Your Application is now optimized';
});

Route::get('storage-link', function(){
//    Artisan::call('storage:link');
    $target = storage_path('app/public');
    $link = $_SERVER['DOCUMENT_ROOT'].'/storage';
    symlink($target, $link);
    return 'Storage Link updated';
});

Route::group(['middleware' => ['front-page']], function(){

    Route::get('/', function(){

        $home_slider = HomeSlider::all();
        $services = Service::where('status','Publish')->take(4)->get();
        // $setting = SiteContent::first();
        $blogs = Blog::where('status','Publish')->take(2)->get();
        $products = Product::with('category')->where('status' , 'Publish')->take(2)->get();
        $team = Team::take(3)->get();
        $industries = Industry::all();
        return view('front.page.home2' , compact('home_slider', 'blogs' , 'services' , 'products' , 'team' , 'industries'));

    })->name('front.page.index');

    Route::get('/all_team' , function(){

        return view('front.page.team.index');
    });

    Route::get('/academy' , function(){
        $academyslider = AcademySlider::all();
        $enrollments = CourseEnrollment::all();
        $courses = Course::withCount('enrollments')->where('status' , 'Publish')->get()->take(3);
        return view('front.page.academy.index' , compact('enrollments' , 'courses' , 'academyslider'));
    });

    Route::get('/course_enroll_form' , function(){
        $setting = SiteContent::first();
        return view('front.page.academy.course_enroll' , compact('setting'));
    });

    Route::get('/all_courses' , function(){

        $courses = Course::where('status' , 'Publish')->get();
        return view('front.page.academy.courses' , compact('courses'));
    });

    Route::get('/instructors' , function(){

        return view('front.page.academy.instructor');
    });

    Route::get('/our_clients' , function(){

        return view('front.page.clients');
    });



    Route::get('about', [FrontPageController::class, 'about'])->name('front.page.about');
    Route::get('contact', [FrontPageController::class, 'contact'])->name('front.page.contact');
    Route::get('services', [FrontPageController::class, 'services'])->name('front.page.services');
    Route::get('services/{service:slug}', [FrontPageController::class, 'service'])->name('front.page.service.show');
    Route::get('products', [FrontPageController::class, 'products'])->name('front.page.products');
    Route::get('softwares', [FrontPageController::class, 'softwares'])->name('front.page.softwares');
    Route::get('software/{software:slug}', [FrontPageController::class, 'software'])->name('front.page.software.show');

    Route::get('products/{product:slug}', [FrontPageController::class, 'product'])->name('front.page.product.show');
    Route::get('blogs', [FrontPageController::class, 'blogs'])->name('front.page.blogs');
    Route::get('blogs/{blog:slug}', [FrontPageController::class, 'blog'])->name('front.page.blog.show');
    Route::get('page/{page:slug}', [FrontPageController::class, 'page'])->name('front.page.page');

    Route::get('industry/{industry:slug}', [FrontPageController::class, 'industry'])->name('front.page.industries.showfront.page.industries.show');

    Route::get('course/{course:slug}', [CourseController::class, 'show'])->name('course.show');

    Route::get('product/category/{productCategory:slug}', [FrontPageController::class, 'category'])->name('front.page.category.show');

    Route::get('course-enroll/course/{course:slug}' , [CourseEnrollmentController::class, 'create'])->name('course-enroll.create');

    Route::post('course-enroll/course/{course:slug}' , [CourseEnrollmentController::class, 'store'])->name('course-enroll.store');

    Route::get('quotation/product/{product:slug}' , [OrderController::class, 'create'])->name('order.product.create');

    Route::post('quotation/product/{product:slug}' , [OrderController::class, 'store'])->name('order.product.store');

    Route::get('quotation/software/{software:slug}' , [OrderController::class, 'create2'])->name('qoutation.software.create');

    Route::post('quotation/software/{software:slug}' , [OrderController::class, 'store2'])->name('order.software.store');

    Route::post('quotation/accept/{order:slug}' , [OrderController::class, 'accept'])->name('order.accept');

});



Route::prefix('admin')->group(function(){


    Auth::routes(['register' => true]);

    Route::group(['middleware' => ['auth']], function(){
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::resource('industry', IndustryController::class, ['parameters' => [
            'industry' => 'industry:slug'
        ]]);
        Route::resource('service', ServiceController::class, ['parameters' => [
            'service' => 'service:slug'
        ]]);
        Route::resource('software', SoftwareController::class, ['parameters' => [
            'software' => 'software:slug'
        ]]);
        Route::resource('course', CourseController::class, ['parameters' => [
            'course' => 'course:slug'
        ]])->except('show');
        Route::resource('instructor', InstructorController::class, ['parameters' => [
            'instructor' => 'instructor:slug'
        ]]);
        // Route::resource('certificate', AcademyCertificateController::class, ['parameters' => [
        //     'certificate' => 'certificate:slug'
        // ]]);
        Route::resource('product-category', ProductCategoryController::class, ['parameters' => [
            'productCategory' => 'productCategory:slug'
        ]]);

        Route::resource('course-category', CoursesCategoryController::class, ['parameters' => [
            'courseCategory' => 'courseCategory:slug'
        ]]);

        Route::resource('product', ProductController::class, ['parameters' => [
            'product' => 'product:slug'
        ]]);
        Route::resource('blog-category', BlogCategoryController::class, ['parameters' => [
            'blogCategory' => 'blogCategory:slug'
        ]]);
        Route::resource('blog', BlogController::class, ['parameters' => [
            'blog' => 'blog:slug'
        ]]);
        Route::resource('team', TeamController::class, ['parameters' => [
            'team' => 'team:slug'
        ]]);

        Route::resource('course-enrollment', CourseEnrollmentController::class);

        Route::resource('academy-slider', AcademySliderController::class, ['parameters' => [
            'academy-slider' => 'academy-slider:slug'
        ]]);

        Route::resource('home-slider', HomeSliderController::class, ['parameters' => [
            'home_slider' => 'home_slider:slug'
        ]]);



       

        Route::resource('order', OrderController::class, ['parameters' => [
            'order' => 'order:slug'
        ]])->except('create' , 'store');

        Route::resource('support', SupportController::class, ['parameters' => [
            'support' => 'support:slug'
        ]]);

       

        Route::get('change-password', [UserController::class, 'change_password_index'])->name('change-password.index');
        Route::patch('change-password', [UserController::class, 'change_password_update'])->name('change-password.update');
        Route::get('profile', [UserController::class, 'profile_index'])->name('profile.index');
        Route::patch('profile', [UserController::class, 'profile_update'])->name('profile.update');
        Route::resource('user', UserController::class, ['parameters' => [
            'user' => 'user:slug'
        ]]);
        Route::post('role/sync/permission/{role:name}', [RoleController::class, 'role_sync_permission'])->name('role.sync.permission');
        Route::resource('role', RoleController::class, ['parameters' => [
            'role' => 'role:name'
        ]]);
        Route::resource('permission', PermissionController::class, ['parameters' => [
            'permission' => 'permission:name'
        ]]);

        Route::get('setting/service' , function(){
            $setting = SiteContent::first();
            return view('back.service.service_setting' , compact('setting'));

        })->name('setting.service.index');

        Route::get('setting/product' , function(){
            $setting = SiteContent::first();
            return view('back.product.product_setting' , compact('setting'));

        })->name('setting.product.index');

        Route::get('setting/blog' , function(){
            $setting = SiteContent::first();
            return view('back.blog.blogs_setting' , compact('setting'));

        })->name('setting.blog.index');

        Route::get('setting/team' , function(){
            $setting = SiteContent::first();
            return view('back.team.team_settings' , compact('setting'));

        })->name('setting.team.index');

        Route::get('setting/academy' , function(){
            $setting = SiteContent::first();
            return view('back.certificate.academy' , compact('setting'));

        })->name('setting.academy.index');

        Route::get('about', [AboutPageController::class, 'index'])->name('setting.about');
        Route::patch('about/store', [AboutPageController::class, 'store'])->name('about.store');
        Route::patch('setting/general', [SettingController::class, 'general'])->name('setting.general');
        Route::patch('setting/contact', [SettingController::class, 'contact'])->name('setting.contact');
        Route::patch('setting/smtp', [SettingController::class, 'smtp'])->name('setting.smtp');
        Route::patch('setting/pusher', [SettingController::class, 'pusher'])->name('setting.pusher');
        Route::patch('setting/service', [SettingController::class, 'service'])->name('setting.service');
        Route::patch('setting/product', [SettingController::class, 'product'])->name('setting.product');
        Route::patch('setting/blog', [SettingController::class, 'blog'])->name('setting.blog');
        Route::patch('setting/team', [SettingController::class, 'team'])->name('setting.team');
        Route::patch('setting/academy', [SettingController::class, 'academy'])->name('setting.academy');
        Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
        Route::resource('contact', ContactController::class, ['parameters' => [
            'contact' => 'contact:slug'
        ]]);

    });
});

