function chkCap(){
$('#Password').keypress(function(e){ 
    var s = String.fromCharCode( e.which );
    if ( s.toUpperCase() === s && s.toLowerCase() !== s && !e.shiftKey ) {
        document.getElementById('alert-cap').style.visibility = 'visible';
    }else {
        document.getElementById('alert-cap').style.visibility = 'hidden';
    }
});      

$('#con-Password').keypress(function(e){ 
    var s = String.fromCharCode( e.which );
    if ( s.toUpperCase() === s && s.toLowerCase() !== s && !e.shiftKey ) {
        document.getElementById('alert-cap').style.visibility = 'visible';
    }else {
        document.getElementById('alert-cap').style.visibility = 'hidden';
    }
});   
}