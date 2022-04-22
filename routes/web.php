<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainSiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\main_photocontroller;
use App\Http\Controllers\fetch_auto_data;
use App\Http\Controllers\TransportSpecializationController;
use App\Http\Controllers\BusinessrouteController;
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








Route::get('/view-business', [BusinessController::class, 'index']);
 

Route::get('/insert-course', function () {
    return view('layouts.college.site.course_insert');
 });

 
Route::get('/tabs', function () {
    return view('layouts.college.site.tabs');
 });


Route::get('search', [SearchController::class, 'index'])->name('search');
Route::get('autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');







Route::Post('/view-photo', [PhotoController::class, 'store'])->name('view.photo');
 

Route::get('/insert-photo', function () {
    return view('photo.photos-insert');
 });
 Route::get('/read-photo', [main_photocontroller::class, 'Home'])->name('read.photo');
 Route::get('/college/{slug}', [main_photocontroller::class,'BlogDetail'])->name('blog.detail');

 
Route::get('search1', [fetch_auto_data::class, 'search1']);
Route::get('autocomplete1', [fetch_auto_data::class, 'autocomplete1'])->name('autocomplete1');
Route::post('auto-comp', [fetch_auto_data::class, 'autofetch'])->name('insert.auto1');



//  Route::get('/directory-transport', function () {
//     return view('layouts.college.site.transport-directory');
//  });

 /*   Transport Routes Start    */
 Route::get('/directory_transport', [TransportController::class, 'directory']);
 Route::get('/view-transport', [TransportController::class, 'index']);

 //Route::get('/front_transport', [TransportController::class, 'viewtransport'])->name('send.request');

 Route::match(['get','post'],'/front_transport',[TransportController::class, 'viewtransport']);


 Route::match(['get','post'],'/transport_profile/{id}',[TransportController::class, 'viewtransportprofile']);


 Route::get('/online_directory', function () {
    return view('layouts.Home.Site.online_directory');
 });



 Route::get('/dashborad', function () {
    return view('layouts.user.pannel.userdashboard');
 });

  /*   Transport Routes End   */

//  Route::get('/route_watch', function () {
//     return view('layouts.college.site.view_route');
//  });

//  Route::match(['get','post'],'/route_business',[BusinessController::class, 'viewroutebusiness']);

Route::match(['get','post'],'/find_loads',[BusinessrouteController::class, 'viewloads']);


Route::match(['get','post'],'/find_two_loads',[BusinessrouteController::class, 'viewtwoloads']);

Route::get('/find_single_load', function () {
    return view('layouts.business.site.find_loads');
});


Route::match(['get','post'],'/business_detail_view1', [BusinessController::class, 'viewroutebusiness']);


Route::match(['get','post'],'/business_profile/{id}', [BusinessController::class, 'viewfrontbusiness']);


Route::match(['get','post'],'/business_detail_full/{id}', [BusinessController::class, 'businessdetailfull']);






Route::match(['get','post'],'/logout', [MainSiteController::class, 'logoutdata'])->name('logout.data');



// Route::get('/delete_route', function () {
//     return view('layouts.business.site.delete');
// });






//Route::get('/transport-insert', [TransportController::class, 'transportdata']);






/*  Start Register  and Login Routes   */
 
Route::match(['get','post'],'login',[AuthController::class, 'UserLogin'])->name('user.login');
Route::match(['get','post'],'register',[AuthController::class,'UserRegister'])->name('user.register');
Route::match(['get','post'],'transportlogin',[AuthController::class, 'transportLogin'])->name('transport.login');
Route::match(['get','post'],'businesslogin',[AuthController::class, 'bussinessLogin'])->name('business.login');
Route::match(['get','post'],'transportregister',[AuthController::class,'transportRegister'])->name('transport.register');
Route::match(['get','post'],'businessregister',[AuthController::class,'businessRegister'])->name('business.register');

Route::match(['get','post'],'/admin/login',[AuthController::class, 'AdminLogin'])->name('admin.login');


/*  End Register  and Login Routes   */



/*   Auth Routes Start    */

Route::middleware(['auth'])->group(function () {
    
    Route::get('user-profile',[DashboardController::class, 'UserDashboard'])->name('user.dashboard');
  


    /*   Transport Routes Start  Auth  */

    Route::match(['get','post'],'/transportboard', [TransportController::class, 'transportboardview'])->name('transport.dashboard');

Route::match(['get','post'],'/insert-trans', [TransportController::class, 'transportdata'])->name('insert.transport');

Route::get('/insert_transport', function () {
    return view('layouts.transport.site.transport_insert');
});


Route::get('/special-route', function () {
    return view('layouts.transport.site.special');
 });

 Route::match(['get','post'],'/sepcial-route1', [TransportSpecializationController::class, 'insert_special'])->name('insert.special');
 
    /*   Transport Routes End    */


    /*   Business Routes Start    */
  

    Route::match(['get','post'],'/routes', [BusinessrouteController::class, 'routedelete'])->name('routes');

    Route::get('/delete_route_id/{id}', [BusinessrouteController::class, 'routedeleteid'])->name('deleteid.route');
    

    Route::match(['get','post'],'/businessboard', [BusinessController::class, 'businessboardview'])->name('business.dashboard');


Route::match(['get','post'],'/insert-busi', [BusinessController::class, 'Business'])->name('insert.business');

Route::get('/insert_business', function ()    {
   //return \Auth::user();
    return view('layouts.business.site.business_insert');
 });

 Route::get('/insert-route', function () {
    return view('layouts.business.site.route_insert');
 });
 
 Route::match(['get','post'],'/insert-route1', [BusinessrouteController::class, 'insert_route'])->name('insert.route');
 

     /*   Business Routes End    */


    
    Route::group(['middleware' => 'AdminCheck','prefix' => 'admin'], function(){
        Route::get('admin-profile',[DashboardController::class, 'AdminDashboard'])->name('admin.dashboard');
        Route::resource('posts', PostsController::class);
        Route::resource('tests', TestController::class);
    });
    
});

/*   Auth Routes End    */


/*   Home Routes End    */
//Route::get('/home', [MainSiteController::class, 'Home'])->name('home');

// Route::get('/home', function () {
//     return redirect('/home');
// });

Route::get('/home', [MainSiteController::class, 'Home'])->name('home');


// Route::get('/', function () {
//     return redirect('/home');
// });

/*   Home Routes End    */