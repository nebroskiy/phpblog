<!DOCTYPE html>
<html>
<head>
    <title>PHP Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1>The content of the document......</h1>
        <h5><?php echo 'Today is <b>' . date('l') . '</b>, '. date('d/m/Y') . ' and now its ' . '<b>' . date('H:i') . '</b>'; ?></h5>
    </header>
    <nav>
        <a role="link" aria-disabled="true">Home</a> |
        <a href="/blog.php">Blog</a> |
        <a href="/css/">Log in</a> |
        <a href="/js/">Account</a> |
        <a href="/python/">About</a> |
        <a href="/code.php">Test File</a>
    </nav>
</body>

</html> 