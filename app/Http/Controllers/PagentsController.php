<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagents;
use Illuminate\Support\Facades\Redirect;
use Session;
// use Paystack;
class PagentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagents =  Pagents::all();
        return view('pagents.index')->with('pagents',$pagents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pagents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            "formNo"=> 'string|required|unique:pagents,f_no',
            "fname"=> 'string|required',
            "lname"=>'string|required',
            "oname"=>'string|required',
            "dob"=>'date|required',
            "age"=>'integer|required',
            "gender"=>'string|required',
            "phone"=>'numeric|required',
            "state"=>'string|required',
            "lga"=>'string|required',
            "talent"=>'string|required',
            "address"=>'string|required',
            "schname"=>'string|required',
            "schaddress"=>'string|required',
            "schcontact"=>'numeric|required',
            "class"=>'integer|required',
            "gname"=>'string|required',
            "occupation"=>'string|required',
            "gphone"=> 'numeric|required',
        ]);

        
        $images = [];
        $path = public_path('image/pagent');
        // dd($path);
        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $key => $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('image/pagent'), $name);
                $images[]=$name;
            }
        }
        $pagents = new Pagents;
        $pagents->f_no= $request->input('formNo');
        $pagents->p_fname= $request->input('fname');
        $pagents->p_lname= $request->input('lname');
        $pagents->p_other = $request->input('oname');
        $pagents->p_dob= $request->input('dob');
        $pagents->p_age= $request->input('age');
        $pagents->p_gender = $request->input('gender');
        $pagents->p_phone= $request->input('phone');
        $pagents->p_soo = $request->input('state');
        $pagents->p_lga = $request->input('lga');
        $pagents->p_talent = $request->input('talent');
        $pagents->p_address = $request->input('address');
        $pagents->p_sch_name = $request->input('schname');
        $pagents->p_sch_add = $request->input('schaddress');
        $pagents->p_sch_contact= $request->input('schcontact');
        $pagents->class= $request->input('class');
        $pagents->p_gar_name = $request->input('gname');
        $pagents->p_gar_job = $request->input('occupation');
        $pagents->p_gar_phone= $request->input('gphone');
        $pagents->path = $path;
        
        $pagents->img_names = $images;
        $pagents->save();
        
        return redirect('/pagents')->with('success','New Contestant Added Successfull');
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
        $pagent =  Pagents::find($id);
        return view('pagents.show')->with('pagents',$pagent);
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
        $pagent =  Pagents::find($id);
        return view('pagents.edit')->with('pagents',$pagent);
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
        // dd($request->input());
        
        // "formNo"=> 'string|required|unique:pagents,f_no',
        $this->validate($request,[
            "formNo"=> 'string|required',
            "fname"=> 'string',
            "lname"=>'string',
            "oname"=>'string',
            "dob"=>'date',
            "age"=>'integer',
            "gender"=>'string',
            "phone"=>'numeric',
            "state"=>'string',
            "lga"=>'string',
            "talent"=>'string',
            "address"=>'string',
            "schname"=>'string',
            "schaddress"=>'string',
            "schcontact"=>'numeric',
            "class"=>'integer',
            "gname"=>'string',
            "occupation"=>'string',
            "gphone"=> 'numeric',
        ]);
        $images = [];
        $path = public_path('image/pagent');
        // dd($path);
        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $key => $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('image/pagent'), $name);
                $images[]= $name;
            }
        }
        $pagents = Pagents::find($id);
        $pagents->f_no= $request->input('formNo');
        $pagents->p_fname= $request->input('fname');
        $pagents->p_lname= $request->input('lname');
        $pagents->p_other = $request->input('oname');
        $pagents->p_dob= $request->input('dob');
        $pagents->p_age= $request->input('age');
        $pagents->p_gender = $request->input('gender');
        $pagents->p_phone= $request->input('phone');
        $pagents->p_soo = $request->input('state');
        $pagents->p_lga = $request->input('lga');
        $pagents->p_talent = $request->input('talent');
        $pagents->p_address = $request->input('address');
        $pagents->p_sch_name = $request->input('schname');
        $pagents->p_sch_add = $request->input('schaddress');
        $pagents->p_sch_contact= $request->input('schcontact');
        $pagents->class= $request->input('class');
        $pagents->p_gar_name = $request->input('gname');
        $pagents->p_gar_job = $request->input('occupation');
        $pagents->p_gar_phone= $request->input('gphone');
        $pagents->path = $path;
        
        $pagents->img_names = $images;
        $pagents->save();

        return redirect('/pagents')->with('success','Update Successfull');
    }
    public function register()
    {
        //
        $user = Session::get('payment');
        $pagent = Pagents::find(Session::get('id'));
        if(isset($user)){
            return view('pagents.register')->with('pagent',$pagent);
        }else{
            return redirect('/pagents/pay');
        }
    }
    public function pay(Request $request)
    {
        //
        return view('pagents.pay');
    }
    public function paySubmit(Request $request)
    {
        //
            $this->validate($request,[
                "fname"=>'string',
                "oname"=>'string',
                "lname"=>'string',
                "category"=>'string',
            ]);
            // dd($request);
            // $pagents = new Pagents;
            $lastinc = Pagents::latest('created_at')->first();
            if($lastinc->f_no == null){
                $pvalue= 0;
            }else{
                $pvalue= explode("/",$lastinc->f_no);
            }

            $p_no =  str_pad(intval($pvalue[2])+1, 3, '0', STR_PAD_LEFT);;
            $PagentFormNo = 'INC/002/'.$p_no;
            // dd($PagentFormNo);
            $pagents = new Pagents;
            $pagents->f_no=  $PagentFormNo;
            $pagents->p_fname= $request->input('fname');
            $pagents->p_lname= $request->input('lname');
            $pagents->p_other = $request->input('oname');
            $pagents->category = $request->input('category');
            $pagents->p_transaction_id = $request->input('txn');
            $pagents->save();
            Session::put('payment', 'true');
            Session::put('id', $pagents->p_id);
            return redirect('/pagents/register')->with('paymentMsg','Payment Successfull');
    }

    public function registerPagents(Request $request)
    {
        //
       
            $this->validate($request,[
                "fname"=> 'string',
                "lname"=>'string',
                "oname"=>'string',
                "dob"=>'date',
                "age"=>'integer',
                "gender"=>'string',
                "phone"=>'numeric',
                "state"=>'string',
                "lga"=>'string',
                "talent"=>'string',
                "address"=>'string',
                "schname"=>'string',
                "schaddress"=>'string',
                "schcontact"=>'numeric',
                "class"=>'integer',
                "gname"=>'string',
                "occupation"=>'string',
                "gphone"=> 'numeric',
            ]);

            $pagents = Pagents::find(Session::get('id'));
            $pagents->p_fname= $request->input('fname');
            $pagents->p_lname= $request->input('lname');
            $pagents->p_other = $request->input('oname');
            $pagents->p_dob= $request->input('dob');
            $pagents->p_age= $request->input('age');
            $pagents->p_gender = $request->input('gender');
            $pagents->p_phone= $request->input('phone');
            $pagents->p_soo = $request->input('state');
            $pagents->p_lga = $request->input('lga');
            $pagents->p_talent = $request->input('talent');
            $pagents->p_address = $request->input('address');
            $pagents->p_sch_name = $request->input('schname');
            $pagents->p_sch_add = $request->input('schaddress');
            $pagents->p_sch_contact= $request->input('schcontact');
            $pagents->class= $request->input('class');
            $pagents->p_gar_name = $request->input('gname');
            $pagents->p_gar_job = $request->input('occupation');
            $pagents->p_gar_phone= $request->input('gphone');

            $pagents->save();
            Session::forget('payment');
            Session::forget('id');
            return redirect('/')->with('register','Registeration Successfull');

    }
    public function vote($id){
        $f_id = str_replace("-","/",$id);
        $pagent = Pagents::where('f_no', '=', $f_id)->first();
        // dd($pagent);

        return view('pagents.vote')->with('pagent',$pagent);
    }
    public function votePost(Request $request){
        $this->validate($request,[
            "no_votes"=>'numeric',
        ]);
        // $f_id = str_replace("-","/",$id);
        $f_id = $request->input('id');
        $pagent = Pagents::where('f_no', '=', $f_id)->first();

        // dd($pagent);
        $addedvotes = $pagent->votes + $request->input('no_votes');
        $pagent->votes = $addedvotes;
        $pagent->save();

        return Redirect::back()->with('message','Operation Successful !');    
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
