<?php
/**
 * Created by PhpStorm.
 * User: ncs3
 * Date: 4/5/18
 * Time: 12:26 PM
 */

namespace develop\crud\Http\Controllers;

use App\Http\Controllers\Controller;
use develop\crud\Modals\Audit;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $audit= Audit::orderBy('created_at','desc')->paginate();
        return view('viewpath::index', compact('audit'));

    }

    public function create()
    {
        return view('viewpath::create');

    }

    public function edit(Audit $audit)
    {
        return view('viewpath::edit_data', compact("audit"));

    }

    public function show(Audit $audit)
    {
        if($audit->is_published == 0)
        {
            abort(403,'permission Denied..');
        }
        return view('viewpath::view_data', compact("audit"));

    }


    public function store(Request $request)
    {
            $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
          'name' => 'required|min:3',
        ]);

            if ($validator-> fails()){
                return redirect(route('create_data'))
                    ->withErrors($validator)
                    ->withInput();
        }

        $published = false;

            if($request->has('is_published')){
                $published = true;
            }

       $audit= new Audit();

        $audit->name=$request->name;
        $audit->is_published=$published;
        $audit->user_id=1;
        $audit->check_list_id=1;
        $audit->save();
        return redirect()->back();
    }




    public function update(Request $request, $id)
    {
        $audit = Audit::find($request->id);

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name' => 'required|min:3',
        ]);

        if ($validator-> fails()){
            return redirect(route('create_data'))
                ->withErrors($validator)
                ->withInput();
        }

        $published = false;

        if($request->has('is_published')){
            $published = true;
        }

        $audit->name=$request->name;
        $audit->is_published=$published;
        $audit->user_id=1;
        $audit->check_list_id=1;
        $audit->save();
        return $this-> index();
    }


    public function remove( Audit $audit)
    {
        $audit-> delete();
        return redirect()->back();


    }
}

