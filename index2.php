<?php
echo "<pre>";
    print_r($_POST);
echo "</pre>"
?>
<html lang="en">
<!-- https://www.youtube.com/watch?v=JQ_WphOV9VQ&feature=youtu.be
https://www.youtube.com/watch?v=h5ghlfvU3S8 -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
 
     <link rel="stylesheet" href="./assets/style.css"> 
     <link rel="stylesheet" href="./assets/font/bellota_regular_macroman/Bellota-Regular-webfont.woff"> 
     <!-- https://getbootstrap.com/docs/4.0/components/forms/  -->

    <title>Hackers-poulette</title>
</head>

<body>
    <header>
        <div class = "container">
            <!-- https://stackoverflow.com/questions/10879955/how-to-align-an-image-dead-center-with-bootstrap -->
            <img class="mx-auto d-block" id= "logo" src = "assets/img/hackers-poulette-logo.png" alt = "Logo Hackers-poulette"> 
        </div>
    </header>
    <div class="container">
        <div class="">
             <div class="col-2 offset-sm-5 border" id="contactButton">
                <p id="contactUs">Contact us !</p>
            </div>
        </div>
        <form action="index2.php" method = "POST" class = "form">
            <div class = "col-sm-4 offset-sm-4">
                <div class = "form-group">
                    <label for="name" class="form-label">What's your name?</label>
                    <input type = "text" class = "form-control" id = "name" name = "name" placeholder = "Name and last name" tabindex = "1" required>
                </div>
            </div>
            <div class="">
                <div class="row">
                    <div class="col-sm-10 offset-sm-5">
                        <div class="form-group">
                            <div class = "custom-control custom-radio custom-control-inline">
                            <!-- https://getbootstrap.com/docs/4.0/components/forms/#custom-forms -->
                                <input type = "radio" class = "custom-control-input" id = "customRadio1" name = "customRadio" required>
                                <label for="customRadio1" class="custom-control-label">Male</label>
                            </div>
                            <div class = "custom-control custom-radio custom-control-inline">
                                <input type = "radio" class = "custom-control-input" id = "customRadio2" name = "customRadio" required>
                                <label for="customRadio2" class="custom-control-label">Female</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "col-sm-6 offset-sm-3">
                <div class = "form-group">
                    <label for="email" class="form-label">What's your email address?</label>
                    <input type = "email" class = "form-control" id = "email" name = "email" placeholder = "youremail@xyz.com" tabindex = "2" required>
                </div>
            </div>
            <div class = "col-sm-4 offset-sm-4">
                <div class = "form-group">
                    <label for="name" class="form-label">Where are you from?</label>
                    <select class = "custom-select" required>
                    <option selected = "selected">Let us dream!</option>
                        <?php
                        $continents = array("Afriqua", "Asia", "Europe", "North America", "South America", "Oceania");
                        foreach ($continents as $key => $value) {
                        ?>
                        <option value = "<?php echo strtolower($value); ?>"><?php echo $value;
                        ?></option>
                        <?php
                        };
                        ?>
                    </select>
                </div>
            </div>
            <div class = "col-sm-6 offset-sm-3">
                <div class = "form-group">
                    <label for="name" class="form-label">Subject</label>
                        <div class="test">
                            <select class = "custom-select">
                            <option selected = "selected">What's the matter?</option>
                            <option value="1">I can't find what I am looking for</option>
                            <option value="2">Please help me, I'm lost</option>
                            <option value="3">Just writting to say hi!</option>
                            </select>
                        </div>
                </div>
            </div>
            <div class = "col-sm-6 offset-sm-3">
                <div class = "form-group">
                    <div class="h-20">
                        <label for="message" class="form-label">Tell us more</label>
                        <textarea type = "text" rows="5" class = "form-control" id = "message" name = "message" placeholder = "Your message" tabindex = "5" required></textarea>
                    </div>
                </div>
            </div>
            <div>
                <button type = "submit" class="col-sm-2 offset-sm-5" id="btn">Send</button>
            </div>
        </form>
    </div>
</body>
</html>