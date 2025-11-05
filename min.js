document.getElementById('guestbook-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;
    const date = document.getElementById('date').value;

    const entry = document.createElement('div');
    entry.classList.add('entry');
    entry.innerHTML = `<p><strong>Name:</strong> ${name}</p>
                       <p><strong>Email:</strong> ${email}</p>
                       <p><strong>Phone:</strong> ${phone}</p>
                       <p><strong>Message:</strong> ${message}</p>
                       <p><strong>Date:</strong> ${date}</p>`;
    
    document.getElementById('guestbook-entries').appendChild(entry);

    document.getElementById('guestbook-form').reset();
});