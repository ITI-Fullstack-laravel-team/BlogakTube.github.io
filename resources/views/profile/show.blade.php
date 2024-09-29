<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <!-- CSS Profile -->
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
    <!-- FONT AWESOME LIBRARY -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Google Fonts LIBRARY -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
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
            <h1>{{ $user->name ?? 'User Name' }}</h1>
            <p>{{ '@' . $user->username ?? 'username' }}</p>
        </div>
    </header>

    <!-- Profile Info and Bio Section -->
    <section class="bio-section">
        <p class="bio">
            {{ $user->bio ?? 'Computer science student with a passion for creating impactful digital experiences. Sharing my thoughts and experiences here.' }}
        </p>
        <span class="location">📍 {{ $user->location ?? 'Location Not Provided' }}</span>

        <div class="social-links">
            <a href="{{ $user->facebook ?? '#' }}" target="_blank" aria-label="Facebook" title="Facebook Profile">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="{{ $user->instagram ?? '#' }}" target="_blank" aria-label="Instagram" title="Instagram Profile">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="{{ $user->twitter ?? '#' }}" target="_blank" aria-label="Twitter" title="Twitter Profile">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="{{ $user->github ?? '#' }}" target="_blank" aria-label="GitHub" title="GitHub Profile">
                <i class="fab fa-github"></i>
            </a>
            <a href="{{ $user->linkedin ?? '#' }}" target="_blank" aria-label="LinkedIn" title="LinkedIn Profile">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="like-posts">
            <span><strong>{{ $user->posts_count ?? 0 }}</strong> posts </span>
            <span><strong>{{ $user->likes_count ?? 0 }}</strong> likes</span>
        </div>
    </section>

    <!-- Navigation Tabs -->
    <nav class="profile-nav">
        <button class="tab-btn" onclick="showSection('posts')">Posts</button>
        <button class="tab-btn" onclick="showSection('favorites')">Favorites</button>
    </nav>

    <!-- Content Display for Posts -->
    <section id="posts" class="content-section active">
    @forelse($user->posts as $post)
        <div class="post-card">
          <img src="{{ asset($post->thumbnail ?? 'Media/images/default-thumbnail.jpg') }}" alt="Post Thumbnail" />
          <div class="post-info">
            <h2>{{ $post->post_title }}</h2>
            <p>{{ \Illuminate\Support\Str::limit($post->post_body, 100, '...') }}</p>
            <span>Published: {{ $post->created_at->format('M d, Y') }}</span>
            <button class="read-more-btn">Read More</button>
          </div>
        </div>
    @empty
        <p>No posts available yet.</p>
    @endforelse
</section>


    <!-- Content Display for Favorites -->
    <section id="favorites" class="content-section">
        @if($user->favorites && $user->favorites->isEmpty())
            <p>No favorite posts yet.</p>
        @else
            @foreach($user->favorites as $favorite)
                <div class="post-card">
                    <h2>{{ $favorite->title }}</h2>
                    <p>{{ \Illuminate\Support\Str::limit($favorite->content, 100, '...') }}</p>
                    <span>Favorited: {{ $favorite->created_at->format('M d, Y') }}</span>
                    <button class="read-more-btn">Read More</button>
                </div>
            @endforeach
        @endif
    </section>

    <!-- Call to Action Buttons -->
   <!-- Call to Action Buttons -->
@if ($authUser && $authUser->id === $user->id)
    <div class="cta-buttons">
        <button class="new-post-btn">
            <a href="{{ route('post.create', $user->id) }}" class="new-post-btn">Write a New Post</a>
        </button>
        <button class="edit-profile-btn">
            <a href="{{ route('profile.edit', $user->id) }}" class="edit-profile-btn">Edit Profile</a>
        </button>
    </div>
@endif


    <script src="{{ asset('../js/profile.js') }}"></script>
</body>
</html>
