<?php
    include ("includes/data.php");
    include ("core/functions/mainFunction.php");


    // $catalog = array(
    //     "Design Patterns", //removed to plugin the data file
    //     "Forest Gump",
    //     "Beethover"
    // );

    $pageTitle = "Full Catalog";
    $section = null;

        if (isset($_GET["cat"]))
        {
            if ($_GET["cat"] == "books")
                {
                    $pageTitle = "Books";
                    $section = "books";
                }
            else if ($_GET["cat"] == "movies")
                {
                    $pageTitle = "Movies";
                    $section = "movies";
                }
            else if ($_GET["cat"] == "music")
                {
                    $pageTitle = "Music";
                    $section = "music";
                }
        }
    include 'includes/header.php'; ?>
        <div class="section catalog page">
             <div class="wrapper">
                <h1><?php
                if ($section != null)
                {
                    echo "<a class=\"catalogLink\" href='catalog.php'>Full Catalog</a> <i class=\"fas fa-greater-than\"></i> "; //$gt; means greater than
                }
                echo $pageTitle;
                ?></h1>
                    <ul class="items">
                        <?php
                            $categories = array_category($catalog, $section); //array_rand() is a built in function whice takes 2 priameter($theValue, howManyIndexesToShow)
                                foreach ($categories as $id)
                                {
                                    echo get_item_html($id,$catalog[$id]);
                                }
                        ?>
                    </ul>
            </div>
        </div>
    <?php include 'includes/footer.php'; ?>