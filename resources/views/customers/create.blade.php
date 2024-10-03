<!-- create.blade.php -->

@extends('layouts.app', ['activePage' => 'customers', 'titlePage' => __('Customers')])

@section('content')
    <div class="card uper">
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
            <form method="post" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    <input type="text" class="form-control" name="name" placeholder="Customer Name"/>
                </div>
                <div class="form-group">
                    <input type="company" class="form-control" name="company" placeholder="company"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phoneNumber" placeholder="phone Number"/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="password"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="country" placeholder="country"/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
