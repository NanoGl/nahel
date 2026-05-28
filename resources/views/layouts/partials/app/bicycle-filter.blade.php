<div class="mx-14 mb-8 p-6 bg-gray-50 rounded-xl border border-gray-200">
    <form action="{{ url()->current() }}" method="GET" class="flex flex-wrap items-end gap-4">

        <div class="flex flex-col gap-1 min-w-[150px] flex-1">
            <label for="ride" class="text-sm font-semibold text-gray-700">Rodada</label>
            <select name="ride" id="ride"
                class="w-full p-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Todas</option>
                @foreach ($rides as $ride)
                    <option value="{{ $ride }}" {{ request('ride') == $ride ? 'selected' : '' }}>
                        {{ $ride }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-col gap-1 min-w-[150px] flex-1">
            <label for="gender" class="text-sm font-semibold text-gray-700">Género</label>
            <select name="gender" id="gender"
                class="w-full p-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Todos</option>
                @foreach ($genders as $gender)
                    <option value="{{ $gender }}" {{ request('gender') == $gender ? 'selected' : '' }}>
                        {{ $gender == 'M' ? 'Mujer' : ($gender == 'H' ? 'Hombre' : $gender) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-col gap-1 min-w-[150px] flex-1">
            <label for="color" class="text-sm font-semibold text-gray-700">Color</label>
            <select name="color" id="color"
                class="w-full p-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Todos</option>
                @foreach ($colors as $color)
                    <option value="{{ $color }}" {{ request('color') == $color ? 'selected' : '' }}>
                        {{ ucfirst(strtolower($color)) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex items-center gap-2 pb-2 min-w-[150px]">
            <input type="checkbox" name="isNew" id="isNew" value="SI"
                {{ request('isNew') == 'SI' ? 'checked' : '' }}
                class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
            <label for="isNew" class="text-sm font-semibold text-gray-700 cursor-pointer">Solo Nuevos</label>
        </div>

        <div class="flex gap-2 min-w-[200px]">
            <button type="submit"
                class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg text-sm transition-colors duration-200">
                Filtrar
            </button>
            @if (request()->anyFilled(['ride', 'gender', 'color', 'isNew']))
                <a href="{{ url()->current() }}"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-lg text-sm transition-colors duration-200 text-center">
                    Limpiar
                </a>
            @endif
        </div>

    </form>
</div>
