<?php namespace Modules\Production\Http\Controllers;

use Auth;
use App\Country;
use App\Supplier;
use App\SupplierType;
use App\Order;
use App\Notification;
use App\Agent;
use App\Buyer;
use App\Brand;
use App\User;
use App\RequisitionItem;
use App\Style;
use App\Requisition;
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
        
        public function viewOrdersSummery(Request $request)
        {
            $data['orders'] = Order::where('id', $request->order_id)->get();
            
            return view('production::ajax-view.ajax-order-summery', $data);
        }
        
        public function createRequisition(Request $request)
        {
            $requisition_ref = $request->requisition_id;
//                    
            
            $requisition_items = new RequisitionItem();
            
            $requisition_items->requisition_id = $requisition_ref;
            
            ///////////////Requistition Items//////////////////////
            $time = time();
            $items[time()]['order_no'] = $request->order_id;
            
            if($request->yarn_amount == "")
                $items[$time]['yarn_amount'] = "0";
            else
                $items[$time]['yarn_amount'] = $request->yarn_amount;
            
            if($request->acc_amount == "")
                $items[$time]['acc_amount'] = "0";
            else
                $items[$time]['acc_amount'] = $request->acc_amount;
            
            if($request->btn_amount == "")
                $items[$time]['btn_amount'] = "0";
            else
                $items[$time]['btn_amount'] = $request->btn_amount;
            
            if($request->zipper_amount == "")
                $items[$time]['zipper_amount'] = "0";
            else
                $items[$time]['zipper_amount'] = $request->zipper_amount;
            
            if($request->print_amount == "")
                $items[$time]['print_amount'] = "0";
            else
                $items[$time]['print_amount'] = $request->print_amount;
            
            $total_amount = $request->yarn_amount + $request->acc_amount + $request->btn_amount + $request->zipper_amount + $request->print_amount;
            
            DB::table('requisitions')->where('id', $requisition_ref)->increment('requested_amount', $total_amount);
            $items = serialize($items);
            //////////////////////////////////////////////////////////////
//            
            $requisition_items->items_val = $items;
         
            $requisition_items->save();
            
            $data['items'] = $items;
            
            return view('production::ajax-view.ajax-requisition_item_list', $data);
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
                $order->compositions = $request->compositions;

                $order->save();

                $data['orders']      = DB::table('orders')
                                            ->join('suppliers', 'suppliers.id', '=', 'orders.supplier')
                                            ->select('orders.*', 'suppliers.supplier_name')  
                                            ->orderBy('orders.id','asc')                   
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
        
        public function updateOrderDetails(Request $request)
        {
            //print_r($request->l_c_confirmed);
            
            if(isset($request->l_c_confirmed))
            {
                if($request->l_c_doc != ""){
                    $file_extension = $request->file('l_c_doc')->guessExtension();
                    $img_name = time().".".$file_extension;
                    $request->file('l_c_doc')->move('public/uploads/LC', $img_name);
                }else{
                    $img_name = "no_image.png";
                }
                
                
                Order::where('id', $request->order_id)->update(
                        [
                            'lc_confirmed' => 1,
                            'lc_doc' => $img_name
                        ]
                    );
                
            }
            else
            {
                Order::where('id', $request->id)->update(
                        [
                            'lc_confirmed' => 0
                        ]
                    );
            }
            
        }
        
        public function generateOrderReport()
        {
            $data['orders']      = DB::table('orders')
                                            ->join('suppliers', 'suppliers.id', '=', 'orders.supplier')
                                            ->select('orders.*', 'suppliers.supplier_name')           
                                            ->orderBy('orders.id','asc')    
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
            $data['styles'] = Brand::all();
            
            return view('production::order-report-form', $data);
        }
        
        public function filterOrder(Request $request)
        {
            $arr = array();
            //echo "<pre>";print_r($request->all());
            if($request->suppiler_chk == 'on')
                $arr['supplier'] = $request->supplier;
            if($request->agent_chk == 'on')
                $arr['agent'] = $request->agent;
            if($request->brand_chk == 'on')
                $arr['brand'] = $request->brand;
            if($request->buyer_chk == 'on')
                $arr['buyer'] = $request->buyer;
            if($request->style_chk == 'on')
                $arr['style'] = $request->style;
            if($request->delivery_chk == 'on')
            {
                $date = date_create($request->delivery_date);
                $arr['delivery_date'] = date_format($date,"Y-m-d");
            }
            $data['filter_arr'] = serialize($arr);
            $data['orders']      = DB::table('orders')
                                            ->join('suppliers', 'suppliers.id', '=', 'orders.supplier')
                                            ->where($arr)
                                            ->orderBy('orders.id','asc')
                                            ->select('orders.*', 'suppliers.supplier_name') 
                                            ->get();
            //echo "<pre>";print_r($request->all());
           return view('production::ajax-view.ajax-filtered-orders-list', $data);
        }
        
        public function generateReport(Request $request)
        {
            $filter_param = unserialize($request->filter_param);
            
            $data['orders']      = DB::table('orders')
                                            ->join('suppliers', 'suppliers.id', '=', 'orders.supplier')
                                            ->select('orders.*', 'suppliers.supplier_name');
            
            if($filter_param)
                $data['orders'] = $data['orders']->where($filter_param)->orderBy('orders.id','asc')->get();
            else
                $data['orders'] = $data['orders']->orderBy('orders.id','asc')->get();
            
            
            return view('production::reports.orders', $data);
        }
        
        public function generateRequisitions()
        {
            
            $data['users'] = User::where('id', '!=', Auth::user()->id)->get();
            $data['orders'] = Order::select('id')->get();
            
            $requisition = new Requisition();
            
            $requisition->id = time();
            $requisition->requisition_type = 1;
            $requisition->created_by= Auth::user()->id;
            
            $requisition->save();
            
            $data['requisition_id'] = $requisition->id;
            return view('production::order-requisition-form', $data);
        }

	public function createDraftRequisition(Request $request, $action)
        {
            if($action == "draft")
                $flag = 1;
            else if ($action == "Forward")
            {
                $flag = 2;
                
                $count = Notification::where('user_id', $request->requisition_forwarded_to)->where('notification_type',1)->count();
                
                if($count == 0)
                {
                    $notification = new Notification();
                
                    $notification->user_id = $request->requisition_forwarded_to;
                    $notification->notification_type = 1; //1 for Order Requistion
                    $notification->description = "new orders requisitions";
                    $notification->landing_url = "/order-requisitions" ;
                    $notification->num_of_notifications = 1;
                    $notification->clicked = 0 ;
                    $notification->last_sender_id = Auth::user()->id;
                    $notification->last_sender_profile_pic = session('profile_pic');
                    $notification->save();
                }
                else
                {
                    Notification::where('user_id',$request->requisition_forwarded_to)->where('notification_type',1)->increment('num_of_notifications', 1, [
                       
                        'clicked' => 0,
                        'last_sender_id' => Auth::user()->id,
                        'last_sender_profile_pic' => session('profile_pic')
                    ]);
                }
                
                
            }
            
            Requisition::where('id', $request->requisition_id)->update([
                'name' => $request->requisition_name,
                'flag' => $flag,
                'sender_id' => Auth::user()->id,
                'forwarded_to' => $request->requisition_forwarded_to,
            ]);
        }
        
        public function viewNewRequisitions()
        {
            $data['requisitions'] = DB::table('requisitions')
                    ->join('requisition_types', 'requisition_types.id', '=', 'requisitions.requisition_type')
                    ->join('users', 'users.id', '=', 'requisitions.sender_id')
                    ->where('forwarded_to',Auth::user()->id)
                    ->where('flag',2)
                    ->select('requisitions.*', 'requisition_types.type', 'users.first_name', 'users.last_name')
                    ->get();
            return view('production::new-requisitions', $data);
        
        }
        
        public function viewSentRequisitions()
        {
            $data['requisitions'] = DB::table('requisitions')
                    ->join('requisition_types', 'requisition_types.id', '=', 'requisitions.requisition_type')
                    ->join('users', 'users.id', '=', 'requisitions.forwarded_to')
                    ->where('sender_id',Auth::user()->id)
                    ->where('flag',2)
                    ->orWhere('flag',3)
                    ->orWhere('flag',4)
                    ->select('requisitions.*', 'requisition_types.type', 'users.first_name', 'users.last_name')
                    ->get();
            return view('production::sent-requisitions', $data);
        
        }
                
        public function viewDraftRequisitions()
        {
            $data['requisitions'] = DB::table('requisitions')
                    ->join('requisition_types', 'requisition_types.id', '=', 'requisitions.requisition_type')
                    ->where('sender_id',Auth::user()->id)
                    ->where('flag',1)
                    ->select('requisitions.*', 'requisition_types.type')
                    ->get();
            return view('production::draft-requisitions', $data);
        }
        
        public function viewRequisition($requisition_id)
        {
            $data['requisition'] = DB::table('requisitions')
                    ->join('requisition_types', 'requisition_types.id', '=', 'requisitions.requisition_type')
                    ->join('users', 'users.id', '=', 'requisitions.sender_id')
                    ->where('requisitions.id',$requisition_id)
                    ->select('requisitions.*', 'requisition_types.type', 'users.first_name', 'users.last_name')
                    ->get();
            
            $data['items'] = DB::table('requisition_items')
                    ->where('requisition_id', $requisition_id)
                    ->get();
            
            return view('production::requisition-details', $data);
        }
        
        public function changeRequisitionFlag(Request $reqeust, $action)
        {
            $action = explode('-', $action);
            $requisition_id = $action[0];
            $flag = $action[1];
            $items = $action[2];
            $items = explode('*', substr($items, 0, -1));
            foreach($items as $item)
            {
                $item = explode('_', $item);
                $order_no = $item[0];
                $yarn_amount = $item[1];
                $acc_amount = $item[2];
                $btn_amount = $item[3];
                $zipper_amount = $item[4];
                $print_amount = $item[5];
                
                Order::where('id', $order_no)
                        ->increment('approved_yarn_amount', $acc_amount); 
                Order::where('id', $order_no)
                        ->increment('approved_acc_amount', $acc_amount);
                Order::where('id', $order_no)
                        ->increment('approved_btn_amount', $btn_amount);
                Order::where('id', $order_no)
                        ->increment('approved_zipper_amount', $zipper_amount);
                Order::where('id', $order_no)
                        ->increment('approved_print_amount', $print_amount);
            }
            if($flag == "APPROVE")
                $flag=3;
            if($flag == "SEND_BACK")
                $flag=1;
            if($flag == "REJECT")
                $flag=4;
            
            Requisition::where('id', $requisition_id)->update([
                'flag' =>$flag
            ]);
            RequisitionItem::where('requisition_id', $requisition_id)->update([
                'flag' =>$flag
            ]);
        }
}