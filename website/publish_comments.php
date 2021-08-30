<?php

use Google\Cloud\Core\Testing\Snippet\Container;

session_start();
include('includes/header.php');
?>




<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Publish</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php
                        include('config.php');
                        $ref_table = "comments";
                        $id = $_GET['id'];

                        $editdata = $database->getReference($ref_table)->getChild($id)->getValue();
                    ?>

                    <form name="my_form" action="publish_code.php" method="POST">
                        <input type="hidden" name="id" value="<?=$id;?>">
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="<?=$editdata['name'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Course</label>
                            <input type="text" name="course" value="<?=$editdata['course'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Comment</label>
                            <input type="text" name="comment" value="<?=$editdata['comment'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="publish_data" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>

                    <!-- <script type="text/javascript">
                        windows.onload= function () 
                        {
                            var auto = setTimeout(function(){ autoRefresh(); }, 1);

                            function submitform() {
                                document.forms["my_form"].submit();
                            }

                            function autoRefresh(){
                                clearTimeout(auto);
                                auto = setTimeout(function(){ submitform(); autoRefresh(); }, 1);
                            }
                        } -->

                    </script>
                </div>
            </div>
        </div>
    </div>

</div>