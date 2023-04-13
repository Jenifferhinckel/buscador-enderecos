<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\viacepService;
use App\Models\Cep;
use Illuminate\Support\Facades\Validator;

class CepController extends Controller
{
    public function getCep(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "cep"    => "required|numeric|min:8",
        ]); 
        if ($validator->fails()) {
            return view('index')->withErrors($validator);
        }
        $cepBD = Cep::where('cep', $request->cep)->first();
        
        if(empty($cepBD)){
            $viacep = new viacepService();
            $data = $viacep->getViaCep($request->cep);
            
            $xml = (array) simplexml_load_string($data);
            if(!empty($xml)){
                $cep = new Cep();
                $cep->cep = $request->cep;
                $cep->logradouro = (string) $xml['logradouro'];
                $cep->complemento = (string) $xml['complemento'];
                $cep->bairro = (string) $xml['bairro'];
                $cep->localidade = (string) $xml['localidade'];
                $cep->uf = (string) $xml['uf'];
                $cep->ibge = (string) $xml['ibge'];
                $cep->gia = (string) $xml['gia'];
                $cep->ddd = (string) $xml['ddd'];
                $cep->siafi = (string) $xml['siafi'];
                $cep->save();

                $request->flash();
                return view('index', compact('cep'));
            }else{
                return back()->withErrors($data->message);
            }   
        }else{
            $request->flash();
            $cep = $cepBD;
            return view('index', compact('cep'));
        }
    }
}
