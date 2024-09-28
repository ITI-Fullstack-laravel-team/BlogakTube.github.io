<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Post</title>
  <link rel="stylesheet" href="{{asset('/css/home.css')}}">
  <link rel="stylesheet" href="{{asset('/css/EditPost.css')}}">
</head>

<body>
  <header>

    <div class="logo">
      <img src="{{asset('../Media/images/Logo-removebg-preview.png')}}" alt="My Website Logo">
      <h2>BlogakTube</h2>
    </div>

    <div class="search-bar">
      <input type="text" placeholder="Search...">

    </div>
    <div class="navigation">
      <a href="{{asset('home.html')}}">Home</a>
      <a href="{{asset('profile.html')}}">My profile</a>
      <a href="{{asset('login.html')}}">Logout</a>
    </div>

  </header>
  <center>
    <div class="form-container">
      <h2>Edit Post</h2>
      <form action="{{asset('/edit-post')}}">
        <input type="text" name="title" value="Current Post Title" required>
        <textarea name="content" required>Current Post Content</textarea>
        <input type="file" name="uploadfile" id="uploadfile"><br><br>
        <input type="submit" value="Save Changes">

        <div class="post-actions">
          <button class="discard-btn">Discard</button>
        </div>
      </form>
    </div>
  </center>
  <!-- <div class="post-list">
    <h2>Posts</h2>
    <div class="post">
        <h3>Sample Post Title</h3>
        <p>This is a sample post content.</p>
        
    </div> -->
</body>

</html>