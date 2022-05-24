<?php
include "header.php"
?>

<section class="body">
    <div>
        <div>
            <form class="form" action="submit.php">
                <input class="input-field" type="text" name="name" placeholder="Name" required><br>
                <input class="input-field" type="text" name="text" placeholder="Text" required><br>
                <input class="input-field" type="text" name="content" placeholder="Anything" required><br>
                <input class="input-submit" type="submit" value="submit">
            </form>
        </div>
    </div>
</section>

<?php
include "footer.php"
?>