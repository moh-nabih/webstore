@extends('welcome')

@section('title', 'Categories')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-2xl font-semibold mb-4">Categories</h1>
        <a href="javascript:void(0)" onclick="openModal('/items/create')" class="btn btn-primary">Create category</a>
    </div>
    <div class="row">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($categories as $category)
                <div class="flex items-center justify-center ">
                    <a href="{{ route('category.show', $category->id) }}" class="text-center p-4 border rounded-lg min-w-[10rem] px-4 dark:text-[#000000] border-[#19140035]">{{ $category->name }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
