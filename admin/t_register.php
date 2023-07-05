<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        body {
            background-color: lightskyblue;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 100px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            display: inline-block;
            margin-right: 4px;
        }

        textarea {
            resize: vertical;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        .submit-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
        }

        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Teacher Registration</h2>
        <form action="tregistration.php" method="POST">
            <div class="form-group">
                <label>Firstname:</label>
                <input type="text" name="firstname" required>
            </div>

            <div class="form-group">
                <label>Middlename:</label>
                <input type="text" name="middlename">
            </div>

            <div class="form-group">
                <label>Lastname:</label>
                <input type="text" name="lastname" required>
            </div>

            <div class="form-group">
                <label>teacher subject:</label>
                <select name="subject">
                    <option value="subject">subject</option>
                    <option value="math">math</option>
                    <option value="Science">Science</option>
                    <option value="Engli">English</option>
                    <option value="Nepali">Nepali</option>
                    <option value="Samajhik">Samajhik</option>
                    <option value="optional i">optional i</option>
                    <option value="optional i">optional ii</option>
                
                </select>
                
            <div class="form-group">
                <label>teacher level:</label>
                <select name="level">
                    <option value="level">level</option>
                    <option value="	Primary">Primary</option>
                    <option value="	Upper Primary">	Upper Primary</option>
                    <option value="	Secondary">	Secondary</option>

                </select>
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
            </div>

            <div class="form-group">
                <label>Phone:</label>
                <input type="text" name="country code" value="+977" size="2">
                <input type="text" name="phone" required>
            </div>

            <div class="form-group">
                <label>Address:</label>
                <textarea name="address" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>

            <div class="form-group">
                <label>Re-type password:</label>
                <input type="password" name="repassword" required>
            </div>

            <input type="submit" value="Submit" class="submit-button">
        </form>
    </div>
</body>
</html>
