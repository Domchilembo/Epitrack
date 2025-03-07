@extends('layouts.main')

@section('content')

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      {{-- <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h5 class="m-b-10">Usuarios Cadastrado</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Gerenciamento</a></li>
                <li class="breadcrumb-item" aria-current="page">Usuarios</li>
              </ul>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ link-button ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5> Usuários Cadastrados</h5>
            </div>
            <div class="card-body">
              <div id="tableExample" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                <div class="table-responsive scrollbar">
                  <table class="table table-bordered table-striped fs-10 mb-0">
                    <thead class="bg-200">
                      <tr>
                        <th class="text-900 sort" data-sort="id">#</th>
                        <th class="text-900 sort" data-sort="name">Name</th>
                        <th class="text-900 sort" data-sort="email">Email</th>
                        <th class="text-900 sort" data-sort="telefone">Telefone</th>
                        <th class="text-900 sort" data-sort="action">Acções</th>
                      </tr>
                    </thead>
                    <tbody class="list">
                      @csrf
                        @foreach ($users as $user)
                          <tr>
                              <td>{{ $user->id }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->telefone }}</td>
                              <td>
                                <button class="btn btn-link p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                  <span class="text-500 fas fa-edit"></span>
                                </button>
                                <a href="/remove_user/{{$user->id}}">
                                  <button class="btn btn-link p-0 ms-2" type="button" onclick=" confirm('Tem certeza que deseja apagar esse registro?')" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <span class="text-500 fas fa-trash-alt"></span>
                                  </button>
                                </a>
                              </td>
                          </tr>
                        @endforeach
                  </tbody>{{-- 
                    <tbody class="list">
                      <tr>
                        <td class="name">Anna</td>
                        <td class="email">anna@example.com</td>
                        <td class="age">18</td>
                      </tr>
                      <tr>
                        <td class="name">Homer</td>
                        <td class="email">homer@example.com</td>
                        <td class="age">35</td>
                      </tr>
                      <tr>
                        <td class="name">Oscar</td>
                        <td class="email">oscar@example.com</td>
                        <td class="age">52</td>
                      </tr>
                      <tr>
                        <td class="name">Emily</td>
                        <td class="email">emily@example.com</td>
                        <td class="age">30</td>
                      </tr>
                      <tr>
                        <td class="name">Jara</td>
                        <td class="email">jara@example.com</td>
                        <td class="age">25</td>
                      </tr>
                      <tr>
                        <td class="name">Clark</td>
                        <td class="email">clark@example.com</td>
                        <td class="age">39</td>
                      </tr>
                      <tr>
                        <td class="name">Jennifer</td>
                        <td class="email">jennifer@example.com</td>
                        <td class="age">52</td>
                      </tr>
                      <tr>
                        <td class="name">Tony</td>
                        <td class="email">tony@example.com</td>
                        <td class="age">30</td>
                      </tr>
                      <tr>
                        <td class="name">Tom</td>
                        <td class="email">tom@example.com</td>
                        <td class="age">25</td>
                      </tr>
                      <tr>
                        <td class="name">Michael</td>
                        <td class="email">michael@example.com</td>
                        <td class="age">39</td>
                      </tr>
                      <tr>
                        <td class="name">Antony</td>
                        <td class="email">antony@example.com</td>
                        <td class="age">39</td>
                      </tr>
                      <tr>
                        <td class="name">Raymond</td>
                        <td class="email">raymond@example.com</td>
                        <td class="age">52</td>
                      </tr>
                      <tr>
                        <td class="name">Marie</td>
                        <td class="email">marie@example.com</td>
                        <td class="age">30</td>
                      </tr>
                      <tr>
                        <td class="name">Cohen</td>
                        <td class="email">cohen@example.com</td>
                        <td class="age">25</td>
                      </tr>
                      <tr>
                        <td class="name">Rowen</td>
                        <td class="email">rowen@example.com</td>
                        <td class="age">39</td>
                      </tr>
                    </tbody> --}}
                  </table>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="pagination d-none"></div>
                  <div class="col">
                    <p class="mb-0 fs-10">
                      <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                      <span class="d-none d-sm-inline-block"> &mdash;</span>
                      <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </p>
                  </div>
                  <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span></button><button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button></div>
                </div>
              </div>{{-- 
              <table class="table table-hover">
                <thead>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Telefone</th>
                  <th class="text-end" scope="col">Ações</th>
                </thead>
                <tbody>
                  @csrf
                    @foreach ($users as $user)
                      <tr>
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->telefone }}</td>
                          <td>
                            <button class="btn btn-link p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                              <span class="text-500 fas fa-edit"></span>
                            </button>
                            <a href="/remove_user/{{$user->id}}">
                              <button class="btn btn-link p-0 ms-2" type="button" onclick=" confirm('Tem certeza que deseja apagar esse registro?')" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                <span class="text-500 fas fa-trash-alt"></span>
                              </button>
                            </a>
                          </td>
                      </tr>
                    @endforeach
              </tbody>
              </table> --}}
            </div>
        </div>
        <!-- [ link-button ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->
@endsection