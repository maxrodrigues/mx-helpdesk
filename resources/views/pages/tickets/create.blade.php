@extends('app')
@section('content')
    <div class="my-5">
        <a href="{{ route('tickets.index') }}" class="bg-green-700 text-white px-10 py-2 font-semibold rounded text-sm">
            <i class="fa-solid fa-arrow-left -ml-5 mr-3"></i>
            Voltar
        </a>
    </div>
    <div class="w-full flex space-x-3">
        <div class="p-5 bg-white rounded shadow-md w-1/3 space-y-3">
            <div>
                <div class="flex justify-between items-end">
                    <label>Cliente</label>
                    <a href="#">
                        <span class="text-xs text-blue-700">Colocar-me como solicitante</span>
                    </a>
                </div>
                <input type="text" class="w-full text-sm rounded border border-gray-300 focus:ring-0 focus:border-gray-300">
            </div>
            <div class="flex space-x-2">
                <div class="w-1/2">
                    <label>Categoria</label>
                    <select class="w-full text-sm rounded border border-gray-300 focus:ring-0 focus:border-gray-300">
                        <option>.: Selecione :.</option>
                    </select>
                </div>
                <div class="w-1/2">
                    <label>Prioridade</label>
                    <select class="w-full text-sm rounded border border-gray-300 focus:ring-0 focus:border-gray-300">
                        <option>.: Selecione :.</option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
            </div>
            <div>
                <div class="flex justify-between items-end">
                    <label>Responsável</label>
                    <a href="#">
                        <span class="text-xs text-blue-700">Atribuir a mim</span>
                    </a>
                </div>
                <input type="text" class="w-full text-sm rounded border border-gray-300 focus:ring-0 focus:border-gray-300">
            </div>
            {{--<div>
                <label>Tags</label>
                <input type="text" class="w-full text-sm rounded border border-gray-300 focus:ring-0 focus:border-gray-300">
            </div>--}}
        </div>
        <div class="p-5 bg-white rounded shadow-md w-2/3">
            <div class="mb-5">
                <label>Assunto</label>
                <input type="text" class="w-full text-sm rounded border border-gray-300 text-gray-400 focus:ring-0 focus:border-gray-300"/>
            </div>
            <div class="mb-5">
                <label>Reponder</label>
                <textarea class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
            </div>
            <button class="bg-green-700 text-sm py-2 px-8 rounded text-white font-semibold mb-5">
                Adicionar resposta
            </button>
            <hr class="h-px my-2 bg-gray-200 border-0" />
            <p></p>
        </div>
    </div>
@endsection
