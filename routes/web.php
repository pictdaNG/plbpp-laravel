<?php

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
if (env('APP_ENV') === 'production') {
  \URL::forceScheme('https');
}

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');
Route::get('/mandate', 'PagesController@mandate')->name('mandate');
// Route::get('/e-procurement', 'PagesController@eProcurement')->name('procurement');
Route::get('/e-procurement', 'ProcurementController@index')->name('procurement');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/news/awards', 'PagesController@award')->name('awards');
Route::get('/documents', 'PagesController@documents')->name('documents');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/organogram', 'PagesController@organogram')->name('organogram');
Route::get('/contact', 'PagesController@contact')->name('contact');

// Authentication Route Group
Route::group(['prefix' => 'auth'], function() {
  // Account Registration Route Resources
  Route::get('/register', 'RegistrationController@register')->name('get_register');
  Route::post('/register', 'RegistrationController@store')->name('post_register');

  // Account Acitivation Route Resources
  // Route::get('/activate/{email}/{activationCode}', 'ActivationController@activate')->name('account_activation');

  // Recover Password Route Resources
  Route::get('/password-recovery', 'ForgotPasswordController@forgotPassword')->name('get_recovery');
  Route::post('/password-recovery', 'ForgotPasswordController@postForgotPassword')->name('password_recovery');
  
  // Reset Password Route Resources
  Route::get('/reset/{email}/{resetCode}', "ForgotPasswordController@resetPassword")->name('reset_password');
  Route::post('/reset/{email}/{resetCode}', "ForgotPasswordController@postResetPassword")->name('post_reset_password');

  // Login Route Resources
  Route::get('/login', 'LoginController@getLogin')->name('auth.login.get');
  Route::post('/login', 'LoginController@doLogin')->name('auth.login.post');

  // Logout Route Resources
  Route::get('/logout', 'LoginController@logout')->name('logout');
});

Route::group(['prefix' => 'admin'], function() {
  Route::get('/', 'AdminController@index')->name('admin.index');
  
  Route::get('/procurement', 'ProcurementController@create')->name('upload');
  Route::post('/procurement', 'ProcurementController@uploadFile')->name('import');


  Route::group(['prefix' => 'ocds'], function() {
    Route::get('/year-create', 'OcdsYearController@create')->name('ocds.year.create');
    Route::post('/year-create', 'OcdsYearController@store')->name('ocds.year.store');

    Route::get('/', 'OcdsController@index')->name('ocds.index');
    Route::get('/ocds-create', 'OcdsController@create')->name('ocds.create');
    Route::post('/ocds-create', 'OcdsController@store')->name('ocds.store');

  });

});

