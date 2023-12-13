

import React, { useEffect, useState } from 'react';

function App() {
  const [shapesData, setShapesData] = useState(null);

  useEffect(() => {
    async function getData() {
      const response = await fetch("http://localhost:80");
      const data = await response.json();
      setShapesData(data);
      console.log(data);
    }

    getData();
  }, []);

  return (
    <div className="App">
      <h1>Shapes</h1>

{shapesData && (
  <div>
    <div>
      <h2>Circle</h2>
      <div className="circle" style={{ "--radius": `${shapesData.circleRadius}px` }}>
        <p>Radius: {shapesData.circleRadius}</p>
        <p>Area: {shapesData.circleArea}</p>
        <p>Color: {shapesData.circleColor}</p>
      </div>
    </div>

    <div>
      <h2>Rectangle</h2>
      <div className="rectangle" style={{ "--width": `${shapesData.rectangleWidth}px`, "--height": `${shapesData.rectangleHeight}px` }}>
        <p>Height: {shapesData.rectangleHeight}</p>
        <p>Width: {shapesData.rectangleWidth}</p>
        <p>Area: {shapesData.rectangleArea}</p>
        <p>Color: {shapesData.rectangleColor}</p>
      </div>
    </div>
  </div>
)}
    </div>
  );
}

export default App;