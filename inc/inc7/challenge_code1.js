function drawTriangle(rows) {
  let result = "";
  for (let row = 1; row <= rows; row++) {      
    for (let col = 1; col <= row; col++) { 
      result += "*";
    }
    result += "\n";
  }
  return result;
}

console.log(drawTriangle(5));
