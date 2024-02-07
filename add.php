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
            <h2>Add A Question</h2>       
            <form method="POST" action="add.php">
                <p>
                    <label for="">Question Number: </label>
                    <input type="number" name="question_number">
                </p>

                <p>
                    <label for="">Question Text: </label>
                    <input type="number" name="question_number">
                </p>

                <p>
                    <label for="">Choice #1: </label>
                    <input type="text" name="choice1">
                </p>
                <p>
                    <label for="">Choice #2: </label>
                    <input type="text" name="choice2">
                </p>

                <p>
                    <label for="">Choice #3: </label>
                    <input type="text" name="choice3">
                </p>

                <p>
                    <label for="">Choice #4: </label>
                    <input type="text" name="choice4">
                </p>

                <p>
                    <label for="">Correct Choice Number </label>
                    <input type="number" name="correct_choice">
                </p>
                <p>
                    <input type="submit" name="submit" value="submit" />
                </p>




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