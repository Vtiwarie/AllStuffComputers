/******************************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: Javascript functions to perform client-side form validations
 ******************************************************************************/

function validateContactForm()
{
    //get references to the DOM
    var name = document.getElementById('nameContact');
    var email = document.getElementById('emailContact');
    var message = document.getElementById('msgContact');
    var submit = document.getElementById('submitContact');
    var form = document.getElementById('formContact');
    
    var error = false;
    
    // Validate message field
    if(message.value)
    {
        removeErrorMessage(message.id);
    }
    else
    {
        addErrorMessage(form.id, message.id, '*Please Enter your Message');
        error = true;
        message.focus();
    }
    
    // Validate email address field
    if (/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/.test(email.value)) 
    {
        removeErrorMessage(email.id);
    } 
    else 
    {
        addErrorMessage(form.id, email.id, '*Please enter a valid email address.');
        error = true;
        email.focus();
    }
    
    // Validate name field
    if (/^[A-Z \.\-']{2,20}$/i.test(name.value)) 
    {
        removeErrorMessage(name.id);
    } 
    else 
    {
        addErrorMessage(form.id, name.id, '*Please enter your name.');
        error = true;
        name.focus();
    }
    
   
    if(!error)
    {
        return true;    
    }
    return false;
    
}