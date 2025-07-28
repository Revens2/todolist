import Silk from './Silk';
import Login from './login';

function App() {
  return (
    <div className="App">
      <Silk
        speed={5}
        scale={1}
        color="#7B7481"
        noiseIntensity={1.5}
        rotation={0}
      />
      <Login />
    </div>
  );
}

export default App;
