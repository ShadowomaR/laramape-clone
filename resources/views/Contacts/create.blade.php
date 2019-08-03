@extends('layout.default',['title'=>'Contact'])

@section('content')
<div class="container py-4">
    <div class="row align-items-center">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 col-sm-10 ">
            <h2>Get In Touch</h2>
            <p>If you havign trouble with this service,Please <a href="">Ask for help</a>.</p>
            <form action="" method="">
                <div class="form-group ">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control " name="name" id="name" placeholder="Name" required>
                </div> 
                <div class="form-group ">
                    <label for="email">E-mail :</label>
                    <input type="email" class="form-control " name="email" id="email" placeholder="E-mail" required>
                </div> 
                <div class="form-group ">
                    <label for="message" class="sr-only">Message :</label>
                    <textarea class="form-control " name="message" id="message" cols="10" rows="10" required></textarea>
                </div>     
                <button class="btn btn-dark btn-block" type="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>
</div>
@stop