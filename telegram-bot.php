<?php
class telegram_bot
{
    public $botToken = null;
    public $chat_id  = null;

    public function connect($array)
    {
        $this->botToken = $array[0];
        $this->chat_id  = $array[1];
    }

    public function send($text)
    {
        $datos["chat_id"] = $this->chat_id;
        $datos["text"]    = $text;

        $curl = curl_init("https://api.telegram.org/bot" . $this->botToken . "/sendMessage?");

        curl_setopt($curl, 19913, true);
        curl_setopt($curl, 47, true);
        curl_setopt($curl, 10015, $datos);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 1);
        $curl_response = json_decode(curl_exec($curl));
        return $curl_response;
    }
}
