<?php
namespace App\Services;

use App\Enum\EnumJson;
use GuzzleHttp\Client;

class viacepService
{
    public function getViaCep($cep)
    {
        if(!empty($cep)) {
            try {
                $client = new Client();
                $response = $client->get("https://viacep.com.br/ws/".$cep."/xml/");
                
                if ($response->getStatusCode() == 200) {
                    return $response->getBody();
                } else {
                    return response()->json([
                        EnumJson::FIELD_STATUS => EnumJson::STATUS_ERROR,
                        EnumJson::FIELD_MESSAGE => $response->getStatusCode()
                    ]);
                }
            } catch (\Exception $e) {
                return response()->json([
                    EnumJson::FIELD_STATUS => EnumJson::STATUS_ERROR,
                    EnumJson::FIELD_MESSAGE => $e->getMessage()
                ]);
            }
        } else {
            return response()->json([
                EnumJson::FIELD_STATUS => EnumJson::STATUS_ERROR,
                EnumJson::FIELD_MESSAGE => 'Invalid CEP'
            ]);
        }
    }
}
