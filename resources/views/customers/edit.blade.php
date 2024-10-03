@extends('layouts.app', ['activePage' => 'customers', 'titlePage' => __('Customers')])

@section('content')
    <div class="card-body">
        <div class="card-header">
            Edit Customer
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
            <form action="{{ route('customers.update', $customer->id ) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                <div class="form-group">
                    @csrf
                    <input type="text" class="form-control" name="name" placeholder="Customer Name"
                           value="{{$customer->name}}"/>
                </div>
                <div class="form-group">
                    <input type="company" class="form-control" name="company" placeholder="company"
                           value="{{$customer->company}}"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phoneNumber" placeholder="phone Number"
                           value="{{$customer->phoneNumber}}"/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email"
                           value="{{$customer->email}}"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="password"
                           value="{{$customer->password}}"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="country" placeholder="country"
                           value="{{$customer->country}}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update Customer</button>
            </form>
        </div>
    </div>
@endsection
