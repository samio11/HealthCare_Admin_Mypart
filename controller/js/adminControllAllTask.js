function validateAdminRegistration()
{
        // Get form inputs
        var fullname = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var phone = document.getElementById('phone').value;
        var address = document.getElementById('address').value;
        var profile_pic = document.getElementById('file').value;

        // Regular expression for email validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var phoneRegex = /^(\+880)?\s?1[1-9]\d{8}$/;
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    
        // Validate each field
        if (fullname.trim() === '') {
            document.getElementById('err1').innerText = 'Please enter your Username';
            document.getElementById('err1').style.color = 'red';
            return false;
        }
    
        if (!emailRegex.test(email)) {
            document.getElementById('err2').innerText = 'Please enter a valid email address';
            document.getElementById('err2').style.color = 'red';
            return false;
        }
    
        if (!passwordRegex.test(password)) {
            document.getElementById('err3').innerText = 'Password is not valid';
            document.getElementById('err3').style.color = 'red';
            return false;
        }
    
        if (!phoneRegex.test(phone)) {
            document.getElementById('err5').innerText = 'Please enter a valid phone number';
            document.getElementById('err5').style.color = 'red';
            return false;
        }
    
        if (address.trim() === '') {
            document.getElementById('err6').innerText = 'Please enter your address';
            document.getElementById('err6').style.color = 'red';
            return false;
        }
    
        if (profile_pic.trim() === '') {
         
            document.getElementById('err4').innerText = 'Please upload a profile picture';
            document.getElementById('err4').style.color = 'red';
            return false;
        } 
    
        return true;
    
    
}

