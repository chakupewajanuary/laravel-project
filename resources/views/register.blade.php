<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Registration Form</title> -->
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(Images/A\ picture\ 5.jpeg);
            background-size: cover;
            background-position: center; /* prevent stretching */
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        main {
            width: 100%;
            max-width: 400px;
            padding: 1rem;
            background-color: rgba(243, 248, 248, 0.9); /* Add opacity */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        fieldset {
            border: none;
            padding: 1rem;
        }

        h3 {
            font-size: 1.5rem;
            color: blueviolet;
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.3rem;
            color: #333;
        }

        input, select {
            width: calc(100% - 0.2rem);
            padding: 0.5rem;
            margin-bottom: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: blue;
        }

        button {
            background-color: rgb(187, 41, 22);
            color: rgb(231, 235, 199);
            border: none;
            border-radius: 5px;
            padding: 0.8rem 1.2rem;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: darken(rgb(187, 41, 22), 10%);
        }
    </style>
</head>
<body>
    <main>
        <fieldset>
            <h3>Register Here</h3>
            <!-- not useee -->
            <form>
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" placeholder="Enter your First name" required>

                <label for="middleName">Middle Name</label>
                <input type="text" id="middleName" placeholder="Enter your Middle name" required>

                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" placeholder="Enter your Last name" required>

                <label for="email">Email</label>
                <input type="email" id="email" placeholder="e.g elivannyjr10@gmail.com" minlength="15" maxlength="25" required>

                <label for="phoneNumber">Phone Number</label>
                <input type="tel" id="phoneNumber" placeholder="eg.+255 743 422 822" minlength="10" maxlength="20" required>

                <label for="address">Address</label>
                <input type="text" id="address" placeholder="enter your address" required>

                <label for="gender">Gender:</label>
                <select id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <label for="confirmPassword">Re-enter Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-enter your password" required>

                <button type="submit">Submit</button>
            </form>
        </fieldset>
    </main>
</body>
</html>