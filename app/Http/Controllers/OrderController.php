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
        echo '<div class="container" style="text-align: center;">
                <h1>Your Download will start in few seconds</h1>
                <p>Please wait</p>
            </div>';
        ?>
        <script type="text/javascript">
        function showFile(blob){
          // It is necessary to create a new blob object with mime-type explicitly set
          // otherwise only Chrome works like it should
          var newBlob = new Blob([blob], {type: "application/pdf"})

          // IE doesn't allow using a blob object directly as link href
          // instead it is necessary to use msSaveOrOpenBlob
          if (window.navigator && window.navigator.msSaveOrOpenBlob) {
            window.navigator.msSaveOrOpenBlob(newBlob);
            return;
          } 

          // For other browsers: 
          // Create a link pointing to the ObjectURL containing the blob.
          const data = window.URL.createObjectURL(newBlob);
          var link = document.createElement('a');
          link.href = data;
          link.download="customer_invoice_shopper_street.pdf";
          link.click();
          setTimeout(function(){
            // For Firefox it is necessary to delay revoking the ObjectURL
            localStorage.clear();
            window.URL.revokeObjectURL(data);
            localStorage.payment = "99";
            location.href = "/home";
          }, 100);
        }
        fetch("/download/invoice?payment="+localStorage.payment+"&data="+btoa(localStorage.cart))
        .then(e=>e.blob())
        .then(showFile);
        </script>
        <?php
        //return redirect('home');
    }

    public function completeOrder(Request $request){
        if(!session()->has('user'))
        return redirect('login?redirect=checkout');
        $payment = $request->payment;
        $products = json_decode(base64_decode($request->data));
        $data1 = array();
        foreach ($products as $data ) {
            $order = new Order;
            $order->userID = session('user')->id;
            $order->productID = $data->item->id;
            $order->category = $data->category;
            $order->payment = $payment;
            $order->quantity = $data->quantity;
            $order->save();
            array_push($data1,$data);
        }
        return view('thankyou',['data'=>$data1]);
    }

    public function removeProductsFromCart(){
    	?>
        <script type="text/javascript">
        location.href = "/thankyou";
        </script>
        <?php
    }
}
