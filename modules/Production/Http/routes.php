<?php

Route::group(['middleware' => 'web', 'prefix' => 'production', 'namespace' => 'Modules\Production\Http\Controllers'], function()
{	    
    Route::get('/suppliers', ['uses' => 'ProductionController@loadSuppliersList', 'as' => 'Suppliers List']);
    Route::get('/orders', ['uses' => 'ProductionController@loadOrdersList', 'as' => 'Orders List']);
    Route::post('/submit-supplier', ['uses' => 'ProductionController@submitSupplierDetails', 'as' => 'Submit Supplier Details']);
    Route::post('/submit-order', ['uses' => 'ProductionController@submitOrderDetails', 'as' => 'Submit Order Details']);
    Route::get('/delete-supplier/{supplier_id}', ['uses' => 'ProductionController@deleteSupplierDetails', 'as' => 'Delete Supplier']);
    Route::get('/view-supplier/{supplier_id}', ['uses' => 'ProductionController@viewSupplierDetails', 'as' => 'Supplier Details']);
    Route::post('/update-supplier', ['uses' => 'ProductionController@updateSupplierDetails', 'as' => 'Supplier Details Updated']);
    Route::get('/order-details/{order_id}', ['uses' => 'ProductionController@viewOrderDetails', 'as' => 'Order Details']);
    
        
});