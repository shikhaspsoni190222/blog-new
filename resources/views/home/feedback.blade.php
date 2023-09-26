@extends('layouts.main')

@section('page-content')
<h1>Feedback form </h1>
@if (Session::has('success'))
   <div class="alert alert-success"> {{Session::get('success')}}</div>
@endif
@if (Session::has('error'))
    {{Session::get('error')}}
@endif
    <form method="post">
       @csrf 
        <table>
            <tr>
                <td>
                    <label><b>Name:</b></label>
                </td>
                <td>
                    <input type="text" value="" class="form-control" name="name" />
                </td>
                <td></td>
                <td></td>
                <td></td>
            <tr>
                <td>
                    <label><b>Feedback:</b></label>
                </td>
                <td>
                    <input type="text" value="" class="form-control" name="feedback"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label><b>Mobile:</b></label>
                </td>
                <td>
                    <input type="text" value="" class="form-control" name="mobile"/>
                </td>
            </tr>
            <td></td>
            <td></td>
            <tr>
                <td>
                    <label><b>Rating:</b></label>
                </td>
                <td>
                    <div class="rating colspan=4">
                        <input type="radio" id="star5" name="rating" value="5" />5<label for="star5"></label>
                        <input type="radio" id="star4" name="rating" value="4" />4<label for="star4"></label>
                        <input type="radio" id="star3" name="rating" value="3" />3<label for="star3"></label>
                        <input type="radio" id="star2" name="rating" value="2" />2<label for="star2"></label>
                        <input type="radio" id="star1" name="rating" value="1" />1<label for="star1"></label>
                    </div>
                </td>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" id="submit"  class= "btn btn-success"  value="Submit" />
                </td>
            </tr>
        </table>
    </form>
@endsection
