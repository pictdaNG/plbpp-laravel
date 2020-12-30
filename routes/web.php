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
Route::get('/ocds', 'ProcurementController@index')->name('procurement');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/news/{slug}', 'PagesController@newsDetail')->name('news.details');
Route::get('/news/awards', 'PagesController@award')->name('awards');
Route::get('/documents', 'PagesController@documents')->name('documents');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/organogram', 'PagesController@organogram')->name('organogram');
Route::get('/open-bids', function() {
  return view('opencontract');
})->name('open-contract-bids');
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
    Route::get('/ocds-edit/{id}', 'OcdsController@edit')->name('ocds.edit');
    Route::put('/ocds-edit/{id}', 'OcdsController@update')->name('ocds.update');
    Route::post('/ocds-delete/{id}', 'OcdsController@delete')->name('ocds.delete');

  });

  Route::group(['prefix' => 'mda'], function() {
    Route::get('/', 'MdaController@index')->name('admin.mda.index');
    Route::get('/create', 'MdaController@create')->name('admin.mda.create');
    Route::post('/create', 'MdaController@store')->name('admin.mda.store');
    Route::get('/edit/{id}', 'MdaController@edit')->name('admin.mda.edit');
    Route::post('/edit/{id}', 'MdaController@update')->name('admin.mda.update');
    Route::post('/delete/{id}', 'MdaController@delete')->name('admin.mda.delete');

  });


  Route::group(['prefix' => 'tender'], function() {
    Route::get('/', 'TenderController@index')->name('admin.tender.index');
    Route::get('/create', 'TenderController@create')->name('admin.tender.create');
    Route::post('/create', 'TenderController@store')->name('admin.tender.store');
    Route::get('/edit/{id}', 'TenderController@edit')->name('admin.tender.edit');
    Route::post('/edit/{id}', 'TenderController@update')->name('admin.tender.update');
    Route::post('/delete/{id}', 'TenderController@delete')->name('admin.tender.delete');

  });



  Route::group(['prefix' => 'contractor'], function() {
    Route::get('/', 'ContractorController@index')->name('admin.contractor.index');
    Route::get('/create', 'ContractorController@create')->name('admin.contractor.create');
    Route::post('/create', 'ContractorController@store')->name('admin.contractor.store');
    Route::get('/edit/{id}', 'ContractorController@edit')->name('admin.contractor.edit');
    Route::post('/edit/{id}', 'ContractorController@update')->name('admin.contractor.update');
    Route::post('/delete/{id}', 'ContractorController@delete')->name('admin.contractor.delete');

  });

  Route::group(['prefix' => 'document'], function() {
    Route::get('/', 'DocumentController@index')->name('admin.document.index');
    Route::get('/upload-a-document', 'DocumentController@create')->name('admin.document.create');
    Route::post('/upload-a-document', 'DocumentController@store')->name('admin.document.store');
    Route::get('/edit-document/{slug}', 'DocumentController@edit')->name('admin.document.edit');
    Route::put('/edit-document/{slug}', 'DocumentController@update')->name('admin.document.update');
    Route::post('/delete-doument/{id}', 'DocumentController@delete')->name('admin.document.delete');
  });

  Route::group(['prefix' => 'news-events'], function() {
    Route::get('/', 'BlogController@index')->name('admin.news.index');
    Route::get('/create', 'BlogController@create')->name('admin.news.create');
    Route::post('/create', 'BlogController@store')->name('admin.news.store');
    Route::get('/edit/{slug}', 'BlogController@edit')->name('admin.news.edit');
    Route::put('/edit/{slug}', 'BlogController@update')->name('admin.news.update');
    Route::post('/delete/{id}', 'BlogController@delete')->name('admin.news.delete');
  });

});


Route::get('export', 'TenderController@export')->name('ocds.export');
Route::get('/import', 'OcdsController@import')->name('demo.import');
Route::post('/import', 'OcdsController@importStore')->name('demo.import.post');