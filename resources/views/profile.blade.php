<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <!-- CSS PROFILR -->
    <link rel="stylesheet" href="{{asset('../css/profile.css')}}" />
    <!-- FONT AWESOME LIBRARY -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Fonts LIBRARY -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

  </head>
  <body>
    <!-- Header Section -->
    <header class="profile-header">
      <div class="banner">
        <img src="{{asset('../Media/images/banner.jpg')}}" alt="Profile Banner" class="banner-img" />
      </div>

      <div class="profile-picture">
        <img src="{{asset('../Media/images/profile.jpg')}}" alt="Profile Picture" />
      </div>

      <div class="profile-info">
        <h1>Abdel-hamed Farhat</h1>
        <p>@3bdhmeed</p>
      </div>
    </header>

    <!-- Profile Info and Bio Section -->
    <section class="bio-section">
      <p class="bio">
        Computer science student with a passion for creating impactful digital
        experiences. Sharing my thoughts and experiences here.
      </p>
      <span class="location">📍 Menofia, EG</span>
      <div class="social-links">
        <a href="https://facebook.com" target="_blank" aria-label="Facebook" title="Facebook Profile">
          <i class="fab fa-facebook-f"></i>
        </a>

        <a href="https://instagram.com" target="_blank" aria-label="Instagram" title="Instagram Profile">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://twitter.com" target="_blank" aria-label="Twitter" title="Twitter Profile">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://github.com" target="_blank" aria-label="GitHub" title="GitHub Profile">
          <i class="fab fa-github"></i>
        </a>
        <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn" title="LinkedIn Profile">
          <i class="fab fa-linkedin"></i>
        </a>
      </div>

      <div class="like-posts">
        <span><strong>0</strong> posts </span>
        <span><strong>0</strong> likes</span>
      </div>
    </section>

    <!-- Navigation Tabs -->
    <nav class="profile-nav">
      <button class="tab-btn" onclick="showSection('posts')">Posts</button>
      <button class="tab-btn" onclick="showSection('favorites')">
        Favorites
      </button>
    </nav>

    <!-- Content Display for test -->
    <section id="posts" class="content-section active">
      <div class="post-card">
        <img src="../Media/images/post-thumbnail.jpg" alt="Post Thumbnail" />
        <div class="post-info">
          <h2>Fairouz: a Voice, a Star, a Mystery</h2>
          <p>
            One of the most celebrated voices in Arabic music, her roots are in
            the artistic renaissance that blossomed in Baalbek, Lebanon, where,
            in the 1920s, Lebanese and French romantics gathered to share poetry
            ...
          </p>
          <span>Published: Sep 23, 2024</span>
          <button class="read-more-btn">Read More</button>
        </div>
      </div>
    </section>

    <section id="favorites" class="content-section">
      <p>No favorite posts yet.</p>
    </section>

    <!-- Call to Action Buttons -->
    <div class="cta-buttons">
      <button class="new-post-btn">Write a New Post</button>
      <button class="edit-profile-btn"><a href="edit-profile.html" class="edit-profile-btn">Edit Profile</a>
      </button>
    </div>

    <script src="profile.js"></script>
  </body>
</html>
