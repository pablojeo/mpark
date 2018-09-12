<?php

Artisan::call('cache:clear');

Route::get('/', 'welcomeController@index');

Route::resource('articles','ArticlesController');

Route::get('articles/{code}', [
   'as' => 'articles.show',
    'uses' => 'ArticlesController@show',
]);


Route::get('auth/login', function(){
   $credentials = [
       'email' => 'john@example.com',
       'password' => 'password'
   ];

   if(! auth()->attempt($credentials))
   {
       return '로그인 정보가 정확하지 않습니다.';
   }

   return redirect('protected');

});

Route::get('protected', function(){
   dump(session()->all());

   if(! auth()->check())
   {
       return '누구세요?';
   }

   return '어서오세요' . auth()->user()->name;
});

Route::get('auth/logout', function(){
    auth()->logout();

    return '또 봐요';
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*DB::listen(function ($query){
    dump($query->sql);
});*/

