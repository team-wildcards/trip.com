<?php

function validateEmail($email)
{
    return (!preg_match(
        "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",
        $email
    ))
        ? FALSE : TRUE;
}


//Show Alert function
function showAlert()
{
    if (isset($_SESSION['alert_flag']) && isset($_SESSION['alert_message'])) {
        if ($_SESSION['alert_flag'] == 'error') { ?>

            <!-- Add CSS & FrontEnd to display Errors here -->
            <!-- Do this by exposing: -->
            <?php echo "<div class='alert alert-danger'>" . $_SESSION['alert_message'] . "</div>"; ?>

        <?php } elseif ($_SESSION['alert_flag'] == 'success') { ?>

                <!-- Add CSS & FrontEnd to display Success Messages here -->
                <!-- Do this by exposing: -->
                <?php echo "<div class='alert alert-success'>" . $_SESSION['alert_message'] . "</div>"; ?>

            <?php } elseif ($_SESSION['alert_flag'] == 'info') { ?>

                <!-- Add CSS & FrontEnd to display Notices here -->
                <!-- Do this by exposing: -->
                <?php echo "<div class='alert alert-info'>" . $_SESSION['alert_message'] . "</div>"; ?>
    <?php }
            //DON'T EDIT!!!
            unset($_SESSION['alert_flag']);
            unset($_SESSION['alert_message']);
        }
    }

    //Add Alert function
    function addAlert($flag, $message)
    {
        //PLEASE, DON'T EDIT!!!
        if ($flag !== '' && $message !== '') {
            $_SESSION['alert_flag'] = $flag;
            $_SESSION['alert_message'] = $message;
        } else {
            unset($_SESSION['alert_flag']);
            unset($_SESSION['alert_message']);
        }
    }
