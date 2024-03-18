@extends('layouts.main')

@section('tittle','Category')

@section('page-name','category')

@section('content')
    <h1>Category List</h1>

    <div class=" flex ">
        @if ($errors->any())
                <div class="my-3">
    
                <div class="alert alert-danger">
                <ul>
                 @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                 @endforeach
                    </ul>
                 </div>

                </div>

        @elseif (session('status'))
                <div class="my-3">
                    <div class="alert alert-success">
                        {{ session('status') }}
</div>
                </div>
                @endif


                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalAdd">
                        Add Category
                    </button>
                </div>
        
              
    </div>

    <div class="my-3">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>










  @include('category-add')
 
@endsection