<!DOCTYPE html>
<html>
<head>
    <title>Tambah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-lg shadow">

    <h1 class="text-2xl font-bold mb-4">Tambah Karyawan</h1>

    <form action="/karyawan" method="POST">
        @csrf

        <input type="text" name="nama"
            placeholder="Nama"
            class="w-full mb-3 px-4 py-2 border rounded">

        <select name="jabatan_id"
            class="w-full mb-3 px-4 py-2 border rounded">
            @foreach($jabatans as $j)
                <option value="{{ $j->id }}">{{ $j->nama_jabatan }}</option>
            @endforeach
        </select>

        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Simpan
        </button>
    </form>

</div>

</body>
</html>