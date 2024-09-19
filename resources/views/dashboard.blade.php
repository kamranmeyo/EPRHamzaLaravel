@extends('layouts.app')

@section('title', 'Dashboard')
@section ('content')


<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">


<!-- Row 1 -->
      <div class="row ml-5">
        <div class="col-lg-2">

  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status1 }}</a>
    </div>
  </div>

  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">SURVEY BOOKED</h5>
      <p class="card-text">(Awaiting Survey Evidences)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status2 }}</a>
    </div>
  </div>
  </div>

  <div  style="background:#F4F6F9">
  <div class="card-body d-flex">
    <div style="width:50px">
      <h5 class="card-title"></h5>
      <p class="card-text"> </p>
    </div>
    </div>
  </div>

  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">PAS AWAITING</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status7 }}</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">PAS BOOKED</h5>
      <p class="card-text">&nbsp;</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status42 }}</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">PAS DONE</h5>
      <p class="card-text">&nbsp;</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status43 }}</a>
    </div>
  </div>
  </div>
</div>

<!-- Row 2 -->
<div class="row ml-5">
        <div class="col-lg-2">

  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">SURVERY DONE</h5>
      <p class="card-text">(Awaiting for EPR)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status3 }}</a>
    </div>
  </div>

  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">EPR DONE (Without CC)</h5>
      <p class="card-text"></p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status4 }}</a>
    </div>
  </div>
  </div>

  <div  style="background:#F4F6F9">
  <div class="card-body d-flex">
    <div style="width:50px">
      <h5 class="card-title"></h5>
      <p class="card-text"> </p>
    </div>
    </div>
  </div>

  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">LOFT AWAITING</h5>
      <p class="card-text"></p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status9 }}</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">LOFT BOOKED</h5>
      <p class="card-text"></p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status26 }}</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">LOFT DONE</h5>
      <p class="card-text"></p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status27 }}</a>
    </div>
  </div>
  </div>
</div>

<!-- Row 3 -->
<div class="row ml-5">
        <div class="col-lg-2">

  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">JOB DONE (With CC)</h5>
      <p class="card-text">(Awaiting for contribution)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status5 }}</a>
    </div>
  </div>

  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">CUSTOMER AGREED</h5>
      <p class="card-text">(Awaiting Installations)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status6 }}</a>
    </div>
  </div>
  </div>

  <div  style="background:#F4F6F9">
  <div class="card-body d-flex">
    <div style="width:50px">
      <h5 class="card-title"></h5>
      <p class="card-text"> </p>
    </div>
    </div>
  </div>

  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">RIR AWAITING</h5>
      <p class="card-text"></p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status10 }}</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">RIR BOOKED</h5>
      <p class="card-text"></p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status28 }}</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">RIR DONE</h5>
      <p class="card-text"></p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status29 }}</a>
    </div>
  </div>
  </div>
</div>

<!-- Row 4 -->
<div class="row ml-5">
        <div class="col-lg-2">

  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">IPAD QUEUE</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status8 }}</a>
    </div>
  </div>

  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">IPAD COMPLETED</h5>
      <p class="card-text"></p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status44 }}</a>
    </div>
  </div>
  </div>

  <div  style="background:#F4F6F9">
  <div class="card-body d-flex">
    <div style="width:50px">
      <h5 class="card-title"></h5>
      <p class="card-text"> </p>
    </div>
    </div>
  </div>

  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">EWI AWAITING</h5>
      <p class="card-text"></p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">3</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">4</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">5</a>
    </div>
  </div>
  </div>
</div>
<!-- Row 5 -->
<div class="row ml-5">
        <div class="col-lg-2">

  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status1 }}</a>
    </div>
  </div>

  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">2</a>
    </div>
  </div>
  </div>

  <div  style="background:#F4F6F9">
  <div class="card-body d-flex">
    <div style="width:50px">
      <h5 class="card-title"></h5>
      <p class="card-text"> </p>
    </div>
    </div>
  </div>

  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">3</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">4</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">5</a>
    </div>
  </div>
  </div>
</div>

<!-- Row 6 -->
<div class="row ml-5">
        <div class="col-lg-2">

  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status1 }}</a>
    </div>
  </div>

  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">2</a>
    </div>
  </div>
  </div>

  <div  style="background:#F4F6F9">
  <div class="card-body d-flex">
    <div style="width:50px">
      <h5 class="card-title"></h5>
      <p class="card-text"> </p>
    </div>
    </div>
  </div>

  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">3</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">4</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">5</a>
    </div>
  </div>
  </div>
</div>

<!-- Row 7 -->
<div class="row ml-5">
        <div class="col-lg-2">

  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status1 }}</a>
    </div>
  </div>

  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">2</a>
    </div>
  </div>
  </div>

  <div  style="background:#F4F6F9">
  <div class="card-body d-flex">
    <div style="width:50px">
      <h5 class="card-title"></h5>
      <p class="card-text"> </p>
    </div>
    </div>
  </div>

  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">3</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">4</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">5</a>
    </div>
  </div>
  </div>
</div>

<!-- Row 8 -->
<div class="row ml-5">
        <div class="col-lg-2">

  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status1 }}</a>
    </div>
  </div>

  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">2</a>
    </div>
  </div>
  </div>

  <div  style="background:#F4F6F9">
  <div class="card-body d-flex">
    <div style="width:50px">
      <h5 class="card-title"></h5>
      <p class="card-text"> </p>
    </div>
    </div>
  </div>

  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">3</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">4</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">5</a>
    </div>
  </div>
  </div>
</div>
<!-- Row 7 -->
<div class="row ml-5">
        <div class="col-lg-2">

  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status1 }}</a>
    </div>
  </div>

  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">2</a>
    </div>
  </div>
  </div>

  <div  style="background:#F4F6F9">
  <div class="card-body d-flex">
    <div style="width:50px">
      <h5 class="card-title"></h5>
      <p class="card-text"> </p>
    </div>
    </div>
  </div>

  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">3</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">4</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">5</a>
    </div>
  </div>
  </div>
</div>

<!-- Row 9 -->
<div class="row ml-5">
        <div class="col-lg-2">

  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">{{ $status1 }}</a>
    </div>
  </div>

  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">2</a>
    </div>
  </div>
  </div>

  <div  style="background:#F4F6F9">
  <div class="card-body d-flex">
    <div style="width:50px">
      <h5 class="card-title"></h5>
      <p class="card-text"> </p>
    </div>
    </div>
  </div>

  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">3</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">4</a>
    </div>
  </div>
  </div>
  <div class="col-lg-2">
  <div class="card">
  <div class="card-body d-flex">
    <div>
      <h5 class="card-title">DATA MATCHED</h5>
      <p class="card-text">(Awaiting Survey Bookings)</p>
    </div>
    <a href="#" class="card-link ml-auto mt-5">5</a>
    </div>
  </div>
  </div>
</div>









      </div>
    </div>
  </div>


  @endsection