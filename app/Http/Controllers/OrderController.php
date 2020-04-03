<?php


namespace App\Http\Controllers;
use App\Order;
use PDF;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getAllUsers(){
    	$users = User::get();
    	return response($users,200);
    }

    public function getPDF(Request $request){
        $data = json_decode(base64_decode($request->data));
        include "../database/db_payments.php";
        $payment = $payment_methods[$request->payment];
        $products = array();
        $ordertotal = 0;
        foreach ($data as $item ) {
            array_push($products,[
                'name'=>$item->item->name,
                'description'=>$item->item->description,
                'quantity'=>$item->quantity,
                'price'=>$item->item->c_price,
                'total'=>$item->item->c_price*$item->quantity
            ]);
            $ordertotal+=$item->item->c_price*$item->quantity;
            $shipping = 0;
            if($ordertotal < 599) $shipping = 40;
            $ordertotal += $shipping;
        }

        $pdf = PDF::loadView('PDF.pdfInvoice',[
            'products'=>$products,
            'total'=>$ordertotal,
            'payment'=>$payment,
            'shipping'=>$shipping
        ]);
        return $pdf->download('customers.pdf');
    }

    public function requestAddOrder($payment){
        ?>
        <script type="text/javascript">
        localStorage.payment = <?php echo $payment; ?>;
        location.href = "/completed?payment="+<?php echo $payment; ?>+"&data="+btoa(localStorage.cart);
        </script>
        <?php
    }

    public function requestPDF(){
        ?>
        <script type="text/javascript">
        location.href = "/download/invoice?payment="+localStorage.payment+"&data="+btoa(localStorage.cart);
        </script>
        <?php
    }

    public function completeOrder(Request $request){
        if(!session()->has('user'))
        return redirect('home');
        $payment = $request->payment;
        $products = json_decode(base64_decode($request->data));
        foreach ($products as $data ) {
            $order = new Order;
            $order->userID = session('user')->id;
            $order->productID = $data->item->id;
            $order->category = $data->category;
            $order->payment = $payment;
            $order->quantity = $data->quantity;
            $order->save();
            echo json_encode($order);
        }
    }

    public function removeProductsFromCart(){
    	?>
        <script type="text/javascript">
        location.href = "/thankyou";
        </script>
        <?php
    }

    public function updateUser($id,Request $request){
    
    	if(User::where('id',$id)->exists()&&count($request->input())>0){
    		
    		$user = User::find($id);
    		$user->name = is_null($request->name)?$user->name:$request->name;
    		$user->course = is_null($request->course)?$user->course:$request->course;
    		$user->save();
    		return response()->json([
    			'User'=>$user->name,
    			'message'=>"records updated successfully"
    		],200);
    	}
    	else{
    		return response()->json([
    			'message'=>"User not found"
    		],404);
    	}
    }

    public function daleteUser($id){
    	
    }

    public function removeSession(Request $request){
    	$request->session()->forget('user');
    	return redirect('home');
    }
}
