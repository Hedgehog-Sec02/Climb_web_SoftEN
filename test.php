<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script> 
$(document).ready(function () {
    size_li = $("#myList li").length;
    console.log(size_li);
    x=3;
    $('#myList li:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+5 <= size_li) ? x+5 : size_li; 
        $('#myList li:lt('+x+')').slideDown();
         $('#showLess').show();
        if(x == size_li){
            $('#loadMore').hide();
        }
    });
    $('#showLess').click(function () {
        x=(x-5<0) ? 3 : x-5;
        $('#myList li').not(':lt('+x+')').slideUp();
        $('#loadMore').show();
         $('#showLess').show();
        if(x == 3){
            $('#showLess').hide();
        }
    });
});

</script>
 
<style> 
#myList li{ display:none;
}
#loadMore {
    color:green;
    cursor:pointer;
}
#loadMore:hover {
    color:black;
}
#showLess {
    color:red;
    cursor:pointer;
    display:none;
}
#showLess:hover {
    color:black;
}
</style>
</head>
<body>
 
<div style="background-color:gray;">
<ul id="myList">
    <li><a>One</a></li>
    <li>Two</li>
    <li>Three</li>
    <li>Four</li>
    <li><a>Five</a></li>
    <li>Six</li>
    <li>Seven</li>
    <li>Eight</li>
    <li>Nine</li>
    <li>Ten</li>
    <li>Eleven</li>
    <li>Twelve</li>
    <li>Thirteen</li>
    <li>Fourteen</li>
    <li>Fifteen</li>
    <li>Sixteen</li>
    <li>Seventeen</li>
    <li>Eighteen</li>
    <li>Nineteen</li>
    <li>Twenty one</li>
    <li>Twenty two</li>
    <li>Twenty three</li>
    <li>Twenty four</li>
    <li>Twenty five</li>
</ul>
</div>
<div id="loadMore">Load more</div>
<div id="showLess">Show less</div>

</body>
</html>