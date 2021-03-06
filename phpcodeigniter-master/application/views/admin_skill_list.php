<!DOCTYPE html>
<html>

<head>
    <title>Skill list</title>
    <!--
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>js/jquery-3.2.1.min.css "></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <?php $this->load->view('navbar'); ?>
    <?php $this->load->view('usermodal'); ?>
    <?php $this->load->view('categorymodal'); ?>
    <div class="container">
        <table class="table table-dark">

            <h2>
                Admin:
                <?= $staffs[0]->name ?>
            </h2>

            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Skill description</th>
                    <th scope="col">Skill category</th>
                    <th scope="col">Skill rating</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0; foreach($staffs as $staff): ?>
                <tr>
                    <th scope="row">
                        <?= $count = $count + 1 ?>
                    </th>
                    <td>
                        <?= $staff->category ?>
                    </td>
                    <td>
                        <?= $staff->description ?>
                    </td>
                    <td>
                        <?= $staff->rating ?>
                    </td>
                    <td>
                        <form method="post" action="<?php echo base_url(); ?>index.php/admincontroller/update/<?= $staff->rateId ?>">
                            <select class="selectpicker show-tick" data-style="btn-info" name="rate">
                            <option <?php if ($staff->rating == 0 ) echo 'selected' ; ?> value="0">0</option>
                            <option <?php if ($staff->rating == 1 ) echo 'selected' ; ?> value="1">1</option>
                            <option <?php if ($staff->rating == 2 ) echo 'selected' ; ?> value="2">2</option>
                            <option <?php if ($staff->rating == 3 ) echo 'selected' ; ?> value="3">3</option>
                        </select>
                            <button class="btn" type="submit">Go</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
<script type="text/javascript">
    document.getElementById("staff_list").onclick = function() {
        location.href = "/codeigniter/index.php/admincontroller/stafflist";
    };
    document.getElementById("skill_list").onclick = function() {
        location.href = "/codeigniter/index.php/admincontroller/skill_list";
    };
</script>

</html>
