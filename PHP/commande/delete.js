function        deletearticle()
{
    $('body').find('tr').eq(1).find('button').eq(2).click(function()
                   {
                        var jeu1 = $('body').find('#megaman');
                        jeu1.remove();
                   })
    $('body').find('tr').eq(2).find('button').eq(2).click(function()
                   {
                        var jeu2 = $('body').find('#supermariobros');
                        jeu2.remove();
                   })
}