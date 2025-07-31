


import Silk from './Silk';
import './App.css';

function App() {
  return (
    <div className="App">
      <Silk speed={5} scale={1} color="#37924cff" noiseIntensity={1.5} rotation={0} />

      <div className="content-container">
        <header className="glass header">
          <div className="logo">⚛️ React Bits</div>
          <nav>
            <a href="#">Home</a>
            <a href="#">Docs</a>
          </nav>
        </header>

        <main className="glass main">
          <button className="button-secondary">✨ New Background</button>
          <h1>May these lights guide you<br />on your path</h1>
          <div className="buttons">
            <button className="button-primary">Get Started</button>
            <button className="button-secondary">Learn More</button>
          </div>
        </main>
      </div>
    </div>
  );
}

export default App;
