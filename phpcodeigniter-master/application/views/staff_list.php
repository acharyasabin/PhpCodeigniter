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
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Staff Name</th>
                    <th scope="col">Password</th>
                    <th scope="col">Admin</th>
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
                        <?= $staff->name ?>
                    </td>
                    <td>
                        <?= $staff->password ?>
                    </td>
                    <td>
                        <?php if ($staff->admin == 1) echo 'Yes'; if ($staff->admin == 0) echo 'No'; ?>
                    </td>
                    <td>
                        <a href="<?php echo base_url(); ?>index.php/admincontroller/staffdetail/<?= $staff->staffId ?>">View</a>
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
