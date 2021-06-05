<!DOCTYPE html>
<head>
    <title>RegistrationForm</title>
</head>
<body >
    <h1 align='left'>Registration Form</h1>
<form>
    <table>
        <tr>
            <td>
                Full Name :
            </td>
            <td>
                <input type="text" name="">
            </td>
        </tr>
        <tr>
            <td>
                Email :
            </td>
            <td>
                <input type="email" name="">
            </td>
        </tr>
        <tr>
            <td>
                Password :
            </td>
            <td>
                <input type="password" name="">
            </td>
        </tr>
        <tr>
            <td>
                Comment :
            </td>
            <td>
            <textarea name="Comment" id="Comment" cols="30" rows="10"></textarea>


            </td>
        </tr>
        <tr>
            <td>
                Gender :
            </td>
            <td>
                <input type="radio" name="Gender">Male
                <input type="radio" name="Gender">Female
                <input type="radio" name="Gender">Other
        </tr>
        <tr>
            <td>
                Please choose a hobby:
            </td>
            <td>
                <input type="checkbox" name="hobby">Singing
                <input type="checkbox" name="hobby">Dancing
                <input type="checkbox" name="hobby">Reading
            </td>   
        </tr>
        <tr>
            <td>
                Please choose a file:
            </td>
            <td>
                <input type="file" name="choose file">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="Submit">
                <input type="reset" name="Reset">
            </td>
        </tr>

    </table>
</form>
</body>
</html>
