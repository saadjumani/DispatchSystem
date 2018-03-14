<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shipper ;
use App\Http\Controllers\Controller;
use DB;


class shippersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('shippers')->get();
        return view('shippers')->with('data', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addShipper') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'companyName' => 'required',
            'customerType' => 'required',
            'streetNo' => 'required',
            'aptOrSuiteOrOther' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipCode' => 'required',
            'phoneNo' => 'required',
            'email' => 'required',
            'taxID' => 'required',
        ]);

        $shipper1 = new shipper ;
        $shipper1->companyName = $request->input('companyName') ;
        $shipper1->customerType = $request->input('customerType') ;
        $shipper1->streetNo = $request->input('streetNo') ;
        $shipper1->aptOrSuiteOrOther = $request->input('aptOrSuiteOrOther') ;
        $shipper1->city = $request->input('city') ;
        $shipper1->state = $request->input('state') ;
        $shipper1->zipCode = $request->input('zipCode') ;
        $shipper1->phoneNo = $request->input('phoneNo') ;
        $shipper1->email = $request->input('email') ;
        $shipper1->website = $request->input('website') ;
        $shipper1->motorCarrierNo = $request->input('motorCarrierNo') ;
        $shipper1->taxID = $request->input('taxID') ;
        $shipper1->comments = $request->input('comments') ;

        $shipper1->save() ;

        return redirect('/shipper/')->with('success', 'Shipper added to the list');
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
        $data = shipper::find($id) ;
        return view('shippersEdit')->with('data', $data) ;
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
        $this->validate($request, [
            'companyName' => 'required',
            'customerType' => 'required',
            'streetNo' => 'required',
            'aptOrSuiteOrOther' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipCode' => 'required',
            'phoneNo' => 'required',
            'email' => 'required',
            'taxID' => 'required',
        ]);

        $shipper1 = shipper::find($id) ;
        $shipper1->companyName = $request->input('companyName') ;
        $shipper1->customerType = $request->input('customerType') ;
        $shipper1->streetNo = $request->input('streetNo') ;
        $shipper1->aptOrSuiteOrOther = $request->input('aptOrSuiteOrOther') ;
        $shipper1->city = $request->input('city') ;
        $shipper1->state = $request->input('state') ;
        $shipper1->zipCode = $request->input('zipCode') ;
        $shipper1->phoneNo = $request->input('phoneNo') ;
        $shipper1->email = $request->input('email') ;
        $shipper1->website = $request->input('website') ;
        $shipper1->motorCarrierNo = $request->input('motorCarrierNo') ;
        $shipper1->taxID = $request->input('taxID') ;
        $shipper1->comments = $request->input('comments') ;

        $shipper1->save() ;

        return redirect('/shipper/')->with('success', 'Shipper updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shipper1 = shipper::find($id) ;
        $shipper1->delete() ;
        return redirect('/shipper/')->with('success', 'Shipper removed');
    }
}
