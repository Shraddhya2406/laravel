<!DOCTYPE html>
<html>
    <head>
        <title>Insert to Database </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form method="POST" action="/submit">
        @csrf
           Name<input type="text" name = "name" >
           <br>
           <br>
           Email<input type="email" name="email">
           <br>
           <br>
           Password<input type="password" name="password">
           <br>
           <br>
           Phone<input type="text" name="phone">
           <br>
           <br>
           Gender <select name="gender" id="">
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <br>
                <br>
           <input type="submit">
        </form>
    </body>
</html>