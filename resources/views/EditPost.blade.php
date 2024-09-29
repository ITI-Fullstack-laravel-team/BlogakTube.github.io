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
      <form action="/post/update/{{$post->id}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="ptitle"  required value="{{$post->post_title}}">
        <textarea name="pbody" required  >{{$post->post_body}}</textarea>
        <input type="file" name="uploadfile" id="uploadfile"><br><br>
        <input type="submit" value="Save Changes">


      </form> 
        <div class="post-actions">
          <button class="discard-btn">Discard</button>
        </div>
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