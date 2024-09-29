<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('../css/home.css')}}" />
    <title>BlogakTube</title>
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
    <main>
        <div class="pop-posts-container">
            <div class="heading">
                <h1>All Blogs</h1>
                <button class="creation">
                    <a href="{{route('post.create')}}">
                        Create Blog
                    </a>
                </button>
            </div>

            <div class="pop-posts">

                @foreach ($posts as $post)
                <div class="post-box">
                    {{-- <img src="{{asset('storage/app/public/image'.$post->post_image)}}" alt="{{$post->post_title}}"> --}}
                    <h2>{{$post->post_title}}</h2>
                    <p>{{$post->post_body}}</p>
                    <div class="middle">
                        <button>
                            <a href="{{route('post.showPostPage' , $post->id)}}">Read More</a>
                        </button>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </main><br><br><br>
    <footer>
        <p>All rights are reserved &copy; BlogakTube</p>
    </footer>

</body>

</html>