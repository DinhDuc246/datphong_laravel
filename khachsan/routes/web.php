<?php

use Illuminate\Support\Facades\Route;

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
//dịch vụ piza
Route::get('/add-piza','DichvuController@add_piza');
Route::post('/save-piza','DichvuController@save_piza');
Route::get('/all-piza','DichvuController@all_piza');
Route::get('/edit-piza/{piza_id}','DichvuController@edit_piza');
Route::post('/update-piza/{piza_id}','DichvuController@update_piza');
Route::get('/delete-piza/{piza_id}','DichvuController@delete_piza');
//ưu đãi
Route::get('/add-uudai','Udcontroller@add_uudai');
Route::post('/save-uudai','Udcontroller@save_uudai');
Route::get('/all-uudai','Udcontroller@all_uudai');
Route::get('/delete-uudai/{uudai_id}','Udcontroller@delete_uudai');
//phongdon
Route::get('/phongdon','HomeController@phong_don');
Route::get('/phongdoi','HomeController@phong_doi');
//fontend
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');
Route::get('/gioi-thieu','HomeController@gioi_thieu');
Route::get('/get-phong/{brand_id}','HomeController@get_id');
Route::get('/Book/{product_id}','HomeController@quickview');
Route::post('/tim-kiem','HomeController@search');
Route::get('/room-list/{product_id}','HomeController@quickview');

//book room
Route::get('/book-room/{product_id}','HomeController@book_room');
Route::post('/book-now','HomeController@save_book');
Route::get('/dbook','HomeController@all_book');
Route::get('/book_list/{book_id}','HomeController@book_list');
Route::get('/unactive-book/{book_id}','HomeController@unactive_book');
Route::get('/active-book/{book_id}','HomeController@active_book');
Route::get('/book-delete/{book_id}','HomeController@book_delete');

//contacts
Route::get('contacts','HomeController@contacts');


///thống kê
Route::post('/dashboard-filter','AdminController@dashboard_filter');
Route::post('/aaa','Admincontroller@aaa');
Route::post('/days-order','AdminController@days_order');
Route::post('/filter-by-date','AdminController@filter_by_date');


// Route::get('/piza','HomeController@piza');


//backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

//category product 
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');

Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');

Route::post('/save-category-product','CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@updete_category_product');

//brand product
Route::get('/add-brand-product','BrandProduct@add_brand_product');
Route::get('/all-brand-product','BrandProduct@all_brand_product');
Route::get('/edit-brand-product/{brand_product_id}','BrandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}','BrandProduct@delete_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product');

Route::post('/save-brand-product','BrandProduct@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}','BrandProduct@updete_brand_product');

//product
Route::get('/add-product','ProductController@add_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');

Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');

Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@updete_product');

//checkout
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-checkout','CheckoutController@save_checkout');
Route::get('/payment','CheckoutController@payment');

//manage-order
Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/delete-order/{datphong_id}','CheckoutController@delete_order');


// Update-phòng
Route::post('/update-book','CheckoutController@update_book');
// Gửi email
Route::get('/email/{book_id}','CheckoutController@email');


