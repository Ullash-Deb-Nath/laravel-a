<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
         <h2>Edit Course</h2>
         <form action="{{ url('course/update/'.$course->id) }}" method="post">
            @csrf


            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" value="{{ $course->name }}" name="name" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Short Name</label>
                        <input type="text" value="{{ $course->short_name }}" name="shortName" class="form-control">
                    </div>  
                </div>
            </div>
            

           <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Course Code</label>
                        <input type="text" value="{{ $course->course_code }}" name="course_code" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Credit</label>
                        <select name="credit" id="" class="form-control">
                            <option value="">Select Credit</option>
                            <option value="1" {{ $course->credit ==1 ? 'selected' : '' }}>1</option>
                            <option value="1.5"{{ $course->credit ==1.5 ? 'selected' : '' }}>1.5</option>
                            <option value="2" {{ $course->credit ==2 ? 'selected' : '' }}>2</option>
                            <option value="3" {{ $course->credit ==3 ? 'selected' : '' }}>3</option>
                            <option value="4" {{ $course->credit ==4 ? 'selected' : '' }}>4</option>
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
                            <option value="Theory" {{ $course->type == "Theory" ? 'selected' : '' }}>Theory</option>
                            <option value="Lab" {{ $course->type == "Lab" ? 'selected' : '' }}>Lab</option>
                            <option value="Project" {{ $course->type == "Project" ? 'selected' : '' }}>Project/Thesis</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Department</label>
                        <select name="department" id="" class="form-control">
                            <option value="">Select Department</option>
                            @foreach($departments as $d)

                            <option {{ ($d->id == $course->department_id) ? 'selected' : '' }} value="{{ $d->id }}">{{ $d->name }}</option>
                        
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                <a class="btn btn-warning" href="{{ url('course/all') }}">View All Courses</a>
            </div>
         </form>
    </div>
</body>
</html>