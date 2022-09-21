<div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="interestModal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Solicitar Horário</h3>
                    <form class="space-y-6" action="#" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Completo</label>
                            <input name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                                                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                                                dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Nome Completo do Paciente" required>
                        </div>
                        <div>
                            <label for="birthdate " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nascimento</label>
                            <input name="birthdate " id="birthdate "
                                    placeholder="00/00/0000"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                            dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CPF</label>
                            <input name="cpf" id="cpf" placeholder="000.000.000-00"
                                    class="bg-gray-50 border border-gray-300 text-gray-900
                                    text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                                    block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500
                                    dark:placeholder-gray-400 dark:text-white" required>
                        </div>

                        <div>
                            <label for="date_time" class="block mb-2 text-sm font-medium
                                                              text-gray-900 dark:text-gray-300">Data da Consulta</label>
                            <input type="datetime-local" class="bg-gray-50 border border-gray-300
                                                                 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500
                                                                 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                                                 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                                                                 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                placeholder="00/00/00 00:00">
                        </div>

                        <div>
                            <label for="source_id" class="block mb-2 text-sm font-medium
                                                              text-gray-900 dark:text-gray-300">Como Conheceu?</label>
                            <select name="source_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                            rounded-lg focus:ring-blue-500 focus:border-blue-500 block
                                            w-full p-2.5 dark:bg-gray-600 dark:border-gray-500
                                            dark:placeholder-gray-400 dark:text-white" required>

                                <option value="">Selecione como nós conheceu</option>
                                @foreach ($listSources['content'] as $howDid)
                                    <option value="{{ $howDid['origem_id'] }}" > {{ $howDid['nome_origem'] }} </option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="submit" class="w-full inline-flex justify-center rounded-md border
                                            border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base
                                            font-medium text-white hover:bg-gradient-to-r
                                            hover:from-green-400 hover:to-blue-500 hover:text-white focus:outline-none
                                            focus:ring-2 focus:ring-offset-2 focus:ring-red-500
                                            sm:ml-3 sm:w-auto sm:text-sm">
                    Confirmar
                </button>
                <button type="button" class="closeModal mt-3 w-full inline-flex justify-center
                                            rounded-md border border-gray-300 shadow-sm px-4 py-2
                                            bg-white text-base font-medium text-gray-700 hover:bg-gray-50
                                            focus:outline-none focus:ring-2 focus:ring-offset-2
                                            focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancelar
                </button>
            </div>
        </div>
    </div>
</div>
