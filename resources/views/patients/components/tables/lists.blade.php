<div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-14	">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nome
                </th>
                <th scope="col" class="py-3 px-6">
                    Celular
                </th>
                <th scope="col" class="py-3 px-6">
                    Data de Nascimento
                </th>
                <th scope="col" class="py-3 px-6">
                    Bairro
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $patient['nome'] }}
                </th>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $patient['celular'] }}
                </th>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $patient['nascimento'] }}
                </th>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $patient['bairro'] }}
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$patients->render()}}
</div>
