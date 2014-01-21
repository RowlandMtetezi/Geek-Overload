<div class="container">
    <div class="row-fluid">

        <div class="span3">

        </div>

        <div class="span6">
            <?php foreach ($posts as $data): ?>

                <div class="row">
                    <div class="span12 well" style="min-height: 100px;">
                        <div class="span2">
                            <?php
                            echo($data['profileimage']);
                            ?>
                        </div>
                        <div class="span10">

                            <?php echo($data['text']) ?>

                        </div>
                    </div>

                </div>

            <?php endforeach; ?>


        </div>
        <div class="span3">


        </div>
    </div>
</div>


</body>

</html>