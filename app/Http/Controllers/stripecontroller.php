<?php

namespace App\Http\Controllers;

use Stripe;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Exception;
use Stripe\StripeClient;
use Illuminate\Http\Request;
use Stripe\Exception\CardException;
use Illuminate\Support\Facades\Crypt;
use App\Models\passenger;
use App\Models\tickets;
use Illuminate\Support\Facades\Auth;



class stripecontroller extends Controller
{
      
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request): RedirectResponse
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
 
        $productname = $request->get('productname');
        $totalprice = $request->get('total');
        $two0 = "00";
        $total = "$totalprice$two0";

        $a = Crypt::encrypt($request->all());
 
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'INR',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount' => $total,
                    ],
                    'quantity'   => 1,
                ],
                 
            ],
            'mode'        => 'payment',
            'success_url' => route('success',['data' => $a]),
            'cancel_url'  => route('dashboard'),
        ]);
 
        return redirect()->away($session->url);
    }

    public function success($data): RedirectResponse
    {


       $decrypt = Crypt::decrypt($data);
       $object = (object)$decrypt;
     //  dd(array_values($decrypt)[1]);
     // dd($object);
      $passenger = passenger::create([
        'Firstname' => $object->Firstname,
        'Lastname' => $object->Lastname,
        'no_of_passengers' => $object->nopass,
        'date' => $object->date,
        'contactname' => $object->contactname,
        'mobilephone' => $object->mobileno,
        'email' => $object->email,
        'price' => $object->total,
        'ticket_id' => $object->ticketid,
        'user_id' => auth()->user()->id,
      ]);
      $passenger->save();
      $id = tickets::firstWhere('id','1');

    
        $up = tickets::where('id',$object->ticketid)
             ->update(['remainingseats' => $id->remainingseats-1]);

     
    
       //return "Thanks for you order You have just completed your payment.The seeler will reach out to you as soon as possible";
       return Redirect::route('dashboard');
    }
}