<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="container">
        <h1>PHP Quizzer</h1>
    </header>

    <main>
        <div class="container">
            <div class="current">Question 1 of 5</div>
            <p class="question">
                What does PHP stand for?
            </p>

            <form method="POST" action="process.php">
                <ul class="choieces">
                    <li><input type="radio" name="choice" value="1">PHP: Hypertext Preprocessor</li>
                    <li><input type="radio" name="choice" value="1">Private Home Page</li>
                    <li><input type="radio" name="choice" value="1">Personal Home Page</li>
                    <li><input type="radio" name="choice" value="1">Personal Hypertext Preprocessor</li>
                </ul>
                <input type="submit" value="Submit">


            </form>         
            

        </div>
    </main>


    <footer>
        <div class="contianer">
            <p>Copyright @2024 FRONTROW</p>
        </div>
    </footer>
</body>
</html>