@extends('welcome')

@section('title', 'Items')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-2xl font-semibold mb-4">Items</h1>
        <a href="javascript:void(0)" onclick="openModal('/items/create')" class="text-gray-900 bg-[#3b38f7] hover:bg-[#F7BE38]/90 focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#F7BE38]/50">Create Item</a>
    </div>
    <div class="row">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($items as $item)
                <div 
                    onclick="window.location.href='{{ route('item.show', ['id' => $item->id]) }}'" 
                    class="flex flex-col items-center justify-between p-4 border rounded-lg shadow-lg w-64 h-96"
                >
                    <div class="w-full h-40 flex items-center justify-center p-1">
                        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="w-full h-full object-contain rounded-lg">
                    </div>
                    <h2 class="text-xl font-bold mb-2 text-center">{{ $item->name }}</h2>
                    <p class="text-gray-700 text-sm text-center mb-2">{{ $item->description }}</p>
                    <p class="text-lg font-semibold text-green-600 mb-2">${{ $item->price }}</p>
                    <button 
                        type="button" 
                        class="text-gray-900 bg-[#F7BE38] hover:bg-[#F7BE38]/90 focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#F7BE38]/50"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 p-1" viewBox="0 0 32 32">
                            <defs><style>.cls-1{fill:#231f20}</style></defs>
                            <g id="shopping_cart" data-name="shopping cart">
                                <path class="cls-1" d="M29.74 8.32A1 1 0 0 0 29 8H13a1 1 0 0 0 0 2h14.91l-.81 9.48a1.87 1.87 0 0 1-2 1.52H12.88a1.87 1.87 0 0 1-2-1.52L10 8.92v-.16L9.33 6.2A3.89 3.89 0 0 0 7 3.52L3.37 2.07a1 1 0 0 0-.74 1.86l3.62 1.45a1.89 1.89 0 0 1 1.14 1.3L8 9.16l.9 10.49a3.87 3.87 0 0 0 4 3.35h.1v2.18a3 3 0 1 0 2 0V23h8v2.18a3 3 0 1 0 2 0V23h.12a3.87 3.87 0 0 0 4-3.35L30 9.08a1 1 0 0 0-.26-.76zM14 29a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm10 0a1 1 0 1 1 1-1 1 1 0 0 1-1 1z"/>
                                <path class="cls-1" d="M15 18v-5a1 1 0 0 0-2 0v5a1 1 0 0 0 2 0zM20 18v-5a1 1 0 0 0-2 0v5a1 1 0 0 0 2 0zM25 18v-5a1 1 0 0 0-2 0v5a1 1 0 0 0 2 0z"/>
                            </g>
                        </svg>
                        Add to cart
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
