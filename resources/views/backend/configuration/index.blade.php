@extends('backend.layout')

@section('content')
    <div class="container mt-10 ">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header bg-primary text-white">Configuration Settings</div>

                    <div class="card-body">
                        <form action="{{ route('configuration.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Path Gambar -->
                            <div class="row">
                                <!-- Path Gambar -->
                                <div class="col-md mb-3">
                                    <label for="path" class="form-label">Website Image</label>
                                    <input type="file" name="path" id="path"
                                        class="form-control @error('path') is-invalid @enderror"
                                        onchange="previewImage('path', 'pathPreview')">
                                    @error('path')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <!-- Cek jika gambar ada di database, tampilkan -->
                                    @if (isset($configuration->path))
                                        <img id="pathPreview" src="{{ asset($configuration->path) }}" alt="Gambar Lama"
                                            class="mt-2" style="max-width: 200px;">
                                    @else
                                        <img id="pathPreview" src="" alt="Preview Gambar" class="mt-2"
                                            style="max-width: 200px; display: none;">
                                    @endif
                                </div>

                                <!-- Path Logo -->
                                <div class="col-md mb-3">
                                    <label for="path_logo" class="form-label">Title Image</label>
                                    <input type="file" name="path_logo" id="path_logo"
                                        class="form-control @error('path_logo') is-invalid @enderror"
                                        onchange="previewImage('path_logo', 'pathLogoPreview')">
                                    @error('path_logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <!-- Cek jika logo ada di database, tampilkan -->
                                    @if (isset($configuration->path_logo))
                                        <img id="pathLogoPreview" src="{{ asset($configuration->path_logo) }}"
                                            alt="Logo Lama" class="mt-2" style="max-width: 200px;">
                                    @else
                                        <img id="pathLogoPreview" src="" alt="Preview Logo" class="mt-2"
                                            style="max-width: 200px; display: none;">
                                    @endif
                                </div>
                            </div>

                            <!-- Website Name -->
                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="website_name" class="form-label">Website Name</label>
                                    <input type="text" name="website_name"
                                        class="form-control @error('website_name') is-invalid @enderror"
                                        value="{{ old('website_name', $configuration->website_name ?? '') }}">
                                    @error('website_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title', $configuration->title ?? '') }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                    <textarea name="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror">{{ old('meta_keywords', $configuration->meta_keywords ?? '') }}</textarea>
                                    @error('meta_keywords')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="meta_descriptions" class="form-label">Meta Descriptions</label>
                                    <textarea name="meta_descriptions" class="form-control @error('meta_descriptions') is-invalid @enderror">{{ old('meta_descriptions', $configuration->meta_descriptions ?? '') }}</textarea>
                                    @error('meta_descriptions')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md mb-3">
                                <label for="footer" class="form-label">Footer</label>
                                <input type="text" name="footer"
                                    class="form-control @error('footer') is-invalid @enderror"
                                    value="{{ old('footer', $configuration->footer ?? '') }}">
                                @error('footer')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <!-- Path Gambar -->
                                <div class="col-md mb-3">
                                    <label for="path_building" class="form-label">Building 1</label>
                                    <input type="file" name="path_building" id="path_building"
                                        class="form-control @error('path_building') is-invalid @enderror"
                                        onchange="previewImage('path_building', 'path_buildingPreview')">
                                    @error('path_building')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <!-- Cek jika gambar ada di database, tampilkan -->
                                    @if (isset($configuration->path_building))
                                        <img id="path_buildingPreview" src="{{ asset($configuration->path_building) }}"
                                            alt="Gambar Lama" class="mt-2" style="max-width: 200px;">
                                    @else
                                        <img id="path_buildingPreview" src="" alt="Preview Gambar"
                                            class="mt-2" style="max-width: 200px; display: none;">
                                    @endif
                                </div>

                                <!-- Path Logo -->
                                <div class="col-md mb-3">
                                    <label for="path_building_2" class="form-label">Building 2</label>
                                    <input type="file" name="path_building_2" id="path_building_2"
                                        class="form-control @error('path_building_2') is-invalid @enderror"
                                        onchange="previewImage('path_building_2', 'pathLogoPreview')">
                                    @error('path_building_2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <!-- Cek jika logo ada di database, tampilkan -->
                                    @if (isset($configuration->path_building_2))
                                        <img id="pathLogoPreview" src="{{ asset($configuration->path_building_2) }}"
                                            alt="Logo Lama" class="mt-2" style="max-width: 200px;">
                                    @else
                                        <img id="pathLogoPreview" src="" alt="Preview Logo" class="mt-2"
                                            style="max-width: 200px; display: none;">
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="title_building" class="form-label">title_building</label>
                                    <input type="text" name="title_building"
                                        class="form-control @error('title_building') is-invalid @enderror"
                                        value="{{ old('title_building', $configuration->title_building ?? '') }}">
                                    @error('title_building')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="overview_building" class="form-label">overview_building</label>
                                    <input type="text" name="overview_building"
                                        class="form-control @error('overview_building') is-invalid @enderror"
                                        value="{{ old('overview_building', $configuration->overview_building ?? '') }}">
                                    @error('overview_building')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="description" class="form-label">Description Building</label>
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                        rows="4">{{ old('description', $configuration->description ?? '') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">
                                    <label for="areas_building" class="form-label">Areas Building</label>
                                    <input type="text" name="areas_building"
                                        class="form-control @error('areas_building') is-invalid @enderror"
                                        value="{{ old('areas_building', $configuration->areas_building ?? '') }}">
                                    @error('areas_building')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col mb-3">
                                    <label for="parkings_building" class="form-label">Parkings Building</label>
                                    <input type="text" name="parkings_building"
                                        class="form-control @error('parkings_building') is-invalid @enderror"
                                        value="{{ old('parkings_building', $configuration->parkings_building ?? '') }}">
                                    @error('parkings_building')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col mb-3">
                                    <label for="units_building" class="form-label">Units Building</label>
                                    <input type="text" name="units_building"
                                        class="form-control @error('units_building') is-invalid @enderror"
                                        value="{{ old('units_building', $configuration->units_building ?? '') }}">
                                    @error('units_building')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col mb-3">
                                    <label for="bedrooms_building" class="form-label">Bedrooms Building</label>
                                    <input type="text" name="bedrooms_building"
                                        class="form-control @error('bedrooms_building') is-invalid @enderror"
                                        value="{{ old('bedrooms_building', $configuration->bedrooms_building ?? '') }}">
                                    @error('bedrooms_building')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col mb-3">
                                    <label for="features_building" class="form-label">Features Building</label>
                                    <input type="text" name="features_building"
                                        class="form-control @error('features_building') is-invalid @enderror"
                                        value="{{ old('features_building', $configuration->features_building ?? '') }}">
                                    @error('features_building')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">
                                    <label for="youtube_superiority" class="form-label">Youtube Building</label>
                                    <input type="text" name="youtube_superiority"
                                        class="form-control @error('youtube_superiority') is-invalid @enderror"
                                        value="{{ old('youtube_superiority', $configuration->youtube_superiority ?? '') }}">
                                    @error('youtube_superiority')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Tambahkan input lainnya sesuai kebutuhan -->

                            <!-- Tombol Submit -->
                            <button type="submit" class="btn btn-primary w-100">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
