import { LoadingManager } from 'three';
import Silk from './Silk';
function login() {
  return (
    <div className="App">
      <Silk
        speed={5}
        scale={1}
        color="#4eac43ff"
        noiseIntensity={1.5}
        rotation={0}
      />
    </div>
  );
}

export default login;


