<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use Session;
use DB;
use PhpParser\Node\Expr\Print_;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $students = DB::table('students')->get();
        return view('home')->with(compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'nom' => 'required',
                'prenom' => 'required',
            ];

            $custom_messages = [
                'nom.required' => 'Name is required',
                'prenom.required' => 'Prenom is required',
            ];

            $this->validate($request, $rules, $custom_messages);

            $student = new Students;
            $student->nom = $data['nom'];
            $student->prenom = $data['prenom'];
            $student->save();
            Session::flash('success', 'succès');
            // return redirect('home');
            return redirect('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $students = DB::table('students')->get();
        return view('home')->with(compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $student, $id)
    {
        return view('edit')->with('student', Students::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $res = Students::find($request->id);
        $res->nom=$request->input('nom');
        $res->prenom=$request->input('prenom');
        $res->save();
        Session::flash('success', 'succès');
        return redirect('home')->with('success', 'Cool');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = DB::table('students')->where('id', $id)->first();
        // print_r($data); die;
        Students::destroy(array('id', $id));
        $request->session()->flash('delete', $data->nom.' '.$data->prenom);
        return redirect('home');
    }
}
