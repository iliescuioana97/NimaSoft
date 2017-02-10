<?php include 'top.php' ?>
<?php include 'header.php' ?>
<title>NimaSoftware - Projects</title>

<div class="row-with-strip row_block row_block__indent-1 row__style gallery thumbs">
    <div class="container" id="tabs">
        <div class="left-strip"></div>
        <h3 class="preffix_5">Latest Projects</h3>

        <div class="row tab-content preffix_0"  id="tabs-1">
            <div class="tabs">
                <ul class="tab-links box1 grid_3">
                    <li class="active"><a href="#tab1">Platforme SaaS</a></li>
                    <li><a href="#tab2">Sisteme de management</a></li>
                    <li><a href="#tab3">Magazine online</a></li>
                    <li><a href="#tab4">Site-uri prezentare</a></li>
                </ul>

                <div class=" box2 grid_7 tab-content">
                    <div id="tab1" class="tab active">
                        <img class="grid_3" src="images/cargoplanning_res.jpg" alt="">
                        <a href="http://cargoplanning.com/"></a>
                        <p>CargoPlanning is an online IT platform that assists manufacturing and commercial companies in their freighting processes. CargoPlanning is a simple and efficient answer to the management of shipping orders, all the way from the placement of the shipping order, choosing and confirming the logistic partner to freight shipping and obtaining final documentation. </br> </br>
                            CargoPlanning is an online platform for all the manufacturing and commercial companies producing or selling products in the following areas: paper, textiles, construction materials, agriculture, food and beverages, steel and aluminum, recycling, appliances. CargoPlanning modules provide solutions to companies for easily managing complex processes in the logistic chain and streamlining the shipping activity.
                        </p>
                    </div>

                    <div id="tab2" class="tab">
                        <div class="">
                            <img class="grid_3" src="images/logisoft.jpg" alt="">
                            <h4>LOGISOFT</h4>
                            <p>LogiSoft addresses all aspects of shipping services, being able to ensure that the information passes through the system quickly and effectively. This means that you don't need to waste time copying and pasting data or worrying that it has not imported correctly. By saving time here you speed the process by which you can recognize the revenue from a voyage and make better use of your working capital.</p>
                        </div>

                        <div class=" row_block__indent-2">
                            <img class="grid_3" src="images/sophia-logo.jpg" alt="">
                            <h4>Sophia ERP</h4>
                            <p>Sophia ERP is a full point of sale that offers to the fitted company a suite of tools, from tracking sales and inventory to rich analytics and business financing. It is one service for an entire business, from a register in your pocket to reports on your laptop. Whether your business has a small stock and few locations or it is a big corporations with loads of information to manage, we can make the administration software for you.</p>
                        </div>

                        <div class="">
                            <img class="grid_3" src="images/stock.jpg" alt="">
                            <h4>StockManagement</h4>
                            <p>Inventory Control Software maximizes your benefits from just-in-time inventory. Our company provides a complete inventory management solution for you, controlling inventory, tracking items, ensuring adequate supplies, increasing warehouse productivity, and significantly reducing paper flow.</p>
                        </div>

                    </div>

                    <div id="tab3" class="tab">
                        <div class="">
                            <img class="grid_3" src="images/sophia-logo.jpg" alt="">
                            <h4>Sophia Romania</h4>
                            <p>Sophia is a big chain of interior design items, which started off in 2004, inspired by Indian patterns and motifs. The company later changed its style to a more European one. Our company helped implement Sophia's elegance into its website, by creating a custom catalog for their products, an easy ordering system and an incredible portfolio of their accomplishments.</p>
                        </div>

                        <div class=" row_block__indent-2">
                            <img class="grid_3" src="images/cartiromanesti.jpg" alt="">
                            <h4>Romanian Books</h4>
                            <p>Our company helped promoting Romanian books all throughout the United Kingdom by developing the "Romanian Books" website. The website is a virtual library, giving you the opportunity to scroll through your preferred books, checking price ranges and ordering your favorites. </p>
                        </div> </div>

                    <div id="tab4" class="tab">
                        <div class="">
                            <img class="grid_3" src="images/avocat-logo.jpg" alt="">
                            <h4>Avocat Carmen Diaconu</h4>
                            <p>We helped promote the professionalism and education of the client regarding the judicial mechanisms through websites for our local lawyers' offices.We helped promote the professionalism and education of the client regarding the judicial mechanisms through websites for our local lawyers' offices.</p>
                        </div> 
                        <div class="row_block__indent-2">
                            <img class="grid_3" src="images/sophia-logo.jpg" alt="">
                            <h4>Blog Sophia Romania</h4>
                            <p>Sophia is a big chain of interior design items, which started off in 2004, inspired by Indian patterns and motifs. The company later changed its style to a more European one. Our company helped implement Sophia's elegance into its website, by creating a custom catalog for their products, an easy ordering system and an incredible portfolio of their accomplishments.</p>
                        </div>
                    </div>                        
                </div>   
            </div>
        </div>
    </div>


</div>

<style> 
    .tabs {
        width:100%;
        display:inline-block;
    }

    /*----- Tab Links -----*/
    /* Clearfix */
    .tab-links:after {
        display:block;
        clear:both;
        content:'';
    }

    .tab-links li {
        margin: 0px 0px;
        float: left;
        list-style:none;
        display:block;
        width:100%;
    }

    .tab img {
        margin-right: 20px;
        margin-bottom: 10px;
    }

    .tab-links a {
        padding:9px 15px;
        margin: 5px 0px;
        display:block;
        border-radius:3px 3px 0px 0px;
        background:#f3c7c2;
        font-size:16px;
        font-weight:600;
        color:#4c4c4c;
        transition:all linear 0.15s;
    }

    .tab-links a:hover {
        background:#a7cce5;
        text-decoration:none;
    }

    .tab-links .active a, .tab-links .active a:hover {
        background:#fff;
        color:#4c4c4c;
    }

    .tab-links {
        margin-left: 5px;
    }

    /*----- Content of Tabs -----*/
    .tab-content {
        padding:15px;
        border-radius:3px;
        box-shadow:-1px 1px 1px rgba(0,0,0,0.15);
        background:#fff;
    }

    .tab {
        display:none;
    }

    .tab.active {
        display:block;
    }
</style>

<script>
    jQuery(document).ready(function () {
        jQuery('.tabs .tab-links a').on('click', function (e) {
            var currentAttrValue = jQuery(this).attr('href');

            // Show/Hide Tabs
            jQuery('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();
            // Change/remove current tab to active
            jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

            e.preventDefault();
        });
    });
</script>