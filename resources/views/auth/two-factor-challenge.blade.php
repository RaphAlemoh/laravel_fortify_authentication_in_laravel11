@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-2" style="display: block;" id="secretCodeForm">
                <div class="card-header">{{ __('Two Factor Secret Code') }}</div>
                <div class="card-body">
                    <p class="fw-bold">{{ __('Please enter your secret code to login.') }}</p>

                    <form method="POST" action="{{ route('two-factor.login') }}">
                        @csrf

                        <div class="mb-3 row">
                            <label for="code" class="col-md-4 col-form-label text-md-end">{{ __('Secret Code') }}</label>
                            <div class="col-md-6">
                                <input id="code" type="password" class="form-control @error('code') is-invalid @enderror" name="code" required autocomplete="current-code">
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                                <div class="btn btn-link" onclick='displayForm(this, "recovery_form")'>
                                    {{ __('Use Recovery Code') }}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-2" style="display: none;" id="recoveryCodeForm">
                <div class="card-header">{{ __('Two Factor Recovery Code') }}</div>
                <div class="card-body">
                    <p class="fw-bold">{{ __('Please enter your recovery code to login.') }}</p>

                    <form method="POST" action="{{ route('two-factor.login') }}">
                        @csrf

                        <div class="mb-3 row">
                            <label for="recovery_code" class="col-md-4 col-form-label text-md-end">{{ __('Recovery Code:') }}</label>
                            <div class="col-md-6">
                                <input id="recovery_code" type="password" class="form-control @error('recovery_code') is-invalid @enderror" name="recovery_code" required autocomplete="current-recovery_code">
                                @error('recovery_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                                <div class="btn btn-link" onclick='displayForm(this, "secretCodeForm")'>
                                    {{ __('Use Secret Code') }}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    let displayForm = (e, type) => {
        if (type == 'recovery_form'){
            document.getElementById('recoveryCodeForm').style.display = "block";
            document.getElementById('secretCodeForm').style.display = "none";
            return true;
        }
        document.getElementById('recoveryCodeForm').style.display = "none";
        document.getElementById('secretCodeForm').style.display = "block";
        return true;
    }
</script>
@endsection
