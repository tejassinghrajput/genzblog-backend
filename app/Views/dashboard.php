<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #f2f2f2, #6dd5ed, #2193b0); /* Gradient background */
            color: #333;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
        }

        .navbar {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 20px 0;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .navbar ul {
            display: flex;
            justify-content: center;
            list-style: none;
        }

        .navbar li {
            margin: 0 20px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 1.1em;
            font-weight: 600;
            text-transform: uppercase;
            padding: 10px;
            transition: all 0.3s ease;
        }

        .navbar a:hover {
            color: #16a085;
            border-bottom: 2px solid #16a085;
        }

        .landing-page {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            width: 100%;
            max-width: 900px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            z-index: 100;
            position: relative;
            margin-top: 100px;
            animation: fadeInUp 1s ease-in-out;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .landing-page h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 600;
            color: #333;
        }

        .landing-page p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: #777;
        }

        .cta-btn {
            background-color: #16a085;
            color: white;
            padding: 15px 40px;
            font-size: 1.2em;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .cta-btn:hover {
            background-color: #1abc9c;
            transform: translateY(-5px);
        }

        .features {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }

        .feature {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-10px);
        }

        .feature h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 15px;
        }

        .feature p {
            font-size: 1rem;
            color: #777;
        }

        .sample-blogs {
            margin-top: 50px;
            width: 100%;
        }

        .blog-post {
            background-color: white;
            padding: 20px;
            margin: 15px 0;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .blog-post:hover {
            transform: translateY(-5px);
        }

        .blog-post h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .blog-post p {
            font-size: 1.1rem;
            color: #777;
        }

        footer {
            margin-top: 60px;
            text-align: center;
            font-size: 1rem;
            color: #777;
        }

        footer a {
            color: #16a085;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        @media screen and (max-width: 768px) {
            .features {
                flex-direction: column;
                align-items: center;
            }

            .feature {
                width: 80%;
                margin-bottom: 30px;
            }

            .landing-page {
                padding: 20px;
                margin-top: 80px;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Blog Posts</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </div>

    <div class="landing-page">
        <h1>Welcome to Your Blog</h1>
        <p>Your one-stop solution to creating and sharing amazing blog posts with the world. Easy to use, powerful features, and a seamless experience.</p>

        <button class="cta-btn" onclick="window.location.href='login.html'">Get Started</button>

        <div class="features">
            <div class="feature">
                <h3>Create Blog Posts</h3>
                <p>Write and share your thoughts with the world in a simple and intuitive interface.</p>
            </div>
            <div class="feature">
                <h3>Manage Your Content</h3>
                <p>Effortlessly organize, edit, and update your blog posts anytime.</p>
            </div>
            <div class="feature">
                <h3>Engage with Readers</h3>
                <p>Get feedback and build a community with comment sections on your posts.</p>
            </div>
        </div>

        <div class="sample-blogs">
            <h2>Latest Blog Posts</h2>
            <div class="blog-post">
                <h3>How to Start Your First Blog</h3>
                <p>Starting a blog is easier than you think! In this post, we’ll walk you through the first steps to creating your own blog and getting it live in no time.</p>
            </div>
            <div class="blog-post">
                <h3>10 Tips for Writing Engaging Content</h3>
                <p>Creating engaging content is the key to growing your blog audience. Here are 10 actionable tips that can help you improve your writing.</p>
            </div>
            <div class="blog-post">
                <h3>SEO Basics for Bloggers</h3>
                <p>SEO can seem complicated, but with the right approach, it can help your blog rank higher in search engines. In this post, we’ll cover some basic SEO tips for bloggers.</p>
            </div>
        </div>

        <footer>
            <p>Ready to start your blogging journey? <a href="login.html">Sign In</a> or <a href="signup.html">Sign Up</a> to get started.</p>
        </footer>
    </div>

</body>

</html>
