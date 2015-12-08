// document.cookie = 0; "expires=; path=/"
var test = document.cookie;
var res = test.split(";");
var i = 0;
var j = 0;
while (res[i] && j === 0)
{
    if (! /[=]/.test(res[i]))
    {
        var cookie = res[i];
        j++;
    }
    i++;
}
if (j === 0)
    document.cookie = 0; "expires=; path=/"
var nb = cookie;
function        add_panier()
{
    var panier = $('body').find('#panier').find('a').text('Panier: ' + nb)
    $('body').find('.buy').click(function()
                   {
                       nb++;
                       var panier = $('body').find('#panier').find('a').text('Panier: ' + nb)
                    //   document.cookie = name +'='+ nb;
                        document.cookie = nb; "expires= path=/";
                    // if(!document.cookie)
    	               // document.cookie = "value = 0";
                    // document.cookie = parseInt(document.cookie) + 1;
                    var test = document.cookie;
                    var res = test.split(";");
                    var i = 0;
                    while (res[i])
                    {
                        if (! /[=]/.test(res[i]))
                            cookie = res[i];
                        i++;
                    }
                    // console.log(res);
                   })
}

add_panier()