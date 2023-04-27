<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH USERS</title>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form action="">
            Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id="output" style="font-weight: bold;"></span></p>
    </div>
    <script>
        function showSuggestion(str) {
           if (str.length == 0) {
                document.getElementById('output').innerHTML = '';
           } else {
                // THE AJAX REQUEST
                let xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "suggest.php?q="+str, true);
                xmlhttp.send();
           }
        }
    </script>
</body>
</html>