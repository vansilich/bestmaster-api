<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\JsonResponse;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class PromotionsController extends Controller
{

    public function allPromotions(): JsonResponse
    {
        $promotions = Promotion::all();

        return response()->json( $promotions->toArray() );
    }

    public function purchasePromotion( Request $request )
    {
        $data = $request->validate([
            'id' => 'required|exists:promotions,id',
            'customer.name' => 'required',
            'customer.phone' => 'required',
            'customer.email' => 'required|email',
        ]);

        $admin_id = config('telegram.admin_id');

        $certificate = Certificate::find( $data['id'] ) ;

        $text = "=====\nНовый заказ на акцию $certificate->title\n\nИмя: " . $data['customer']['name'] . "\nПочта: " . $data['customer']['email'] . "\nТелефон: " . $data['customer']['phone'] . "\n=====";

        Telegram::sendMessage(['chat_id' => $admin_id, 'text' => $text]);

        return response($data);
    }

}
