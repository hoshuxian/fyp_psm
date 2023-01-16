<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\coordinatorcontroller;
use App\Http\Controllers\supervisorcontroller;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\top20Controller;
use App\Http\Controllers\reportController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\rubricController;

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


// --------Manage User-------------------
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



// --------Generate Top 20-------------------
Route::middleware(['auth','role:supervisor'])->group(function(){
    Route::resource('/main',top20Controller::class)->middleware('CrossHttp');
});

// --------Generate Report-------------------t
//Middleware for generate report supervisor
Route::middleware(['auth', 'checkIp','role:supervisor'])->group(function(){
//Redirect to Supervisor student list view
Route::get('/studentListS', function () {
    return view('/report/studentListS');
});
//Redirect to Supervisor student report details view
Route::get('/reportS', function () {
    return view('/report/reportS');
});
Route::get('/studentListS', [reportController::class,'viewListS']);
Route::get('/reportS/{resultID}/{psmType}', [reportController::class,'viewdataS']);
});

//Middleware for generate report coordinator
Route::middleware(['auth', 'checkIp','role:coordinator'])->group(function(){
//Redirect to coordinatoor student list view
Route::get('/studentListC', function () {
    return view('/report/studentListC');
});
//Redirect to coordinatoor reportOverview view
Route::get('/reportOverview', function () {
    return view('/report/reportOverview');
});
//Redirect to coordinatoor student report details view
Route::get('/reportC', function () {
    return view('/report/reportC');
});
Route::get('/studentListC', [reportController::class,'viewListC']);
Route::get('/reportC/{resultID}/{psmType}', [reportController::class,'viewdataC']);
Route::get('/reportOverview', [reportController::class,'calctotal']);
});


// --------Manage Evaluation-------------------


//middleware for checking authentication
Route::group(['middleware' => 'auth'], function() {
    //middleware for checking ip address
    Route::group(['middleware'=>'checkIp'],function(){

        //middleware for checking if user is a supervisor
        Route::group(['middleware' => 'role:supervisor'], function() {

            //Routes for supervisors view pages
            Route::get('/svMenu', [EvaluationController::class, 'svMenu']);
            Route::get('/svView', [EvaluationController::class, 'svView']);
            Route::get('/svEdit/{resultID}/{psmType}', [EvaluationController::class, 'svEdit']);
            Route::post('/updateSvMarks/{resultID}/{psmType}', [EvaluationController::class, 'updateSvMarks']);

            //Routes for supervisors as the evauator view pages
            Route::get('/evView', [EvaluationController::class, 'evView']);
            Route::get('/evEdit/{resultID}/{psmType}', [EvaluationController::class, 'evEdit']);
            Route::post('/updateEvMarks/{resultID}/{psmType}', [EvaluationController::class, 'updateEvMarks']);
       });

       //middleware for checking if user is coordinator
        Route::group(['middleware' => 'role:coordinator'], function() {
            //Routes for set deadlines
            Route::get('/deadline', [EvaluationController::class, 'deadline']);
            Route::post('/deadline', [EvaluationController::class, 'storeDeadline']);
        });
    });
});

// -------------Manage Rubric---------------------------


Route::get('/viewRubric', function () {
    return view('/rubric/viewRubric');
});

Route::get('/svRubric', function () {
    return view('/rubric/svRubric');
});

Route::get('/studentRubric', function () {
    return view('/rubric/studentRubric');
});


Route::get('/addRubric', function () {
    return view('/rubric/addRubric');
});

Route::get('/updateRubric', function () {
    return view('/rubric/updateRubric');
});



//middleware for checking authentication
Route::group(['middleware' => 'auth'], function() {
    //middleware for checking ip address
    Route::group(['middleware'=>'checkIp'],function(){

        //middleware for checking if user is a supervisor
        Route::group(['middleware' => 'role:supervisor'], function() {
            
            Route::get('/svRubric', [rubricController::class,'svDisplay']);
        });

        //middleware for checking if user is a student
        Route::group(['middleware' => 'role:student'], function() {
            Route::get('/studentRubric', [rubricController::class,'stuDisplay']);
        });
        
        //middleware for checking if user is a coordinator
        Route::group(['middleware' => 'role:coordinator'], function() {
            Route::get('/viewRubric', [rubricController::class,'coorDisplay']);
            Route::get('/viewRubric/{rubricID}', 'App\Http\Controllers\rubricController@delete');
            Route::get('/updateRubric/{rubricID}', 'App\Http\Controllers\rubricController@showUpdate');
            
            Route::post('addrubric','App\Http\Controllers\rubricController@saveData');
            Route::post('editrubric','App\Http\Controllers\rubricController@updateData');
            
        });
    });
});


//=====================================================================
