<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ajax-sample</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center my-4">
            <button id="ajax-sample" class="btn btn-primary">Send</button>
        </div>
        <div class="row d-flex justify-content-center my-4 border rounded lead">
            <div id="ajax-result">result here</div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            var btn = $("#ajax-sample");
            var resultTag = $("#ajax-result");
            btn.click(function() {
                $.ajax({
                    url: 'ajax-handler.php',
                    method: 'POST',
                    data: {
                        msg : "hi server"
                    },
                    success: function(response) {
                        resultTag.html(response);
                    },
                    error: function(response) {
                        resultTag.html(response);
                    }
                });
            });
        })
    </script>
</body>

</html>