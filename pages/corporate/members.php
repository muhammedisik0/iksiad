<div id="members">
    <h2 class="text-center mb-4">Üyelerimiz</h2>

    <div class="row">
        <?php
        // Loop to generate 18 members
        for ($i = 1; $i <= 18; $i++) {
            ?>
            <div class="col-sm-3 text-center img-container">
                <img src="img/person.png" class="img-fluid">
                <p>Bilinmeyen Kişi
                    <?php echo $i; ?>
                </p>
            </div>
            <?php
        }
        ?>
    </div>
</div>