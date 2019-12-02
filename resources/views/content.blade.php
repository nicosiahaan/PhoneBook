@extends('layout.navbar')
@section('kontenku')
@yield('kontenku')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<form class="form-signin" method="POST" action="{{action('ContentController@store')}}">
    @csrf
<div class="container register-form">
            <div class="form">
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <br>
                                <input name="name" type="text" id="name" class="form-control" placeholder="Input Your Name " value=""/>
                                <label for="inputname">Name<label>
                            </div>
                            <div class="form-group">
                                
                                <input type="text" name="phonenumber" id="phonenumber" class="form-control" placeholder="Input Your Phone Number " value=""/>
                                <label for="phonenumber">Phone Number<label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <br>
                                <input type="text" id="address" name="address" class="form-control" placeholder="Your Address " value=""/>
                                <label for="address">Address<label>
                            </div>
                            <div class="form-group">
                                
                                <input type="text" id="job" name="job" class="form-control" placeholder="Your Job " value=""/>
                                <label for="job">Job<label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="ok" class="btnSubmit">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection        