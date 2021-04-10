<?php

namespace App\Traits;

trait WhatsappNotificationsTrait
{

    protected function setting()
    {
        return [
            'apiURL' => 'https://eu250.chat-api.com/instance233324/',
            'token'  => 'ik763opb538l8qjs'
        ];
    }

    public function WhatsappNotifications($data)
    {
        try {
            $content = json_encode(array(
                'chatId'   => $data['phone']."@c.us",
                'body'     => $data['img'],
                'filename' => $data['filename'],
                'caption'  => $data['caption']
            ));
            $url = $this->setting()['apiURL'].'sendFile?token='.$this->setting()['token'];
            $options = stream_context_create([
                'http' => [
                    'method'  => 'POST',
                    'header'  => ['Content-type:application/json','Content-type:application/x-www-form-urlencoded'],
                    'content' => strip_tags($content)
                ]
            ]);
            $response = file_get_contents( $url, false, $options );
            if(!$response){
                throw new Exception('Fallo el envio WhatsApp', 504);
            }
            return $response;
        } catch (Exception $e) {
            return response()->json([
                'error'  => 'WhatsappNotificationsTrait.WhatsappNotifications.failed',
                'message'=> $e->getMessage()
            ], 422);
        }
    }
}







