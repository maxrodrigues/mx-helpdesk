@extends('app')

@section('content')
    <div class="my-5">
        <a href="{{ route('customers.index') }}" class="bg-green-700 text-white px-10 py-2 font-semibold rounded text-sm">
            <i class="fa-solid fa-arrow-left -ml-5 mr-3"></i>
            Voltar
        </a>
    </div>
    <div class="w-full">
        <form action="{{ route('customers.store') }}" method="post">
            @csrf
            <div class="bg-white p-5 rounded-lg shadow-md space-y-3">
                <div class="w-full">
                    <label>Nome</label>
                    <input type="text" name="name" class="w-full text-sm rounded border border-gray-300 focus:ring-0 focus:border-gray-300"/>
                    @error('name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full space-x-3 flex">
                    <div>
                        <label>Telefone</label>
                        <input type="text" name="phone" class="w-full text-sm rounded border border-gray-300 focus:ring-0 focus:border-gray-300"/>
                        @error('phone')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label>E-mail</label>
                        <input type="text" name="email" class="w-full text-sm rounded border border-gray-300 focus:ring-0 focus:border-gray-300"/>
                        @error('email')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <button class="bg-green-700 text-sm py-2 px-8 rounded text-white font-semibold mb-5">
                        Adicionar cliente
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
