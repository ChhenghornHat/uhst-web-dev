<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\AgricultureController;
use App\Http\Controllers\AssociativeProgramsController;
use App\Http\Controllers\BachelorsProgramsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\ConferencesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EngineeringController;
use App\Http\Controllers\ForeignLanguagesController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InformationTechnologyController;
use App\Http\Controllers\LiteratureAndAnthropologyController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ManagementTeamController;
use App\Http\Controllers\MastersProgramsController;
use App\Http\Controllers\MissionAndVisionController;
use App\Http\Controllers\NewsAndActivitiesController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PresidentMessageController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ShortCoursesController;
use App\Http\Controllers\TechnicalAndVocationalTrainingController;
use App\Http\Controllers\TrainingAndWorkshopController;
use Illuminate\Support\Facades\Route;

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

/*
|--------------------------------------------------------------------------
| Administrator
|--------------------------------------------------------------------------
*/

// dashboard
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

// about us
Route::get('/about-us/history', [HistoryController::class, 'index'])->name('about-us.history');
Route::get('/about-us/mission-vision', [MissionAndVisionController::class, 'index'])->name('about-us.mission-vision');
Route::get('/about-us/president-message', [PresidentMessageController::class, 'index'])->name('about-us.president-message');
Route::get('/about-us/management-team', [ManagementTeamController::class, 'index'])->name('about-us.management-team');
Route::get('/about-us/partner', [PartnerController::class, 'index'])->name('about-us.partner');

// faculties
Route::get('/faculties/agriculture', [AgricultureController::class, 'index'])->name('faculties.agriculture');
Route::get('/faculties/engineering', [EngineeringController::class, 'index'])->name('faculties.engineering');
Route::get('/faculties/literature-anthropology', [LiteratureAndAnthropologyController::class, 'index'])->name('faculties.literature-anthropology');
Route::get('/faculties/foreign-languages', [ForeignLanguagesController::class, 'index'])->name('faculties.foreign-languages');
Route::get('/faculties/information-technology', [InformationTechnologyController::class, 'index'])->name('faculties.information-technology');
Route::get('/faculties/technical-vocational-training', [TechnicalAndVocationalTrainingController::class, 'index'])->name('faculties.technical-vocational-training');

// study
Route::get('/study/admission', [AdmissionController::class, 'index'])->name('study.admission');
Route::get('/study/scholarship', [ScholarshipController::class, 'index'])->name('study.scholarship');
Route::get('/study/associative-programs', [AssociativeProgramsController::class, 'index'])->name('study.associative-programs');
Route::get('/study/bachelors-programs', [BachelorsProgramsController::class, 'index'])->name('study.bachelors-programs');
Route::get('/study/masters-programs', [MastersProgramsController::class, 'index'])->name('study.masters-programs');
Route::get('/study/short-courses', [ShortCoursesController::class, 'index'])->name('study.short-courses');

// research & innovation
Route::get('/research-innovation/projects', [ProjectsController::class, 'index'])->name('research-innovation.projects');
Route::get('/research-innovation/publications', [PublicationsController::class, 'index'])->name('research-innovation.publications');
Route::get('/research-innovation/books', [BookController::class, 'index'])->name('research-innovation.books');
Route::get('/research-innovation/training-workshop', [TrainingAndWorkshopController::class, 'index'])->name('research-innovation.training-workshop');
Route::get('/research-innovation/conferences', [ConferencesController::class, 'index'])->name('research-innovation.conferences');

// location
Route::get('/location', [LocationController::class, 'index'])->name('location');

// contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// contact
Route::get('/news-activities', [NewsAndActivitiesController::class, 'index'])->name('news-activities');

// contact
Route::get('/careers', [CareersController::class, 'index'])->name('careers');

/*
|--------------------------------------------------------------------------
| End Administrator
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('user.home');
});

/*
|--------------------------------------------------------------------------
| End User
|--------------------------------------------------------------------------
*/
