@extends('layout.default',['title'=>'Contact'])

@section('content')
<div class="container py-4">
    <div class="row align-items-center">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 col-sm-10 ">
            <h2>Get In Touch</h2>
            <p>If you havign trouble with this service,Please <a href="">Ask for help</a>.</p>
            <form class="needs-validation" action="{{ route('contact')}}" method="post">                
                <input type="hidden"  name="_token" value="{{ csrf_token() }}">
                <div class="form-group ">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control {!! $errors->first('name','is-invalid') !!}" name="name" id="name" placeholder="Name" value="{{old('name')}}" required>
                    {!! $errors->first('name','<div class="invalid-feedback">:message</div>') !!}
                </div> 
                <div class="form-group ">
                    <label for="email">E-mail :</label>
                    <input type="email" class="form-control {!! $errors->first('email','is-invalid') !!}" name="email" id="email" placeholder="E-mail" value="{{old('email')}}"required>
                    {!! $errors->first('email','<div class="invalid-feedback">:message</div>') !!}
                </div> 
                <div class="form-group ">
                    <label for="msg" class="sr-only">Message :</label>
                <textarea class="form-control {!! $errors->first('msg','is-invalid') !!}" name="msg" id="msg" cols="10" rows="10" required>{{old('msg')}}</textarea>
                    {!! $errors->first('msg','<div class="invalid-feedback">:message</div>') !!}
                </div>     
                <button class="btn btn-dark btn-block" type="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>
</div>
@stop