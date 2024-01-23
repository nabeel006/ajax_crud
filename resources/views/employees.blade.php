<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<h1>Get Employees</h1>

<table border="1" id="emp_table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
    </tr>
</table>

<script>
    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "{{ route('getEmployees') }}",
            success: function (data) {
                console.log(data);

                if (data.employees.length > 0) {
                    for (let i = 0; i < data.employees.length; i++) {
                        let emp = data.employees[i];
                        let img = emp.image;

                        $("#emp_table").append(`<tr>
                            <td>${i + 1}</td>
                            <td>${emp.name}</td>
                            <td>${emp.email}</td>
                            <td>
                                <img src="/storage/${img}" alt="NotFound" height="100px" width="100px"/>
                            </td>
                        </tr>`);
                    }
                } else {
                    $("#emp_table").append("<tr><td colspan='4'>Data Not Found....!</td></tr>")
                }
            },
            error: function (e) {
                console.log(e.responseText);
            }
        });
    });
</script>