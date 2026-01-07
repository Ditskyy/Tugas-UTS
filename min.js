document.getElementById('guestbook-form').addEventListener('submit', function(event) {
    
    const dateInput = document.getElementById('date').value;
    const selectedDate = new Date(dateInput);
    const today = new Date();
    
    today.setHours(0,0,0,0);

    
    if (selectedDate < today) {
        event.preventDefault(); // 
        alert("Tanggal booking tidak boleh kurang dari hari ini!");
    }
});