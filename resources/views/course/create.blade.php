<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
         <h2>Create New Course</h2>
         <form action="{{ url('course/store') }}" method="post">
            @csrf

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Short Name</label>
                        <input type="text" name="shortName" class="form-control">
                    </div>  
                </div>
            </div>
            

           <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Course Code</label>
                        <input type="text" name="course_code" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Credit</label>
                        <select name="credit" id="" class="form-control">
                            <option value="">Select Credit</option>
                            <option value="1">1</option>
                            <option value="1.5">1.5</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
           </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Course Type</label>
                        <select name="type" id="" class="form-control">
                            <option value="">Select Course Type</option>
                            <option value="Theory">Theory</option>
                            <option value="Lab">Lab</option>
                            <option value="Project">Project/Thesis</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Department</label>
                        <select name="department" id="" class="form-control">
                            <option value="">Select Department</option>
                            @foreach($departments as $d)

                            <option value="{{ $d->id }}">{{ $d->name }}</option>
                        
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
                <a class="btn btn-warning" href="{{ url('course/all') }}">View All Courses</a>
            </div>
         </form>
    </div>
</body>
</html>