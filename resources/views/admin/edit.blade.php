@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>{{ __('welcome.Edituser') }}</span>
                    <a class="btn btn-primary float-right" href="{{url(App()->getLocale().'/admin')}}">{{_('Back')}}</a>
                </div>

                <div class="card-body">
                    @if (Session::has('user_data_update'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('user_data_update')}}
                    </div>

                @endif
                    {{-- <form method="POST" action="{{ route('admin.update'."/".$user->id, app()->getLocale()) }}"> --}}
                    <form method="POST" action="{{ url(App()->getLocale()."/admin/".$user->id) }}">

                        @csrf
                        @method('put')
                        {{-- First Name  --}}
                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('welcome.firstName') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ $user->firstName }}" required autocomplete="firstName" autofocus>

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
                                <input id="fatherName" type="text" class="form-control @error('fatherName') is-invalid @enderror" name="fatherName" value="{{  $user->fatherName }}" required autocomplete="fatherName" autofocus>

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
                                <input id="grandFatherName" type="text" class="form-control @error('grandFatherName') is-invalid @enderror" name="grandFatherName" value="{{ $user->grandFatherName }}" required autocomplete="grandFatherName" autofocus>

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
                                <select name="sex" id="sex" class="form-control  @error('sex') is-invalid @enderror" name="sex" value="{{ $user->sex }}" required autocomplete="sex" autofocus>
                                    <option
                                        @if ($user->sex =="Female")
                                             selected
                                        @endif
                                        value="Female"> {{__('welcome.female')}}
                                    </option>

                                    <option
                                        @if ($user->sex =="Male")
                                            selected
                                        @endif
                                        value="Male"> {{__('welcome.male')}}
                                    </option>
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
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $user->age }}"  autocomplete="age" autofocus>

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
                                <input id="phone"  type="tel" placeholder="+251987654321" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone" autofocus>

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
                                <select name="maritalStatus" id="maritalStatus" class="form-control @error('maritalStatus') is-invalid @enderror" value="{{ $user->maritalStatus }}" required autocomplete="maritalStatus" autofocus>
                                    <option
                                        @if ($user->maritalStatus =="Married")
                                             selected
                                        @endif
                                        value="Married"> {{__('welcome.married')}}
                                    </option>

                                    <option
                                        @if ($user->maritalStatus =="Single")
                                            selected
                                        @endif
                                        value="Single"> {{__('welcome.single')}}
                                    </option>
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
                                <select name="religion" id="religion" class="form-control @error('religion') is-invalid @enderror" value="{{ $user->religion }}" required autocomplete="religion" autofocus>
                                    <option
                                        @if ($user->religion =="Born Again")
                                            selected
                                        @endif
                                        value="Born Again">  {{__('welcome.bornAgain')}}
                                    </option>

                                    <option
                                        @if ($user->religion =="Not Born Again")
                                            selected
                                        @endif
                                        value="Not Born Again">  {{__('welcome.notBornAgain')}}
                                    </option>
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
                                    <input id="church" type="text" class="form-control @error('church') is-invalid @enderror" name="church" value="{{ $user->church }}"  autocomplete="church" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('welcome.updateuser') }}
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
