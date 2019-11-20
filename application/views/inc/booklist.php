<div class="content">
    <div class="main-content">
        <h2>Student List</h2>
        <hr />
        <table class="table">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>Book Name</th>
                    <th style="width: 3.5em;"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sl = 1;
                foreach ($results as $key => $row) {
                    ?>
                    <tr>
                        <td> <?php echo $sl; ?></td>
                        <td> <?php echo $row->b_name; ?></td>

                        <td>
                            <a href="#editmodal" role="button" data-toggle="modal"><i class="fa fa-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                <?php
                    $sl++;
                }
                ?>

            </tbody>
        </table>
    </div>
</div>