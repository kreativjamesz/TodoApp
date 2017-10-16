<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request;

class RequestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('request.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('request.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate([
            'from_department_id'    =>'required',
            'to_department_id'      =>'required',
            'request_by'            =>'required',
            'request_type'          =>'required',
            'urgency_type'          =>'required',
            'due_date'              =>'required',
            'item_request_code'     =>'required',
            'item_request_desc'     =>'required',
            'quantity'              =>'required',
            'status'                =>'required',
        ]);

        $req = new Request();
        $req->from_department_id    = $request->from_department_id;
        $req->to_department_id      = $request->to_department_id;
        $req->request_by            = $request->request_by;
        $req->request_type          = $request->request_type_id;
        $req->urgency_type          = $request->urgency_type;
        $req->due_date              = $request->due_date;
        $req->item_request_code     = $request->item_request_code;
        $req->item_request_desc     = $request->item_request_desc;
        $req->quantity              = $request->quantity;
        $req->status                = $request->status;
        $req->recieved_by           = $request->recieved_by;
        $req->recieved_date         = $request->recieved_date;
        $req->save();

        return redirect()->route('request.show',$req->id);

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
    public function destroy($id)
    {
        //
    }
}
