<div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-14	">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nome do Profissinal
                </th>
                <th scope="col" class="py-3 px-6">
                    Especialidade
                </th>
                <th scope="col" class="py-3 px-6">
                    Registro
                </th>
                <th scope="col" class="py-3 px-6">

                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    João de Oliveira Silva
                </th>
                <td class="py-4 px-6">
                    Aparelho
                </td>
                <td class="py-4 px-6">
                    CRO1234
                </td>
                <td class="py-4 px-6">
                    <button type="button" class="openModal bg-transparent hover:bg-gray-400 text-gray-700 font-semibold
                                                 hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent
                                                 rounded data-bs-toggle="modal"
                                                 data-bs-target="#modalScheduling">
                        Agendar
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@include('scheduling.components.modal')
