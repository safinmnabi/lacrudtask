<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class crud extends Controller
{
	public function index()
	{	
		$eid= session('email');
		$data = DB::table('person')->where('userid', $eid)->get();
		return view('index', ['data'=> $data]);
	}

	public function create(Request $req)
	{

		if ($req->isMethod('post')) {
			$eid=session('email');
			$fname = $req->input('fname');
			$job = $req->input('job');
			$mobile = $req->input('mobile');
			$result= DB::table('person')->insert([
                'fname' => $fname,
                'job' => $job,
                'mobile' => $mobile,
                'userid' => $eid
            ]);

            if($result)
            {
                return redirect('/index');
            }

            else{
                return response()->json(['status' => false, 'message' => "Technical Problem"]);
            }
		}
		$s_todo = [ 'fname' => '', 'job' => '', 'mobile' => ''];	

		return view('create', ['single' => (object)$s_todo]);
	}

	public function edit(Request $request, $id)
    {
    	if ($request->isMethod('post')) {
    		$eid = session('email');
    		$fname = $request->input('fname');
    		$job = $request->input('job');
    		$mobile = $request->input('mobile');

    		$result = DB::table('person')
              ->where('id', $id)
              ->update([
              	'fname' => $fname,
                'job' => $job,
                'mobile' => $mobile,
                'userid' => $eid
              ]);
			if ($result) {
				// return response()->json(['status' => true, 'message'=>"Data add successfully"]);
				return redirect('/index');
			}else{
				return response()->json(['status' => false, 'message' => "Technical Problem"]);
			}
		    
		}

		$s_todo = DB::table('person')->where('id', $id)->first();	
    	
    	return view('create', ['single' => $s_todo]);
    }

	public function delete($id)
	{
		$result = DB::table('person')->where('id', $id)->delete();
		if ($result) {
			return redirect('/index');
		}else{
			return response()->json(['status' => false, 'message' => "Technical Problem"]);
		}
	}
}


?>