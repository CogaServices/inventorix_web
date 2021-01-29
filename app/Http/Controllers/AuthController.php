<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
//use Auth;
use App\Models\User;
use Validator;


class AuthController extends Controller
{
    /**
     * instance de controller.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['connexion', 'inscription']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function connexion(Request $request){
    	$validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (! $token = auth()->guard('api')->attempt($validator->validated())) {
            return response()->json(['Erreur' => 'Accès Refusé!!!'], 401);
        }

        return $this->nouveauToken($token);
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function inscription(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));

        return response()->json([
            'message' => 'Utilisateur enregistrer avec succès !!!',
            'user' => $user
        ], 201);
    }


    /**
     * token invalid.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deconnexion() {
        auth()->guard('api')->logout();
        return response()->json(['message' => 'Utilisateur deconnecté']);
    }

    /**
     * actuaiser le token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function actualisation() {
        return $this->nouveauToken(auth()->refresh());
    }

    /**
     * Authetification reussie.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfil() {
        return response()->json(auth('api')->user());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function nouveauToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth('api')->user()
        ]);
    }

}
