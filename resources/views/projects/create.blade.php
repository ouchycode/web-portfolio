<x-layout title="Tambah Project">
    <div class="max-w-3xl mx-auto py-12">
        <h1 class="text-2xl font-bold mb-6">Tambah Project</h1>

        @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-700 p-4 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block font-medium mb-1 text-black">Judul</label>
                <input type="text" name="title" class="w-full border rounded p-2 text-black bg-white" required>
            </div>

            <div>
                <label class="block font-medium mb-1 text-black">Deskripsi</label>
                <textarea name="description" class="w-full border rounded p-2 text-black bg-white" rows="4" required></textarea>
            </div>

            <div>
                <label class="block font-medium mb-1 text-black">Gambar (Opsional)</label>
                <input type="file" name="image" class="w-full border rounded p-2 text-black bg-white">
            </div>

            <div>
                <label class="block font-medium mb-1 text-black">Link Proyek (Opsional)</label>
                <input type="url" name="link" class="w-full border rounded p-2 text-black bg-white">
            </div>

            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Simpan</button>
        </form>
    </div>
</x-layout>
