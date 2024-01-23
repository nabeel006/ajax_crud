<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Creation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    
<form id="my-form">
     <input type="text" placeholder="Enter Name" required>
     <br><br>
     <input type="email" placeholder="Enter Email" required>
     <br><br>
     <input type="file" required>
     <br><br>
     <input type="submit"value="Add Employee" id="btnSubmit" required>
     
</form>
<span id="output"></span>
<script>
    $(document).ready(function()
    {
        $("#my-form").submit(function(event){
            event.preventDefault();
            var fm=$("#my-form")[0];
            var data=new FormData(fm);

            $("#btnSubmit").prop("disabled",true)

        });
    });
</script>
</body>
</html>