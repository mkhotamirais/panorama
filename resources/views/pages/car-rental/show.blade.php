<x-layout>
    <section class="lg:container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 py-0 lg:py-16 min-h-[20vh]">
            <div class="h-[70vh]">
                <img src="{{ $carrental->banner ? asset('storage/' . $carrental->banner) : asset('storage/svg/panorama_icon.svg') }}"
                    alt="{{ $carrental->title ?? 'carrental banner' }}"
                    class="object-cover object-center w-full h-full bg-gray-100" />
            </div>

            <div class="flex flex-col px-4 space-y-4 leading-relaxed">
                {{-- title --}}
                <div>
                    <h2 class="text-2xl lg:text-4xl font-semibold capitalize mb-2">
                        {{ $carrental->brand_name }}
                    </h2>
                    <p class="text-gray-600 text-4xl mb-2">
                        Rp{{ number_format($carrental->rental_price, 0, ',', '.') }}</p>
                    <a href="{{ route('carrentals.show', $carrental) }}"
                        class="text-green-500 hover:underline w-fit">{{ $carrental->carrentalcat->name ?? 'cat' }}</a>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Policy</h3>
                    <p class="text-gray-600">{{ $carrental->policy }} Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Nemo illum
                        assumenda corrupti maiores alias minus dolor laboriosam molestias ducimus quas?</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold">Information</h3>
                    <p class="text-gray-600">{{ $carrental->information }} Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit.
                        Quibusdam, nihil!</p>
                </div>
                <x-section-order />
            </div>
        </div>
    </section>

    <div class="container">
        <div class="flex justify-between items-center py-2 mt-4 mb-2">
            <h2 class="text-2xl font-semibold">Carrental lainnya</h2>
            <a href="{{ route('carrentals.index') }}"
                class="text-orange-500 min-w-max hover:underline flex gap-2 items-center">
                <span>Lihat Semua</span>
                <x-bi-arrow-right class="w-4 flex" />
            </a>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-8">
            @foreach ($latestThreeCarrentals as $carrental)
                <x-carrental-card :carrental="$carrental"></x-carrental-card>
            @endforeach
        </div>
    </div>
</x-layout>