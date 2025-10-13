@extends('layouts.user-layout')

@section('title', 'لیست کاربران')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>لیست کاربران</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary">
        <i class="bi bi-plus"></i> افزودن کاربر جدید
    </a>
</div>
<!--  Card -->
<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>آواتار</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>تلفن</th>
                    <th>نقش</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>
                        @php $avatar = $user->avatar ? asset('storage/' . $user->avatar) : null; @endphp
                        @if($avatar)
                            <img src="{{ $avatar }}" class="rounded-circle avatar" alt="Avatar">
                        @else
                            <div class="bg-secondary rounded-circle avatar d-flex align-items-center justify-content-center text-white">
                                {{ $user->name[0] }}
                            </div>
                        @endif
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone ?? '-' }}</td>
                    <td>
                        @php
                            $roles = ['admin'=>'مدیر','operator'=>'اپراتور','user'=>'کاربر'];
                            $roleColors = ['admin'=>'danger','operator'=>'warning','user'=>'info'];
                        @endphp
                        <span class="badge bg-{{ $roleColors[$user->role] ?? 'secondary' }}">
                            {{ $roles[$user->role] ?? 'کاربر' }}
                        </span>
                    </td>
                    <td>
                        <span class="badge bg-{{ $user->is_active ? 'success' : 'secondary' }}">
                            {{ $user->is_active ? 'فعال' : 'غیرفعال' }}
                        </span>
                    </td>
                    <td class="d-flex gap-1">
                        @foreach([
                            ['route'=>'users.show','icon'=>'eye','class'=>'info'],
                            ['route'=>'users.edit','icon'=>'pencil','class'=>'warning'],
                        ] as $btn)
                        <a href="{{ route($btn['route'], $user) }}" class="btn btn-outline-{{ $btn['class'] }} btn-sm">
                            <i class="bi bi-{{ $btn['icon'] }}"></i>
                        </a>
                        @endforeach

                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('آیا مطمئن هستید؟')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">هیچ کاربری یافت نشد</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{ $users->links() }}
    </div>
</div>
@endsection
