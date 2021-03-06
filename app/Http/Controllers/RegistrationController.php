<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Registration\RegistrationContract;
  use Illuminate\Database\QueryException;

	class RegistrationController extends Controller {

		protected $repo;

		public function __construct(RegistrationContract $registrationContract) {
			$this->$repo = $registrationContract;
		}

	  public function register() {
      return view('auth.register');
    }
        
    public function store(Request $request){
      $this->validate($request, [
        'first_name' => 'required',
        'last_name' => 'required',
        'username' => 'required',
        'email'  => 'required|email',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required'
      ]);

      try {
        $user = $this->repo->create($request);
        if ($user->id) {
          return redirect()->back()->with('success', 'Please check your email for activation link');
          } 
          else {
            return back()->withInput()->with('error', 'Could not create Your account. Try again!');
          }
        } 
      catch (QueryException $e) {
        $errorCode = $e->errorInfo[1];
        if($errorCode == 1062){
          return back()->withInput()->with('error', 'OPS... An account with '.$request->email.' already exists!');
        }
      }	
    }
	}
