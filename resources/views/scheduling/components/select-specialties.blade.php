<div class="ml-12">
    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
        <div class="row">
            <form method="GET" action="{{ route('home') }}">
                @csrf
                <div class="flex items-center py-2 justify-center">
                    <select name="especialidade_id"
                            class="bg-gray-50 border text-gray-900
                                    text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                                    block p-2 dark:bg-gray-700 dark:border-gray-600
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                    dark:focus:border-blue-500 mr-1.5"
                            required >

                        <option value="">Selecione a Especialidade</option>
                        @foreach($specialties['content'] as $specialty)
                            <option value="{{ $specialty['especialidade_id'] }}">
                                {{ $specialty['nome'] }}
                            </option>
                        @endforeach

                    </select>
                    <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700
                                    border-teal-500 hover:border-teal-700
                                    text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                        Consultar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

