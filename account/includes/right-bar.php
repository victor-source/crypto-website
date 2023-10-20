<div id="sidebar-right">
            <div class="sidebar-right-container">

                <!-- BOF TABS -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#tab-1" data-toggle="tab" class="nav-link active">Profile</a>
                    </li>
                   
                </ul>
                <!-- EOF TABS -->

                <!-- BOF TAB PANES -->
                <div class="tab-content">
                    <!-- BOF TAB-PANE #1 -->
                    <div id="tab-1" class="tab-pane show active">
                        <div class="pane-header">
                            <h3><i class="ti-user"></i> User Panel</h3>
                            <i class="fa fa-circle text-success"></i> <span class="profile-user"><?php echo $show['fullname']?></span>
                            <span class="float-right"><a href="logout.php" class="text-carolina">Log-Out</a></span>
                        </div>
                        <div class="pane-body">
                            <div class="card bg-transparent mb-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h5 class="mb-3">My Theme</h5>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn switch-theme btn-light" data-theme="theme-default">Light</button>
                                            <button type="button" class="btn switch-theme btn-dark" data-theme="theme-dark">Dark</button>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <h5 class="mb-3">My Profile</h5>
                                        <form method="post" class="form-update-profile">
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Fullname:</label>
                                                <div class="col">
                                                    <input type="text" name="name" class="form-control-plaintext"
                                                        value="<?php echo $show['fullname']?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Email:</label>
                                                <div class="col">
                                                    <input type="email" name="email" class="form-control-plaintext"
                                                        value="<?php echo $show['email']?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">phone:</label>
                                                <div class="col">
                                                    <input type="text" name="phone" class="form-control-plaintext"
                                                        value="<?php echo $show['phone']?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">country:</label>
                                                <div class="col">
                                                    <input type="text" name="country" class="form-control-plaintext"
                                                        value="<?php echo $show['country']?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Password:</label>
                                                <div class="col">
                                                    <input type="password" name="password" class="form-control-plaintext"
                                                        value="<?php echo $show['password']?>">
                                                </div>
                                            </div>
                                            <div class="col offset-md-4 pl-2">
                                                <button type="submit" name="update_account" class="btn btn-sm btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- EOF TAB-PANE #1 -->

            
                </div>
                <!-- EOF TAB PANES -->

            </div>
        </div>