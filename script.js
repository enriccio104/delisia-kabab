document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenire l'invio del form
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    
    // Simulazione dell'invio del form
    const formStatus = document.getElementById('formStatus');
    formStatus.textContent = `Grazie, ${name}! Abbiamo ricevuto il tuo messaggio. Ti risponderemo presto.`;
    
    // Ripristino del form
    document.getElementById('contactForm').reset();
});
