<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;





class AuthController extends Controller
{


   
    
    public function index()
    {

        
    $users= User::all();

    return response()->json([
        'message'=>'user data',
        'data'=> $users
    ]);
       
    }

    public function create()
    {
        $users= User::all();
        return view('register');
    }

    public function register(Request $request)
    {
        $user =Validator::make($request->all(), [
           
            'name' => 'required|max:10',
            'Profile_created_by' => 'required',
            'email' => 'required|email',
            'Gender' => 'required',
            'Marital_Status' => 'required',
            'Religion' => 'required',
            'Sect' => 'required',
            'Country_living_in' => 'required',
            'Country_Code' => 'required|max:03',
            'Mobile_No' => 'required|max:11',
            'password' => 'required|min:8',
        ]);

       
        $user = new User([
                        'name' =>$request->get('name'),
                        'Profile_created_by' => $request->get('Profile_created_by'),
                        'email' => $request->get('email'),
                        'Gender' =>$request->get('Gender'),
                        'Marital_Status' => $request->get('Marital_Status'),
                        'Religion'=>$request->get('Religion'),
                        'Sect' =>$request->get('Sect'),
                        'Country_living_in' =>$request->get('Country_living_in'),
                        'Country_Code' =>$request->get('Country_Code'),
                        'Mobile_No'=>$request->get('Mobile_No'),
                        'password' =>$request->get('password'),
            ]);
            $user->save(); 

            $token = $user->createToken('myapptoken')->plainTextToken;

            $response = [
                'user' => $user,
                'token'=> $token
            ];

            return response($response,201);


           
    }

    
    public function show($id)
    {
        User::find($id);
      
      return response()->json([
        'message'=>'user data',
        'data'=> User::find($id)
    ]);
    }

    public function loginCreate()
    {
        return view('login');
    }

    
   
    public function update(Request $request, $id)
    {

       
        $request->validate([
           
            'name' => 'required|max:10',
            'Profile_created_by' => 'required',
            'Gender' => 'required',
            'Marital_Status' => 'required',
            'Religion' => 'required',
            'Sect' => 'required',
            'Country_living_in' => 'required',
            'Country_Code' => 'required|max:03',
            'Mobile_No' => 'required|max:11',
            'password' => 'required|min:8',
        ]);

        $user = User::find($id);
        $user->                 name = $request->get('name');
        $user->                 Profile_created_by = $request->get('Profile_created_by');
        $user->                 Gender =$request->get('Gender');
        $user->                 Marital_Status = $request->get('Marital_Status');
        $user->                 Religion=$request->get('Religion');
        $user->                 Sect =$request->get('Sect');
        $user->                 Country_living_in =$request->get('Country_living_in');
        $user->                 Country_Code =$request->get('Country_Code');
        $user->                 Mobile_No=$request->get('Mobile_No');
        $user->                 password =$request->get('password');
        $user->save(); 


        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token'=> $token
        ];

        return response($response,201);
      
    }

   
    public function destroy($id)
    {
         User::find($id)->delete();
        return response()->json([
            'message'=>'deleted',
            
        ]);
    }

    // public function userProfile() {
    //     return response()->json(auth()->user());
    // }

    // public function refresh() {
    //     return $this->createNewToken($this->guard()->refresh());
    // }

    // protected function createNewToken($token){
    //     return response()->json([
    //         'token' => $token,
    //         'token_type' => 'bearer',
    //         'token_validity' =>$this->guard()->factory()->getTTL() *60,
    //         'user' => auth()->user()
    //     ]);
    // }

    // protected function generateToken($token){
    //     return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => auth()->factory()->getTTL() * 60,
    //         'user' => auth()->user()
    //     ]);
    // }

    
    // public function __construct() {
    //     // $this->middleware('auth:api', ['except' => ['login', 'register']]);
        
    // }

    // public function login(Request $request){

    //     $creds = $request->only(['email' , 'password']);


    //     // // $token = auth()->attempt($creds);

    //     // return response()->json(['token'=>$token]);


    // 	$creds = Validator::make($request->all(), [
           
    //         'email' => 'required|email',
    //         'password' => 'required|min:8',
    //     ]);

        
    //     if ($creds->fails()) {
    //         return response()->json($creds->errors(), 422);
    //     }

        
      
    //     if (! $token =$this-> attempt($creds->validated())) {
    //         return response()->json(['error' => 'Unauthorized'], 401);
    //     }

    //      return $this->createNewToken($token);
    // }

    // public function guard()
    // {
    //     return Auth::guard();
    // }

    
    // public function user() {
    //     return response()->json(auth()->user());
    // }
}
