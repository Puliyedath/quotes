<!DOCTYPE html>
<html>
<head>
    <title>My First Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $.get('/index.php/quotes/index_html', function(res){
            $('#quotes').html(res);
        });

        //post a quote to the database
        $('form').submit(function(){
            $.post('index.php/Quotes/create',$(this).serialize(),function(res){
                console.log(res);
                $('#quotes').html(res);
            });
            return false;
        });

    }); 
    </script>
</head>
<body>

<h1>Quotes</h1>
<form action="index.php/Quotes/create" method="post">
    <input type="text" name="author" value="" placeholder="author">
    <input type="text" name="quote" value="" placeholder="quote">
    <input type="submit" name="Add a Quote" value="Add a Quote">
</form>
<div id="quotes">
</div>

</body>
</html>
