var width = 1600,
  height = 800,
  centered,
  rainDomain;

var colorRange = ["#532E26", "#9E4825", "#E07A26", "#F2B526", "#EDE626", "#E4FD7E", "#9CDA9B", "#55A252", "#26622F"];
var rainDomain = [0, 21, 51, 101, 151, 201, 301, 401, 501];

// Projection and path
var projection = d3.geoMercator()
  .center([110, -7.6])
  .scale(width * 11)
  .translate([width / 2, height / 2]);

var path = d3.geoPath()
  .projection(projection);

// Create SVG element
var svg = d3.select("#info")
  .insert("svg", "#info-peta")
  .attr("width", width)
  .attr("height", height * 0.8)
  .attr("class", "map");

svg.append("rect")
  .attr("class", "background")
  .attr("width", width)
  .attr("height", height * 0.8)
  .on("click", clicked);

var g = svg.append("g");

var rainData = {};

// Asynchronous tasks, load topojson map and data
d3.queue()
  .defer(d3.json, '/BMKG/' + "upload/data/jateng-topo.json")
  .defer(d3.csv, '/BMKG/' + "upload/data/" + document.getElementById("fileinput").value + ".csv")
  .await(ready);

// Callback function
function ready(error, data, rain) {
  if (error) throw error;

  // rain data
  rain.forEach(function (d) { rainData[d.id] = +d.rain; });

  // Color
  var rainColor = d3.scaleThreshold()
    .domain(rainDomain)
    .range(colorRange);

  // Draw the map
  g.append("g")
    .attr("id", "subunits")
    .selectAll("path")
    .data(topojson.feature(data, data.objects.jateng).features)
    .enter()
    .append("path")
    .attr("stroke", "black")
    .attr("stroke-width", "0.2")
    .attr("fill", function (d) {
      return rainColor(rainData[d.properties.kabkot]);
    })
    .attr("d", path)
    .on("click", clicked);

  g.append("path")
    .datum(topojson.mesh(data, data.objects.jateng, function (a, b) { return a !== b; }))
    .attr("id", "state-borders")
    .attr("d", path);
}

d3.select(window).on("resize", resize);

function resize() {
  width = window.innerWidth;
  height = window.innerHeight;

  projection.scale(width * 11)
    .translate([width / 2, height / 2]);

  d3.select("svg")
    .attr("width", width)
    .attr("height", height * 0.8);

  d3.selectAll("path")
    .attr("d", path);
}

function regionName(region) {
  return region.properties.kabkot + " : " + rainData[region.properties.kabkot];
}

function clicked(d) {
  var x, y, k;

  if (d) {
    console.log(d.properties);
    document.getElementById('info-details').innerHTML = regionName(d) + " mm";
  }

  if (d && centered !== d) {
    var centroid = path.centroid(d);
    x = centroid[0];
    y = centroid[1];
    k = 1.5;
    centered = d;
  } else {
    x = width / 2;
    y = height / 2;
    k = 1;
    centered = null;
  }

  g.selectAll("path")
    .classed("active", centered && function (d) { return d === centered; });

  g.transition()
    .duration(750)
    .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")scale(" + k + ")translate(" + -x + "," + -y + ")")
    .style("stroke-width", 1.5 / k + "px");
}
