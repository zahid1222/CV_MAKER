<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online-cv-maker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron">
        <h1 class="display-6">Leadership Activities</h1>
    </div>

<form action="../update-leadership/{{$leadership->id}}" method='get'>
    @csrf
    <table border='1' width='30%' align='center'>
        <tr id='r1'>
             <td>   <b> Activity 1:   </b>    </td>
             <td>   <input type='text' name='activity1' class="form-control" value={{$leadership->activity1}} /> </td>
        </tr>
        <tr id='r1'>
             <td>   <b> Activity 2:   </b>    </td>
             <td>   <input type='text' name='activity2' class="form-control" value={{$leadership->activity2}} /> </td>
        </tr>
        <tr id='r1' align='center' he>
             <td colspan='2'>   <input type='submit' value='Update' />
             </td>
        </tr>
</table>
</form>

</body>
</html>
