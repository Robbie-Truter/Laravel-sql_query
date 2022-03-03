<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB ;
use Illuminate\Http\Request;



//Displaying titles and content from articles tables
Route::get('/', function () {
    $posts = DB::select('SELECT title,content FROM Articles;');
    return view( 'home' , ['posts'=> $posts]);
});



//Find record in article table by id
Route::get('/article/{id}', function ($id) {
    $posts = DB::table( 'Articles')->find($id);
    return view('article',['id' => $id],['posts'=> $posts]);
});



//find all records in article table with certain categories
Route::get('/category/{slug}', function ($slug) {
    $posts = DB::select("SELECT * FROM Articles WHERE category= '$slug'");
    return view('category',['slug' => $slug],['posts'=> $posts]);
});



//find all records in article table with certain tags
Route::get('/tag/{slug}', function ($slug) {
    $posts = DB::select("SELECT * FROM Articles WHERE tags= '$slug'");
    return view('tag',['slug' => $slug],['posts'=> $posts]);
 });



//Terms and conditions and privacy policy
Route::get('/legal', function () {
    return view('legal');
});



//Search for record in db with html form
Route::get('/search', function(Request $request){
    $id= $request->input('id');
    $category= $request->input('category');
    $tags= $request->input('tags');

    $posts = DB::select("SELECT * FROM Articles WHERE id='$id'");
    $posts2 = DB::select("SELECT * FROM Articles WHERE tags='$tags'");
    $posts3 = DB::select("SELECT * FROM Articles WHERE category='$category'");

    return view( 'search',['posts'=> $posts ]+['posts2'=> $posts2]+['posts3'=> $posts3]);
});







