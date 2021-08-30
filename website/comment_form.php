<?php
    session_start();
    // include('includes/header.php');
?>

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Comment Form
                            <a href="index.php" class="btn btn-danger float-end">back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_SESSION['status'])) {
                            echo "<h4>".$_SESSION['status']."</h4>";
                            unset($_SESSION['status']);
                        }
                        ?>

                        <div class="row justify-content-center">
                            <div class="col-md-6">

                            <form action="insert_comments.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Course</label>
                                <select name="course" id="course" class="form-control">
                                    <option value="Diploma In Internet of Things">Internet of Things</option>
                                    <option value="Diploma In Big Data">Big Data</option>
                                    <option value="Diploma In Cyber Security">Cyber Security</option>
                                    <option value="Diploma In Interactive & Digital Media">Interactive & Digital Media</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Comment</label>
                                <input type="text" name="comment" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3">
                                <button type="submit" name="insert_comment" class="btn btn-primary">Comment</button>
                            </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>

    

<?php
    // include('includes/footer.php');
?>

