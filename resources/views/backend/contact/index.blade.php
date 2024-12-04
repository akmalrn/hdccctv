@extends('backend.layout')

@section('content')
    <div class="container mt-10">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header bg-primary text-white">Contact</div>

                    <div class="card-body">
                        <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md mb-3">
                                <label for="path_contact" class="form-label">Image</label>
                                <input type="file" name="path_contact" id="path_contact"
                                    class="form-control @error('path_contact') is-invalid @enderror"
                                    onchange="previewImage('path_contact', 'path_contactPreview')">
                                @error('path_contact')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @if (isset($contact->path_contact))
                                    <img id="path_contactPreview" src="{{ asset($contact->path_contact) }}" alt="Gambar Lama"
                                        class="mt-2" style="max-width: 200px;">
                                @else
                                    <img id="path_contactPreview" src="" alt="Preview Gambar" class="mt-2"
                                        style="max-width: 200px; display: none;">
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="path" class="form-label">Profile</label>
                                    <input type="file" name="path" id="path"
                                        class="form-control @error('path') is-invalid @enderror"
                                        onchange="previewImage('path', 'pathPreview')">
                                    @error('path')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @if (isset($contact->path))
                                        <img id="pathPreview" src="{{ asset($contact->path) }}" alt="Gambar Lama"
                                            class="mt-2" style="max-width: 200px;">
                                    @else
                                        <img id="pathPreview" src="" alt="Preview Gambar" class="mt-2"
                                            style="max-width: 200px; display: none;">
                                    @endif
                                </div>

                                <div class="col-md mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $contact->name ?? '') }}" pattern="\d*"
                                        inputmode="numeric">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" name="position"
                                        class="form-control @error('position') is-invalid @enderror"
                                        value="{{ old('position', $contact->position ?? '') }}" pattern="\d*"
                                        inputmode="numeric">
                                    @error('position')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Phone Numbers -->
                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="text" name="phone_number"
                                        class="form-control @error('phone_number') is-invalid @enderror"
                                        value="{{ old('phone_number', $contact->phone_number ?? '') }}" pattern="\d*"
                                        inputmode="numeric">
                                    @error('phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="phone_number_2" class="form-label">Second Phone Number</label>
                                    <input type="text" name="phone_number_2"
                                        class="form-control @error('phone_number_2') is-invalid @enderror"
                                        value="{{ old('phone_number_2', $contact->phone_number_2 ?? '') }}" pattern="\d*"
                                        inputmode="numeric">
                                    @error('phone_number_2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email Addresses -->
                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="email_address" class="form-label">Email Address</label>
                                    <input type="email" name="email_address"
                                        class="form-control @error('email_address') is-invalid @enderror"
                                        value="{{ old('email_address', $contact->email_address ?? '') }}">
                                    @error('email_address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="email_address_2" class="form-label">Second Email Address</label>
                                    <input type="email" name="email_address_2"
                                        class="form-control @error('email_address_2') is-invalid @enderror"
                                        value="{{ old('email_address_2', $contact->email_address_2 ?? '') }}">
                                    @error('email_address_2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Social Media Links -->
                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="facebook" class="form-label">Youtube</label>
                                    <input type="text" name="facebook"
                                        class="form-control @error('facebook') is-invalid @enderror"
                                        value="{{ old('facebook', $contact->facebook ?? '') }}">
                                    @error('facebook')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="url" name="instagram"
                                        class="form-control @error('instagram') is-invalid @enderror"
                                        value="{{ old('instagram', $contact->instagram ?? '') }}">
                                    @error('instagram')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="tiktok" class="form-label">TikTok</label>
                                    <input type="url" name="tiktok"
                                        class="form-control @error('tiktok') is-invalid @enderror"
                                        value="{{ old('tiktok', $contact->tiktok ?? '') }}">
                                    @error('tiktok')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address"
                                        class="form-control @error('address') is-invalid @enderror"
                                        value="{{ old('address', $contact->address ?? '') }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="hours" class="form-label">Working</label>
                                    <input type="text" name="hours"
                                        class="form-control @error('hours') is-invalid @enderror"
                                        value="{{ old('hours', $contact->hours ?? '') }}">
                                    @error('hours')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Footer -->
                            <div class="col-md mb-3">
                                <label for="map" class="form-label">map</label>
                                <input type="text" name="map"
                                    class="form-control @error('map') is-invalid @enderror"
                                    value="{{ old('map', $contact->map ?? '') }}">
                                @error('map')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
