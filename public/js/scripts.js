document.getElementById('save-profile-btn').addEventListener('click', function() {
    var newPhoto = document.getElementById('new-photo').files[0];
    var newUsername = document.getElementById('new-username').value;
    var newBiodata = document.getElementById('new-biodata').value;

    if (newPhoto) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('profile-photo').src = e.target.result;
        }
        reader.readAsDataURL(newPhoto);
    }

    document.getElementById('username').innerText = newUsername;
    document.getElementById('biodata').innerText = newBiodata;
    
    document.getElementById('edit-profile-form').classList.add('hidden');
});

document.getElementById('edit-profile-btn').addEventListener('click', function() {
    document.getElementById('edit-profile-form').classList.remove('hidden');
});

document.getElementById('cancel-edit-btn').addEventListener('click', function() {
    document.getElementById('edit-profile-form').classList.add('hidden');
});

document.getElementById('chat-form').addEventListener('submit', function(e) {
    e.preventDefault();
    var messageInput = document.getElementById('chat-input');
    var messageText = messageInput.value;
    var messageElement = document.createElement('div');
    messageElement.classList.add('message', 'buyer');
    messageElement.innerText = messageText;
    document.querySelector('.chat-box').appendChild(messageElement);
    messageInput.value = '';

    // Simulasi respons dari penjual
    setTimeout(function() {
        var sellerMessage = document.createElement('div');
        sellerMessage.classList.add('message', 'seller');
        sellerMessage.innerText = 'Pesan Anda telah diterima. Terima kasih!';
        document.querySelector('.chat-box').appendChild(sellerMessage);
    }, 1000);
});

document.querySelectorAll('.btn-buy').forEach(button => {
    button.addEventListener('click', function() {
        window.location.href = 'payment.html';
    });
});
