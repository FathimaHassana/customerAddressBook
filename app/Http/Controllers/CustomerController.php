<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $customers = DB::table('customers')->simplePaginate(10);
        //dd($customers);

        return view('customers.index', ['customers' => $customers]);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $customers = Customer::where(function ($query) use ($search) {
            $query->where('name', 'like', "%$search");
        })->simplePaginate();

        return view('customers.index', compact('customers', 'search'));
    }

    public function create()
    {
        return view('customers.create');
    }


    public function store(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'country' => 'required',
            'company' => 'required',
            'password' => 'required',
            'status' => 'optional'

        ]);
        $input = $request->all();

        $customer->create($input);

        return redirect('/customers')->with('success', 'Customer is successfully saved');
    }

    public function show($id)
    {
        $customer = Customer::find($id);

        return view('customers.show', compact('customer'));

    }

    public function edit($id)
    {
        $customer = Customer::find($id);

        return view('customers.edit', compact('customer'));

    }


    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'country' => 'required',
            'company' => 'required',
            'password' => 'required',
            'status' => 'optional'
        ]);

        $customer->update($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Customer updated successfully');

    }

    public function destroy($id)
    {
        // delete
        $customer = Customer::find($id);

        $customer->delete();
        Session::flash('message', 'Successfully deleted the customer!');

        // redirect
        return Redirect::to('customers');
    }
}
