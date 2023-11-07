@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-hover" style="margin-top: 50px;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('Email') }}</th>
                    <th scope="col">{{ __('Name') }}</th>
                    <th scope="col">{{ __('Surname') }}</th>
                    <th scope="col">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}">
                                <button class="btn btn-success btn-sm"><i class="bi bi-pencil-fill"></i>
                                    {{ __('user.user.edit') }}</button>
                            </a>
                            <button class="btn btn-danger btn-sm delete" data-id="{{ $user->id }}">
                                <i class="bi bi-x-circle-fill"></i> {{ __('user.user.delete account') }}</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $users->links() }} --}}
    </div>
@endsection

@section('javascript')
    const deleteUrl = "{{ url('users') }}/";
    const confirmDelete = "{{ __('user.user.messages.delete_confirm') }}"
@endsection

@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
