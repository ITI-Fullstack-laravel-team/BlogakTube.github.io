<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create and Edit Post</title>
  <link rel="stylesheet" href="{{asset('/css/home.css')}}">
  <link rel="stylesheet" href="{{asset('/css/CreatePost.css')}}">
  <link rel="stylesheet" href="{{asset('/Frontend/html/edit-profile.html')}}">

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
      <h2>Create Post</h2>
      <form id="postForm" action="{{asset('/Frontend/html/home.html')}}">
        <input type="text" id="postTitle" placeholder="Post Title" required>
        <textarea id="postContent" placeholder="Post Content" required></textarea>
        <input type="file" id="uploadfile"><br><br><br>
        <input type="submit" value="Create Post">
      </form>
    </div>

    <!-- <div class="post-container" id="createdPost">
  <h2 id="displayTitle">Post Title</h2>
  <p id="displayContent">Post content goes here...</p>
  <button class="edit-mode" onclick="editPost()">Edit Post</button>
</div> -->
  </center>

  <!-- <script>
    // Reference to form and post container
    const postForm = document.getElementById('postForm');
    const createdPost = document.getElementById('createdPost');
    const postTitle = document.getElementById('postTitle');
    const postContent = document.getElementById('postContent');
    const displayTitle = document.getElementById('displayTitle');
    const displayContent = document.getElementById('displayContent');
    let isEditing = false;

    // Handle Create Post / Edit Post Submit
    postForm.addEventListener('submit', function(event) {
      event.preventDefault();

      if (isEditing) {
        // If editing, update the post content
        displayTitle.innerText = postTitle.value;
        displayContent.innerText = postContent.value;
        isEditing = false;
        postForm.querySelector('input[type="submit"]').value = 'Create Post';
      } else {
        // Display the created post
        displayTitle.innerText = postTitle.value;
        displayContent.innerText = postContent.value;
        createdPost.style.display = 'block';
      }

      // Clear input fields
      postTitle.value = '';
      postContent.value = '';
    });

    // Edit Post Functionality
    function editPost() {
      // Fill the form with current post data
      postTitle.value = displayTitle.innerText;
      postContent.value = displayContent.innerText;

      // Change button text
      postForm.querySelector('input[type="submit"]').value = 'Save Changes';
      isEditing = true;
    }
  </script> -->
</body>

</html>