<x-layout>
    {{-- img ada di storage/image --}}
    <img src="{{ asset('storage/image/'. $siswa->image) }}" alt="gambar orang" loading="lazy">
        <p>{{ $siswa->nama }}</p>
        <p>{{ $siswa->jabatan }}</p>
</x-layout>