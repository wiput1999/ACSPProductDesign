var data_map = [
		{'style': 1, 'name': 'V1', 'init': 0, 'bg': '#F44336', 'hover': '#EF5350' },
    {'style': 2, 'name': 'V2', 'init': 0, 'bg': '#FB8C00', 'hover': '#F57C00' },
    {'style': 3, 'name': 'V3', 'init': 0, 'bg': '#4CAF50', 'hover': '#388E3C' },
    {'style': 4, 'name': 'V4', 'init': 0, 'bg': '#03A9F4', 'hover': '#039BE5' },
	];
  
  var label = data_map.map(function (data) {
    return data.name;
	});
  
  var bg = data_map.map(function (data) {
    return data.bg;
  });
  
  var hover = data_map.map(function (data) {
    return data.hover;
  });

$(document).ready(function(){
  var ctx = document.getElementById("ResultChart").getContext("2d");
  var ResultChart = new Chart(ctx, {
    'type': 'doughnut',
      
    'data': {
      'labels': label,
      
      'datasets': [{
        'label': 'ผลโหวต ACSP Product Design #4',
      	'data': [0,0,0,0],
        'backgroundColor': bg,
        'hoverBackgroundColor': hover
      }]
    }
  });
  
	$.getJSON('result_get.php', function(data) {
  	$.each(data, function(index, val) {
      $.each(data_map, function(map_index, map_val) {
        if (val.style == map_val.style) ResultChart.data.datasets[0].data[map_index] = val.num_id;
      });
    });
    
		ResultChart.update();
	});

});
