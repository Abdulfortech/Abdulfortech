<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;

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
// public routes
Route::get('/', [PublicController::class, 'index']);
Route::get('/hireme', [PublicController::class, 'hireMe']);
Route::get('/hireme/request', [PublicController::class, 'requestService'])->name('requestService');
Route::get('/about', [PublicController::class, 'about']);
Route::get('/contact', [PublicController::class, 'contact']);
Route::get('/blog', [PublicController::class, 'blog']);
Route::get('/blog/{article}', [PublicController::class, 'blogView']);
Route::get('/projects', [PublicController::class, 'projects']);
Route::get('/projects/{project}', [PublicController::class, 'projectView']);

// routes for admin
Route::get('/admin/login', [UserController::class, 'index']);

Route::post('/admin/login', [UserController::class, 'authenticate'])->name('adminLogin');

Route::post('/admin/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/admin/register', [UserController::class, 'registerForm']);

Route::post('/admin/register', [UserController::class, 'register'])->name('adminRegister');

Route::get('/admin/dashboard', [UserController::class, 'dashboard'])->middleware('auth');
// profile
Route::get('/admin/profile', [UserController::class, 'profile']);
// 08069625326
// routes for projects
Route::get('/admin/projects', [ProjectController::class, 'index'])->middleware('auth');
// showing form for new project
Route::get('/admin/project/new', [ProjectController::class, 'newProject'])->middleware('auth');
// creating a new project
Route::post('/admin/project/new', [ProjectController::class, 'create'])->name('projectCreate')->middleware('auth');
// view single project
Route::get('/admin/projects/{project}', [ProjectController::class, 'show'])->middleware('auth');
// showing form for editing project
Route::get('/admin/projects/{project}/edit', [ProjectController::class, 'editProject'])->middleware('auth');
// updating project
Route::put('/admin/projects/{project}/edit', [ProjectController::class, 'update'])->middleware('auth');
// activate and deactivate Article
Route::get('/admin/projects/{project}/activate', [ProjectController::class, 'ActivateProject'])->name('ActivateProject')->middleware('auth');
// deactivate Project
Route::get('/admin/projects/{project}/deactivate', [ProjectController::class, 'DeactivateProject'])->middleware('auth');
// delete Project
Route::get('/admin/projects/{project}/delete', [ProjectController::class, 'DeleteProject'])->name('DeleteProject')->middleware('auth');
////// end routes for Article //////

////// routes for skills //////
Route::get('/admin/skills', [SkillController::class, 'index'])->middleware('auth');
// new skill
Route::post('/admin/skills/new', [SkillController::class, 'addSkill'])->name('SkillCreate')->middleware('auth');
// activate and deactivate skill
Route::put('/admin/skills/activate', [SkillController::class, 'ActivateSkill'])->name('ActivateSkill')->middleware('auth');
// delete skill
Route::put('/admin/skills/delete', [SkillController::class, 'DeleteSkill'])->name('DeleteSkill')->middleware('auth');
////// end routes for skill //////


////// routes for articles //////
Route::get('/admin/articles', [ArticleController::class, 'index'])->middleware('auth');
// view single article
Route::get('/admin/articles/{article}', [ArticleController::class, 'show'])->middleware('auth');
// showing form for creating new article
Route::get('/admin/article/new', [ArticleController::class, 'newArticle'])->middleware('auth');
// creating new article
Route::post('/admin/article/new', [ArticleController::class, 'addArticle'])->name('articleCreate')->middleware('auth');
// showing form for editing article
Route::get('/admin/articles/{article}/edit', [ArticleController::class, 'edit'])->middleware('auth');
// updating article
Route::put('/admin/articles/{article}/edit', [ArticleController::class, 'update'])->middleware('auth');
// activate and deactivate Article
Route::get('/admin/articles/{article}/activate', [ArticleController::class, 'ActivateArticle'])->name('ActivateArticle')->middleware('auth');
// deactivate Article
Route::get('/admin/articles/{article}/deactivate', [ArticleController::class, 'DeactivateArticle'])->middleware('auth');
// delete Article
Route::get('/admin/articles/{article}/delete', [ArticleController::class, 'DeleteArticle'])->name('DeleteArticle')->middleware('auth');
////// end routes for Article //////