import * as d3 from "d3";
import { select, zoom, state, setState } from "d3";
// let d3 = require("d3");

// export const main = (container, { state, setState }) => {
const svg = d3.select(".floorplan__map-wrapper").select("svg");
const g = svg.append('g');

const zoomBehavior = zoom().on("zoom", (event) => {
  console.log(event.transform);
  // setState((state) => ({
  //   ...state,
  //   transform: event.transform,
  // }));
  svg.select("#floorplan").attr("transform", event.transform);
});
// console.log(svg);

svg.call(zoomBehavior);

// const { transform } = state;

// svg.attr("transform", transform);
// };
