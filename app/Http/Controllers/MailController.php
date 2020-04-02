<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;

class MailController extends Controller
{
     public function sendmail(Request $request){

        $data["email"]="ashu.empli5@gmail.com";//$request->get("email");
        $data["client_name"]="Ashutosh Singhai";//$request->get("client_name");
        $data["subject"]="Test invoice";//$request->get("subject");

        $pdf = PDF::loadView('PDF.pdfInvoice',$data);

        try{
            Mail::send('mail',['name'=>$data['client_name']], function($message)use($data,$pdf) {
            $message->to($data["email"], $data["client_name"])
            ->subject($data["subject"])
            ->attachData($pdf->output(), "invoice.pdf");
            });
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
             $this->statusdesc  =   "Error sending mail";
             $this->statuscode  =   "0";

        }else{

           $this->statusdesc  =   "Message sent Succesfully";
           $this->statuscode  =   "1";
        }
        return response()->json(compact('this'));
	 }
}
