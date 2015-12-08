function sort_game()
{
    var i = 0;
    var j = 0;
    var un = $("tr").eq(0);
    var deux = $("tr").eq(1);
    var trois = $("tr").eq(2);
    $('#tabletest').css({"margin-left" : "34%", "margin-top" : "1%"});
    $('table').css({"border-collapse" : "separate", "border-spacing" : "0 1em"});
    $('.gamename').css({"font-size" : "150%"});
    $('#sortname').click(function(){
        un.removeAttr('style');
        deux.removeAttr('style');
        trois.removeAttr('style');
        $('#tabletest').removeAttr('style');
        $('td').removeAttr('style');
        $('table').removeAttr('style');
        $('.gamename').removeAttr('style');
        $('table').empty();
        if ((i % 2) === 0)
        {
            $('table').append(un);
            $('table').append(deux);
            $('table').append(trois);
        }
        else
        {
            $('table').append(trois);
            $('table').append(deux);
            $('table').append(un);
        }
        i++;
        $('#tabletest').css({"margin-left" : "34%", "margin-top" : "1%"});
        $('table').css({"border-collapse" : "separate", "border-spacing" : "0 1em"});
        $('.gamename').css({"font-size" : "150%"});
        })
    $('#sortprice').click(function(){
        un.removeAttr('style');
        deux.removeAttr('style');
        trois.removeAttr('style');
        $('#tabletest').removeAttr('style');
        $('td').removeAttr('style');
        $('table').removeAttr('style');
        $('.gamename').removeAttr('style');
        $('table').empty();
        if ((j % 2) === 0)
        {
            $('table').append(trois);
            $('table').append(deux);
            $('table').append(un);
        }
        else
        {
            $('table').append(un);
            $('table').append(deux);
            $('table').append(trois);
        }
        j++;
        $('#tabletest').css({"margin-left" : "34%", "margin-top" : "1%"});
        $('table').css({"border-collapse" : "separate", "border-spacing" : "0 1em"});
        $('.gamename').css({"font-size" : "150%"});
    })
}