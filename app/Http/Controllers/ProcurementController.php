<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Procurement\ProcurementContract;
	use App\Repositories\Ocds\OcdsContract;
	use App\Procurement;
	use App\Imports\ProcurementImport;
	use Maatwebsite\Excel\Facades\Excel;
	use Session;
	use Sentinel;

	class ProcurementController extends Controller {

		protected $repo;
		protected $ocdsRepo;

		public function __construct(ProcurementContract $procurementContract, OcdsContract $ocdsContract) {
			$this->repo = $procurementContract;
			$this->ocdsRepo = $ocdsContract;
		}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
    	if(!Sentinel::check()){
				return redirect()->route('auth.login.get');
			}else{
      	return view('procurement.create');
      }
    }

    public function uploadFile(Request $request){

	    if ($request->file ){
	      $file = $request->file;
	      // File Details 
	      $filename = $file->getClientOriginalName();
	      $extension = $file->getClientOriginalExtension();
	      $tempPath = $file->getRealPath();
	      $fileSize = $file->getSize();
	      $mimeType = $file->getMimeType();

	      // Valid File Extensions
	      $valid_extension = array("csv");

	      // 2MB in Bytes
	      $maxFileSize = 2097152; 

	      // Check file extension
	      if(in_array(strtolower($extension),$valid_extension)){
	        // Check file size
	        if($fileSize <= $maxFileSize){
	          // File upload location
	          $location = 'uploads';
	          // Upload file
	          $file->move($location,$filename);
	          // Import CSV to Database
	          $filepath = public_path($location."/".$filename);	          
	          // Reading file
	          $file = fopen($filepath,"r");
	          $importData_arr = array();
	          $i = 0;
	          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
	            $num = count($filedata );	             
	            // Skip first row (Remove below comment if you want to skip the first row)
	            if($i == 0){
	              $i++;
	              continue;
	            }

	            for ($c = 0; $c < $num; $c++) {
	              $importData_arr[$i][] = $filedata [$c];
	            }
	            $i++;
	          }
	          fclose($file);

	          // Insert to MySQL database
	          foreach($importData_arr as $importData){
	            $insertData = array(
	            	"serial" => $importData[0],
	            	"project_title" => $importData[1],
	            	"contractor" => $importData[2],
	            	"contract_sum" => $importData[3],		            	
	            	"date_of_award" => $importData[4],
	            	"procuring_entity" => $importData[5],
	            	"lga" => $importData[6],
	            );	            
	            Procurement::insert($insertData);
	          }

	          Session::flash('message','Import Successful.');
	          return redirect()->back();
	        }else{
	          Session::flash('message','File too large. File must be less than 2MB.');
	          return redirect()->back();
	        }
	      }
	      else{
	        Session::flash('message','Invalid File Extension.');
	        return redirect()->back();
	      }
	    }
	    return redirect()->back();
	  }

	  public function index() {
	  	$procurements = Procurement::all();
	  	$ocds_records = $this->ocdsRepo->findAll();
			
	  	// $total = sum($sum);
	  	// dd($total);
	  	dd($ocds_records);
			return view('procurement')->with('procurements', $procurements)->with('data', $procurements)->with('ocds_records', $ocds_records);
	  }
	    
	}
