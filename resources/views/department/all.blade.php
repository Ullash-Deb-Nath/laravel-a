<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Departments</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
</head>
</head>
<body>
    <div class="container">
        <h2>All Departments</h2>
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Established</th>
                <th>Building</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($departments as $d)
                <tr>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->established_at }}</td>
                    <td>{{ $d->building }}</td>
                    <td>
                        <a href="{{ url('department/edit/'.$d->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ url('department/delete/'.$d->id) }}"  data-toggle="modal" data-target="#myModal{{$d->id}}" class="btn btn-danger">Delete</a>

                                    <!-- The Modal -->
                            <div class="modal" id="myModal{{$d->id}}">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Delete Confirmation</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    Are you sure? You want to delete <b>{{ $d->name }}</b>? 
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                    <a href="{{ url('department/delete/'.$d->id)}}"class="btn btn-danger">Yes</a>
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>