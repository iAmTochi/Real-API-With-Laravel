@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-sm-between mb-2">
                        <div class="">
                           Personal Access Tokens
                        </div>
                        <div class="">
                            <a href="" data-toggle="modal" data-target="#exampleModal">Create New Client</a>
                        </div>
                    </div>


                    <div class="card-body">
                        You have not created any Personal access tokens
                        <passport-personal-access-tokens></passport-personal-access-tokens>

                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Token</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="http://127.0.0.1:8000/oauth/token" method="POST">
                                        <div class="row text-center">
                                            <div class="col-2">
                                                <label for="name">Name</label>
                                            </div>
                                            <div class="form-group col-8">
                                                <input id="name" name="" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="Submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
