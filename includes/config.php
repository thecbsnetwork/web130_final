<?php
//prevents date errors
    date_default_timezone_set('America/Los_Angeles');

//superglobal $_GET to grab querystring from URL
    if(isset($_GET['day']))
    {//data in querystring, use it!
        $day = $_GET['day'];
    }else{//use current date
        $day = date('l');
        $today = date("F j"); 

    }
$heading1 = "Today's Special";
        switch($day)
{
    case 'Monday':
        $heading2 = "Copper River Sockeye Salmon";
         $content = "Served with roasted beets, mustard vinaigrette, citrus yogurt.";
        $price = "17";
        $item_id= 'cji85dj701z3701292738ne7q';
        $dailyImage = 'mon.jpg';
        $dailyAlt = "monday-salmon";
    break;
        
    case 'Tuesday':
        $heading2 = "Lamb Salad with Fregola";
        $content = "Roast lamb, sweet onions and arugula topped with a dressing of chewy fregola and capers.";
        $price = "23";
        $dailyImage = 'tue.jpg';
        $dailyAlt = "tuesday-lamb";
    break;
        
    case 'Wednesday':
         $heading2 = "Malted Custard French Toast";
         $content = "Thick brioche slices in a vanilla-and-malt-spiked custard, caramelized and topped with whipped cream.";
         $price = "15";
        $dailyImage = 'wed.jpg';
        $dailyAlt = "wednesday-toast";
    break;
        
    case 'Thursday':
        $heading2 = "Porcini Ravioli";
        $content = "Filled with fava bean, mascarpone, taleggio, and topped with parmigiano.";
        $price = "22";
        $dailyImage = 'thu.jpg';
        $dailyAlt = "thursday-pasta";
    break;
        
    case 'Friday':
         $heading2 = "Burger with Feta-Yogurt Sauce";
         $content = "Topped with fresh roma tomatoes and mint leaves served on a thick country bread.";
         $price = "18";
        $dailyImage = 'fri.jpg';
        $dailyAlt = "friday-burger";
    break;
        
    case 'Saturday':
         $heading2 = "Avocado and Egg Sandwich";
         $content = "Stacked high with a fried egg, california avocado, jack cheese, and pepper sauce";
         $price = "11";
        $dailyImage = 'sat.jpg';
        $dailyAlt = "saturday-sandwich";
    break;
        
    case 'Sunday':
         $heading2 = "Roasted Chicken and Vegetables";
         $content = "Roasted mad hatcher chicken with grilled spring onions and fava bean relish";
         $price = "28";
        $item_id = cji85mkn122yh0192wfeab8hh;
        $dailyImage = 'sun.jpg';
        $dailyAlt = "sunday-chicken";
    break;     
        
    default:
        $heading2 = "Nothing.";
        $content = "There is nothing.";
        $price = "0";
        $dailyImage = 'food.jpg';
        $dailyAlt = "food";
    break;        
}//end daily rotation for daily.php
?>