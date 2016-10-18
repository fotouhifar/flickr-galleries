@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-2" id="sidebar">

                            

                                <hr>
                                New Gallery

                                <form action="galleries" method="post">
                                    {{ csrf_field() }}

                                    <input class="form-control" id="create_new_gallery" name="new_gallery">
                                </form>
                            </div>
                            <div class="col-sm-10">
                                content
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
