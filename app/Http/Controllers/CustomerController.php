<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function add(){
        return view('customer/add');
    }
  public  function create(Request $request){
        $customer = new Customers([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ]);
        $customer ->save();
        return redirect('/home');
    }
    public function index(){
       $customers = Customers::all();
        return view('customer/index',compact('customers'));
    }
    public function detail($id){
       $customer = Customers::find($id);
       return view('customer/customer',compact('customer'));
    }
    public function edit($id){
        $customer = Customers::find($id);
        return view('customer/update',compact('customer'));
    }
    public function update(Request $request){
       $customer = [
           'name'=>$request->get('name'),
           'email'=>$request->get('email'),
           'password'=>$request->get('password')
       ];
       Customers::find($request->get('id'))->update($customer);
       return redirect('/customerlist');
    }
    public function delete($id){
       Customers::find($id)->delete();
       return redirect('/customerlist');
    }

}
