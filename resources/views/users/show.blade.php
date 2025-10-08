@extends('layouts.user-layout')

@section('title', 'جزئیات کاربر')

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
                    <h4>اطلاعات کاربر</h4>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th width="150">نام:</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>ایمیل:</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>تلفن:</th>
                            <td>{{ $user->phone ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>آدرس:</th>
                            <td>{{ $user->address ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>نقش:</th>
                            <td>
                                <span
                                    class="badge bg-{{ $user->role == 'admin' ? 'danger' : ($user->role == 'operator' ? 'warning' : 'info') }}">
                                    {{ $user->role == 'admin' ? 'مدیر' : ($user->role == 'operator' ? 'اپراتور' : 'کاربر') }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>وضعیت:</th>
                            <td>
                                <span class="badge bg-{{ $user->is_active ? 'success' : 'secondary' }}">
                                    {{ $user->is_active ? 'فعال' : 'غیرفعال' }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>تاریخ عضویت:</th>
                            <td>{{ $user->created_at->format('Y/m/d H:i') }}</td>
                        </tr>
                    </table>

                    <div class="mt-4">
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">ویرایش</a>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">بازگشت</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection