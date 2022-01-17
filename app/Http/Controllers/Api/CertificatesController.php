<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Telegram\Bot\Laravel\Facades\Telegram;

class CertificatesController extends Controller
{

    public function allCertificates(): JsonResponse
    {
        $certificates = Certificate::all();

        return response()->json( $certificates->toArray() );
    }

    public function purchaseCertificate( Request $request )
    {
        $data = $request->validate([
            'id' => 'required|exists:certificates,id',
            'customer.name' => 'required',
            'customer.phone' => 'required',
            'customer.email' => 'required|email',
        ]);

        $admin_id = config('telegram.admin_id');

        $certificate = Certificate::find( $data['id'] ) ;

        $text = "=====\nНовый заказ на сертификат $certificate->title\n\nИмя: " . $data['customer']['name'] . "\nПочта: " . $data['customer']['email'] . "\nТелефон: " . $data['customer']['phone'] . "\n=====";

        Telegram::sendMessage(['chat_id' => $admin_id, 'text' => $text]);

        return response($data);
    }

    public function purchasePaperCertificate( Request $request )
    {
        $data = $request->validate([
            'customer.name' => 'required',
            'customer.phone' => 'required',
            'customer.email' => 'required|email',
        ]);

        $admin_id = config('telegram.admin_id');

        $text = "=====\nНовый заказ на бумажный сертификат\n\nИмя: " . $data['customer']['name'] . "\nПочта: " . $data['customer']['email'] . "\nТелефон: " . $data['customer']['phone'] . "\n=====";

        Telegram::sendMessage(['chat_id' => $admin_id, 'text' => $text]);

        return response('', 200);
    }
}
