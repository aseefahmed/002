
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
    Route::post('/update-order', ['uses' => 'ProductionController@updateOrderDetails', 'as' => 'Supplier Details Updated']);
    Route::get('/order-details/{order_id}', ['uses' => 'ProductionController@viewOrderDetails', 'as' => 'Order Details']);
    Route::get('/report/orders', ['uses' => 'ProductionController@generateOrderReport', 'as' => 'Order Report']);
    Route::post('/filter-orders', ['uses' => 'ProductionController@filterOrder', 'as' => 'Filter Orders']);
    Route::post('/report/orders', ['uses' => 'ProductionController@generateReport', 'as' => 'Orders Report']);
    Route::get('/requisitions/create', ['uses' => 'ProductionController@generateRequisitions', 'as' => 'Orders Requisition']);
    Route::post('/view-orders-summery', ['uses' => 'ProductionController@viewOrdersSummery', 'as' => 'Orders Requisition']);
    Route::post('/view-order-requisition-form', ['uses' => 'ProductionController@loadOrderRequisitionForm', 'as' => 'Orders Requisition']);
    Route::post('/create-requisition', ['uses' => 'ProductionController@createRequisition', 'as' => 'Create Requisition']);
    Route::post('/draft-requisition/{action}', ['uses' => 'ProductionController@createDraftRequisition', 'as' => 'Create Draft Requisition']);
    Route::get('/requisitions', ['uses' => 'ProductionController@viewNewRequisitions', 'as' => 'Requisitions']);
    Route::get('/requisitions/draft', ['uses' => 'ProductionController@viewDraftRequisitions', 'as' => 'Draft Requisitions']);
    Route::get('/requisitions/sent', ['uses' => 'ProductionController@viewSentRequisitions', 'as' => 'Sent Requisitions']);
    Route::get('/requisition/{id}', ['uses' => 'ProductionController@viewRequisition', 'as' => 'Requisition Details']);
    Route::get('/requisition/change-flag/{action}', ['uses' => 'ProductionController@changeRequisitionFlag', 'as' => 'Change Requisition Details']);
    
        
});