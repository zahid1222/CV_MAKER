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
        <h1 class="display-6">Personal Information</h1>
    </div>

<form action="../update-personalinfo/{{$personalinfo->id}}" method='get'>
    @csrf
    <table border='1' width='30%' align='center'>
        <tr id='r1'>
             <td>   <b> Full Name:   </b>    </td>
             <td>   <input type='text' name='fullname' class="form-control" value={{$personalinfo->fullname}} /> </td>
        </tr>

        <tr id='r1'>
             <td>   <b> Email:   </b>    </td>
             <td>   <input type='text' name='email' class="form-control" value={{$personalinfo->email}} /> </td>
        </tr>

        <tr id='r1'>
             <td>   <b> Phone Number:   </b>    </td>
             <td>   <input type='text' name='phone' class="form-control" value={{$personalinfo->phone}} /> </td>
        </tr>
        <tr id='r1'>
             <td>   <b> Address:   </b>    </td>
             <td>   <input type='text' name='address' class="form-control" value={{$personalinfo->address}} /> </td>
        </tr>
        <tr id='r1'>
             <td>   <b> LinkedIn:   </b>    </td>
             <td>   <input type='text' name='linkedin' class="form-control" value={{$personalinfo->linkedin}} /> </td>
        </tr>
        <tr id='r1' align='center' he>
             <td colspan='2'>   <input type='submit' value='Update' />
             </td>
        </tr>
</table>
</form>

</body>
</html>
