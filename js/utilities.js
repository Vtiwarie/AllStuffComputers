/******************************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: Utility functions for use in javascript files 
 ******************************************************************************/

var U={
    getRandomNumber: function(arr)
    {
        var rand;
        if(!(arr instanceof Array))
            return -1;
        
        rand = parseInt(Math.random()*(arr.length));

        if(typeof arr[rand] !== 'undefined')   
        {
           return arr[rand];
        }
        
    },
    
    inArray: function(num, arr)
    {
        if(!(arr instanceof Array))
            return -1;
         
        for(var i=0; i<arr.length; i++)
        {
            if(num == arr[i])
            {
                return true;
            }

        }
        
        return false;
    }
}
