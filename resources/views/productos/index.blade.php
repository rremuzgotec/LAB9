<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Celular</td>
                    <td>iPhone</td>
                    <td>1500</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Telvisor</td>
                    <td>Samsung</td>
                    <td>2550</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Licuadora</td>
                    <td>Oster</td>
                    <td>150</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</x-app-layout>