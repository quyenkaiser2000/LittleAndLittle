<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Event;
use App\Models\TicketDetail;
use Illuminate\Support\Facades\Mail;
use App\Utilities\VNPay;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class CheckoutController extends Controller
{
    public function index(Request $request){
        $state = Event::find($request->state);
        $id = $state->id;
        $money = $state->price * $request->soluong;
        $soluong = $request->soluong;
        $date = $request->date;
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        return view('front.check-out',compact('id','money','soluong','date','name','phone','email'));
    }
    public function checkout(Request $request){
        //dd($request->all());
        $ticket = new Ticket([
            'name' =>$request->nam,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        $ticket->save();
        $total = $request->money;

        $qtys= $request->qty;
        for ($i = 1; $i <= $qtys; $i++) {
            $data = [
                'ticket_id' => $ticket->id,
                'event_id' => $request->id,
                'qty_ticket' => '1',
                'use_day' => $request->date,
            ];
            TicketDetail::create($data);
            
        }
        $data_url = VNPAY::vnpay_create_payment([
            'vnp_TxnRef' => $ticket->id,
            'vnp_OrderInfo' => 'Little and Little',
            'vnp_Amount' => $total,
        ]);
        return redirect()->to($data_url);
    }













    public function vnPayCheck(Request $request){

        

        $vnp_ResponseCode = $request->get('vnp_ResponseCode');
        $vnp_TxnRef = $request->get('vnp_TxnRef');
        $vnp_Amount = $request->get('vnp_Amount');

        if($vnp_ResponseCode != null){
            if($vnp_ResponseCode == 00){
                $tickets = TicketDetail::where('ticket_id',$vnp_TxnRef)->get();
                
                    $ticket = QrCode::size(250)->generate('test qr code');
                
                return view('front.checkout-result',compact('ticket'));

            }
        }
        else{
            return redirect('checkout-result');
        }

    }
    public function result(){
        return view('front.checkout-result');
    }
}
