<!-- Extend from layouts.app -->
@extends('layouts.app')
<!-- The content section -->
@section('content')
    <div class="p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">مدیریت کاربران</h1>
            <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">
                افزودن کاربر جدید
            </a>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">نام</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">ایمیل</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">تلفن</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">نقش</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">عملیات</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->phone ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->role }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('users.show', $user) }}"
                                    class="text-blue-600 hover:text-blue-900 ml-2">نمایش</a>
                                <a href="{{ route('users.edit', $user) }}"
                                    class="text-green-600 hover:text-green-900 ml-2">ویرایش</a>
                                <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900"
                                        onclick="return confirm('آیا مطمئن هستید؟')">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--  implement pagination -->
        <div class="mt-6">
            {{ $users->links() }}
        </div>
    </div>
@endsection