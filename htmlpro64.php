<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Bootstrap Form</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
</head> 
<body>
    <h1 class="text-success text-center">GeeksforGeeks</h1>
    <h2 class="text-center">Form Validation</h2>
    <div class="container">
        <form action="#" class="was-validated">
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname"
                    placeholder="Enter First Name" name="fname" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">
                    Please fill this field
                </div>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname"
                    placeholder="Enter Last Name" name="lname" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">
                    Please fill this field
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email Id:</label>
                <input type="email" class="form-control" id="email"
                    placeholder="Enter Email Id" name="email" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">
                    Please fill this field
                </div>
            </div>
            <div class="form-group">
                <label for="contact">Contact No:</label>
                <input type="text" class="form-control" id="contact"
                    placeholder="Enter Contact Number" name="contact"
                    required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">
                    Please fill this field
                </div>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"
                        name="remember" required> I agree
                    <div class="valid-feedback">Valid</div>
                    <div class="invalid-feedback">
                        Please check the checkbox
                    </div>
                </label>
            </div>
            <button type="submit" class="btn bg-success">
Submit
</button>
</form>
</div>
</body> 
</html>
 