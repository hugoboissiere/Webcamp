var nb1 = 1;
var nb2 = 1;
var pricebase1 = parseInt($('body').find('tr').eq(1).find('td').eq(1).text().split('$')[1]);
var pricebase2 = parseInt($('body').find('tr').eq(2).find('td').eq(1).text().split('$')[1]);
var taxe = $('body').find('tr').eq(3).find('td').eq(1).text().split('$')[1] * 1;
var total = $('body').find('tr').eq(4).find('td').text().split('$')[1] * 1;
var newprice2;
/*var price1;
var price2;*/
function        addarticle()
{
    if (nb1 > 0 || nb2 > 0)
    {
    $('body').find('tr').eq(1).find('td').eq(3).find('button').eq(0).click(function()
                   {
                       nb1++;
                       if (nb1 > 0 || nb2 > 0)
                       {
                            var qt1 = $('body').find('#megaman').find('td').eq(2).text(nb1);
                            var qt2 = parseInt($('body').find('#megaman').find('td').eq(1).text().split('$')[1]);
                            price1 = (qt2 + pricebase1);
                            var newprice1 = $('body').find('#megaman').find('td').eq(1).text('$' + price1);
                            console.log(nb1);
                            console.log(qt1);
                            console.log(qt2);
                            console.log(taxe);
                            console.log(pricebase1);
                            console.log(price1);
                            console.log(newprice1);
                            }
                   })
    $('body').find('tr').eq(1).find('td').eq(3).find('button').eq(1).click(function()
                   {
                       nb1--;
                       if (nb1 > 0 || nb2 > 0)
                       {
                            var qt1 = parseInt($('body').find('#megaman').find('td').eq(2).text(nb1));
                            qt1 = $('body').find('#megaman').find('td').eq(1).text().split('$')[1] * 1;
                            price1 = (qt1 - pricebase1);
                            newprice1 = ($('body').find('#megaman').find('td').eq(1).text('$' + price1)).toString();
                            return price1;
                       }
                   })
    $('body').find('tr').eq(2).find('td').eq(3).find('button').eq(0).click(function()
                   {
                        nb2++;
                        if (nb1 > 0 || nb2 > 0)
                        {
                            var qt2 = parseInt($('body').find('#supermariobros').find('td').eq(2).text(nb2));
                            qt2 = $('body').find('#supermariobros').find('td').eq(1).text().split('$')[1] * 1;
                            price2 = (qt2 + pricebase2);
                            newprice2 = ($('body').find('#supermariobros').find('td').eq(1).text('$' + price2)).toString();
                            return price2;
                        }
                   })
    $('body').find('tr').eq(2).find('td').eq(3).find('button').eq(1).click(function()
                   {
                       nb2--;
                       if (nb1 > 0 || nb2 > 0)
                       {
                            var qt2 = parseInt($('body').find('#supermariobros').find('td').eq(2).text(nb2));
                            qt2 = $('body').find('#supermariobros').find('td').eq(1).text().split('$')[1] * 1;
                            price2 = (qt2 - pricebase2);
                            newprice2 = ($('body').find('#supermariobros').find('td').eq(1).text('$' + price2)).toString();
                            return price2;
                            }
                   })
                   total = taxe + 25 + 15;
                   $('body').find('tr').eq(4).find('td').text('$' + total);
    }
    
}