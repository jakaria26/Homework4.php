<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Answer the Quize</title>
    </head>
    <body>

        <header>
            <h1>Answer Quize</h1>
        </header>

        <main>

        <?php
/*Homework4 
author: Jakaria Ahmed Mahmud
school id: jmahmud@genesee.edu

submit-homework4.php is the submission page for the form in the homework4.php file. It send radio button homework4 and submit
answer.Submit button come reslt. These results get score.  */

 function calc_points(){
                    $question_answer = array();
                    $total = 1;

                    while ($total <= 9){
                        $answer = $_POST["question-$total"];
                        array_push($question_answer, $answer);
                        $total++;
                    };

                    return $question_answer;
                };





        ?>
        







      </main>
          <a href="Homework4"><button type="button" name="return" id="return">Return to Form</button></a>

    </body>
</html>
