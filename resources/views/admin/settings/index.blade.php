@extends('admin.layouts.app')

@section('title', 'Settings')

@section('content')
<div class="max-w-5xl">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Website Settings</h1>
        <p class="text-gray-600">Manage your website configuration and preferences</p>
    </div>

    <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        @php
            $groupIcons = [
                'general' => '<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>',
                'contact' => '<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>',
                'social' => '<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>',
                'seo' => '<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>',
            ];
            $groupColors = [
                'general' => 'from-blue-500 to-blue-600',
                'contact' => 'from-green-500 to-green-600',
                'social' => 'from-purple-500 to-purple-600',
                'seo' => 'from-orange-500 to-orange-600',
            ];
        @endphp

        @foreach($settings as $group => $groupSettings)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r {{ $groupColors[$group] ?? 'from-gray-500 to-gray-600' }} px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center text-white mr-3">
                            {!! $groupIcons[$group] ?? '<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>' !!}
                        </div>
                        <h2 class="text-xl font-bold text-white capitalize">{{ $group }}</h2>
                    </div>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($groupSettings as $setting)
                            <div class="space-y-2">
                                <label for="settings[{{ $setting->key }}]" class="flex items-center text-sm font-semibold text-gray-900">
                                    {{ ucwords(str_replace('_', ' ', $setting->key)) }}
                                    @if($setting->type === 'email')
                                        <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">
                                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                            Email
                                        </span>
                                    @elseif($setting->type === 'url')
                                        <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                            </svg>
                                            URL
                                        </span>
                                    @elseif($setting->type === 'phone')
                                        <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-purple-100 text-purple-800">
                                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                            </svg>
                                            Phone
                                        </span>
                                    @endif
                                </label>
                                @if($setting->description)
                                    <p class="text-xs text-gray-500 mb-2">{{ $setting->description }}</p>
                                @endif
                                @if($setting->type === 'textarea')
                                    <textarea 
                                        name="settings[{{ $setting->key }}]" 
                                        id="settings[{{ $setting->key }}]"
                                        rows="4"
                                        class="block w-full px-4 py-3 rounded-xl border-2 border-gray-200 bg-white text-gray-900 placeholder-gray-400 shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 sm:text-sm transition-all duration-200 hover:border-gray-300 @error("settings.{$setting->key}") border-red-400 focus:border-red-500 focus:ring-red-500/20 @enderror"
                                        placeholder="Enter {{ str_replace('_', ' ', $setting->key) }}">{{ old("settings.{$setting->key}", $setting->value) }}</textarea>
                                @else
                                    <div class="relative">
                                        <input 
                                            type="{{ $setting->type === 'email' ? 'email' : ($setting->type === 'url' ? 'url' : ($setting->type === 'phone' ? 'tel' : 'text')) }}" 
                                            name="settings[{{ $setting->key }}]" 
                                            id="settings[{{ $setting->key }}]"
                                            value="{{ old("settings.{$setting->key}", $setting->value) }}"
                                            placeholder="Enter {{ str_replace('_', ' ', $setting->key) }}"
                                            class="block w-full px-4 py-3 pr-12 rounded-xl border-2 border-gray-200 bg-white text-gray-900 placeholder-gray-400 shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 sm:text-sm transition-all duration-200 hover:border-gray-300 @error("settings.{$setting->key}") border-red-400 focus:border-red-500 focus:ring-red-500/20 @enderror">
                                        @if($setting->type === 'email' && $setting->value)
                                            <a href="mailto:{{ $setting->value }}" target="_blank" class="absolute right-3 top-1/2 -translate-y-1/2 text-indigo-600 hover:text-indigo-800 transition-colors p-1 rounded-md hover:bg-indigo-50">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                                </svg>
                                            </a>
                                        @elseif($setting->type === 'url' && $setting->value)
                                            <a href="{{ $setting->value }}" target="_blank" class="absolute right-3 top-1/2 -translate-y-1/2 text-indigo-600 hover:text-indigo-800 transition-colors p-1 rounded-md hover:bg-indigo-50">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                @endif
                                @error("settings.{$setting->key}")
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

        @if($settings->isEmpty())
            <div class="bg-white rounded-xl shadow-lg p-12 text-center">
                <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <h3 class="text-lg font-medium text-gray-900 mb-2">No settings configured</h3>
                <p class="text-gray-600 mb-6">Use the form below to add your first setting, or they will be created automatically when you save.</p>
            </div>
        @endif

        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Save Changes</h3>
                    <p class="text-sm text-gray-600 mt-1">All changes will be saved to your website settings</p>
                </div>
                <button type="submit" 
                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-indigo-600 to-indigo-700 border border-transparent rounded-xl font-semibold text-sm text-white shadow-lg hover:from-indigo-700 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 transform hover:scale-105">
                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Save All Settings
                </button>
            </div>
        </div>
    </form>

    <!-- Quick Add Settings -->
    <div class="mt-8 bg-white rounded-xl shadow-lg overflow-hidden" x-data="{ showAddForm: false }">
        <div class="bg-gradient-to-r from-gray-500 to-gray-600 px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center text-white mr-3">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-white">Quick Add Setting</h2>
                </div>
                <button @click="showAddForm = !showAddForm" 
                    class="px-4 py-2 bg-white/20 hover:bg-white/30 text-white rounded-lg transition-colors font-medium">
                    <span x-show="!showAddForm">Add New</span>
                    <span x-show="showAddForm">Cancel</span>
                </button>
            </div>
        </div>

        <form x-show="showAddForm" 
              x-cloak
              x-transition:enter="transition ease-out duration-200"
              x-transition:enter-start="opacity-0 transform -translate-y-2"
              x-transition:enter-end="opacity-100 transform translate-y-0"
              x-transition:leave="transition ease-in duration-150"
              x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0"
              action="{{ route('admin.settings.update') }}" 
              method="POST"
              class="p-6 space-y-4">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label for="new_key" class="block text-sm font-semibold text-gray-900 mb-2">
                        Setting Key
                        <span class="text-xs text-gray-500 font-normal">(e.g., contact_email)</span>
                    </label>
                    <input type="text" name="new_key" id="new_key" required
                        placeholder="contact_email"
                        class="block w-full px-4 py-3 rounded-xl border-2 border-gray-200 bg-white text-gray-900 placeholder-gray-400 shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 sm:text-sm transition-all duration-200 hover:border-gray-300">
                </div>
                <div>
                    <label for="new_value" class="block text-sm font-semibold text-gray-900 mb-2">Value</label>
                    <input type="text" name="new_value" id="new_value" required
                        placeholder="Enter value"
                        class="block w-full px-4 py-3 rounded-xl border-2 border-gray-200 bg-white text-gray-900 placeholder-gray-400 shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 sm:text-sm transition-all duration-200 hover:border-gray-300">
                </div>
                <div>
                    <label for="new_type" class="block text-sm font-semibold text-gray-900 mb-2">Type</label>
                    <select name="new_type" id="new_type"
                        class="block w-full px-4 py-3 rounded-xl border-2 border-gray-200 bg-white text-gray-900 shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 sm:text-sm transition-all duration-200 hover:border-gray-300 cursor-pointer">
                        <option value="text">Text</option>
                        <option value="email">Email</option>
                        <option value="url">URL</option>
                        <option value="phone">Phone</option>
                        <option value="textarea">Textarea</option>
                    </select>
                </div>
                <div>
                    <label for="new_group" class="block text-sm font-semibold text-gray-900 mb-2">Group</label>
                    <select name="new_group" id="new_group"
                        class="block w-full px-4 py-3 rounded-xl border-2 border-gray-200 bg-white text-gray-900 shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 sm:text-sm transition-all duration-200 hover:border-gray-300 cursor-pointer">
                        <option value="general">General</option>
                        <option value="contact">Contact</option>
                        <option value="social">Social Media</option>
                        <option value="seo">SEO</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="new_description" class="block text-sm font-semibold text-gray-900 mb-2">Description (Optional)</label>
                <input type="text" name="new_description" id="new_description"
                    placeholder="Brief description of this setting"
                    class="block w-full px-4 py-3 rounded-xl border-2 border-gray-200 bg-white text-gray-900 placeholder-gray-400 shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 sm:text-sm transition-all duration-200 hover:border-gray-300">
            </div>
            <div class="flex justify-end">
                <button type="submit" 
                    class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-indigo-700 border border-transparent rounded-lg font-medium text-sm text-white shadow-md hover:from-indigo-700 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200">
                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add Setting
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
