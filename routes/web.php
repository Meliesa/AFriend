<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Pages\TagController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\ReplyController;
use App\Http\Controllers\Pages\FollowController;
use App\Http\Controllers\Pages\ThreadController;
use App\Http\Controllers\Pages\JournalController;
use App\Http\Controllers\Pages\UserPodcastController;
use App\Http\Controllers\Pages\QuestionController;
use App\Http\Controllers\Pages\AnswerController;
use App\Http\Controllers\Pages\PusherController;
use App\Http\Controllers\Pages\ProfileController;
use App\Http\Controllers\Dashboard\NotificationController;

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

require 'admin.php';

Route::get('/', [HomeController::class, 'index'])->name('home.index');

//Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
    //Thread
    Route::get('/pages/threads', [ThreadController::class, 'index'])->name('pages.threads.index'); 
    Route::get('/pages/threads/create', [ThreadController::class, 'create'])->name('pages.threads.create');
    Route::post('/pages/threads', [ThreadController::class, 'store'])->name('pages.threads.store');
    Route::get('/pages/threads/{thread:slug}/edit', [ThreadController::class, 'edit'])->name('pages.threads.edit');
    Route::post('/pages/threads/{thread:slug}', [ThreadController::class, 'update'])->name('pages.threads.update');
    Route::get('/pages/threads/{category:slug}/{thread:slug}', [ThreadController::class, 'show'])->name('pages.threads.show');

    Route::get('/{category:slug}/{thread:slug}/subscribe', [ThreadController::class, 'subscribe'])->name('subscribe');
    Route::get('/{category:slug}/{thread:slug}/unsubscribe', [ThreadController::class, 'unsubscribe'])->name('unsubscribe');

    Route::get('/threads', [ThreadController::class, 'index'])->name('threads.index'); 
    Route::get('/threads/create', [ThreadController::class, 'create'])->name('threads.create');
    Route::post('/threads', [ThreadController::class, 'store'])->name('threads.store');
    Route::get('/threads/{thread:slug}/edit', [ThreadController::class, 'edit'])->name('threads.edit');
    Route::post('/threads/{thread:slug}', [ThreadController::class, 'update'])->name('threads.update');
    Route::get('/threads/{category:slug}/{thread:slug}', [ThreadController::class, 'show'])->name('threads.show');

    Route::get('/{category:slug}/{thread:slug}/subscribe', [ThreadController::class, 'subscribe'])->name('subscribe');
    Route::get('/{category:slug}/{thread:slug}/unsubscribe', [ThreadController::class, 'unsubscribe'])->name('unsubscribe');

    //tag
    Route::get('/pages/tags', [TagController::class, 'index'])->name('pages.tags.index');

    //Journal
    //Route::get('/journals', [JournalController::class, 'index'])->name('journals.index');
    //Route::resource('journals', JournalController::class);

    //Podcast
    //Route::get('/journals', [JournalController::class, 'index'])->name('journals.index');
    //Route::resource('podcasts', UserPodcastController::class);
//});

//Reply
Route::post('/', [ReplyController::class, 'store'])->name('pages.replies.store');
Route::get('reply/{id}/{type}', [ReplyController::class, 'redirect'])->name('replyAble');

//Dashboard
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    /* Name: Notifications
     * Url: /dashboard/notifications*
     * Route: dashboard.notifications*
     */
    Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function () {
        Route::get('/', [NotificationController::class, 'index'])->name('index');
    });
});

// Profile
Route::get('profile/user/{user:username}', [ProfileController::class, 'show'])->name('profile');

// Follows
Route::post('profile/user/{user:username}/follow', [FollowController::class, 'store'])->name('follow');

Route::get('dashboard/users', [PageController::class, 'users'])->name('users');

Route::get('/dashboard/categories/index', [PageController::class, 'categoriesIndex'])->name('categories.index');
Route::get('/dashboard/categories/create', [PageController::class, 'categoriesCreate'])->name('categories.create');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Journal
Route::get('/pages/journals', [JournalController::class, 'index'])->name('pages.journals.index');
Route::get('/pages/journals/create', [JournalController::class, 'create'])->name('pages.journals.create');
Route::post('/pages/journals', [JournalController::class, 'store'])->name('pages.journals.store');
Route::get('/pages/journals/{journal}', [JournalController::class, 'show'])->name('pages.journals.show');
Route::get('/pages/journals/edit/{journal}', [JournalController::class, 'edit'])->name('pages.journals.edit');
Route::put('/pages/journals/{journal}', [JournalController::class, 'update'])->name('pages.journals.update');
Route::delete('/pages/journals/{journal}', [JournalController::class, 'destroy'])->name('pages.journals.destroy');


//Podcast
Route::get('/pages/podcasts', [UserPodcastController::class, 'index'])->name('pages.podcasts.index');
Route::resource('podcasts', UserPodcastController::class);

//Assessment Questions
Route::get('/pages/questions', [QuestionController::class, 'index'])->name('pages.questions.index');
Route::get('/pages/questions/create', [QuestionController::class, 'create'])->name('pages.questions.create');
Route::post('/pages/questions', [QuestionController::class, 'store'])->name('pages.questions.store');
Route::get('/pages/questions/edit/{question}', [QuestionController::class, 'edit'])->name('pages.questions.edit');
Route::put('/pages/questions/{question}', [QuestionController::class, 'update'])->name('pages.questions.update');
Route::delete('/pages/questions/{question}', [QuestionController::class, 'destroy'])->name('pages.questions.destroy');

//Assessment Answer
Route::get('/pages/answers/create', [AnswerController::class, 'create'])->name('pages.answers.create');
Route::post('/pages/answers', [AnswerController::class, 'store'])->name('pages.answers.store');
Route::get('/pages/answers', [AnswerController::class, 'show'])->name('pages.answers.show');
Route::get('/pages/answers/view', [AnswerController::class, 'view'])->name('pages.answers.view');

//Chat
Route::get('/vendor/Chatify/pages/app', [PusherController::class, 'index'])->name('vendor.Chatify.pages.app');
Route::get('/pages/chats/broadcast', [PusherController::class, 'broadcast'])->name('pages.chats.broadcast');
Route::get('/pages/chats/receive', [PusherController::class, 'receive'])->name('pages.chats.receive');
