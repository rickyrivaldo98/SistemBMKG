var width = window.innerWidth,
  height = window.innerHeight,
  rainDomain;

var colorRange = ["#532E26", "#9E4825", "#E07A26", "#F2B526", "#EDE626", "#E4FD7E", "#9CDA9B", "#55A252", "#26622F"];
var rainDomain = [0, 21, 51, 101, 151, 201, 301, 401, 501];

// Create SVG element
var svg = d3.select("#title").insert("svg", "p")
  .attr("width", width)
  .attr("height", height * 0.8)
  .attr("class", "map");

// Projection and path
var projection = d3.geoMercator()
  .center([110.5, -7.5])
  .scale(width * 12)
  .translate([width / 2, height / 2]);

var path = d3.geoPath().projection(projection);

// Asynchronous tasks, load topojson map and data
d3.queue()
  .defer(d3.json, "https://gist.githubusercontent.com/darknowns/e27e95a289af09d95419bd17bdb01d1d/raw/8aee25003c3aaedbf71fa836d3866a93c15b0ce3/jateng.geojson")
  .defer(d3.csv, '/BMKG/' + "upload/data/" + document.getElementById("fileinput").value + ".csv")
  // .defer(d3.csv, "#fileinput")
  .await(ready);

// Callback function
function ready(error, data, rain) {
  if (error) throw error;

  // rain data
  var rainData = {};

  rain.forEach(function (d) { rainData[d.id] = +d.rain; });

  // Color
  var rainColor = d3.scaleThreshold()
    .domain(rainDomain)
    .range(colorRange);

  var g = svg.append("g");

  // Draw the map
  g.selectAll("path")
    .attr("class", "city")
    .data(data.features)
    .enter()
    .append("path")
    .attr("d", path)
    .attr("stroke", "black")
    .attr("stroke-width", "0.2")
    .attr("fill", "white")
    .transition().duration(500)
    .delay(function (d, i) { return i * 5; })
    .ease(d3.easeLinear)
    .attr("fill", function (d) {
      return rainColor(rainData[d.properties.kabkot]);
    });

  g.selectAll("path")
    .append("title")
    .text(function (d) {
      return d.properties.kabkot + " : " + rainData[d.properties.kabkot];
    });
}

d3.select(window).on("resize", resize);

function resize() {
  width = window.innerWidth;
  height = window.innerHeight;

  projection.scale(width * 12)
    .translate([width / 2, height / 2]);

  d3.select("svg")
    .attr("width", width)
    .attr("height", height * 0.8);

  d3.selectAll("path")
    .attr("d", path);
}

// function regionName(region) {
//   return "Jawa Tengah : " + region.properties.kabkot.toUpperCase();
// }

// function getRain(region) {
//   return rainData[region.properties.kabkot];
// }

// function clicked(d) {
//   var x, y, k;

//   if (d) {
//     console.log(d.properties);
//     document.getElementById('info-location').innerHTML = regionName(d);
//     document.getElementById('info-details').innerHTML = "Human Development Index : " + getHDI(d);
//   } else {
//     document.getElementById('info-location').innerHTML = "INDONESIA";
//     document.getElementById('info-details').innerHTML = "Human Development Index (Average) : " + averageIPM;
//   }

//   if (d && centered !== d) {
//     var centroid = path.centroid(d);
//     x = centroid[0];
//     y = centroid[1];
//     k = 4;
//     centered = d;
//   } else {
//     x = width / 2;
//     y = height / 2;
//     k = 1;
//     centered = null;
//   }

//   g.selectAll("path")
//     .classed("active", centered && function (d) { return d === centered; });

//   g.transition()
//     .duration(750)
//     .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")scale(" + k + ")translate(" + -x + "," + -y + ")")
//     .style("stroke-width", 1.5 / k + "px");
// }
