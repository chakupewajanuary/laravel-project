<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Modern Furniture online Mnagement and Ordering Systems </title> -->
</head>
<style>
    .navbar ul {
        background-color: hsl(0, 0%, 15%);
        list-style-type: none;
        padding: 0px;
        margin: 5px;
        overflow: hidden;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        padding: 15px;
        display: block;
        text-align: center;
    }

    .navbar li {
        float: left;
    }

    .navbar a:hover {
        background-color: rgb(125, 141, 161);
    }

    .nav-2 {
        float: right;
    }

    .cont {
        display: flex;
        margin-top: 20px;
    }

    .cont-1 {
        width: 25%;
        padding-left: 20px;
    }

    .footer {
        margin-top: 200px;
        text-align: center;
    }
    p{
        font-size: 1.5em;
    }
    label{
        display:block;
        font-size:1.5em;
    }
</style>
</style>

<body>

    <div style="height: 200px; background-image: url('/build/assets/Images/A picture 6.jpeg'); padding-top: 20px; color: white;" >
        <h1 style="text-align: center;">Modern Furniture Online Management And Ordering System</h1>
    </div>
    <div>
        <div>
            <nav class="navbar">
                <div>
                    <ul>
                        <div class="nav-1">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('product')}}">Products</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                        </div>

                        <div class="nav-2">
                            <li><a href="{{route('customer')}}"><button class="button signup-btn">Register</button></a></li>
                            <li><a href="{{route('login')}}"><button class="button login-btn">Login</button></a></li>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
        <main>

            <h1 style="text-align: center;">contact</h1>
            <div class="cont">

                <div class="cont-1">
                    <h2>Location:</h2>
                    <p> P.O.BOX 1, Mzumbe-Changalawe.</p>
                    <p style="padding-left: 30px;">Morogoro</p>


                </div>
                <div class="cont-1">
                    <h2>For more info:</h2>
                    <p>Tel Call : +2557 4298 6210 </p>
                    <p>whatssap : +2557 4298 6210 </p>

                </div>
                <div class="cont-1">
                    <h2>Email:</h2>
                    <p>onlinefurnitures20@.co.tz</p>

                </div>
                <div class="cont-1" style="background-color: grey; border:2px black solid;border-radius:10px;">
                    <h2>Welcome for any inquiring</h2>
                    <form action="">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="message">Message or Feedback</label>
                    <textarea name="message" id="message">Message or Feedback</textarea>
                    <input type="submit" name="submit" value="submit">
                    </form>  
                </div>



            </div>
            <div class="footer">
                <footer>
                    <p>&copy; 2025 Modern Furniture System. All rights reserved.</p>
                </footer>
            </div>
        </main>

</body>

</htm