<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href='https://fonts.googleapis.com/css?family=Aldrich|Open+Sans' rel='stylesheet'>
        
        <title>Multimedia and Graphic Design Project</title>
        
        <link rel="stylesheet" href="css/style.css">
        <!--<script src="js.script.js"></script>-->
        <?php include('feedback_process.php'); ?>
    </head>

    <body>
        
        <div class="container">
            <div id="header" class="mainNav">
                <div id="compname" class="logo">
                    <li><em>Coordinated<br>Technologies</em></li>
                </div>
                <div id="logo" class="logo">
                <span><img src="Logo.png" width="60" alt="Coordinated Technologies"></span>
                </div>
                <div class="links">
                    <ul>
                        <li>
                            <a href='index.html' data-locationpage="navigation" data-pathtype="internal" class="ribbonNav">
                                <span class="link-text">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href='maps.html' data-locationpage="navigation" data-pathtype="internal" class="ribbonNav">
                                <span class="link-text">Maps</span>
                            </a>
                        <li>
                            <a href='resources.html' data-locationpage="navigation" data-pathtype="internal" class="ribbonNav">
                                <span class="link-text">Resources</span>
                            </a>
                        </li>
                        <li>
                            <a href='feedback.html' data-locationpage="navigation" data-pathtype="internal" class="ribbonNav">
                                <span class="link-text">Feedback</span>
                            </a>
                        </li>
                        <li>
                            <a href='contact.html' data-locationpage="navigation" data-pathtype="internal" class="ribbonNav">
                                <span class="link-text">Contact Info</span>
                            </a>
                        </li>                        
                    </ul>
                </div>
                </div>
            </div>

        <form class="formField" action="feedback_process.php" method="post">
            <br>
            Name:<br>
            <input placeholder=" " type="text" name="name" value="<?= $name ?>">
            <span class="error"><?php =$name_error ?></span>
            <br>
            Email:<br>
            <input type="text" name="email" value="<?= $email ?>">
            <span class="error"><?php =$email_error ?></span>
            <br>
            <br>
            Feedback:<br>
            <textarea type="text" name="feedback" value="<?= $feedback ?>"></textarea>
            <span class="error"><?php =$feedback_error ?></span>
            <br><br>
            <input type="submit" value="Submit">
            <div class="success"><?= $success ?></div>
        </form>
    
    </body>
    
</html>