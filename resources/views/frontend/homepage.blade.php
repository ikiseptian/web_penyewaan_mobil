<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil Lepas Kunci</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        header {
          background: url('{{ asset('backend/img/langit.jpg') }}') no-repeat center center;

            background-size: cover;
        }
    </style>
</head>
<body class="bg-gray-100">
  

    <header class="h-screen flex items-center justify-center text-center text-white">
        <div class="bg-black bg-opacity-50 p-5 rounded-lg">
            <h1 class="text-5xl font-bold">Rental Mobil Lepas Kunci</h1>
            <p class="text-lg mt-2">Hanya dengan satu sentuhan</p>
        </div>
    </header>

    <section class="py-10 bg-gray-200">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 text-center">
                <div>
                    <img src="{{ asset('backend/img/langit.jpg')}}" alt="icon" class="mx-auto mb-2">
                    <p>Layanan 1</p>
                </div>
                <div>
                    <img src="{{ asset('backend/img/langit.jpg')}}" alt="icon" class="mx-auto mb-2">
                    <p>Layanan 2</p>
                </div>
                <div>
                    <img src="{{ asset('backend/img/langit.jpg')}}" alt="icon" class="mx-auto mb-2">
                    <p>Layanan 3</p>
                </div>
                <div>
                    <img src="{{ asset('backend/img/langit.jpg')}}" alt="icon" class="mx-auto mb-2">
                    <p>Layanan 4</p>
                </div>
                <div>
                    <img src="{{ asset('backend/img/langit.jpg')}}" alt="icon" class="mx-auto mb-2">
                    <p>Layanan 5</p>
                </div>
                <div>
                    <img src="{{ asset('backend/img/langit.jpg')}}" alt="icon" class="mx-auto mb-2">
                    <p>Layanan 6</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="{{ asset('backend/img/langit.jpg')}}" alt="Car Image">
                    <span class="absolute top-2 right-2 bg-green-500 text-white px-3 py-1 rounded">Tersedia</span>
                </div>
                <div class="p-5">
                    <h5 class="text-xl font-bold">Avanza</h5>
                    <div class="text-lg font-semibold text-blue-500">Rp.200.000<span class="text-gray-500">/day</span></div>
                    <ul class="mt-2">
                        <li class="flex justify-between border-b py-2"><span>Bahan bakar</span><span>Bensin</span></li>
                        <li class="flex justify-between border-b py-2"><span>Jumlah Kursi</span><span>5</span></li>
                        <li class="flex justify-between border-b py-2"><span>Transmisi</span><span>Manual</span></li>
                    </ul>
                </div>
                <div class="p-5 border-t">
                    <a href="{{ route('contact')}} " class="block bg-blue-500 text-white text-center py-2 rounded">Sewa</a>
                    <a href="{{ route('detail')}}" class="block bg-blue-300 text-white text-center py-2 mt-2 rounded">Detail</a>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="{{ asset('backend/img/langit.jpg')}}" alt="Car Image">
                    <span class="absolute top-2 right-2 bg-green-500 text-white px-3 py-1 rounded">Tersedia</span>
                </div>
                <div class="p-5">
                    <h5 class="text-xl font-bold">Xenia</h5>
                    <div class="text-lg font-semibold text-blue-500">Rp.250.000<span class="text-gray-500">/day</span></div>
                    <ul class="mt-2">
                        <li class="flex justify-between border-b py-2"><span>Bahan bakar</span><span>Bensin</span></li>
                        <li class="flex justify-between border-b py-2"><span>Jumlah Kursi</span><span>7</span></li>
                        <li class="flex justify-between border-b py-2"><span>Transmisi</span><span>Automatic</span></li>
                    </ul>
                </div>
                <div class="p-5 border-t">
                    <a href="{{ route('contact')}}" class="block bg-blue-500 text-white text-center py-2 rounded">Sewa</a>
                    <a href="{{ route('detail')}}" class="block bg-blue-300 text-white text-center py-2 mt-2 rounded">Detail</a>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="{{ asset('backend/img/langit.jpg')}}" alt="Car Image">
                    <span class="absolute top-2 right-2 bg-green-500 text-white px-3 py-1 rounded">Tersedia</span>
                </div>
                <div class="p-5">
                    <h5 class="text-xl font-bold">Innova</h5>
                    <div class="text-lg font-semibold text-blue-500">Rp.300.000<span class="text-gray-500">/day</span></div>
                    <ul class="mt-2">
                        <li class="flex justify-between border-b py-2"><span>Bahan bakar</span><span>Diesel</span></li>
                        <li class="flex justify-between border-b py-2"><span>Jumlah Kursi</span><span>8</span></li>
                        <li class="flex justify-between border-b py-2"><span>Transmisi</span><span>Automatic</span></li>
                    </ul>
                </div>
                <div class="p-5 border-t">
                    <a href="{{ route('contact')}}" class="block bg-blue-500 text-white text-center py-2 rounded">Sewa</a>
                    <a href="{{ route('detail')}}" class="block bg-blue-300 text-white text-center py-2 mt-2 rounded">Detail</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p class="mb-0">Rental Mobil Mana We</p>
            <p>Siap Menemani Perjalanan ke Mana Anda Mau</p>
        </div>
    </footer>
</body>
</html>
