<x-layout>
    {{-- hero --}}
    <section
        class="bg-[url('https://plus.unsplash.com/premium_photo-1719943510748-4b4354fbcf56?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-center bg-cover">
        <div class="bg-gradient-to-t from-black/40 to-black/60 min-h-[60vh] flex flex-col items-center justify-center">
            <div class="container text-white">
                <div class="space-y-8 max-w-screen-sm leading-relaxed">
                    <h1 class="font-playfaird text-5xl lg:text-6xl font-bold !leading-snug">PAKET WISATA</h1>
                    <div class="h-1 bg-orange-500 w-32"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- paket wisata list --}}
    <section class="py-16">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <img src="https://picsum.photos/500" alt="" class="object-cover object-center w-full h-64">
                    <div class="p-6 space-y-4">
                        <h2 class="text-3xl font-semibold mb-2">Judul</h2>
                        <h1>Harga</h1>
                        <p>Tags</p>
                        <a href="" class="inline-block rounded-full bg-orange-500 py-3 px-5 text-white">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>