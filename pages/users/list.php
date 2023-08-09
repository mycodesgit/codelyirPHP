<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>

<?= element( 'header' ); ?>


<table id="example1" class="table table-hover text-sm">
    <thead>
        <tr>
            <th>No.</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $users = viewUser();
            foreach ($users as $cnt => $user) {
        ?>
            <tr>
                <td><?php echo $cnt ?></td>
                <td><?php echo $user->fname ?></td>
                <td><?php echo $user->mname ?></td>
                <td><?php echo $user->lname ?></td>
                <td><?php echo $user->username ?></td>
                <td><?php echo $user->usertype ?></td>
                <td>
                    <a href="./edit-user&token=<?php echo $user->token ?>" class="#" title="Edit">
                        <i class="fas fa-info-circle"></i>
                    </a>
                    <a id="<?php echo $data->id?>" onclick="deleteItem(this.id)" class="#" title="Delete">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php
            }
        ?>
    </tbody>
</table>

<?= element( 'footer' ); ?>

<script type="text/javascript">
    setTimeout(function () {
        $( "#alert" ).delay(2500).fadeOut(5000);
    }, );
</script>

<script>
    function deleteItem(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d60",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }). then((result)=> {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "GET",
                        url: "../app/actions/nameAction.php",
                        data: { id:id, btnDelete:true},
                        success: function (response) {
                            Swal.fire(
                                'Delete!',
                                'You file has been deleted.',
                                'success'
                            ).then(() => {
                                var row = $("#view-" + id);
                                row.fadeOut(1000, function() {
                                    row.remove();
                                });
                            });
                        }
                    });
                }
            }
        );
    }
</script>