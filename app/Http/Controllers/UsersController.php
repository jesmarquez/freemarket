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

        // ID: 8206459701620385 | Secret key: Zz3ReGLrszJIrdu1a27oKEqf5Jf8R0i4
                       
        
        $response = $client->get('https://api.mercadolibre.com/users/me?access_token=APP_USR-8206459701620385-032111-bf852d23433afb7c0fff31cfd92927fb-65350076');
        $code = $response->getStatusCode();
        //printf("code:%d\n", $code);
        $body = $response->getBody();
        
        $user_array = json_decode($body,TRUE);
        $username = $user_array['nickname'];
        $firstname = $user_array['first_name'];
        $lastname = $user_array['last_name'];
        $email = $user_array['email'];
        $country = $user_array['country_id'];
        $permalink = $user_array['permalink'];

        return view('user', ['username'=>$username, 'firstname'=>$firstname, 'lastname' => $lastname, 'email'=>$email, 'country' => $country, 'permalink'=>$permalink]);
    }

    function createTestUser()
    {
      $id=100;
      $nickname='test100';
      $password='huu23';
      $site_status='active';

      return view('testuser', ['id'=>$id, 'nickname'=>$nickname, 'password' => $password, 'site_status'=>$site_status]);
    }
}
