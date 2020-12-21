@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('welcome.Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register', app()->getLocale()) }}">
                        @csrf

                        {{-- First Name  --}}
                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('welcome.firstName') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>

                                @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Father's Name  --}}
                        <div class="form-group row">
                            <label for="fatherName" class="col-md-4 col-form-label text-md-right">{{ __('welcome.fatherName') }}</label>

                            <div class="col-md-6">
                                <input id="fatherName" type="text" class="form-control @error('fatherName') is-invalid @enderror" name="fatherName" value="{{ old('fatherName') }}" required autocomplete="fatherName" autofocus>

                                @error('fatherName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Grand Father Name  --}}
                        <div class="form-group row">
                            <label for="grandFatherName" class="col-md-4 col-form-label text-md-right">{{ __('welcome.grandFatherName') }}</label>

                            <div class="col-md-6">
                                <input id="grandFatherName" type="text" class="form-control @error('grandFatherName') is-invalid @enderror" name="grandFatherName" value="{{ old('grandFatherName') }}" required autocomplete="grandFatherName" autofocus>

                                @error('grandFatherName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Sex  --}}
                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('welcome.sex') }}</label>

                            <div class="col-md-6">
                                <select name="sex" id="sex" class="form-control  @error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}" required autocomplete="sex" autofocus>
                                    <option value=""> {{__('welcome.select')}}</option>
                                    <option value="Female"> {{__('welcome.female')}}</option>
                                    <option value="Male"> {{__('welcome.male')}}</option>
                                </select>

                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Age --}}
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('welcome.age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}"  required autocomplete="age" autofocus>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Phone number  --}}
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('welcome.phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone"  type="text" placeholder="+251987654321" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        {{-- Marital Status  --}}
                        <div class="form-group row">
                            <label for="maritalStatus" class="col-md-4 col-form-label text-md-right">{{ __('welcome.maritalStatus') }}</label>

                            <div class="col-md-6">
                                <select name="maritalStatus" id="maritalStatus" class="form-control @error('maritalStatus') is-invalid @enderror" value="{{ old('maritalStatus') }}" required autocomplete="maritalStatus" autofocus>
                                    <option value=""> {{__('welcome.select')}}</option>
                                    <option value="Married"> {{__('welcome.married')}}</option>
                                    <option value="Single"> {{__('welcome.single')}}</option>
                                </select>

                                @error('maritalStatus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                          {{-- Religious  --}}
                          <div class="form-group row">
                            <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('welcome.religion') }}</label>

                            <div class="col-md-6">
                                <select name="religion" id="religion" class="form-control @error('religion') is-invalid @enderror" value="{{ old('religion') }}" required autocomplete="religion" autofocus>
                                    <option value="">  {{__('welcome.select')}}</option>
                                    <option value="Born Again">  {{__('welcome.bornAgain')}}</option>
                                    <option value="Not Born Again">  {{__('welcome.notBornAgain')}}</option>
                                </select>

                                @error('religion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{-- Current church --}}

                        <div class="form-group row">
                            <label for="church" class="col-md-4 col-form-label text-md-right">{{ __('welcome.church') }}</label>
                                <div class="col-md-6">
                                    <input id="church" type="text" class="form-control @error('church') is-invalid @enderror" name="church" value="{{ old('church') }}" required autocomplete="church" autofocus>

                                    @error('church')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                        </div>

                            {{-- e-mail  --}}

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('welcome.E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('welcome.Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('welcome.Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('welcome.Register') }}
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
