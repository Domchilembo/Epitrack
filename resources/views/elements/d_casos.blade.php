@extends('layouts.main')

@section('content')

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h5 class="m-b-10">Casos</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Seção</a></li>
                <li class="breadcrumb-item" aria-current="page">Casos Ativos</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ Typography ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Casos Ativos</h5>
            </div>
          </div>
        </div>
        <!-- [ Typography ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->
 @endsection