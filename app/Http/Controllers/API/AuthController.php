<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    /**
     * @SWG\Post(
     *   path="/signin",
     *   summary="Signin",
     *   @SWG\Parameter(
	 *     name="data",
	 *     in="body",
	 *     description="Input username and password",
	 *     required=true,
	 *     @SWG\Property(
	 *     		property="request", 
	 *     		type="json", 
	 *     		example={
	 *     		  "username": "basribasren", 
	 *     		  "password":"secrettt"
	 *     		}  
	 *     )
	 *   ),
	 *   @SWG\Parameter(
	 *     name="x-api-key",
	 *     in="header",
	 *     description="api key validation",
	 *     required=true,
	 *     type="string",
	 *   ),
	 *   @SWG\Response(response=200, description="successful operation"),
	 *   @SWG\Response(response=401, description="not authorized"),
	 *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     * Do a Signin to sistem.
     * 
     */
    public function signin(Request $request, User $user)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        // create our user data for the authentication
        $userdata = array(
            'email' => $request->email, 
            'password' => $request->password
        );
        // attempt to do the login
        if (Auth::attempt($userdata)) {

            $user = $user->find(Auth::user()->id);

            return fractal()
               ->item($user)
               ->transformWith(new UserTransformer())
               ->addMeta([
                    'statusMessage' => 'login is successful',
                    'statusType'=>'success',
                    'statusCode'=> 200
               ])
               ->toArray();

        } else {
            // validation not successful
            return response()->json([
                'statusMessage' => 'your credential is wrong',
                'statusType'=>'error',
                'statusCode'=> 401
            ]);

        }
    }

    /**
     * @SWG\Post(
     *   path="/signup",
     *   summary="Signup",
     *   @SWG\Parameter(
	 *     name="data",
	 *     in="body",
	 *     description="Input account data for signup",
	 *     required=true,
	 *     @SWG\Property(
	 *     		property="request", 
	 *     		type="json", 
	 *     		example={
	 *     		  "username": "basribasren", 
	 *     		  "email": "basri@gmail.com", 
	 *     		  "password":"secrettt",
	 *     		  "role":"admin"
	 *     		}  
	 *     )
	 *   ),
	 *   @SWG\Response(response=200, description="successful operation"),
	 *   @SWG\Response(response=401, description="not authorized"),
	 *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     * Do a Signup to sistem.
     * 
     */
    public function signup(Request $request, User $user)
    {
    	$this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role'=> 'required|string'
    	]);

    	$user->create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'role' => $request->role,
    		'password' => bcrypt($request->password),
            'token' => bcrypt($request->email),
    	]);

        return response()->json([
            'statusMessage' => 'you have been register',
            'statusType'=>'success',
            'statusCode'=> 201
        ]);
    }

    /**
     * @SWG\Get(
     *   path="/signout",
     *   summary="Signout",
	 *   @SWG\Parameter(
	 *     name="x-api-key",
	 *     in="header",
	 *     description="api key validation",
	 *     required=true,
	 *     type="string",
	 *   ),
	 *   @SWG\Response(response=200, description="successful operation"),
	 *   @SWG\Response(response=401, description="not authorized"),
	 *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     * Do a Signout from sistem.
     * 
     */
    public function signout()
    {
    	Auth::logout();
    	Session::flush();
    	return response()->json([
            'statusMessage' => 'your have been logout',
            'statusType'=>'success',
            'statusCode'=> 200
        ]);
    }
}
