<!-- بسم الله -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('../css/postPage.css')}}">
    <link rel="stylesheet" href="{{asset('../css/home.css')}}" />

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

    <div class="mainDiv">

        <div class="leftPart">
            <div class="postBody">
                <div class="postInfo">
                    <div class="userInfo">
                        <img src="{{asset('../Media/images/postPage Images/account.png')}}" alt="" class="accontIcon">
                        <div class="user">
                            <h4 class="Username">User22</h4>
                            <h4 class="userBio">Founder & CEO Revenue | Get a consistent of leads with content....</h4>
                            <h5 class="Date">11:3 Am Tuesday Seb 2024</h5>

                        </div>
                    </div>
                    <div class="postText">

                        <div class="editAndDeletePost">
                            <img src="{{asset('../Media/images/postPage Images/editing.png')}}" alt="" class="editPostIcon">
                            <img src="{{asset('../Media/images/postPage Images/delete.png')}}" alt="" class="deletePostIcon">
                        </div>

                        <h2 class="postTitle">Our New Blog Post Blog (BLOGAKTUBE)</h2>

                        <h4 class="postDescription">Welcome to our new blog, BLOGAKTUBE! We are excited to share this
                            project with you and look forward to creating a vibrant community focused on topics that
                            matter to you.</h4>
                        <h4 class="postDescription">What is BLOGAKTUBE?
                            BLOGAKTUBE is a blogging platform aimed at providing diverse and engaging content across
                            multiple fields. Whether you're looking for tech tips, lifestyle ideas, or cultural
                            articles, we are here to cater to your interests.</h4>
                    </div>
                    <img src="{{asset('../Media/images/postPage Images/postImage.png')}}" alt="" class="postImage">

                    <div class="postNoOfLikesAndComments">

                        <div class="postLikes">
                            <img src="{{asset('../Media/images/postPage Images/likeicon.png')}}" alt="" class="postLikesIcon">
                            <h4 class="postNoOfLikes">1</h4>
                            <h4 class="likesText">Likes</h4>
                        </div>

                        <div class="postComments">
                            <img src="{{asset('../Media/images/postPage Images/commenticon.png')}}" alt="" class="postCommentsIcon">
                            <h4 class="postNoOfComments">2</h4>
                            <h4 class="commentsText">Comments</h4>
                        </div>

                    </div>


                    <div class="line"></div>

                    <div class="postInteractive">
                        <div class="postLikes">
                            <img src="{{asset('../Media/images/postPage Images/like.png')}}" alt="" class="postLikeIcon">
                            <h3>Like</h3>
                        </div>

                        <div class="postComments">
                            <img src="{{asset('../Media/images/postPage Images/comment.png')}}" alt="" class="postLikeIcon">
                            <!-- <h3 class="postNoOfLikes">0</h3> -->
                            <h3>Comment</h3>
                        </div>

                    </div>

                    <div>
                        <h2>Comments</h2>
                        <a href="" class="postCommentContainer">
                            <img src="{{asset('../Media/images/postPage Images/comment.png')}}" alt="" class="rightPostsImage">
                            <div class="postsDescriptionRightPart">
                                <h3 class="postsTilte">User 320</h3>
                                <h5 class="postCommentDescription">(Assumed comment) Can’t wait to dive into the cultural articles! I always enjoy learning about different traditions.(Assumed comment) Can’t wait to dive into the cultural articles! I always enjoy learning about different traditions.</h5>
                            </div>
                        </a>

                        <a href="" class="postCommentContainer">
                            <img src="{{asset('../Media/images/postPage Images/comment.png')}}" alt="" class="rightPostsImage">
                            <div class="postsDescriptionRightPart">
                                <h3 class="postsTilte">User 410</h3>
                                <h5 class="postCommentDescription">(Assumed comment) Can’t wait to dive into the cultural articles! I always enjoy learning about different traditions.(Assumed comment) Can’t wait to dive into the cultural articles! I always enjoy learning about different traditions.</h5>
                            </div>
                        </a>

                    </div>

                </div>

            </div>
            <!-- postBody -->

        </div>

        <div class="rightPart">
            <center><h2 class="relatedPostsText">Related Posts</h2></center>
            
            <a href="" class="posts">
                <img src="{{asset('../Media/images/postPage Images/rightPostsImage.png')}}" alt="" class="rightPostsImage">
                <div class="postsDescriptionRightPart">
                    <h3 class="postsTilte">Post Title</h3>
                    <h5 class="postsOwner">Username</h5>
                </div>
            </a>

            <a href="" class="posts">
                <img src="{{asset('../Media/images/postPage Images/rightPostsImage.png')}}" alt="" class="rightPostsImage">
                <div class="postsDescriptionRightPart">
                    <h3 class="postsTilte">Post Title</h3>
                    <h5 class="postsOwner">Username</h5>
                </div>
            </a>

            <a href="" class="posts">
                <img src="{{asset('../Media/images/postPage Images/rightPostsImage.png')}}" alt="" class="rightPostsImage">
                <div class="postsDescriptionRightPart">
                    <h3 class="postsTilte">Post Title</h3>
                    <h5 class="postsOwner">Username</h5>
                </div>
            </a>

            <a href="" class="posts">
                <img src="{{asset('../Media/images/postPage Images/rightPostsImage.png')}}" alt="" class="rightPostsImage">
                <div class="postsDescriptionRightPart">
                    <h3 class="postsTilte">Post Title</h3>
                    <h5 class="postsOwner">Username</h5>
                </div>
            </a>

            <a href="" class="posts">
                <img src="{{asset('../Media/images/postPage Images/rightPostsImage.png')}}" alt="" class="rightPostsImage">
                <div class="postsDescriptionRightPart">
                    <h3 class="postsTilte">Post Title</h3>
                    <h5 class="postsOwner">Username</h5>
                </div>
            </a>

            <a href="" class="posts">
                <img src="{{asset('../Media/images/postPage Images/rightPostsImage.png')}}" alt="" class="rightPostsImage">
                <div class="postsDescriptionRightPart">
                    <h3 class="postsTilte">Post Title</h3>
                    <h5 class="postsOwner">Username</h5>
                </div>
            </a>

            <a href="" class="posts">
                <img src="{{asset('../Media/images/postPage Images/rightPostsImage.png')}}" alt="" class="rightPostsImage">
                <div class="postsDescriptionRightPart">
                    <h3 class="postsTilte">Post Title</h3>
                    <h5 class="postsOwner">Username</h5>
                </div>
            </a>

            <a href="" class="posts">
                <img src="{{asset('../Media/images/postPage Images/rightPostsImage.png')}}" alt="" class="rightPostsImage">
                <div class="postsDescriptionRightPart">
                    <h3 class="postsTilte">Post Title</h3>
                    <h5 class="postsOwner">Username</h5>
                </div>
            </a>

            <a href="" class="posts">
                <img src="{{asset('../Media/images/postPage Images/rightPostsImage.png')}}" alt="" class="rightPostsImage">
                <div class="postsDescriptionRightPart">
                    <h3 class="postsTilte">Post Title</h3>
                    <h5 class="postsOwner">Username</h5>
                </div>
            </a>
        </div>

    </div> <!-- maindiv -->

</body>

</html>