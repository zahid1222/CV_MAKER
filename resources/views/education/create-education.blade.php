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
        <h1 class="display-6">Education</h1>
        
    </div>

<form action="store-education" method='get'>
    @csrf
    <table border='1' width='30%' align='center'>
        <tr id='r1'>
             <td>   <b> Degree:   </b>    </td>
             <td>   <input type='text' name='degree' class="form-control"/>  </td>
        </tr>

        <tr id='r2'>
             <td>   <b>Major:   </b>    </td>
             <td>   <input type='text' name='major' class="form-control"/>    </td>
        </tr>

        <tr id='r1'>
             <td>   <b> University:  </b>      </td>
             <td>   <input type='text' name='university' class="form-control"/>    </td>
        </tr>
        <tr id='r1'>
             <td>   <b> Date:   </b>    </td>
             <td>   <input type='date' name='date' class="form-control"/>  </td>
        </tr>
        <tr id='r1' align='center' he>
             <td colspan='2'>   <input type='submit' value='Save' />
             </td>
        </tr>
</table>
</form>
</body>
</html>