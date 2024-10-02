<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Email Submit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <?php
    if(!empty($_POST["send"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $textarea = $_POST["textarea"];
        
        // Hardcode the email to send the form data to
        $toEmail = "ebube5298@gmail.com"; 

        $mailHeaders = "From: " . $email . "\r\n";
        $mailHeaders .= "Name: " . $name . "\r\n";
        $mailHeaders .= "Phone Number: " . $number . "\r\n";
        $mailHeaders .= "Message: " . $textarea . "\r\n";

        // Use the mail function
        if(mail($toEmail, "New Contact Form Submission from " . $name, $mailHeaders)){
            $message = "Your information has been received successfully.";
        } else {
            $message = "Failed to send the email. Please try again later.";
        }
    }
    ?>

    <div class="container mt-5">
        <form action="" method="post" name="emailContact">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="John Doe"
                    required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                <input type="text" name="number" class="form-control" id="exampleFormControlInput1"
                    placeholder="+234.........." required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" rows="3"
                    required></textarea>
            </div>
            <input type="submit" class="btn btn-primary" name="send" value="Submit">
        </form>

        <?php if(!empty($message)){ ?>
        <div class="mt-3 alert alert-info">
            <strong><?php echo $message; ?></strong>
        </div>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>