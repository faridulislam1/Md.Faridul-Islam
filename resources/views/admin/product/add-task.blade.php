@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header bg-danger">
                        <h3 class="text-center font-weight-light my-4">Add Task Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('new.task')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" name="title" id="" type="text"/>
                                <label for="productName">Title</label>
                            </div>
                            
                            <div class="row mb-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <textarea name="description" id="" class="form-control"></textarea>
                                    <label for="inputPassword">description</label>
                                </div>
                            </div><br>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="completed" id="" type="text"/>
                                <label for="productName">Completed</label>
                            </div>

                            

                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button class="btn btn-primary">Submit</button></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection