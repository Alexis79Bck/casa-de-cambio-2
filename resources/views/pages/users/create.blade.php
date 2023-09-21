@extends('adminlte::page')

@section('content')

    <div class="row justify-content-center">
        <div class="col-12 col-md-4 col-sm-12 ">
            <div class="card bg-light m-3 shadow-lg elevation-3" style="border: 1px solid #007bff">
                <div class="h2 text-light bg-primary text-center fw-bold mb-3"> {{ __('adminlte::adminlte.new_user') }}</div>
                <div class="card-body mx-auto" style="max-width: 640px;">
                    
                    <form action="{{ route('user.store') }}" method="post" enctype="multipart/formdata">
                        @csrf

                        {{-- Name field --}}
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text  bg-primary">
                                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                </div>
                            </div>
                            
                                <input type="text" name="full_name" id="full_name"
                                    class="form-control @error('full_name') is-invalid @enderror"
                                    value="{{ old('name') }}" autofocus placeholder="{{ __('adminlte::adminlte.full_name') }}" required>

                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        {{-- Email field --}}
                        <div class="form-group input-group mb-3">
                            
                            
                                <div class="input-group-prepend">
                                    <div class="input-group-text  bg-primary">
                                        <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                    </div>
                                </div>

                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    placeholder="{{ __('adminlte::adminlte.email') }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             
                        </div>

                        {{-- Password field --}}
                        <div class="form-group input-group mb-3">
                            
                             
                                <div class="input-group-prepend">
                                    <div class="input-group-text  bg-primary">
                                        <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                    </div>
                                </div>

                                <input type="password" name="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" 
                                    placeholder="{{ __('adminlte::adminlte.password') }}" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        {{-- Confirm password field --}}
                        <div class="form-group input-group mb-3">
                            
                           

                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-primary">
                                        <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                    </div>
                                </div>

                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror" 
                                    placeholder="{{ __('adminlte::adminlte.retype_password') }}" required>

                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        {{-- Image File Selection field --}}
                        <div class="form-group input-group mb-3">
                           
                             
                                <label for="image_url">{{ __('adminlte::adminlte.select_image_profile') }}</label>
                                <input type="file" name="image_url" id="image_url"
                                    class="form-control-file @error('image_url') is-invalid @enderror"
                                    value="{{ old('image_url') }}">

                                @error('image_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        {{-- Confirm password field --}}
                        <div class="input-group mb-3">
                            <div class="form-row justify-content-end">
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-block btn-rounded btn-success">

                                        {{ __('adminlte::adminlte.save') }}
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-block btn-rounded btn-secondary">

                                        {{ __('adminlte::adminlte.cancel') }}
                                    </button>
                                </div>
                            </div>

                        </div>

                        {{-- Register button --}}

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
