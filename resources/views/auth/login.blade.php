@include('navbar')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href= "{{asset('css/logstyle.css')}}" />
        <title>GameSmith - Login</title>
    </head>
    <body>
        <div class="logcontainer">
            <div class="box form-box">
                <header>GameSmith Login</header>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="field input">
                        <label for="username"> Username </label>
                        <input
                            type="text"
                            name="username"
                            id="username"
                            required
                        />
                    </div>
                    <div class="field input">
                        <label for="password"> Password </label>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            required
                        />
                    </div>
                    <div class="field">
                        <input
                            type="submit"
                            class="logbtn"
                            name="submit"
                            value="Login"
                            required
                        />
                    </div>
                    <div class="link">
                        Don't have account?
                        <a href="register.html"> Register Now </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
