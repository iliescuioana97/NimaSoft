<?php include 'top.php' ?>


<!--============================== Header =================================-->
<header>
    <div class="container">
        <h1 class="logo"><a href="index.php"><img src="images/logoNima.png" alt="NIMA SOFTWARE"></a></h1>
        <ul class="sf-menu">
            <li ><a href="index.php">Home</a>                    
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">History</a></li>
                    <li class="with-ul__sub"><a href="#">News</a>
                        <ul>
                            <li><a href="#">Fresh</a></li>
                            <li><a href="#">Archive</a></li>
                        </ul>
                    </li>
               </ul>
            </li>
            <li><a href="About.php">About</a></li>
            <li><a href="Services.php">Services</a></li>
            <li><a href="Projects.php">Projects</a></li>
           <!-- <li><a href="Blog.php">Blog</a></li> -->
            <li><a href="Contact.php">Contact</a></li>
        </ul>
    </div>
</header>


<script type="text/javascript">
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;
        console.log(url)
        // passes on every "a" tag
        $(".container a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
            }
        });
    });        
</script>

