<?php

use Make4U\Core\File\Json;

defined('MAKE4U') || die;
include _THEMES . env('site.theme') . DS . 'partials/head.php';
?>
<?= $theme->js('quizdown.js') ?>



<body>
    <main>

        <div class="quizdown">
            <?= $page ?>
        </div>
        <br>
        <center> <a href="<?= base() ?>" role="button">volver al inicio</a></center>
    </main>

    <?= $theme->js('main.js') ?>
    <script>
        let config = {
            startOnLoad: true, // detect and convert all divs with class quizdown
            shuffleAnswers: true, // shuffle answers for each question
            shuffleQuestions: false, // shuffle questsions for each quiz
            nQuestions: undefined, // dsiplay n questions at random, if shuffleQuestions is true
            primaryColor: 'steelblue', // primary CSS color
            secondaryColor: '#dee2e2', // secondary CSS color
            textColor: 'black', // text color of some elements
            locale: "es" // language of the user interface (auto-detect per default)
        };

        quizdown.init(config);
    </script>
</body>

</html>