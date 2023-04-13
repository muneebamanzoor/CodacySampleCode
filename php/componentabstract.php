<?php
function component($artistname, $productprice, $productimg, $productid){
    $element = "
    <div class=\"col\">
            <form action=\"abtract.php\" method=\"post\">
            <div class=\"card\">
                <img src=\"$productimg\" height=\"400\" width=\"400\" class=\"card-img-top\" alt=\"Image1\">
                <div class=\"card-body\">
                    <h6 class=\"card-title\" style=\"text-align:center\">Artist: $artistname</h6>
                    <p class=\"card-text\" style=\"text-align:center\">Medium: Oil on Canvas <br />Size: 36x36<br />Price: $$productprice</p>
                    <button type=\"submit\" class=\"btn btn-primary\" name=\"add\">Add to Cart</button>
                    <input type='hidden' name='product_id' value='$productid'>
                </div>
            </div>
            </form>
        </div>
    ";
    echo $element;
}

function cartElement($productimg, $artistname, $productprice, $productid){
    $element = "
    
    <form action=\"cartabstract.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div style='padding-bottom: 10px;' >
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$artistname</h5>
                                <small class=\"text-secondary\">Artist Name: $artistname</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <label >Quantity:</label>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
