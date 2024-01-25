<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>shane's</title>
    <!-- link rel="icon" type="image/x-icon" href="(link)"-->
    <link href="shane-style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="navbar">
        <div id="folders">
            <a class="icons" href="index.html">
                <img class="nav orig-image" src="resources/folder icons/1 home.png">
                <img class="nav hover-image" src="resources/folder icons/2 home.png">
            </a>
            <a class="icons" href="#">
                <img class="nav orig-image" src="resources/folder icons/3 shane.png">
                <img class="nav hover-image" src="resources/folder icons/4 shane.png">
            </a>
            <a class="icons" href="#">
                <img class="nav orig-image" src="resources/folder icons/5 about.png">
                <img class="nav hover-image" src="resources/folder icons/6 about.png">
            </a>
            <a class="icons" href="#">
                <img class="nav orig-image" src="resources/folder icons/7 interests.png">
                <img class="nav hover-image" src="resources/folder icons/8 interests.png">
            </a>
            <a class="icons" href="#">
                <img class="nav orig-image" src="resources/folder icons/9 contact.png">
                <img class="nav hover-image" src="resources/folder icons/10 contact.png">
            </a>
            <a class="icons" href="#">
                <img class="nav orig-image" src="resources/folder icons/11 misc.png">
                <img class="nav hover-image" src="resources/folder icons/12 misc.png">
            </a>
        </div>
    </div> 

    <!-- CONTENT -->

    <div id="shane-content">
        <div id="socmed-win">
            <img id="socmed-win" src="resources/windows/social window.png">
            <div id="socmed-content1">
                <div class="icon">
                    <img class="ena-icon" src="resources/windows/ena icon pixel.png">
                </div>
                <div class="user">
                    <p><span class="name">shane !! </span><span class="at">@shannelien</span>
                    <br><span class="post">hello ~~ my name's <?php $owner_name = "Shannelien Catingub"; echo $owner_name; ?> ^-^ but please, i don't care if we're not that close, just call me <strong>Shane.</strong>
                    i've never really liked my name because it's too.. <em>unique.</em></span></p><br>
                </div>
                <img id="reaction1" src="resources/windows/reactions.png">
            </div>
            <div id="socmed-content2">
                <div class="icon">
                    <img class="ena-icon" src="resources/windows/ena icon pixel.png">
                </div>
                <div class="user">
                    <p><span class="name">shane !! </span><span class="at">@shannelien</span>
                    <br><span class="post">anywayyy, this is me! i don't take a lot of pictures so idrk what to put here x-x. i don't even look like that irl since i dont wear my contacts that much anymore. <em><strong>( hover to see me ;0 )</strong></em></span></p>
                </div> 
                <img id="boo" src="resources/windows/my melody phone.gif">
                <img id="reaction2" src="resources/windows/reactions.png">
            </div>
            <div id="socmed-content3">
                <div class="icon">
                    <img class="ena-icon" src="resources/windows/ena icon pixel.png">
                </div>
                <div class="user">
                    <p><span class="name">shane !! </span><span class="at">@shannelien</span>
                    <br><span class="post">i was born on the 29th of december 2003, which meaaaans i am already <?php $year = 2003; $current_year = 2023; echo $current_year - $year; ?> years old T_T.</span></p>
            </div>
            <?php $isThisWebpageDone = false; var_dump($isThisWebpageDone) ?>
        </div> 
    </div>