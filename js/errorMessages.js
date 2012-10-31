function addErrorMessage(formId, elemId, msg) {
    'use strict';
    
    // Get the form element reference:
    var form = document.getElementById(formId);
    var elem = document.getElementById(elemId);
    
    // Define the new span's ID value:
    var newId = elemId + 'Error';
    
    // Check for the existence of the span:
    var span = document.getElementById(newId);
    if (span) {
        span.firstChild.value = msg; // Update
    } else { // Create new.
    
        // Create the span:
        span = document.createElement('span');
        span.id = newId;
        span.className = 'error'
        span.appendChild(document.createTextNode(msg));
        
        // Add the span to the parent:
        elem.parentNode.appendChild(span);

    } // End of main IF-ELSE.

} // End of addErrorMessage() function.

// This function removes the error message.
// It takes one argument: the form element ID.
function removeErrorMessage(elemId) {
    'use strict';

    // Get a reference to the span:
    var span = document.getElementById(elemId + 'Error');
    if (span) {
    
        // Remove the class from the label:
        span.previousSibling.previousSibling.className = null;
    
        // Remove the span:
        span.parentNode.removeChild(span);

    } // End of IF.
    
} // End of removeErrorMessage() function.