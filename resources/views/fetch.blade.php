<!DOCTYPE html> -->
<html>
    <head>
        <title>Database fetch  </title>

    </head>
    <body>
        <form>
           Name
           <br>
           <br>
           Email
           <br>
           <br>
           Phone
           <br>
           <br>
           Gender
            <br>
            <br>
           @foreach($users as $user)
            {{$user->name}} {{$user->email}} 
           @endforeach
        </form>
    </body>
</html>