<?php
defined('MAKE4U') || die;
include _THEMES . env('site.theme') . DS . 'partials/head.php';
?>

<body>
    <main>

        <div class="box">

        </div>

    </main>

    <?= $theme->js('main.js') ?>
    <script>
        let data = <?= json_encode($page) ?>;

        let cont = 0;


        let myQuestions = null;
        /*
                for (let i = 0; i < array.length; i++) {
                    const element = array[i];
                }*/

        data.forEach(element => {
            myQuestions += [{
                question: element['type'],
                answers: element['checklist'],
                correctAnswer: "c"
            }];
        });

        //console.log(data);
        console.log(myQuestions);
    </script>
</body>

</html>