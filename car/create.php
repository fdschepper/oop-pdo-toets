<?php

?>
<head> <link rel="stylesheet" href="./style.css"> </head>
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="block">
            <h3>Create post</h3>
            <form action="./createscript.php" method="post">

                <div class="form-group">
                    <label for="Country">Country</label>
                    <input name="Country" type="Country" class="form-control" id="Country" aria-describedby="Country" required>
                    <small id="Country" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="Capital">Capital</label>
                    <input name="Capital" type="Capital" class="form-control" id="Capital" aria-describedby="Capital" required>
                    <small id="Capital" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="Continent">Continent</label>
                    <input name="Continent" type="Continent" class="form-control" id="Continent" aria-describedby="Continent">
                    <small id="Continent" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="Population">Population</label>
                    <input name="Population" type="number" class="form-control" id="Population" aria-describedby="Population">
                    <small id="Population" class="form-text text-muted"></small>
                </div>

                <button type="submit" class="btn btn-danger">Verstuur</button>

            </form>
            </div>
        </div>
    </div>
</div>