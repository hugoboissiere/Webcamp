function sort_game()
{
    var i = 0;
    var j = 0;
    var megaman = $("tr").eq(0);
    var tomb = $("tr").eq(1);
    var metroid = $("tr").eq(2);
    $('#tabletest').css({"margin-left" : "34%", "margin-top" : "1%"});
    $('table').css({"border-collapse" : "separate", "border-spacing" : "0 1em"});
    $('.gamename').css({"font-size" : "150%"});
    $('#sortname').click(function(){
        megaman.removeAttr('style');
        tomb.removeAttr('style');
        metroid.removeAttr('style');
        $('#tabletest').removeAttr('style');
        $('td').removeAttr('style');
        $('table').removeAttr('style');
        $('.gamename').removeAttr('style');
        $('table').empty();
        if ((i % 2) === 0)
        {
            $('table').append(megaman);
            $('table').append(tomb);
            $('table').append(metroid);
        }
        else
        {
            $('table').append(metroid);
            $('table').append(tomb);
            $('table').append(megaman);
        }
        i++;
        $('#tabletest').css({"margin-left" : "34%", "margin-top" : "1%"});
        $('table').css({"border-collapse" : "separate", "border-spacing" : "0 1em"});
        $('.gamename').css({"font-size" : "150%"});
        })
    $('#sortprice').click(function(){
        megaman.removeAttr('style');
        tomb.removeAttr('style');
        metroid.removeAttr('style');
        $('#tabletest').removeAttr('style');
        $('td').removeAttr('style');
        $('table').removeAttr('style');
        $('.gamename').removeAttr('style');
        $('table').empty();
        if ((j % 2) === 0)
        {
            $('table').append(tomb);
            $('table').append(megaman);
            $('table').append(metroid);
        }
        else
        {
            $('table').append(metroid);
            $('table').append(megaman);
            $('table').append(tomb);
        }
        j++;
        $('#tabletest').css({"margin-left" : "34%", "margin-top" : "1%"});
        $('table').css({"border-collapse" : "separate", "border-spacing" : "0 1em"});
        $('.gamename').css({"font-size" : "150%"});
    })
}
