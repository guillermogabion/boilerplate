@extends('layouts.app')

@section('content')
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="main-panel">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                        <h4>New here?</h4>
                        <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                        <form class="pt-3" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <input type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus id="register_firstName" placeholder="First Name">
                                @error('firstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus id="register_lastName" placeholder="Last Name">
                                @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus id="register_address" placeholder="Address">
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select class="form-control @error('role') is-invalid @enderror" name="role" id="register_role" required>
                                    <option value="">Select a role</option>
                                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="customer" {{ old('role') == 'customer' ? 'selected' : '' }}>Customer</option>
                                    <option value="warehouse" {{ old('role') == 'warehouse' ? 'selected' : '' }}>Warehouse</option>
                                    <option value="cashier" {{ old('role') == 'cashier' ? 'selected' : '' }}>Cashier</option>
                                    <option value="inventory" {{ old('role') == 'inventory' ? 'selected' : '' }}>Inventory</option>
                                    <option value="supplier" {{ old('role') == 'supplier' ? 'selected' : '' }}>Supplier</option>
                                </select>
                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="exampleInputUsername1" placeholder="Username">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input" id="termsCheckbox">
                                        I agree to all Terms & Conditions
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" id="submitButton" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __('SIGN UP') }}</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const termsCheckbox = document.getElementById('termsCheckbox');
        const submitButton = document.getElementById('submitButton');

        submitButton.disabled = true;
        termsCheckbox.addEventListener('change', function() {
            submitButton.disabled = !termsCheckbox.checked;
        });
    });
</script>
@endsection

@section('scripts')

@endsection