<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Welcome, {{ $user->name }}!</h3>
                    <table class="user-info-table min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Field</th>
                                <th class="py-2 px-4 border-b">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b font-semibold">User ID</td>
                                <td class="py-2 px-4 border-b">{{ $user->user_id }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b font-semibold">Name</td>
                                <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b font-semibold">Email</td>
                                <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b font-semibold">Registered At</td>
                                <td class="py-2 px-4 border-b">{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b font-semibold">Last Updated</td>
                                <td class="py-2 px-4 border-b">{{ $user->updated_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>