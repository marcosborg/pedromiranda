<?php

use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'index'])->name('homepage');

Route::get('informacao/{id}', 'WebsiteController@info');

Route::prefix('forms')->group(function () {
    Route::post('/contact', 'WebsiteController@contact');
    Route::post('/newsletter', 'WebsiteController@newsletter');
});

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Content Category
    Route::delete('content-categories/destroy', 'ContentCategoryController@massDestroy')->name('content-categories.massDestroy');
    Route::resource('content-categories', 'ContentCategoryController');

    // Content Tag
    Route::delete('content-tags/destroy', 'ContentTagController@massDestroy')->name('content-tags.massDestroy');
    Route::resource('content-tags', 'ContentTagController');

    // Content Page
    Route::delete('content-pages/destroy', 'ContentPageController@massDestroy')->name('content-pages.massDestroy');
    Route::post('content-pages/media', 'ContentPageController@storeMedia')->name('content-pages.storeMedia');
    Route::post('content-pages/ckmedia', 'ContentPageController@storeCKEditorImages')->name('content-pages.storeCKEditorImages');
    Route::resource('content-pages', 'ContentPageController');

    // Hero
    Route::delete('heroes/destroy', 'HeroController@massDestroy')->name('heroes.massDestroy');
    Route::post('heroes/media', 'HeroController@storeMedia')->name('heroes.storeMedia');
    Route::post('heroes/ckmedia', 'HeroController@storeCKEditorImages')->name('heroes.storeCKEditorImages');
    Route::resource('heroes', 'HeroController');

    // About
    Route::delete('abouts/destroy', 'AboutController@massDestroy')->name('abouts.massDestroy');
    Route::post('abouts/media', 'AboutController@storeMedia')->name('abouts.storeMedia');
    Route::post('abouts/ckmedia', 'AboutController@storeCKEditorImages')->name('abouts.storeCKEditorImages');
    Route::resource('abouts', 'AboutController');

    // Box
    Route::delete('boxes/destroy', 'BoxController@massDestroy')->name('boxes.massDestroy');
    Route::post('boxes/media', 'BoxController@storeMedia')->name('boxes.storeMedia');
    Route::post('boxes/ckmedia', 'BoxController@storeCKEditorImages')->name('boxes.storeCKEditorImages');
    Route::resource('boxes', 'BoxController');

    // Client
    Route::delete('clients/destroy', 'ClientController@massDestroy')->name('clients.massDestroy');
    Route::post('clients/media', 'ClientController@storeMedia')->name('clients.storeMedia');
    Route::post('clients/ckmedia', 'ClientController@storeCKEditorImages')->name('clients.storeCKEditorImages');
    Route::resource('clients', 'ClientController');

    // Feature
    Route::delete('features/destroy', 'FeatureController@massDestroy')->name('features.massDestroy');
    Route::post('features/media', 'FeatureController@storeMedia')->name('features.storeMedia');
    Route::post('features/ckmedia', 'FeatureController@storeCKEditorImages')->name('features.storeCKEditorImages');
    Route::resource('features', 'FeatureController');

    // Service
    Route::delete('services/destroy', 'ServiceController@massDestroy')->name('services.massDestroy');
    Route::resource('services', 'ServiceController');

    // Testimonial
    Route::delete('testimonials/destroy', 'TestimonialController@massDestroy')->name('testimonials.massDestroy');
    Route::post('testimonials/media', 'TestimonialController@storeMedia')->name('testimonials.storeMedia');
    Route::post('testimonials/ckmedia', 'TestimonialController@storeCKEditorImages')->name('testimonials.storeCKEditorImages');
    Route::resource('testimonials', 'TestimonialController');

    // Team
    Route::delete('teams/destroy', 'TeamController@massDestroy')->name('teams.massDestroy');
    Route::post('teams/media', 'TeamController@storeMedia')->name('teams.storeMedia');
    Route::post('teams/ckmedia', 'TeamController@storeCKEditorImages')->name('teams.storeCKEditorImages');
    Route::resource('teams', 'TeamController');

    // Contact
    Route::delete('contacts/destroy', 'ContactController@massDestroy')->name('contacts.massDestroy');
    Route::resource('contacts', 'ContactController');

    // Message
    Route::delete('messages/destroy', 'MessageController@massDestroy')->name('messages.massDestroy');
    Route::resource('messages', 'MessageController');

    // Nesletter
    Route::delete('nesletters/destroy', 'NesletterController@massDestroy')->name('nesletters.massDestroy');
    Route::resource('nesletters', 'NesletterController');

});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});