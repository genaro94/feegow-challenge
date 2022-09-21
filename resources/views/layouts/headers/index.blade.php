<div class="border border-color: rgb(229 231 235) ">
    <header class="h-header container mx-auto flex items-center justify-between py-6 ">
        <a href="{{ route('home') }}">
            <img class="text-2xl font-bold text-red-600" src="{{ asset('images/logo-feegow-header.png') }}" alt="Feegow">
        </a>

        <nav>
            <ul class="flex gap-4">
                <li class="nav-item active">
                    <a href="{{ route('home') }}" title="Home"
                        class="p-3 transition-all duration-200 hover:bg-gradient-to-r
                        hover:from-green-400 hover:to-blue-500 hover:text-white">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('patients.list') }}" title="Pacientes"
                        class="p-3 transition-all duration-200 hover:bg-gradient-to-r
                        hover:from-green-400 hover:to-blue-500 hover:text-white">
                        Pacientes
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</div>

