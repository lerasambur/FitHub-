@extends('layouts.app')

@section('content')
<div class="header">
    <h1>FitHub</h1>
</div>
<div class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                                <div class="col-md-6">
                                    <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" required>
                                        <option value="user">{{ __('User') }}</option>
                                        <option value="trainer">{{ __('Trainer') }}</option>
                                    </select>

                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div id="user-info" style="display: none;">
                                <div class="form-group row">
                                    <label for="goal" class="col-md-4 col-form-label text-md-right">{{ __('Goal') }}</label>

                                    <div class="col-md-6">
                                        <input id="goal" type="text" class="form-control @error('goal') is-invalid @enderror" name="goal" value="{{ old('goal') }}">

                                        @error('goal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('Weight (kg)') }}</label>

                                    <div class="col-md-6">
                                        <input id="weight" type="number" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ old('weight') }}">

                                        @error('weight')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="height" class="col-md-4 col-form-label text-md-right">{{ __('Height (cm)') }}</label>

                                    <div class="col-md-6">
                                        <input id="height" type="number" class="form-control @error('height') is-invalid @enderror" name="height" value="{{ old('height') }}">

                                        @error('height')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                                    <div class="col-md-6">
                                        <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}">

                                        @error('age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div id="trainer-info" style="display: none;">
                                <div class="form-group row">
                                    <label for="specialization" class="col-md-4 col-form-label text-md-right">{{ __('Specialization') }}</label>

                                    <div class="col-md-6">
                                        <input id="specialization" type="text" class="form-control @error('specialization') is-invalid @enderror" name="specialization" value="{{ old('specialization') }}">

                                        @error('specialization')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="education" class="col-md-4 col-form-label text-md-right">{{ __('Education') }}</label>

                                    <div class="col-md-6">
                                        <input id="education" type="text" class="form-control @error('education') is-invalid @enderror" name="education" value="{{ old('education') }}">

                                        @error('education')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('Experience') }}</label>

                                    <div class="col-md-6">
                                        <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}">

                                        @error('experience')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                    <div class="col-md-6">
                                        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <p>&copy; 2024 FitHub. Все права защищены.</p>
</div>

<script>
    document.getElementById('role').addEventListener('change', function() {
        var role = this.value;
        document.getElementById('user-info').style.display = role === 'user' ? 'block' : 'none';
        document.getElementById('trainer-info').style.display = role === 'trainer' ? 'block' : 'none';
    });
</

