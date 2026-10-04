@extends('layouts.app')

@section('title', 'Admin Projects')

@section('content')
    <section class="bg-white text-neutral-900 min-h-[80vh]">
        <div class="max-w-6xl mx-auto px-6 py-16">
            @if (session('status'))
                <p class="mb-6 inline-block bg-neutral-900 text-white text-sm px-4 py-2 rounded-full">{{ session('status') }}
                </p>
            @endif

            @if (!session('project_admin'))
                <!-- FORM LOGIN -->
                <div class="max-w-sm">
                    <h1 class="text-5xl font-bold tracking-tight uppercase">Admin<span class="text-neutral-400">.login</span>
                    </h1>
                    <form method="POST" action="{{ route('projects.login') }}" class="mt-8 space-y-4">
                        @csrf
                        <input type="password" name="password" required placeholder="Password"
                            class="w-full border-b-2 border-neutral-200 focus:border-neutral-900 outline-none py-3 bg-transparent">
                        @error('password')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                        <button type="submit"
                            class="w-full bg-neutral-900 text-white py-3.5 font-semibold hover:bg-neutral-700 transition">Masuk</button>
                    </form>
                </div>
            @else
                <!-- HEADER & TOMBOL LOGOUT -->
                <div class="flex items-end justify-between flex-wrap gap-4">
                    <div>
                        <p class="text-sm uppercase tracking-[0.3em] text-neutral-500">/Control Room</p>
                        <h1 class="text-6xl font-bold uppercase tracking-tight mt-2">Projects</h1>
                    </div>
                    <form method="POST" action="{{ route('projects.logout') }}">
                        @csrf
                        <button type="submit" class="text-sm underline underline-offset-4 hover:text-neutral-500">
                            Keluar
                        </button>
                    </form>
                </div>

                <!-- LIST PROJECTS & FORM UPDATE/DELETE -->
                <div class="mt-10 border-t-2 border-neutral-900 divide-y divide-neutral-200">
                    @forelse ($projects as $project)
                        <details class="group py-5">
                            <summary class="cursor-pointer flex items-center justify-between gap-6 list-none">
                                <div>
                                    <p class="text-xl font-semibold">{{ $project->title }}</p>
                                    <p class="text-sm text-neutral-500">{{ $project->category }} · order
                                        {{ $project->sort_order }}</p>
                                </div>
                                <span class="text-2xl group-open:rotate-45 transition">+</span>
                            </summary>

                            <!-- FORM UPDATE PROJECT -->
                            <form method="POST" action="{{ route('projects.update', $project->id) }}"
                                class="mt-6 grid gap-4 sm:grid-cols-2 bg-neutral-50 p-6 rounded-2xl">
                                @csrf
                                @method('PUT')

                                <label class="text-sm font-medium">Judul
                                    <input name="title" value="{{ old('title', $project->title) }}" required
                                        class="edit-input">
                                </label>
                                <label class="text-sm font-medium">Kategori
                                    <input name="category" value="{{ old('category', $project->category) }}"
                                        class="edit-input">
                                </label>
                                <label class="text-sm font-medium">Banner (path)
                                    <input name="banner_image" value="{{ old('banner_image', $project->banner_image) }}"
                                        class="edit-input">
                                </label>
                                <label class="text-sm font-medium">Link
                                    <input name="link" value="{{ old('link', $project->link) }}" class="edit-input">
                                </label>
                                <label class="text-sm font-medium sm:col-span-2">Deskripsi
                                    <textarea name="description" rows="3" class="edit-input">{{ old('description', $project->description) }}</textarea>
                                </label>
                                <label class="text-sm font-medium">Fitur (satu per baris)
                                    <textarea name="features" rows="4" class="edit-input">{{ old('features', is_array($project->features) ? implode("\n", $project->features) : $project->features) }}</textarea>
                                </label>
                                <label class="text-sm font-medium">Tags (pisah koma)
                                    <textarea name="tags" rows="4" class="edit-input">{{ old('tags', is_array($project->tags) ? implode(', ', $project->tags) : $project->tags) }}</textarea>
                                </label>
                                <label class="text-sm font-medium">Urutan
                                    <input name="sort_order" type="number" min="0"
                                        value="{{ old('sort_order', $project->sort_order) }}" class="edit-input">
                                </label>
                                <div class="flex items-end gap-3">
                                    <button type="submit"
                                        class="bg-neutral-900 text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-neutral-700 transition">Simpan</button>
                                </div>
                            </form>

                            <!-- FORM DELETE PROJECT -->
                            <form method="POST" action="{{ route('projects.destroy', $project->id) }}" class="mt-3"
                                onsubmit="return confirm('Hapus project ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-sm text-red-600 underline underline-offset-4">Hapus</button>
                            </form>
                        </details>
                    @empty
                        <p class="py-8 text-neutral-500">Belum ada project.</p>
                    @endforelse
                </div>

                <!-- FORM TAMBAH PROJECT BARU -->
                <details class="mt-10 border-2 border-neutral-900 rounded-3xl p-6">
                    <summary class="cursor-pointer font-bold text-xl uppercase tracking-tight">+ Tambah Project</summary>
                    <form method="POST" action="{{ route('projects.store') }}" class="mt-6 grid gap-4 sm:grid-cols-2">
                        @csrf
                        <label class="text-sm font-medium">Judul
                            <input name="title" required class="edit-input">
                        </label>
                        <label class="text-sm font-medium">Kategori
                            <input name="category" class="edit-input">
                        </label>
                        <label class="text-sm font-medium">Banner (path)
                            <input name="banner_image" class="edit-input">
                        </label>
                        <label class="text-sm font-medium">Link
                            <input name="link" class="edit-input">
                        </label>
                        <label class="text-sm font-medium sm:col-span-2">Deskripsi
                            <textarea name="description" rows="3" class="edit-input"></textarea>
                        </label>
                        <label class="text-sm font-medium">Fitur (satu per baris)
                            <textarea name="features" rows="4" class="edit-input"></textarea>
                        </label>
                        <label class="text-sm font-medium">Tags (pisah koma)
                            <textarea name="tags" rows="4" class="edit-input"></textarea>
                        </label>
                        <label class="text-sm font-medium">Urutan
                            <input name="sort_order" type="number" min="0" value="0" class="edit-input">
                        </label>
                        <div class="flex items-end">
                            <button type="submit"
                                class="bg-neutral-900 text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-neutral-700 transition">Tambah</button>
                        </div>
                    </form>
                </details>
            @endif
        </div>
    </section>
@endsection
