var theForm = document.forms["albumsubmission"];

var album_price = new Array();
album_price["DayVersion"]=12.50;
album_price["NightVersion"]=12.50;

var poster_price = new Array();
poster_price["yes"]=2.00;
poster_price["no"]=0;

function getAlbumPrice() {
    var albumPrice=0;
    var theForm = document.forms["albumsubmission"];
//make sure that below is set to the name of the object in the html//
    var selectedAlbum = theForm.elements["album"];
    for(var i = 0; i < album.length; i++)
    {
        if(album[i].checked)
        {
            albumPrice = album_price[album[i].value]
        break;
    }
    }
    return album_price;
}

function getTotal()
{ 
    var albumPrice = getAlbumPrice();

    document.getElementById('totalPrice').innerHTML =
"Total Price $" +albumPrice;
}