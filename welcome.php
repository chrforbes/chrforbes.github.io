<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>

    </title>
    
    <script>
    </script>
</head>
<body>
    <div id="header">
        <img class="logo" src="images/logo.png" alt="Logo" height="90" width="110">
        <h1>Quizzy Readz </h1>
    </div>

    <br>

    <nav>
        <a href="index.html">Home</a>
        <a href="pages/quizzes.html">Quizzes</a>
        <a href="pages/bookinf.html">Book Info</a>
        <a href="pages/author.html">Authors</a>
        <a href="pages/resources.html">Resources</a>
    </nav>

    <div id="mainBody">
        <div id="left">
            <h2>New</h2>
            <img src="images/newcathat.png" alt="The Cat in the Hat" height="300" width="200">
            <p>
                <div style="font-size: 20px;">
                    Calling all Dr. Seuss fans! We're thrilled to announce that The Cat in the Hat 
                    quiz has landed on our website! This beloved classic just got a little more 
                    interactive—so now you can dive back into the world of Dr. Seuss and test your 
                    knowledge on all things, from 1 to 2! Whether you're a long-time Seuss enthusiast 
                    or simply love a good challenge, this quiz is packed with fun, quirky questions 
                    about everyone's favorite troublemaking cat. Think you remember how they cleaned 
                    up the mess? Or how the fish reacted? Let’s see how well you truly know The Cat 
                    in the Hat! Grab a friend, and see who can ace the quiz!
                </div>
        </div>

        <div id="middle">
            <?php 
            //check if form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //retrieve and sanitize
                $first = htmlspecialchars($_POST['first']);
                $last = htmlspecialchars($_POST['last']);
                $age = htmlspecialchars($_POST['age']);
                $email = htmlspecialchars($_POST['email']);

                //server side validation
                if (empty($first) || empty($last) || empty($age) || empty($email)) {
                    echo "<h2>All fields required. Please fill out each section.</h2>"
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<h2> Invalid email format.</h2>"
                } else {
                    //display submitted info
                    echo "<h2>Welcome $first $last!</h2>";
                    echo "<p>Age: $age</p>";
                    echo "<p>Email: $email</p>";
                } else {
                    echo "<h2>Nothing submitted.</h2>"
                }
            }
        </div>

        <div id="right"> 
            <h2>Popular</h2>
            <img src="images/harrypooterpop.png" alt="Harry Potter" height="300" width="300">
            <p>
                <div style="font-size: 20px;">
                    Calling all wizards, witches, and Muggles alike! If you haven’t tried our 
                    Harry Potter and the Sorcerer's Stone quiz yet, you’re missing out on the 
                    magic! As our most popular quiz, it’s the perfect way to relive Harry’s 
                    journey from the cupboard under the stairs to his first year at Hogwarts. 
                    Do you remember the spells, the secrets, and the surprises? Challenge 
                    yourself and see how much you truly know about Harry’s first adventure. 
                    Whether you’re a die-hard fan or just brushing up on your wizarding 
                    knowledge, this quiz is for you! Happy quizzing, and may the magic be with you!
                </div>
        </div>
    </div>
</body>
</html>