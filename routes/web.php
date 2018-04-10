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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('courses', 'CourseController')->only('index', 'show');






// // listing semua courses yg dimiliki instruktur
// GET /courses
// // menampilkan form untuk membuat course baru
// GET /courses/create
// // menyimpan course baru
// POST /courses
// // menampilkan form edit existing course
// GET /courses/{id}/edit
// // menyimpan perubahan existing course
// PUT /courses/{id}
// // melihat detil course
// GET /courses/{id}
// //delete
// DELETE /courses/{id}
//
// CourseController
//
// //publish
// POST /courses/{id}/publish CourseController@publish
// PUT /courses/{id}/publish
// POST /courses/publish PublishController@store (ID didapat dari request body/hidden form)
// POST /published-courses/{id} PublishedCourseController@store (ID didapat dari request body/hidden form) ⭐
//
// //unpublish
// POST /courses/{id}/unpublish CourseController@unpublish
// PUT /courses/{id}/unpublish
// POST /courses/unpublish PublishController@destroy (ID didapat dari request body/hidden form)
// PUT /courses/unpublish PublishController@update (ID didapat dari request body/hidden form)
// DELETE /published-courses/{id} PublishedCourseController@destroy ⭐
//
//
// // menandai sebuah komentar sebagai SPAM
// POST /comments/{id} CommentController@spam
//
// POST /spam-comments/{id} SpamCommentController@store
