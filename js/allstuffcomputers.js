/******************************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: Implements all required javascript 
 ******************************************************************************/

$(document).ready(function(){
    headerDisplay();
    
    document.getElementById('formContact').onsubmit = validateContactForm;
    
});