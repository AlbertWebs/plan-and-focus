@extends('admin.layouts.app')

@section('title', 'Edit Portfolio')

@section('content')
<div class="max-w-4xl">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Edit Portfolio</h1>
        <p class="text-gray-600">Update portfolio item details</p>
    </div>

    <form action="{{ route('admin.portfolios.update', $portfolio) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl shadow-lg p-6" x-data="{ imagePreview: null, useUpload: 'keep' }">
        @csrf
        @method('PUT')

        <div class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-semibold text-gray-900 mb-2">Title <span class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" value="{{ old('title', $portfolio->title) }}" required
                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-colors @error('title') border-red-500 @enderror"
                    placeholder="Enter portfolio title">
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-semibold text-gray-900 mb-2">Description</label>
                <textarea name="description" id="description" rows="6"
                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-colors @error('description') border-red-500 @enderror"
                    placeholder="Enter portfolio description">{{ old('description', $portfolio->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-900 mb-2">Image</label>
                
                @if($portfolio->image)
                    <div class="mb-4">
                        <p class="text-sm text-gray-600 mb-2">Current Image:</p>
                        <img src="{{ asset('uploads/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="h-32 w-auto rounded-lg object-cover shadow-md" onerror="this.style.display='none'">
                    </div>
                @endif

                <div class="flex items-center space-x-4 mb-4">
                    <label class="flex items-center">
                        <input type="radio" name="image_type" value="upload" x-model="useUpload" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-700">Upload New Image</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="image_type" value="path" x-model="useUpload" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-700">Enter Path</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="image_type" value="keep" x-model="useUpload" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-700">Keep Current</span>
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
                                <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="image" name="image" type="file" accept="image/*" class="sr-only" @change="imagePreview = URL.createObjectURL($event.target.files[0])">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF, WEBP up to 2MB</p>
                        </div>
                    </div>
                    <div x-show="imagePreview" class="mt-4" x-cloak>
                        <p class="text-sm text-gray-600 mb-2">New Image Preview:</p>
                        <img :src="imagePreview" alt="Preview" class="h-48 w-auto rounded-lg object-cover mx-auto shadow-md">
                    </div>
                </div>

                <!-- Path Input -->
                <div x-show="useUpload === 'path'" x-cloak>
                    <input type="text" name="image_path" id="image_path" value="{{ old('image_path', $portfolio->image) }}"
                        placeholder="e.g., image.jpg"
                        class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-colors @error('image_path') border-red-500 @enderror">
                    <p class="mt-1 text-sm text-gray-500">Enter the filename from the uploads folder</p>
                </div>

                @error('image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
                @error('image_path')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-200">
                <a href="{{ route('admin.portfolios.index') }}" 
                    class="px-6 py-2.5 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                    Cancel
                </a>
                <button type="submit" 
                    class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-indigo-700 border border-transparent rounded-lg font-semibold text-sm text-white shadow-lg hover:from-indigo-700 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 transform hover:scale-105">
                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Update Portfolio
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
