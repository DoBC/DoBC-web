function populate_items()
{
    var items = $("#items");

    for (var i = 1; i < 41; i++)
    {
        var imgUrl = "img/Examples/" + i + ".jpg";
        var item = $("<div></div>", {
            "class" : "item"
        });
    
        var innerItem = $("<div></div>", {
            "class" : "inner-item"
        });
    
        var itemImage = $("<img />", {
            "class" : "item-image",
            "src" : imgUrl
            // "src" : "https://via.placeholder.com/300"
        });

        var itemText = $("<p></p>", {
            "text" : "Test"
        });

        innerItem.append(itemImage);
        item.append(innerItem);
        item.append(itemText);
        items.append(item);
    }



}