<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController
{
    public function send(Request $request)
    {
        try {
            $name = $request->name;
            $phone = $request->phone;

            $msg = "Новая заявка 😎:\nИмя: " . $name . "\nТелефон: " . $phone . "\n\n";

            $curl = curl_init();
            curl_setopt(
                $curl,
                CURLOPT_URL,
                'https://api.telegram.org/bot' . '6598786870:AAFvft2eRATeyxlbWAshod4FN8nPN5PNIPw' . '/sendMessage'
            );
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt(
                $curl,
                CURLOPT_POSTFIELDS,
                "chat_id=" . '-1003479198244' . "&text=" . $msg . "&parse_mode=html"
            );
            curl_exec($curl);

            curl_close($curl);
        } catch (\Throwable $e) {
            return [
                'success' => false,
                'msg' => 'Внутренняя ошибка, попробуй отправить данные позже!'
            ];
        }


        return [
            'success' => true,
            'msg' => 'Данные успешно отправлены, наш менеджер свяжется с вами в ближайшее время!'
        ];
    }
}
