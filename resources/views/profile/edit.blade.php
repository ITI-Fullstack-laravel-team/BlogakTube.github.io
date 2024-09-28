<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <!-- CSS Profile -->
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
    <!-- FONT AWESOME LIBRARY -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <!-- Header Section -->
    <header class="profile-header">
      <div class="banner">
        <img src="{{ asset('Media/images/banner.jpg') }}" alt="Profile Banner" class="banner-img" />
      </div>

      <div class="profile-picture">
        <img src="{{ asset('Media/images/profile.jpg') }}" alt="Profile Picture" />
      </div>

      <div class="profile-info">
        <h1>Edit Profile: {{ $user->name ?? 'User Name' }}</h1>
      </div>
    </header>

    <!-- Form Section for Editing Profile -->
    <section class="edit-profile-section">
      <form class="edit-profile-form" action="{{ route('profile.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Name Field -->
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" />
        </div>

        <!-- Username Field -->
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" />
        </div>

        <!-- Location Field -->
        <div class="form-group">
          <label for="location">Location:</label>
          <input type="text" id="location" name="location" value="{{ old('location', $user->location) }}" />
        </div>

        <!-- Bio Field -->
        <div class="form-group">
          <label for="bio">Bio:</label>
          <textarea id="bio" name="bio" rows="4" cols="50">{{ old('bio', $user->bio) }}</textarea>
        </div>

        <!-- Social Links Fields -->
        <div class="form-group">
          <label for="facebook">Facebook URL:</label>
          <input type="url" id="facebook" name="facebook" value="{{ old('facebook', $user->facebook) }}" />
        </div>

        <div class="form-group">
          <label for="instagram">Instagram URL:</label>
          <input type="url" id="instagram" name="instagram" value="{{ old('instagram', $user->instagram) }}" />
        </div>

        <div class="form-group">
          <label for="twitter">Twitter URL:</label>
          <input type="url" id="twitter" name="twitter" value="{{ old('twitter', $user->twitter) }}" />
        </div>

        <div class="form-group">
          <label for="github">GitHub URL:</label>
          <input type="url" id="github" name="github" value="{{ old('github', $user->github) }}" />
        </div>

        <div class="form-group">
          <label for="linkedin">LinkedIn URL:</label>
          <input type="url" id="linkedin" name="linkedin" value="{{ old('linkedin', $user->linkedin) }}" />
        </div>

        <!-- Submit Button -->
        <div class="form-actions">
          <button type="submit" class="save-btn">Save Changes</button>
          <button type="reset"><a href="{{ route('profile.show', $user->id) }}" class="cancel-btn">Cancel</a>
          </button>
        </div>
      </form>
    </section>
  </body>
</html>
