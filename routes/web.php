<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Projects;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TeamController;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProjectController;

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

    $chart = (new LarapexChart)
        ->setXAxis(['Load','Target'])
        ->setDataset([85,15])
        ->setLabels(['Load','Target']);
    return view('supervisor',compact('chart'));
})->name("dashboard");


Route::controller(ProjectController::class)->group(function()
{
    Route::get('/projects','index')->name("project.list");
    Route::get('/project/create','create')->name("project.create");
    Route::post('project/store','store')->name('project.store');
    Route::get('/project/{project?}/leads','lead')->name("project.lead.list");
    Route::get('/project/{project?}/team','team')->name("project.team");
    Route::get('/project/{project?}/edit','edit')->name("project.overview.edit");
    Route::get('/project/{project}/view','show')->name("project.overview.show");
    Route::delete('project/delete/{project}','destroy')->name('project.destroy');
    Route::put('/project/{project}/update','update')->name('project.update');
    Route::get('/project/lead/{lead?}/view','leadAllView')->name('view.lead');
    Route::get('project/team/{team}/view','teamView')->name('view.team');
});

Route::get('/project/details',[Projects::class,'details'])->name("project.detail");


//Check grouping and naming
Route::controller(CompanyController::class)->prefix('companies')->name('companies.')->group(function()
{
    Route::get('/','index')->name("index");
    Route::get('/create','create')->name('create');
    Route::post('/','store')->name('store');
    Route::get('/{company}','show')->name("show");
    Route::get('/{company?}/edit','edit')->name("edit");
    Route::put('/{company}/','update')->name('update');
    Route::delete('/{company}','destroy')->name('destroy');
});

Route::controller(TeamController::class)->prefix('teams')->name('team.')->group(function()
{
    Route::get('/detail','show')->name("detail");
    Route::get('/project/members','index')->name("project.member");
    Route::post('team/store/all','store')->name('store.all');
    Route::delete('/delete/{team?}/','destroy')->name('destroy.all');
    Route::get('/edit/{team?}','edit')->name("edit");


});


Route::get('/project/lead/details',[LeadController::class,'index'])->name("project.lead.detail");
Route::get('/project/leads/view',[Projects::class,'projectLeadView'])->name("project.lead.view");

Route::get('/project/leads/create',[LeadController::class,'create'])->name("project.lead.create");

Route::get('/project/lead/{lead?}/details',[LeadController::class,'show'])->name("project.employee.detail");

Route::get('/project/team/members/view',[Projects::class,'teamMembersView'])->name("project.team.member.detail");



Route::controller(ScheduleController::class)->group(function()
{
    Route::get('/schedule','index')->name("schedule");
    Route::get('/fullcalendar','index')->name("schedule");
    Route::post('fullcalenderAjax', 'ajax');

});



Route::get('/create/event',[ScheduleController::class,'create'])->name("even.create");




Route::get('/profile/create',[Projects::class,'profileCreate'])->name("profile.create");
Route::get('/role/permission',[Projects::class,'roleAndPermission'])->name("role.permission");
Route::get('/role/permission/view',[Projects::class,'roleAndPermissionView'])->name("role.permission.view");
Route::get('/messages',[MessageController::class,'index'])->name("messages");



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
