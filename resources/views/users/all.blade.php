@extends('layouts.main')
@section('content')
  <x-page.page-header>
    <x-page.pretitle>
      {{ __('Пользователи') }}
    </x-page.pretitle>
    <x-page.title>
      {{ $role_view_name }}
    </x-page.title>
  </x-page.page-header>
  <x-page.page-body>
    <div class="col-12">
      <x-card.card>
        <x-card.header>
          <x-card.title>
            {{ __('Список пользователей') }}
            <x-card.subtitle>
              {{ __('В роли: ') . $role_view_name }}
            </x-card.subtitle>
          </x-card.title>
        </x-card.header>
        <x-card.body class="border-bottom py-3">
          <div class="d-flex">
            <div class="text-secondary">
              {{ __('Имя пользователя:') }}
              <div class="ms-2 d-inline-block">
                <input type="text" name="usersssss" class="form-control form-control-sm">
              </div>
            </div>
          </div>
        </x-card.body>
        <div class="table-responsive">
          <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th class="w-1">ID#</th>
                <th>{{ __('Имя пользователя') }}</th>
                <th>{{ __('Роль') }}</th>
                <th>{{ __('Дата добавления') }}</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td><span class="text-secondary">{{ $user->id }}</span></td>
                <td>{{ $user->username }}</td>
                <td>
                  @foreach ($user->getRoleNames() as $roles)
                    {{ get_role_view_name($roles) }}
                  @endforeach
                </td>
                <td>{{ $user->created_at->format('d.m.Y H:i:s') }}</td>
                <td class="text-end">
                  <div class="dropdown">
                    <a href="#" class="btn dropdown-toggle" data-bs-toggle="dropdown">{{ __('Действие') }}</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Third action</a>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          <p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
          <ul class="pagination m-0 ms-auto">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                prev
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
              <a class="page-link" href="#">
                next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
              </a>
            </li>
          </ul>
        </div>
      </x-card.card>
    </div>
  </x-page.page-body>
@endsection