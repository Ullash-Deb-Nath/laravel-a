<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee (Teacher)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h3>Create Employee (Teacher)</h3>
        <form id="emp_form">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Select Division</label>
                    <select name="division" id="division" class="form-control">
                        <option value="">Select Division</option>
                           
                        @foreach($divisions as $d)
                        <option value="{{ $d->id }}">{{ $d->name }}</option>
                        @endforeach

                    </select>
            </div>
            <div class="form-group">
            <label for="">Select District</label>
                <select name="district" id="district" class="form-control">
                    <option value="">Select District</option>
                    
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#division").change(function(){
                var divisionId = $(this).val();
                $("#district").empty();
                var str = '<option value="">Select District</option>';
                $.ajax({
                    url: 'http://127.0.0.1:8000/api/districts/'+divisionId,
                    dataType: "json",
                    type: 'GET',
                    success: function(res){
                        var districts = res.districts;
                        var len = districts.length;
                        for(var i=0; i<len; i++){
                            str += '<option value="'+districts[i].id+'">'+districts[i].name+'</option>'; 
                        }
                        $("#district").html(str);
                    }
                });
            });

            $("#emp_form").submit(function(e){
                e.preventDefault();
                var name = $("#name").val();
                var division = $("#division").val();
                var district = $("#district").val();
                $.ajax({
                    url: 'http://127.0.0.1:8000/api/emp-store',
                    dataType: 'json',
                    type: 'post',
                    data: {
                        emp_name: name,
                        emp_division: division,
                        emp_district: district
                    },
                    success: function(res){
                        console.log(res);
                        $('#emp_form')[0].reset();
                    }
                });
            });
        })
    </script>
</body>
</html>