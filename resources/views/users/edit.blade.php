@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 150px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('user.user.user_data') }}: <strong>{{ $user->email }}</strong></div>

                    <div class="card-body">
                        <form method="POST" id='userEdit' action="{{ route('users.update', $user->id) }}">
                            {{ method_field('PUT') }}
                            @csrf

                            <div class="form-group row">
                                <label for="city"
                                    class="col-md-4 col-form-label text-md-right">{{ __('user.user.city') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" maxlength="255"
                                        class="form-control @error('city') is-invalid @enderror" name="address[city]"
                                        value="{{ $user?->address?->city }}" required autocomplete="city" autofocus>

                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zip_code"
                                    class="col-md-4 col-form-label text-md-right">{{ __('user.user.zip_code') }}</label>

                                <div class="col-md-6">
                                    <input id="zip_code" type="text" maxlength="6"
                                        class="form-control @error('zip_code') is-invalid @enderror"
                                        name="address[zip_code]" value="{{ $user?->address?->zip_code }}" required
                                        autocomplete="zip_code" autofocus>

                                    @error('zip_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="street"
                                    class="col-md-4 col-form-label text-md-right">{{ __('user.user.street') }}</label>

                                <div class="col-md-6">
                                    <input id="street" type="text" maxlength="255"
                                        class="form-control @error('street') is-invalid @enderror" name="address[street]"
                                        value="{{ $user?->address?->street }}" required autocomplete="street" autofocus>

                                    @error('street')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="home_no"
                                    class="col-md-4 col-form-label text-md-right">{{ __('user.user.home_number') }}</label>

                                <div class="col-md-6">
                                    <input id="home_no" type="text" maxlength="5"
                                        class="form-control @error('home_no') is-invalid @enderror" name="address[home_no]"
                                        value="{{ $user?->address?->home_no }}" required autocomplete="home_no" autofocus>

                                    @error('home_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone_no"
                                    class="col-md-4 col-form-label text-md-right">{{ __('user.user.phone_number') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_no" type="text" maxlength="15"
                                        class="form-control @error('phone_no') is-invalid @enderror"
                                        name="address[phone_no]" value="{{ $user?->address?->phone_no }}" required
                                        autocomplete="phone_no" autofocus>

                                    @error('phone_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0 float-right">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary" style="width:150px;">
                                        {{ __('user.user.save_data') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    const title = "{{ __('sweetalert.sweetalert.confirmUserData.title') }}"
    const text = "{{ __('sweetalert.sweetalert.confirmUserData.text') }}"
    const confirmButtonText = "{{ __('sweetalert.sweetalert.confirmUserData.confirmButtonText') }}"
    const cancelButtonText = "{{ __('sweetalert.sweetalert.confirmUserData.cancelButtonText') }}"
@endsection


@section('js-files')
    <script src="{{ asset('js/confirmUserData.js') }}"></script>
@endsection
