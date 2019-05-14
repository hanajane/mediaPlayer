<?php
    function get_item_html($id, $item)
    {
        // $output = "<li><a href='#'><img src='"
        //         . $item["img"] . "' alt='"
        //         . $item["title"] . "' />"                //needed to update with the new block of codes below
        //         . "<p> View Details </p>"
        //         . "</a></li>";
        // return $output;

        $output =
            "<li><a href='details.php?id="
            . $id . "'><img class=\"detailsImage\" src='" 
            . $item["img"] . "' alt='" 
            . $item["title"] . "' />" 
            . "<p>View Details</p>"
            . "</a></li>";
        return $output;
    }

    function array_category($catalog, $category)
    {
        $output = array();

        foreach($catalog as $id => $item)
        {
            if ($category == null || 
            strtolower($category) == strtolower($item["category"]))
            {
                $sort = $item["title"];         //- sorting data to be display byt tile
                $sort = ltrim($sort,"The ");    //- to ignore the first word with "The"
                $sort = ltrim($sort,"A ");      //- to ignore the first word with "A"
                $sort = ltrim($sort,"An ");     //- to ignore the first word with "An"
                $output[$id] = $sort;
                // $output[] = $id; // replaced but the code above to sort the data by title

            }
        }
        asort($output);
        return array_keys($output);
    }
?>