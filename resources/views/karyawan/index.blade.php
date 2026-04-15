<!DOCTYPE html>
<html>
<head>
    <title>Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .card {
        transition: 0.3s;
    }

    .card:hover {
        transform: scale(1.02);
    }
</style>
<body class="bg-gray-100">

<div class="max-w-5xl mx-auto mt-10 fade-in">

    <h1 class="text-3xl font-bold mb-5 text-gray-800">
        💼 Data Karyawan
    </h1>

    <div class="flex justify-between mb-4">
        <form method="GET">
            <input type="text" name="search"
                placeholder="Cari nama..."
                class="px-4 py-2 border rounded-lg shadow-sm">

            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                Cari
            </button>
        </form>

        <a href="/karyawan/create"
           class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
           + Tambah
        </a>
    </div>

    <div class="grid gap-4">
    @foreach($data as $d)
    <div class="card bg-white p-4 rounded-lg shadow">
        <h2 class="text-xl font-bold">{{ $d->nama }}</h2>
        <p class="text-gray-500">{{ $d->jabatan->nama_jabatan }}</p>
    </div>
    @endforeach
</div>

</div>

</body>
</html>