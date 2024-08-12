document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend)

    async function formSend(e){
        e.preventDefault();
        let formData = new FormData(form);
        let  response = await fetch('sendmail.php', {
            method: 'POST',
            body: formData
        });

        form.classList.add('_sending');
        if(response.ok){
            alert(result.message);
            form.reset();
        }
        else{
            alert('error');
        }
    }
    
        
    
})