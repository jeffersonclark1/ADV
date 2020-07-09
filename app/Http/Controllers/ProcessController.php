<?php

namespace App\Http\Controllers;

use App\Process;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProcessController extends Controller
{
    public function index(Request $request)
    {

        $querys = Process::orderBy('id','asc');

        if($param = $request->search){

            $querys->where('pasta','LIKE',"%{$param}%")
                ->orWhere('processo','LIKE',"%{$param}%")
                ->orWhere('autor','LIKE',"%{$param}%")
                ->orWhere('reu','LIKE',"%{$param}%")
                ->orWhere('vara','LIKE',"%{$param}%")
                ->orWhere('acao','LIKE',"%{$param}%")
                ->orWhere('andamento','LIKE',"%{$param}%");

        }

        return view('home', [
            "querys"=>$querys->paginate(10)
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $uniqueFileName = null;

        if ($request->hasFile('file') && $request->file('file')->isValid()) {

            $uniqueFileName = $request->file('file')->store('uploads', 'public');

        }

        Process::create([
            'pasta'=>$request->pasta,
            'processo'=>$request->processo,
            'autor'=>$request->autor,
            'reu'=>$request->reu,
            'vara'=>$request->vara,
            'acao'=>$request->acao,
            'andamento'=>$request->andamento,
            'folder'=>$uniqueFileName,
        ]);

        return redirect('/');

    }

}
