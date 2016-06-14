<?php namespace Modules\Production\Http\Controllers;

use App\Country;
use App\Supplier;
use App\SupplierType;
use App\Order;
use App\Agent;
use App\Buyer;
use App\Brand;
use App\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pingpong\Modules\Routing\Controller;

class ProductionController extends Controller {
	
	public function loadSuppliersList()
	{
		$data['suppliers']      = DB::table('suppliers')
                                            ->join('countries', 'suppliers.country_code', '=', 'countries.country_code')
                                            ->select('suppliers.*', 'countries.country_name')                    
                                            ->get();
		$data['countries']      = Country::all();
		$data['supplier_types'] = SupplierType::all();

		return view('production::suppliers-list', $data);
	}

	public function submitSupplierDetails(Request $request)
	{
		Supplier::create($request->all());

		$data['suppliers']      = DB::table('suppliers')
                                            ->join('countries', 'suppliers.country_code', '=', 'countries.country_code')
                                            ->select('suppliers.*', 'countries.country_name')                    
                                            ->get();
		$data['countries']      = Country::all();
		$data['supplier_types'] = SupplierType::all();

		return view('production::ajax-view.ajax-supplier-list', $data);
	}
        
        public function deleteSupplierDetails($supplier_id)
        {
            Supplier::where('id', $supplier_id)->delete();

            $data['suppliers']      = DB::table('suppliers')
                                        ->join('countries', 'suppliers.country_code', '=', 'countries.country_code')
                                        ->select('suppliers.*', 'countries.country_name')                    
                                        ->get();
            $data['countries']      = Country::all();
            $data['supplier_types'] = SupplierType::all();

            return view('production::ajax-view.ajax-supplier-list', $data);
        }
        
        public function viewSupplierDetails($supplier_id)
        {
            $data['suppliers']      = DB::table('suppliers')
                                        ->join('countries', 'suppliers.country_code', '=', 'countries.country_code')
                                        ->where('suppliers.id', $supplier_id)
                                        ->select('suppliers.*', 'countries.country_name')                    
                                        ->get();
            $data['countries']      = Country::all();
            $data['supplier_types'] = SupplierType::all();
            
            return view('production::supplier-details', $data);
        }
        
        public function updateSupplierDetails(Request $request)
        {
            
            Supplier::where('id', $request->supplier_id)
                    ->update([
                        'supplier_name' => $request->supplier_name,
                        'address_line_1' => $request->address_line_1,
                        'address_line_2' => $request->address_line_2,
                        'town' => $request->town,
                        'city' => $request->city,
                        'post_code' => $request->post_code,
                        'country_code' => $request->country_code,
                        'contact_person' => $request->contact_person,
                        'email' => $request->email,
                        'contact_number' => $request->contact_number,
                        'supplier_type_id' => $request->supplier_type,
                    ]);
            
        }
        
        
	public function loadOrdersList()
	{
		$data['orders']      = DB::table('orders')
                                            ->join('suppliers', 'suppliers.id', '=', 'orders.supplier')
                                            ->select('orders.*', 'suppliers.supplier_name')                    
                                            ->get();
                $data['suppliers']      = DB::table('suppliers')
                                            ->join('countries', 'suppliers.country_code', '=', 'countries.country_code')
                                            ->select('suppliers.*', 'countries.country_name')                    
                                            ->get();
		$data['countries']      = Country::all();
		$data['supplier_types'] = SupplierType::all();
                $data['agents'] = Agent::all();
                $data['buyers'] = Buyer::all();
                $data['brands'] = Brand::all();
                $data['styles'] = Style::all();
		return view('production::orders-list', $data);
	}

	public function submitOrderDetails(Request $request)
	{
		$order = new Order();
                
                $order->supplier = $request->supplier;                
                $order->style = $request->style;                
                $order->brand = $request->brand;                
                
                if($request->photo != ""){
                    $file_extension = $request->file('photo')->guessExtension();
                    $img_name = time().".".$file_extension;
                    $request->file('photo')->move('public/img/uploads/orders', $img_name);
                }else{
                    $img_name = "no_image.png";
                }
                $order->photo = $img_name;
                
                $order->agent = $request->agent;
                $order->buyer = $request->buyer;
                $order->delivery_date = date_format(date_create($request->delivery_date), 'Y-m-d'); 
                $order->gg = $request->gg;
                $order->qty = $request->qty;
                $order->fob = $request->fob;
                $order->weight_per_dzn = $request->weight_per_dzn;
                $order->qty_per_dzn = $request->qty_per_dzn;
                $order->total_yarn_weight = $request->total_yarn_weight;
                $order->total_yarn_cost = $request->total_yarn_cost;
                $order->acc_rate = $request->acc_rate;
                $order->total_acc_cost= $request->total_acc_cost;
                $order->btn_cost = $request->btn_cost;
                $order->total_btn_cost = $request->total_btn_cost;
                $order->zipper_cost = $request->zipper_cost;
                $order->total_zipper_cost = $request->total_zipper_cost;
                $order->print_cost = $request->print_cost;
                $order->total_print_cost = $request->total_print_cost;
                $order->total_fob = $request->total_fob;
                $order->total_cost = $request->total_cost;
                $order->balance_amount = $request->balance_amount;
                $order->cost_of_making = $request->cost_of_making;

                $order->save();

                $data['orders']      = DB::table('orders')
                                            ->join('suppliers', 'suppliers.id', '=', 'orders.supplier')
                                            ->select('orders.*', 'suppliers.supplier_name')                    
                                            ->get();
                $data['suppliers']      = DB::table('suppliers')
                                            ->join('countries', 'suppliers.country_code', '=', 'countries.country_code')
                                            ->select('suppliers.*', 'countries.country_name')                    
                                            ->get();
		$data['countries']      = Country::all();
		$data['supplier_types'] = SupplierType::all();

		return view('production::ajax-view.ajax-orders-list', $data);
	}
        
        public function viewOrderDetails($order_id)
        {
            $data['orders'] = Order::where('id', $order_id)->get();
            $data['suppliers']      = DB::table('suppliers')
                                            ->join('countries', 'suppliers.country_code', '=', 'countries.country_code')
                                            ->select('suppliers.*', 'countries.country_name')                    
                                            ->get();
            $data['countries']      = Country::all();
            $data['supplier_types'] = SupplierType::all();
            $data['agents'] = Agent::all();
            $data['buyers'] = Buyer::all();
            $data['brands'] = Brand::all();
            $data['styles'] = Style::all();
            return view('production::order-details', $data);
        }

	
}