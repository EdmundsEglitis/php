import { useEffect } from "react";

function App() {
    useEffect (()=> {
    async function getData(){
      const response = await fetch("http://localhost:80");
      const data = await response.json();
      console.log(data);
    }
    getData();
  },[]);
  return (
    <div className="App">
        <h1>HI</h1>
    </div>
  );
}

export default App;
