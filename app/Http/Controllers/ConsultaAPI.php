<?php

namespace coins\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaAPI extends Controller {

    public function ConsultaApi() {
        $moedas = ['52', '512', '2010', '109', '113'];
        $x = array();
        foreach ($moedas as $moeda) {
            //echo $x = 'https://api.coinmarketcap.com/v2/ticker/' . $moeda;
            $curl = curl_init('https://api.coinmarketcap.com/v2/ticker/' . $moeda);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($curl);
            //dd($response);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
                return "cURL Error #:" . $err;
            } else {
                $json = json_decode($response);
                $arr = [
                'id' => $json->data->id,
                'name' => $json->data->name,
                'symbol' => $json->data->symbol,
                'website_slug' => $json->data->website_slug,
                'rank' => $json->data->rank,
                'circulating_supply' => $json->data->circulating_supply,
                'total_supply' => $json->data->total_supply,
                'max_supply' => $json->data->max_supply,
                'price'=> $json->data->quotes->USD->price,
                'volume_24h'=> $json->data->quotes->USD->volume_24h,
                'market_cap'=> $json->data->quotes->USD->market_cap,
                'percent_change_1h'=> $json->data->quotes->USD->percent_change_1h,
                'percent_change_24h'=> $json->data->quotes->USD->percent_change_24h,
                'percent_change_7d'=> $json->data->quotes->USD->percent_change_7d,
                ];
                array_push($x, $arr);
            }
        }

        return view('teste')->with('coins', $x);
    }

}
