<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\coordinatorcontroller;
use App\Http\Controllers\supervisorcontroller;
use App\Http\Controllers\studentcontroller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/logout', [coordinatorcontroller::class, 'destroy'])
                ->name('logout');

//Dashborad Layout
Route::get('/supervisor', function () {
    return view('/supervisor');
});

Route::get('/coordinator', function () {
    return view('/coordinator');
});

Route::get('/student', function () {
    return view('/student');
});

Route::get('login', function () {
    return view('/auth/login');
})->name('login');


//Manage User
    // 1) Coordinator
        // create new student's profile
        Route::get('/createnewstudent', function () {
            return view('/Coordinator/createnewstudent');
        });
        Route::post('/create', 'App\Http\Controllers\coordinatorcontroller@createstudent');

        // Display total student's profile list
        Route::get('/viewstudent', function () {
            return view('/Coordinator/viewstudent');
        });
        Route::get('/searchstudent', 'App\Http\Controllers\coordinatorcontroller@viewstudentlist');

        // Display particular student's profile
        Route::get('/viewstudent/{id}', 'App\Http\Controllers\coordinatorcontroller@viewstudentprofile');

        // Delete particular student's profile
        Route::get('/searchstudent/{id}', 'App\Http\Controllers\coordinatorcontroller@deletestudentprofile');

        //Display PSM title list
        Route::get('/searchpsmtitle', 'App\Http\Controllers\coordinatorcontroller@viewpsmlist');

        // Update student's ptofile
        Route::post('/updatestudent/{id}', 'App\Http\Controllers\coordinatorcontroller@updatestdprofile');

        //Create new supervisor's profile
        Route::get('/createsvprofile', function () {
            return view('/Coordinator/createsvprofile');
        });
        Route::post('/createsv', 'App\Http\Controllers\coordinatorcontroller@createsupervisor');

        //Display supervisor's profile list
        Route::get('/searchsvlist', 'App\Http\Controllers\coordinatorcontroller@viewsvlist');

        //Display particular supervisor's profile
        Route::get('/viewsvprofile/{sid}', 'App\Http\Controllers\coordinatorcontroller@viewsvprofile');

        //Delete particular supervisor's profile
        Route::get('/searchsvlist/{sid}', 'App\Http\Controllers\coordinatorcontroller@deletesvprofile');

        // Update supervisor's profile
        Route::post('/updatesupervisor/{sid}', 'App\Http\Controllers\coordinatorcontroller@updatesvprofile');

    // 2) Supervisor
        //Display student's profile list
        Route::get('/searchstudentlist', 'App\Http\Controllers\supervisorcontroller@studentlist');

        //Display particular student's profile
        Route::get('/viewstudentprofile/{id}', 'App\Http\Controllers\supervisorcontroller@viewprofile');

        //Display supervisor's own profile detail
        Route::get('/svmyprofile', function () {
            return view('/supervisor/svmyprofile');
        });
        Route::get('/svmyprofile', 'App\Http\Controllers\supervisorcontroller@svmyprofile');

        // Update supervisor's profile
        Route::post('/updateprofile/{sid}', 'App\Http\Controllers\supervisorcontroller@updateprofile');

     // 3) Student
         //Display supervisor's profile list
        Route::get('/searcsupervisor', function () {
            return view('/Student/searchsupervisor');
        });
        Route::get('/searchsupervisor', 'App\Http\Controllers\studentcontroller@svlist');

        //Display particular supervisor's profile
        Route::get('/svprofile/{sid}', 'App\Http\Controllers\studentcontroller@svprofile');

        //Display sstudent's own profile detail
        Route::get('/myprofile', function () {
            return view('/Student/myprofile');
        });
        Route::get('/myprofile', 'App\Http\Controllers\studentcontroller@mylist');

        // Update student's ptofile
        Route::post('/updatestd/{id}', 'App\Http\Controllers\studentcontroller@updatestd');

//Middleware for Manage User through different role
Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware'=>'checkIp'],function(){
        Route::group(['middleware' => 'role:student'], function() {
            Route::get('/myprofile', 'App\Http\Controllers\studentcontroller@mylist')->name('myprofile');
        });
       Route::group(['middleware' => 'role:supervisor'], function() {
        Route::get('/svmyprofile', 'App\Http\Controllers\supervisorcontroller@svmyprofile')->name('svmyprofile');
       });
        Route::group(['middleware' => 'role:coordinator'], function() {
            Route::get('/searchpsmtitle', 'App\Http\Controllers\coordinatorcontroller@viewpsmlist')->name('searchpsmtitle');
        });
    });
});

/*Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    \
    Route::prefix('backend')->name('backend.')->middleware(['can:access-backend'])->group(function () {
            Route::get('/dashboard', \App\Http\Livewire\Backend\Dashboard::class)->name('dashboard');
        });
    Route::prefix('frontend')->name('frontend.')->middleware(['can:access-frontend'])->group(function () {
        Route::get('/dashboard', \App\Http\Livewire\Frontend\Dashboard::class)->name('dashboard');
    });
});*/