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


Route::get(trans('routes.home'), ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::get(trans('routes.notreOrganisation'),[
    'uses' => 'PagesController@notreOrganisation',
    'as'   => 'notreOrganisation'
]);

Route::get(trans('routes.notreHistoire'),[
    'uses' => 'PagesController@notreHistoire',
    'as'   => 'notreHistoire'
]);

Route::get(trans('routes.notreEquipe'),[
    'uses' => 'PagesController@notreEquipe',
    'as'   => 'notreEquipe'
]);

Route::get(trans('routes.howWeWork'),[
    'uses' => 'PagesController@howWeWork',
    'as'   => 'howWeWork'
]);

Route::get(trans('routes.areYouInterrested'),[
    'uses' => 'PagesController@areYouInterrested',
    'as'   => 'areYouInterrested'
]);

Route::get(trans('routes.ourNews'),[
    'uses' => 'PagesController@ourNews',
    'as'   => 'ourNews'
]);

Route::get(trans('routes.blog'),[
    'uses' => 'PagesController@blog',
    'as'   => 'blog'
]);

Route::get(trans('routes.contactUs'),[
    'uses' => 'PagesController@contactUs',
    'as'   => 'contactUs'
]);

Route::get(trans('routes.ressources'),[
    'uses' => 'PagesController@ressources',
    'as'   => 'ressources'
]);


Route::get(trans('routes.discours'),[
    'uses' => 'PagesController@discours',
    'as'   => 'discours'
]);

Route::get('/post/{slug}',[
    'uses' => 'PagesController@singlePost',
    'as'   => 'post.single'
]);

Route::get('/results',function (){

    $posts = App\Post::where('title','like','%'.request('query').'%')->get();

    return view('frontEnd/results')->with('posts_query',$posts)
                                   ->with('title','Search results for:'.request('query'))
                                   ->with('settings', App\Settings::first())
                                   ->with('categories', App\Category::all())
                                   ->with('tags', App\Tag::all())
                                   ->with('posts',App\Post::orderBy('created_at', 'desc')->take(3)->get());
});

Route::post('/subscribe',[

    'uses' => 'PagesController@subscribe',
    'as'   => 'subscribe'
]);

Route::post('/email',[

    'uses' => 'PagesController@email',
    'as'   => 'email'
]);


Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get(trans('routes.index'), 'HomeController@index')->name('index');

    Route::get(trans('routes.post.index'), [

        'uses' => 'PostsController@index',

        'as'   => 'post.index'
    ]);

    Route::get(trans('routes.post.create'), [

        'uses' => 'PostsController@create',

        'as'   => 'post.create'
    ]);

    Route::get('/post/edit/{id}', [

        'uses' => 'PostsController@edit',

        'as'   => 'post.edit'
    ]);

    Route::post('/post/store', [

        'uses' => 'PostsController@store',

        'as'   => 'post.store'
    ]);

    Route::post('/post/update/{id}', [

        'uses' => 'PostsController@update',

        'as'   => 'post.update'
    ]);

    Route::get('/post/delete/{id}', [

        'uses' => 'PostsController@destroy',

        'as'   => 'post.delete'
    ]);

    Route::get('/post/kill/{id}', [

        'uses' => 'PostsController@kill',

        'as'   => 'post.kill'
    ]);

    Route::get('/post/restore/{id}', [

        'uses' => 'PostsController@restore',

        'as'   => 'post.restore'
    ]);

    Route::get(trans('routes.post.trashed'), [

        'uses' => 'PostsController@trashed',

        'as'   => 'post.trashed'
    ]);

    Route::get(trans('routes.category.create'), [

        'uses' => 'CategoriesController@create',

        'as'   => 'category.create'
    ]);

    Route::post('/category/store', [

        'uses' => 'CategoriesController@store',

        'as'   => 'category.store'
    ]);

    Route::get(trans('routes.category.index'), [

        'uses' => 'CategoriesController@index',

        'as'   => 'category.index'
    ]);

    Route::get('/category/edit/{id}', [

        'uses' => 'CategoriesController@edit',

        'as'   => 'category.edit'
    ]);

    Route::get('/category/delete/{id}', [

        'uses' => 'CategoriesController@destroy',

        'as'   => 'category.delete'
    ]);

    Route::post('/category/update/{id}', [

        'uses' => 'CategoriesController@update',

        'as'   => 'category.update'
    ]);

    Route::get(trans('routes.tags.create'), [

        'uses' => 'TagsController@create',

        'as'   => 'tags.create'
    ]);

    Route::post('/tag/store', [

        'uses' => 'TagsController@store',

        'as'   => 'tags.store'
    ]);

    Route::get(trans('routes.tags.index'), [

        'uses' => 'TagsController@index',

        'as'   => 'tags.index'
    ]);

    Route::get('/tag/edit/{id}', [

        'uses' => 'TagsController@edit',

        'as'   => 'tags.edit'
    ]);

    Route::get('/tag/delete/{id}', [

        'uses' => 'TagsController@destroy',

        'as'   => 'tags.delete'
    ]);

    Route::post('/tag/update/{id}', [

        'uses' => 'TagsController@update',

        'as'   => 'tags.update'
    ]);

    Route::get(trans('routes.users.index'), [

        'uses' => 'UsersController@index',

        'as'   => 'users.index'
    ]);

    Route::get(trans('routes.users.create'), [

        'uses' => 'UsersController@create',

        'as'   => 'users.create'
    ]);

    Route::get('/user/edit/{id}', [

        'uses' => 'UsersController@edit',

        'as'   => 'users.edit'
    ]);

    Route::get('/user/delete/{id}', [

        'uses' => 'UsersController@destroy',

        'as'   => 'users.delete'
    ]);

    Route::post('/user/update/{id}', [

        'uses' => 'UsersController@update',

        'as'   => 'users.update'
    ]);

    Route::post('/user/store', [

        'uses' => 'UsersController@store',

        'as'   => 'users.store'
    ]);

    Route::get('/user/admin/{id}', [

        'uses' => 'UsersController@admin',

        'as'   => 'users.admin'
    ]);

    Route::get('/user/not-admin/{id}', [

        'uses' => 'UsersController@not_admin',

        'as'   => 'users.not.admin'
    ]);

    Route::get(trans('routes.users.my.profile'), [

        'uses' => 'ProfilesController@index',

        'as'   => 'users.my.profile'
    ]);

    Route::get('/user/profile/update/{id}', [

        'uses' => 'ProfilesController@show',

        'as'   => 'users.profile'
    ]);

    Route::post('/user/profile/update/{id}', [

        'uses' => 'ProfilesController@update',

        'as'   => 'users.profile.update'
    ]);

    Route::get(trans('routes.settings.index'),[

        'uses' => 'SettingsController@index',
        'as'   => 'settings.index'

    ]);

    Route::post(trans('routes.settings.update'), [

        'uses' => 'SettingsController@update',

        'as'   => 'settings.update'
    ]);

});


//Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

//Route::get('post/{slug}', ['as' => 'post.show', 'uses' => 'PostController@show']);

//Route::get('/', ['as' => 'home', 'uses' => 'PostController@index']);

//Route::get('post/{slug}', ['as' => 'post.show', 'uses' => 'PostController@show']);

//Route::get(trans('routes.about'), ['as' => 'about', 'uses' => 'PageController@getAboutPage']);

//Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

//Auth::routes();
//Route::get('logout', 'Auth\LoginController@logout');

//Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);


/*Route::get('/',[
    'uses' => 'PagesController@home',
    'as'   => 'home'
]);*/

