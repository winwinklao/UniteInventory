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

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::resource('ImportProductOrder', \App\Http\Controllers\ImportProductOrderController::class);
    Route::post('importproductorder',[\App\Http\Controllers\ImportProductOrderController::class,'storeOrder'])->name('ImportProductOrder.storeOrder');
    Route::resource('product', \App\Http\Controllers\ProductController::class);
    Route::resource('Importorder', \App\Http\Controllers\ImportOrder::class);
    Route::resource('shelf',\App\Http\Controllers\ShelfController::class);
    Route::resource('lot' ,\App\Http\Controllers\LotController::class);
    Route::resource('inshelf' ,\App\Http\Controllers\InshelfController::class);
    Route::resource('history' ,\App\Http\Controllers\allhistoryController::class);
    Route::resource('check' ,\App\Http\Controllers\CheckController::class);
    Route::post('importorder/{Importorder}/',[\App\Http\Controllers\ImportOrder::class,'storeOrder'])->name('ImportOrder.storeOrder');
    // Route::post('importproductorder',[\App\Http\Controllers\ImportOrder::class,'storeQTY'])->name('ImportProductOrder.storeQTY');

    Route::resource('ExportOrder', \App\Http\Controllers\ExportOrderController::class);
    Route::post('exportProduct',[\App\Http\Controllers\ExportOrderController::class,'storeOrder'])->name('ExportOrder.storeOrder');
    
    Route::resource('ExportProductOrder', \App\Http\Controllers\ExportProductOrderController::class);
    Route::post('ExportProductOrder/{ExportOrder}/',[\App\Http\Controllers\ExportOrder::class,'storeOrder'])->name('ExportProductOrder.storeOrder');
    
    //report.index
    Route::get('/expire-inventory' , [\App\Http\Controllers\ExpiredInventoryController::class , 'main']);
    Route::post('/expire-inventory' , [\App\Http\Controllers\ExpiredInventoryController::class , 'edit']);
    Route::post('/expire-inventory-delete' , [\App\Http\Controllers\ExpiredInventoryController::class , 'destroy']);
    Route::post('/search' ,  [\App\Http\Controllers\ExpiredInventoryController::class , 'find']);

    //report.index2
    Route::get('/expiring' , [\App\Http\Controllers\ExpiringInventoryController::class , 'main']);
    Route::post('/expiring' , [\App\Http\Controllers\ExpiringInventoryController::class , 'edit']);
    Route::post('/expiring-delete' , [\App\Http\Controllers\ExpiringInventoryController::class , 'destroy']);

    Route::post('/search' ,  [\App\Http\Controllers\ProductController::class , 'find']);
    Route::post('/delete' ,  [\App\Http\Controllers\ProductController::class , 'destroy']);
    // Route::post('/shelf-delete' , [\App\Http\Controllers\ShelfController::class , 'destroy'])->name('shelf.destroy');
    
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/ExportProduct', function () {
//     return view('ExportProduct.Order.index');
// })->name('ExportProduct');

Route::get('/AllRequest', function () {
    return view('ExportProduct.AddRequest.allRequest');
})->name('allRequest');

Route::get('/AddRequest', function () {
    return view('ExportProduct.AddRequest.index');
})->name('AddRequest');

Route::get('/Feedback', function () {
    return view('ExportProduct.Order.feedback');
})->name('Feedback');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');



// test route ..................
// Route::middleware(['auth:sanctum', 'verified'])->get('/test', function () {
//     return view('product.product');
// })->name('test');




Route::middleware(['auth:sanctum', 'verified'])->get('/Refund', function () {
    return view('Refund.return');
})->name('return');

Route::middleware(['auth:sanctum', 'verified'])->get('/Refund1', function () {
    return view('Refund.return1');
})->name('return1');

Route::middleware(['auth:sanctum', 'verified'])->get('/Refund2', function () {
    return view('Refund.return2');
})->name('return2');


// Route::middleware(['auth:sanctum', 'verified'])->get('/CheckStock', function () {
//     return view('CheckStock.check');
// })->name('CheckStock');



Route::middleware(['auth:sanctum', 'verified'])->get('/History', function () {
    return view('History.History');
})->name('History');


// Route::get('/test', function () {
//     return view('product.ProductTable.index');
// });

// Route::get('/product/create', function () {
//     return view('product.ProductTable.create');
// });

Route::get('/temp', function () {
    return view('temp');
});


Route::get('/importorder', function () {
    return view('/ImportProduct/ImportOrder.index');
});

Route::get('/importorderdetail', function () {
    return view('/ImportProduct/ImportOrder.show');
});

Route::get('/itemsExportLate', function () {
    return view('/dashboard.itemsExportLate');
});


//bill
Route::get('/billcheck', function () {
    return view('bill.billcheck');
})->name('billcheck');

Route::get('/billreturn', function () {
    return view('bill.billreturn');
})->name('billreturn');

Route::get('/billchecklis', function () {
    return view('bill.billchecklis');
})->name('billchecklis');

Route::get('/billImportorderDetail', function () {
    return view('bill.billImportorderDetail');
})->name('billImportorderDetail');

Route::get('/billorderdetail', function () {
    return view('bill.billorderdetail');
})->name('billorderdetail');

Route::get('/billrecheck', function () {
    return view('bill.billrecheck');
})->name('billrecheck');

Route::get('/billrequest', function () {
    return view('bill.billrequest');
})->name('billrequest');

Route::get('/PrductGroup', function () {
    return view('dashboard.productGroup');
})->name('productGroup');

Route::get('/RankingExport', function () {
    return view('dashboard.rankingExport');
})->name('rankingExport');

Route::get('/exportLate', function () {
    return view('dashboard.exportLate');
})->name('exportLate');

Route::get('/avgexport', function () {
    return view('dashboard.avgexport');
})->name('avgexport');

Route::get('/ExOder', function () {
    return view('ExportProduct.Order.index');
})->name('ExOder');

Route::get('/InportOder', function () {
    return view('ImportProduct.ImportOrder.index');
})->name('InportOder');