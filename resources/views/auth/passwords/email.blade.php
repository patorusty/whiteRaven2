@extends('layouts.layout')
@section('content')

 
            <form method="POST" action="{{ route('password.email') }}">
                @csrf                
                <div class="div-form">
                    <label for="email" class="col-md-4 col-form-label text-md-right">E-mail: </label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif                </div>
                
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
    
    
@endsection
