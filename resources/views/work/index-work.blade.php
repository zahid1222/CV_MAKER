<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online-cv-maker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <style>
        a {
        text-decoration: none !important;
        }
        a:visited {
        color: rgb(255, 255, 255);
        }
    </style>

</head>
<body>
    <div class="jumbotron">
        <h1 class="display-6">Work index</h1>
        
    </div>

    <div class="container">
    <table border="1" class="table datatable-pagination">
        <tr>
            <th> Sr # </th>
            <th> Job Title</Title> </th>
            <th> Company</th>
            <th> Job Description</th>
            <th> Action  </th>
            
        </tr>
        @forelse ($work as $key=>$data)
        <tr>
            <td> {{$key+1}} </td>
            <td> {{$data->title}} </td>
            <td> {{$data->company}} </td>
            <td> {{$data->description}} </td>
            <td class="text-white">
                <div class="btn btn-secondary">
                    <a href="edit-work/{{$data->id}}">
                        <i class="fas fa-edit"></i>
                    </a>
                </div>
                <div class="btn btn-danger">
                    <a href="destroy-work/{{$data->id}}">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>

            </td>
        </tr>
        @empty
            no data found
        @endforelse
    </table>
    </div>

</body>
</html>
