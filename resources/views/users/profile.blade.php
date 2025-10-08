@extends('layouts.user-layout')

@section('title', 'پروفایل من')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    @if($user->avatar)
                        <img src="{{ asset('storage/' . $user->avatar) }}" class="rounded-circle mb-3"
                            style="width: 120px; height: 120px; object-fit: cover;" alt="Avatar">
                    @else
                        <div class="bg-secondary rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center text-white"
                            style="width: 120px; height: 120px; font-size: 48px;">
                            {{ substr($user->name, 0, 1) }}
                        </div>
                    @endif
                    <h4>{{ $user->name }}</h4>
                    <p class="text-muted">{{ $user->email }}</p>
                    <span
                        class="badge bg-{{ $user->role == 'admin' ? 'danger' : ($user->role == 'operator' ? 'warning' : 'info') }} fs-6">
                        {{ $user->role == 'admin' ? 'مدیر' : ($user->role == 'operator' ? 'اپراتور' : 'کاربر') }}
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>ویرایش پروفایل</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">نام *</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">ایمیل *</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">رمز عبور جدید (اختیاری)</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror">
                                <small class="text-muted">برای تغییر رمز عبور پر کنید</small>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">تلفن</label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone', $user->phone) }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">آواتار جدید</label>
                            <input type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror"
                                accept="image/*">
                            @error('avatar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">آدرس</label>
                            <textarea name="address" class="form-control @error('address') is-invalid @enderror"
                                rows="3">{{ old('address', $user->address) }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">بهروزرسانی پروفایل</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection