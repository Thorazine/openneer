<?php

/**
 * Every protected route
 */
Route::group(['middleware' => 'sentinel.auth', 'namespace' => 'App\Http\Controllers\Cms'], function() {

	/*
	|----------------------------------------------------------------------
	| Example module route
	|----------------------------------------------------------------------
	|
	| Route::resource('module', 'ModuleController');
	|
	*/

	Route::get('panel', ['as' => 'panel.index', 'uses' => 'PanelController@index']);

	Route::post('contacts/order', ['as' => 'contacts.order', 'uses' => 'ContactController@order']);
	Route::resource('contacts', 'ContactController');

	Route::post('education/order', ['as' => 'education.order', 'uses' => 'EducationController@order']);
	Route::resource('education', 'EducationController');

	Route::post('experiences/order', ['as' => 'experiences.order', 'uses' => 'ExperienceController@order']);
	Route::resource('experiences', 'ExperienceController');

	Route::post('tags/order', ['as' => 'tags.order', 'uses' => 'TagController@order']);
	Route::resource('tags', 'TagController');

	Route::post('hobbies/order', ['as' => 'hobbies.order', 'uses' => 'HobbyController@order']);
	Route::resource('hobbies', 'HobbyController');

	Route::post('languages/order', ['as' => 'languages.order', 'uses' => 'LanguageController@order']);
	Route::resource('languages', 'LanguageController');

	Route::post('skills/order', ['as' => 'skills.order', 'uses' => 'SkillController@order']);
	Route::resource('skills', 'SkillController');

});

