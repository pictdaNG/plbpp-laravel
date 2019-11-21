<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Ocds\OcdsContract;
	use Sentinel;

	class OcdsController extends Controller {

			protected $repo;

			public function __construct(OcdsContract $ocdsContract) {
				$this->repo = $ocdsContract;
			}

	    /**
	     * Display a listing of the resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function index() {
	    	if(!Sentinel::check()){
          return redirect()->route('auth.login.get');
        }
        else{
		    	$ocds = $this->repo->findAll();
		    	// dd($ocds);
		      return view('ocds.index')->with('ocds_records', $ocds);
	    	}
	    }

	    /**
	     * Show the form for creating a new resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function create() {
	    	if(!Sentinel::check()){
          return redirect()->route('auth.login.get');
        }
        else{
	     	 	return view('ocds.new');
	    	}
	    }

	    /**
	     * Store a newly created resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @return \Illuminate\Http\Response
	     */
	    public function store(Request $request) {
	    	
	      try {
		      $ocds = $this->repo->create($request);
		      
		      $notification = array(
		        'message' => "OCDS $ocds->project created successfully",
		        'alert-type' => 'success'
		      );		

		      if($ocds->id) {
		        return redirect()->back()->with($notification);
		      } else {
		        return back()->withInput()->with('error', 'Could not create OCDS. Try again!');
		      }
		    } catch (QueryException $e) {
		      
		      $error = array(
		        'message' => "$request->name already exists!",
		        'alert-type' => 'error'
		      );

		      $errorCode = $e->errorInfo[1];
		      if($errorCode == 1062){
		        return redirect()->back()->withInput()->with($error);
		      }
		    }
	    }

	    /**
	     * Display the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function show($id)
	    {
	        //
	    }

	    /**
	     * Show the form for editing the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function edit($id)
	    {
	        //
	    }

	    /**
	     * Update the specified resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function update(Request $request, $id)
	    {
	        //
	    }

	    /**
	     * Remove the specified resource from storage.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function delete($id)
	    {
	        //
	    }
	}
