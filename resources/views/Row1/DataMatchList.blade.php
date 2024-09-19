@extends('layouts.app')

@section('title', 'DataMatchList')
@section ('content')


<!-- {{-- resources/views/Row1/DataMatchList.blade.php --}} -->
<div class="content-wrapper">
<div class="card-header mt-2" style="display: flex; justify-content: space-between; align-items: center;">
    <h5>Data Match</h5>

    <a href="{{ url('/addjobs') }}" class="btn btn-primary" style="background:#9b2bb2;color:white;">
        Add New Job
    </a>
</div>

@if($loading)
    <center style="margin-top:5%;">
        <!-- <img src="{{ asset('macGif.gif') }}" alt="Loading" width="30" height="30"> -->
         <h1>Loading...</h1>
    </center>
@else
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">RefNo</th>
                <th scope="col">Address</th>
                <th scope="col" >Action</th>
            </tr>
        </thead>

        @if(count($formList) > 0)
            <tbody>
                @foreach($formList as $index => $result)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $result->JobFormRecord->RefNo }}</td>
                        <td>{{ $result->JobFormRecord->AddressLine1 }}</td>
                        <td>
                            <a href="#" class="btn btn-outline-success" style="margin-right:50px;">
                                Job Details
                            </a>

                            @if ($result->JobFormRecord->ChkL1 ?? false)
                                <a href="#" class="btn btn-success">
                                    Book Survey
                                </a>
                            @else
                                <a href="#" class="btn btn-primary">
                                    Check List
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        @endif
    </table>

    @if(count($formList) == 0)
        <img class="center" style="height:300px;width:300px; display: block; margin-left: auto; margin-right: auto;" src="dist/img/nodata.gif">
    @endif
@endif
</div>


@endsection