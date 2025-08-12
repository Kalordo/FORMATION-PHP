<?php

const evenNumbers = [0, 2, 4, 6, 8];
const oddNumbers = [1, 3, 5, 7, 9];
let x;
if (x === null) {
  console.log(evenNumbers[2] / oddNumbers[0]);
} else if (x === undefined) {
  console.log(oddNumbers[3] / evenNumbers[0]);
} else {
  console.log(Number(x));
}