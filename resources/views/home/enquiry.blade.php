@extends('layouts.main')
@section('page-content')
    <h1>Enquiry form</h1>
    
    @if (Session::has('success'))
   <div class="alert alert-primary"> {{Session::get('success')}}</div>
@endif
@if (Session::has('error'))
    {{Session::get('error')}}
@endif
    <form method="post">
        @csrf
        <table class="table table-hover">
            <tr>
                <td>
                    <label>Name</label>
                </td>
                <td>
                    <input type="text" id="name"  name="name" class="form-control" required="*"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email</label>
                </td>
                <td>
                    <input type="text" id="email" class="form-control"  name="email"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Message</label>
                </td>
                <td>
                    <textarea class="form-control" id="message" name="message"></textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" id="submit" name="submit" value="Submit" />
                </td>
            </tr>
           

        </table>
    </form>
@endsection
