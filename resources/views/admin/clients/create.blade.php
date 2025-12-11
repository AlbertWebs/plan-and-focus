@extends('admin.layouts.app')

@section('title', 'Create Client')

@section('content')
<div class="max-w-4xl">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Create New Client</h1>
        <p class="text-gray-600">Add a new client logo to showcase your partnerships</p>
    </div>

    <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl shadow-lg p-6" x-data="{ imagePreview: null, useUpload: 'upload' }">
        @csrf

        <div class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-semibold text-gray-900 mb-2">Client Name <span class="text-red-500">*</span></label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-colors @error('name') border-red-500 @enderror"
                    placeholder="e.g., Schneider Electric">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-900 mb-2">Logo <span class="text-red-500">*</span></label>
                <div class="flex items-center space-x-4 mb-4">
                    <label class="flex items-center">
                        <input type="radio" name="logo_type" value="upload" x-model="useUpload" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-700">Upload Logo</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="logo_type" value="path" x-model="useUpload" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-700">Enter Path</span>
                    </label>
                </div>

                <!-- File Upload -->
                <div x-show="useUpload === 'upload'" x-cloak>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-indigo-400 transition-colors">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="logo" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="logo" name="logo" type="file" accept="image/*" class="sr-only" @change="imagePreview = URL.createObjectURL($event.target.files[0])">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF, WEBP, SVG up to 2MB</p>
                        </div>
                    </div>
                    <div x-show="imagePreview" class="mt-4" x-cloak>
                        <p class="text-sm text-gray-600 mb-2 text-center">Logo Preview:</p>
                        <div class="flex justify-center">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <img :src="imagePreview" alt="Preview" class="h-24 w-auto object-contain mx-auto">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Path Input -->
                <div x-show="useUpload === 'path'" x-cloak>
                    <input type="text" name="logo_path" id="logo_path" value="{{ old('logo_path') }}"
                        placeholder="e.g., schneider-electric-logo.png"
                        class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-colors @error('logo_path') border-red-500 @enderror">
                    <p class="mt-1 text-sm text-gray-500">Enter the filename from the uploads/clients folder</p>
                </div>

                @error('logo')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
                @error('logo_path')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="url" class="block text-sm font-semibold text-gray-900 mb-2">Website URL (Optional)</label>
                <input type="url" name="url" id="url" value="{{ old('url') }}"
                    placeholder="https://example.com"
                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-colors @error('url') border-red-500 @enderror">
                @error('url')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="order" class="block text-sm font-semibold text-gray-900 mb-2">Display Order</label>
                <input type="number" name="order" id="order" value="{{ old('order', 0) }}" min="0"
                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-colors @error('order') border-red-500 @enderror">
                <p class="mt-1 text-sm text-gray-500">Lower numbers appear first. Default: 0</p>
                @error('order')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                <label for="is_active" class="ml-2 block text-sm text-gray-900">
                    Active (show on website)
                </label>
            </div>

            <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-200">
                <a href="{{ route('admin.clients.index') }}" 
                    class="px-6 py-2.5 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                    Cancel
                </a>
                <button type="submit" 
                    class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-indigo-700 border border-transparent rounded-lg font-semibold text-sm text-white shadow-lg hover:from-indigo-700 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 transform hover:scale-105">
                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Create Client
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
