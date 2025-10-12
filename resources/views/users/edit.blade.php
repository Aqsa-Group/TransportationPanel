@extends('layouts.user-layout')

@section('title', 'ویرایش کاربر')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>ویرایش کاربر: {{ $user->name }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('users.update', $user) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">نام *</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">ایمیل *</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">رمز عبور جدید (اختیاری)</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                            <small class="text-muted">برای تغییر رمز عبور پر کنید</small>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">تلفن</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $user->phone) }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">نقش *</label>
                            <select name="role" class="form-select @error('role') is-invalid @enderror" required>
                                <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>کاربر</option>
                                <option value="operator" {{ old('role', $user->role) == 'operator' ? 'selected' : '' }}>اپراتور</option>
                                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>مدیر</option>
                            </select>
                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">آواتار جدید</label>
                            <input type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror" accept="image/*">
                            @if($user->avatar)
                                <small class="text-muted">آواتار فعلی موجود است</small>
                            @endif
                            @error('avatar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">آدرس</label>
                        <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3">{{ old('address', $user->address) }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" name="is_active" class="form-check-input" value="1" {{ old('is_active', $user->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label">فعال</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">بازگشت</a>
                        <button type="submit" class="btn btn-primary">بهروزرسانی</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection