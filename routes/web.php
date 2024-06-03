<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesinController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MakeOrderController;
use App\Http\Controllers\PrintOrderController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PrintPaymentController;
use App\Http\Controllers\PrediksiHargaController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductFinishingController;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

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

Route::redirect('/', 'home');
Route::get('home', [LandingPageController::class, 'index'])->name('home');
Route::get('kontak', [KontakController::class, 'index'])->name('kontak');
Route::resource('produk', ProdukController::class);
Route::get('upload-file',[PrediksiHargaController::class, 'index'])->name('uploadfile');
Route::post('file-upload', [PrediksiHargaController::class, 'FileUpload' ])->name('FileUpload');
Route::get('testPDF', function(){
    return view ('pages.prediksi-harga.pdf');
} ) ;


Route::get('nyoba', function(){
    return view('nyoba');
});

Route::prefix('api/v1')->group(function () {
    Route::get('upload', function(){
        return ('ok');
    });
});

Route::prefix('tentang')->group(function () {
    Route::get('profil', [LandingPageController::class, 'profil'])->name('profil');
    Route::get('resource', [LandingPageController::class, 'resource'])->name('resource');
    Route::get('supply', [LandingPageController::class, 'supply'])->name('supply');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    Route::get('/jsonkertas/{id}', [MakeOrderController::class, 'jsondata']);
    Route::get('/jsonfinishingorder/{id}', [ProductFinishingController::class, 'jsondata']);
    Route::get('/jsonhitung/{produk}/{kertas}/{finishing}', [MakeOrderController::class, 'jsonhitung']);
    Route::get('pemesanan/{product}', [MakeOrderController::class, 'makeorder'])->name('pemesanan.index');
    Route::get('payment/{kode}', [MakeOrderController::class, 'payment'])->name('payment');
    Route::post('pay/{order}', [MakeOrderController::class, 'pay'])->name('pay');
    Route::post('order', [MakeOrderController::class, 'store'])->name('pemesanan.store');
    Route::get('my-order', [OrderController::class, 'myOrder'])->name('my-order');
    Route::get('akun/setting', [UserProfileController::class, 'akunsetting'])->name('akun-setting');
    Route::get('/jsondetailorder/{id}',[OrderController::class, 'jsondata'])->name('jsondetailorder');
    Route::post('print-payment',[PrintPaymentController::class, 'payment'])->name('printPayment');
    Route::post('print-order', [PrintOrderController::class, 'order'])->name('printOrder');
    
    //ADMIN ROUTES
    Route::middleware(['AdminMiddleware'])->group(function () {

        Route::get('/jsonstok/{id}',[StockController::class, 'jsondata'])->name('jsonstok');
        Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/order',[OrderController::class, 'index'])->name('order');
        Route::get('/order/accept',[OrderController::class, 'orderditerima'])->name('orderditerima');

        Route::get('/terima/{id}',[OrderController::class, 'terima'])->name('terimaorder');
        Route::get('/tolak/{id}',[OrderController::class, 'tolak'])->name('tolakorder');
        Route::get('/selesai/{id}',[OrderController::class, 'selesai'])->name('selesaiorder');

        Route::resource('stok', StockController::class);

        Route::resource('mesin', MesinController::class);
        Route::get('/jsonmesin/{id}',[MesinController::class, 'jsondata'])->name('jsonmesin');

        Route::resource('manage-product', ProductController::class);

        Route::resource('category-product', ProductCategoryController::class);
        Route::get('/jsonkategori/{id}',[ProductCategoryController::class, 'jsondata'])->name('jsonkategori');
        Route::get('/hapuskategori/{id}',[ProductCategoryController::class, 'destroy']);

        Route::get('finishing-product', [ProductFinishingController::class, 'index'])->name('finishing-product.index');
        Route::post('finishing-product', [ProductFinishingController::class, 'store'])->name('finishing-product.store');
        Route::delete('finishing-product/{id}', [ProductFinishingController::class, 'destroy'])->name('finishing-product.destroy');
        Route::put('finishing-product/{id}', [ProductFinishingController::class, 'update'])->name('finishing-product.update');
        Route::get('/jsonfinishing/{id}',[ProductFinishingController::class, 'jsondata'])->name('jsonfinishing');



        Route::delete('hapus-foto-produk/{idfoto}', [ProductController::class, 'hapusfoto'])->name('hapusfoto');

        Route::fallback(function() {
            return view('pages.utility.404');
        });
    });
});
