<form class="my-3" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <table class="table">
        <tr>
            <th class="w-25">Assignment name</th>
            <th>Grade (out of 100)</th>
            <th>Weight</th>
        </tr>

        <!-- Generate table rows -->
        <?php for ($i = 1; $i <= $asgn_count; $i++): ?>
            <tr>
                <td>
                    <input class="form-control" type="text" name="name<?php echo $i ?>" id="name<?php echo $i ?>"
                        value="<?php echo $name = isset($_POST["name" . $i]) ? $_POST["name" . $i] : "" ?>"
                        placeholder="Assignment <?php echo $i ?> Name">
                </td>

                <td class="w-25">
                    <input class="form-control" type="number" name="grade<?php echo $i ?>" id="grade<?php echo $i ?>"
                        step="any" min="0" max="100"
                        value="<?php echo $grade = isset($_POST["grade" . $i]) ? $_POST["grade" . $i] : "" ?>" required>
                </td>

                <td class="w-25">
                    <input class="form-control" type="number" name="weight<?php echo $i ?>" id="weight<?php echo $i ?>"
                        step="any" min="1" max="99"
                        value="<?php echo $weight = isset($_POST["weight" . $i]) ? $_POST["weight" . $i] : "" ?>" required>
                </td>
            </tr>
        <?php endfor; ?>
    </table>
    <div class="d-flex align-items-center justify-content-end">
        <label class="form-label mb-0" for="desired-grade">Desired grade:</label>
        <input class="form-control w-25" type="number" name="desired-grade" id="desired-grade" min="1" max="100"
            value="<?php echo $desired_grade = isset($_POST["desired-grade"]) ? $_POST["desired-grade"] : "" ?>"
            required>

        <input class="btn btn-primary" type="submit" name="calculate" id="calculate" value="Calculate Grade">
    </div>
</form>