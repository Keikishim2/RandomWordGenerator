<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Random Word Generator</title>
</head>
<style>
    body{
        background-image: url('assets/images/images.jpg');
        background-size: cover;
        text-align: center;
        color: yellow;
        font-size: x-large;
    }
    .wrapper{
        width: 500px;
        height: 500px;
        margin: auto;
        background: url('assets/images/images.jpg'), red;
        background-size: cover;
        background-blend-mode: darken;
        border-radius: 50%;
    }
    h4, h1{
        vertical-align: bottom;
        padding-top: 160px;
    }
    input{
        background-color: yellow;
    }
    img{
        width: 200px;
        height: 200px;
        position: absolute;
    }
</style>
<body>
<img src='assets/images/1.png' alt='cute'>
    <div class='wrapper'>
    <form action='/wordgen/random' method='post'>
    <h1>Random Word (Attempt # <?php echo $count; ?>)</h1>
    <h2><?php echo $string; ?></h2>
    <input type='submit' value='Generate'>
    </form>
    </div>

</body>
</html>