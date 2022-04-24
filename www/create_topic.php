<!DOCTYPE html>
<html>
<head>
    <title>PHP Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<header>
    <h1>Here will be blog</h1>
</header>
<nav>
    <a href="/">Home</a> |
    <a role="link" aria-disabled="true">Blog</a> |
    <a href="/css/">Log in</a> |
    <a href="/js/">Account</a> |
    <a href="/python/">About</a> |
    <a href="/code.php">Test File</a>
</nav>
<nav>
    <a href="/blog.php">All topics</a> |
    <a role="link" aria-disabled="true">Create topic</a> |
    <a href="/my_topics.php">My topics</a>
</nav>
</body>
<div class="container mt-4">
    <form action="/topic_data.php" method="post">
        <input type="text" name="title" placeholder="Title..." class="form-control"><br>
        <input type="text" name="description" placeholder="Description..." class="form-control"><br>
        <textarea name="topic" placeholder="Your topic..." class="form-control"></textarea><br>
        <input type="submit" value="Submit" class="btn btn-success"><br>
    </form>
</div>
</html>