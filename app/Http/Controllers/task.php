<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class task extends Controller
{
	public function index($pid)
	{	
		$data = DB::table('task')->where('pid', $pid)->get();
		return view('taskdetail', ['data'=> $data, 'pid' => $pid]);
	}

	public function taskcreate(Request $req, $pid)
	{

		if ($req->isMethod('post')) {
			$project = $req->input('project');
			$describtion = $req->input('describtion');
			$result= DB::table('task')->insert([
                'project' => $project,
                'describtion' => $describtion,
                'pid' => $pid
            ]);

            if($result)
            {
                return redirect('/task/'.$pid);
            }

            else{
                return response()->json(['status' => false, 'message' => "Technical Problem"]);
            }
		}

		$s_task = [ 'project' => '', 'describtion' => ''];
		return view('taskcreate', ['single' => (object)$s_task]);
	}

	public function taskedit(Request $req, $pid, $id)
    {
    	if ($req->isMethod('post')) {
    		$project = $req->input('project');
			$describtion = $req->input('describtion');

    		$result = DB::table('task')
              ->where('id', $id)
              ->update([
              	'project' => $project,
                'describtion' => $describtion,
                'pid' => $pid
              ]);
			if ($result) {
				// return response()->json(['status' => true, 'message'=>"Data add successfully"]);
				return redirect('/task/'.$pid);
			}else{
				return response()->json(['status' => false, 'message' => "Technical Problem"]);
			}
		    
		}

		$s_task = DB::table('task')->where('id', $id)->first();	
    	
    	return view('taskcreate', ['single' => $s_task]);
    }

	public function taskdelete($pid, $id)
	{
		$result = DB::table('task')->where('id', $id)->delete();
		if ($result) {
			return redirect('/task/'.$pid);
		}else{
			return response()->json(['status' => false, 'message' => "Technical Problem"]);
		}
	}

	public function detail ($id)
	{
		$detail = DB::table('task')->where('id', $id)->first();	
    	
    	return view('detail', ['single' => $detail]);
	}
}


?>