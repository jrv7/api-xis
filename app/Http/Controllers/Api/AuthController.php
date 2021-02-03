<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Passport\Passport;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Controllers\{
    Controller,
    Admin\UserController
};
use Illuminate\Support\Facades\Config;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $validData['name'],
            'email' => $validData['email'],
            'password' => bcrypt($validData['password']),
        ]);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response()->json([
            'user' => $user,
            'accessToken' => $accessToken
        ], 200);
    }

    public function auth(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);

        if (!!! auth()->attempt($loginData)) {
            return response()->json([
                'message' => 'Invalid user credentials'
            ], 401);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        $User = auth()->user();

        return response()->json([
            'user' => $User,
            'accessToken' => $accessToken
        ], 200);
    }

    public function clientLogin(Request $request)
    {
        $http = new \GuzzleHttp\Client;

        $validData = (Object) $request->validate([
            'username' => 'required|email',
            'password' => 'required',
        ]);

        try {
            $response = $http->post(Config::get('api.oauth_client_login_url'), [
                'headers' => ['Origin' => Config::get('app.url')],
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => Config::get('api.client_id'),
                    'client_secret' => Config::get('api.client_secret'),
                    'email' => $validData->username,
                    'password' => $validData->password,
                ]
            ]);

            return $response->getBody();
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            if ($e->getCode() == 400) {
                return response()->json('Invalid credentials. Could not find user matching these credentials.', $e->getCode());
            } else if ($e->getCode() == 401) {
                dd(Config::get('api.client_id'), Config::get('api.client_secret'), $e->getMessage());
                return response()->json('Your credentials did not match our database request. Please try again [Xis-Error: 401].', $e->getCode());
                // Pra resolver, rodar php artisan passport:install e salvar os dados gerados no .Env
            } else {
                print_r("Mensagem de Erro::: ");
                print_r($e->getMessage());
                die();
            }
        }

        return response()->json('Oops. Something whent wrong.', $e->getCode());
    }

    public function validateToken(Request $request)
    {
        $expire = $request->user()->OAuthToken((Int) Config::get('api.client_secret_expire'));

        if ($expire) {
            return response()->json($expire, 200);
        } else {
            return response()->json(0, 401);
        }
    }

    public function clientLogout(Request $request)
    {
        // auth()->user()->tokens->each(function ($token, $key) {
        //     $token->revoke();
        // });

        return response()->json(['Logged out successfuly'], 200);
    }

    public function loggedUserData(Request $request)
    {
        $UserData = $request->user();
        $UserData->load(['roles']);

        return response()->json($UserData, 200);
    }
}
