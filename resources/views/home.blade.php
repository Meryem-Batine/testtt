@extends('layouts.index')
@section('content')
<div class="container w-50 frm mt-5">
    <form action={{ route('info.store') }} method="POST" class="conatiner w-100">
        @csrf
        <div class="form-row ">
            <div class="form-group mb-3">

                <label for="inputPassword4" name="nom">Nom</label>
                <input type="text" name="nom" class="form-control" id="inputPassword4" placeholder="Nom">
            </div> 
            <div class="form-group  mb-3">
                <label for="exampleFormControlSelect1" name="service">Service</label>
                <select class="form-select" name="serv
                ice" aria-label="Default select example">
                    <option selected>Service</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                    </select>
            </div>
            <div class="form-group mb-3">

                <label for="inputPassword4" name="dob">Date</label>
                <input type="date" name="dob" class="form-control" id="inputPassword4" placeholder="date">
            </div> 
        </div>
        <div class="form-group mb-3">
            <label for="inputPassword4">Heure Début</label>
            <input type="time" name="debut" class="form-control" id="inputPassword4" placeholder="time">
        </div>
        <div class="form-group mb-3">
            <label for="inputPassword4">Heure Fin</label>
            <input type="time" name="fin" class="form-control" id="inputPassword4" placeholder="time">
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
    
</div>
@endsection