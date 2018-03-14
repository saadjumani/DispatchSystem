<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\driver ;
use App\Http\Controllers\Controller;
use DB;

class driversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('drivers')->get();
        return view('drivers')->with('data', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addDriver') ;
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
            'firstName' => 'required',
            'lastName' => 'required',
            'streetNo' => 'required',
            'aptOrSuiteOrOther' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipCode' => 'required',
            'phoneNo' => 'required',
            'email' => 'required',
            'paymentType' => 'required',
            'licenseNo' => 'required',
            'licenseExpiryDate' => 'required',
            'licenseIssuingState' => 'required',
            'medicalCardRenewal' => 'required',
            'hireDate' => 'required',
            'terminationDate' => 'required',
            'emergencyContactName' => 'required',
            'emergencyPhoneNo' => 'required',
        ]);

        $driver1 = new driver ;
        $driver1->firstName = $request->input('firstName') ;
        $driver1->lastName = $request->input('lastName') ;
        $driver1->streetNo = $request->input('streetNo') ;
        $driver1->aptOrSuiteOrOther = $request->input('aptOrSuiteOrOther') ;
        $driver1->city = $request->input('city') ;
        $driver1->state = $request->input('state') ;
        $driver1->zipCode = $request->input('zipCode') ;
        $driver1->phoneNo = $request->input('phoneNo') ;
        $driver1->email = $request->input('email') ;
        $driver1->paymentType = $request->input('paymentType') ;
        $driver1->licenseNo = $request->input('licenseNo') ;
        $driver1->licenseExpiryDate = $request->input('licenseExpiryDate') ;
        $driver1->licenseIssuingState = $request->input('licenseIssuingState') ;
        $driver1->medicalCardRenewal = $request->input('medicalCardRenewal') ;
        $driver1->hireDate = $request->input('hireDate') ;
        $driver1->terminationDate = $request->input('terminationDate') ;
        $driver1->emergencyContactName = $request->input('emergencyContactName') ;
        $driver1->emergencyPhoneNo = $request->input('emergencyPhoneNo') ;

        $driver1->save() ;
        //return $driver1 ;
        return redirect('/driver/')->with('success', 'Driver added to the list');
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
        $data = driver::find($id) ;
        return view('driverEdit')->with('data', $data) ;
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
            'firstName' => 'required',
            'lastName' => 'required',
            'streetNo' => 'required',
            'aptOrSuiteOrOther' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipCode' => 'required',
            'phoneNo' => 'required',
            'email' => 'required',
            'paymentType' => 'required',
            'licenseNo' => 'required',
            'licenseExpiryDate' => 'required',
            'licenseIssuingState' => 'required',
            'medicalCardRenewal' => 'required',
            'hireDate' => 'required',
            'terminationDate' => 'required',
            'emergencyContactName' => 'required',
            'emergencyPhoneNo' => 'required',
        ]);

        $driver1 = driver::find($id) ;
        $driver1->firstName = $request->input('companyName') ;
        $driver1->lastName = $request->input('companyName') ;
        $driver1->streetNo = $request->input('streetNo') ;
        $driver1->aptOrSuiteOrOther = $request->input('aptOrSuiteOrOther') ;
        $driver1->city = $request->input('city') ;
        $driver1->state = $request->input('state') ;
        $driver1->zipCode = $request->input('zipCode') ;
        $driver1->phoneNo = $request->input('phoneNo') ;
        $driver1->email = $request->input('email') ;
        $driver1->paymentType = $request->input('paymentType') ;
        $driver1->licenseNo = $request->input('licenseNo') ;
        $driver1->licenseExpiryDate = $request->input('licenseExpiryDate') ;
        $driver1->licenseIssuingState = $request->input('licenseIssuingState') ;
        $driver1->medicalCardRenewal = $request->input('medicalCardRenewal') ;
        $driver1->hireDate = $request->input('hireDate') ;
        $driver1->terminationDate = $request->input('terminationDate') ;
        $driver1->emergencyContactName = $request->input('emergencyContactName') ;
        $driver1->emergencyPhoneNo = $request->input('emergencyPhoneNo') ;

        $driver1->save() ;

        return redirect('/driver/')->with('success', 'Driver updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver1 = driver::find($id) ;
        $driver1->delete() ;
        return redirect('/driver/')->with('success', 'Driver removed');
    }
}
