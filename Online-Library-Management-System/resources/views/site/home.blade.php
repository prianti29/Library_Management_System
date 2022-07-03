@extends('site.layouts.app')
@section('contents')
<div class="row">
    <div class="column">
        <div class="card">
            <h3><i class="fa-solid fa-book icon fa-2x"></i></h3>
            <p style="padding-top:10px">Some text</p>
            <p style="padding-bottom:10px; padding-top:10px">Book Listed</p>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <h3><i class="fa-solid fa-recycle icon fa-2x"></i></h3>
            <p style="padding-top:10px">Some text</p>
            <p style="padding-bottom:10px; padding-top:10px">Book Not Returned Yet</p>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <h3><i class="fa-solid fa-users icon fa-2x icon"></i>
                </i></h3>
            <p style="padding-top:10px">Some text</p>
            <p style="padding-bottom:10px; padding-top:10px">Issued Book</p>
        </div>
    </div>
</div>

@endsection
