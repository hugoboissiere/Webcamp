var test = $("#test1").data("numberone");
console.log(test);
var test2 = $("#test1").data("numbertwo");
console.log(test2);

  new Chartist.Bar('.ct-chart', {
    labels: ['Test : <br> 20 entrees', 'Test1 : <br> 60 entrees', 'Test2 : <br> 120 entrees', 'Test3 : <br> 200 entrees', 'Test4 : <br> 180 entrees', 'Test5 : <br> 20 entrees', 'Test6 : <br> 10 entrees'],
    series: [ document.write('($pouet)') , 60, 120, 200, 180, 20, 10],
  }, {
    distributeSeries: true,
    width: 1500,
    height: 600,
  });