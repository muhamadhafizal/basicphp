<link rel="stylesheet" href="assets/css//bootstrap.min.css">
<html>

<body>
    <div>
        <div class="jumbotron" style="background-color: lightgray">
            <div class="row">
                <div class="col-md-3 offset-md-2">
                    <img src="https://ucscgenomics.soe.ucsc.edu/wp-content/uploads/Screen-Shot-2019-09-03-at-11.27.12-AM.png"
                        height="200">
                </div>
                <div class="col-md-6">
                    <h3><?php echo $_POST["name"]; ?></h3>
                    <h5><?php echo $_POST["position1"]; ?></h5>
                    <h5><?php echo $_POST["position2"]; ?></h5>
                    <h5><?php echo $_POST["position3"]; ?></h5>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">Soft Skill</div>
                        <div class="card-body">
                            <div class="card-text">
                                <div>
                                <?php echo $_POST["softskill1"]; ?>
                                </div>
                                <div>
                                <?php echo $_POST["softskill2"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">Working Experience</div>
                        <div class="card-body">
                            <div class="card-text">
                                <div>
                                <?php echo $_POST["we1"]; ?>
                                </div>
                                <div>
                                <?php echo $_POST["we2"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">Contact Details</div>
                        <div class="card-body">
                            <div class="card-text">
                                <div>
                                <?php echo $_POST["cd1"]; ?>
                                </div>
                                <div>
                                <?php echo $_POST["cd2"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">Projects</div>
                        <div class="card-body">
                            <div class="card-text">
                                <div>
                                <?php echo $_POST["projects1"]; ?>
                                </div>
                                <div>
                                <?php echo $_POST["projects2"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">References</div>
                        <div class="card-body">
                            <div class="card-text">
                                <div>
                                <?php echo $_POST["references1"]; ?>
                                </div>
                                <div>
                                <?php echo $_POST["references2"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">Educations</div>
                        <div class="card-body">
                            <div class="card-text">
                                <div>
                                <?php echo $_POST["educations1"]; ?>
                                </div>
                                <div>
                                <?php echo $_POST["educations2"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>