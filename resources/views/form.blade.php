<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Creation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    
<form id="my-form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <input type="text" name="name" id="name" placeholder="Enter Name">
     <br><br>
     <input type="email" name="email" id="email" placeholder="Enter Email">
     <br><br>
     <input type="file" name="file">
     <br><br>
     <input type="submit" value="Add Employee" id="btnSubmit">
</form>
<span id="output"></span>

<script>
    $(document).ready(function() {
        $("#my-form").submit(function(event) {
            event.preventDefault();
            var fm = $("#my-form")[0];
            var data = new FormData(fm);

            $("#btnSubmit").prop("disabled", true);
            $.ajax({
                type: "POST",
                url: "{{ route('addEmployee') }}",
                data: data,
                processData: false,
                contentType: false,
                success: function(data) {
                   $("#output").text(data.res);
                   //alert(data.res); 
                   $("#btnSubmit").prop("disabled", false);
                },
                error: function(e) {
                    $("#output").text(e.responseText);
                    $("#btnSubmit").prop("disabled", false);
                }
            });
        });
    });
</script>
</body>
</html>
