<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UsersController extends Controller
{
    /* *
     * Muestra datos de mi usuario en mercado libre
     *
     * @param  int  $id
     * @return array user
     * */
    function getUser()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.mercadolibre.com',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $response = $client->get('https://api.mercadolibre.com/users/me?access_token=APP_USR-8206459701620385-021223-1d060795f5f76f21c6fdda5700134d5a__D_G__-65350076');
        $code = $response->getStatusCode();
        //printf("code:%d\n", $code);
        $body = $response->getBody();
        
        $user_array = json_decode($body,TRUE);
        return ($user_array);
    }
}
