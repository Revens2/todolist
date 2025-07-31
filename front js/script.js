const form = document.getElementById('loginForm');
const msg = document.getElementById('message');



form.addEventListener('submit', async (e) => {
  e.preventDefault();

  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  try {
    const res = await fetch('http://localhost:8000/api/login', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ email, password })
    });

    const data = await res.json();

    if (res.ok) {
      msg.textContent = `✅ Bienvenue ${data.email}`;
      msg.style.color = 'lightgreen';
    } else {
      msg.textContent = data.error || 'Erreur de connexion';
      msg.style.color = 'orange';
    }
  } catch (err) {
    console.error(err);
    msg.textContent = 'Erreur réseau';
    msg.style.color = 'red';
  }
console.log();
});


document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("close").addEventListener("click", () => {
    document.getElementById("popup").style.display="none";
  });
});


// document.getElementById("open").addEventListener("click", () => {
//   document.getElementById("popup").style.display = "flex";
// });
